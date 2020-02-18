<?php

//Exibir imagens destacadas
add_theme_support( 'post-thumbnails' );

//Registrar logo dinamica
require get_template_directory().'/inc/logo.php';

//Registrar Menu dinamico
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
	'primary' => __( 'Menu Principal', 'CISURGOeste' ),
) );

//Registrar Meta-Box
require get_template_directory().'/inc/metabox.php';

//Custom Post Type Justificativas
function create_posttype(){
	register_post_type( 'justificativas',
		array(
			'labels' => array(
				'name' => __('Justificativas'),
				'singular_name' => __('Justificativa')
			),
			'public' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'justificativa'),
			'supports' => array(
				'title', 'Author', 'custom-fields', 'editor'
			)
		)
	);
	register_post_type( 'trocas',
		array(
			'labels' => array(
				'name' => __('Trocas'),
				'singular_name' => __('Troca')
			),
			'public' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'troca'),
			'supports' => array(
				'title', 'Author', 'custom-fields', 'editor'
			)
		)
	);
	register_post_type( 'mensagens',
		array(
			'labels' => array(
				'name' => __('Mensagens'),
				'singular_name' => __('Mensagem')
			),
			'public' => true,
			'has_archive' => false,
			'rewrite' => array('slug' => 'mensagem'),
			'supports' => array(
				'title', 'Author', 'custom-fields', 'excerpt', 'editor'
			)
		)
	);
}

add_action( 'init', 'create_posttype');

//Registro de sidebar
if(function_exists('register_sidebar'))
{
	register_sidebar(array(
		'name'					=> __('Formulario de login'),
		'id'						=> 'sidebar-login',
		'description'		=> __('Sidebar para login no header'),
		'before_title'	=> '<h6>',
		'after_title'		=> '</h6>',
	));
}

//submit das justificativas
if(isset($_POST['cpt_nonce_field']) && wp_verify_nonce($_POST['cpt_nonce_field'], 'cpt_nonce_action') ){
	//echo $_POST['inputObs'];

	if($_POST['inputTipo'] == 'Troca de jornada'){
		$my_cptpost_args = array(
			'post_title'		=> '2019-',
			'post_content'	=> $_POST['inputSubs'],
			'post_status'		=> 'publish',
			'post_type'			=> 'trocas',
		);

		$cpt_id = wp_insert_post($my_cptpost_args, $wp_error);

		//mudando o titulo

		$muda_post = array(
			'ID'		=> $cpt_id,
			'post_title'	=> '2019-'.$cpt_id,
		);

		wp_update_post($muda_post);

		//inserindo os demais valores
		update_field('jornada', $_POST['inputJornada'], $cpt_id);
		update_field('status', 'Aguardando aprovação', $cpt_id);
		update_field('data_solicitacao', $_POST['inputDataTroca'], $cpt_id);
		update_field('data_reposicao', $_POST['inputDataRep'], $cpt_id);
		update_field('turno_da_troca', $_POST['inputTurnoTroca'], $cpt_id);
		update_field('turno_da_reposicao', $_POST['inputTurnoRep'], $cpt_id);
	}else{
		$my_cptpost_args = array(
			'post_title'		=> '2019-',
			'post_content'	=> $_POST['inputJusti'],
			'post_excerpt'	=> $_POST['inputObs'],
			'post_status'		=> 'publish',
			'post_type'			=> 'justificativas',
		);

		$cpt_id = wp_insert_post($my_cptpost_args, $wp_error);

		//mudando o titulo

		$muda_post = array(
			'ID'		=> $cpt_id,
			'post_title'	=> '2019-'.$cpt_id,
		);

		wp_update_post($muda_post);

		//inserindo os demais valores
		update_field('tipo', $_POST['inputTipo'], $cpt_id);
		update_field('status', 'Aguardando aprovação', $cpt_id);
		update_field('data', $_POST['inputData'], $cpt_id);
		update_field('hora_de_entrada', $_POST['inputHoraEnt'], $cpt_id);
		update_field('hora_de_saida', $_POST['inputHoraSai'], $cpt_id);
	}


	//redirecionando
	header("Refresh: 0");

}

//ajax das Justificativas
add_action('wp_enqueue_scripts', 'cisurg_enqueue_scripts');
function cisurg_enqueue_scripts(){
	wp_enqueue_script('scripts', get_template_directory_uri()."/js/scripts.js",
	array('jquery'));
	wp_localize_script('scripts', 'ajax_object', array(
		'ajax_url' => admin_url('admin-ajax.php'), 'outro_valor' => 1234));
}

add_action('wp_ajax_altera_status_justificativas', 'alterar_status_justificativas');
//add_action('wp_ajax_nopriv_altera_status_justificativas', 'alterar_status_justificativas');
function alterar_status_justificativas(){
	parse_str($_REQUEST['dados'], $array_dados);

	//AQUIIIIIIIIIIIIIII
	update_field('status', $array_dados['status'], $array_dados['id_post']);
	update_field('resposta', $array_dados['resposta'], $array_dados['id_post']);

	echo json_encode("#".$array_dados['id_post']);
	//echo json_encode($array_dados['page']);
	//echo json_encode(array('class' => 'alert-warning', 'mensagem' => 'Justificativa atualizada!'));

	wp_die();
}

function author_ids_by_role(){
	$ids = get_users(array('role' => 'medico', 'fields' => 'ID'));
	return $ids;
}

function author_ids_by_role_administrativo(){
	$ids = get_users(array('role' => 'administrativo', 'fields' => 'ID'));
	return $ids;
}

function author_ids_by_role_admin(){
	$ids = get_users(array('role__not_in' => array('administrativo', 'medico'), 'fields' => 'ID'));
	return $ids;
}

//single por categoria
add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template($t){
	foreach((array) get_the_category() as $cat){
		if(file_exists(TEMPLATEPATH."/single-{$cat->slug}.php")) return TEMPLATEPATH."/single-{$cat->slug}.php";
		if($cat->parent){
			$cat = get_the_category_by_ID($cat->parent);
			if(file_exists(TEMPLATEPATH."/single-{$cat->slug}.php")) return TEMPLATEPATH."/single-{$cat->slug}.php";
		}
	}
	return $t;
}

?>
