<?php get_header();
/*
 * Template Name: Mensagens
 */
?>

<?php

  global $current_user;
  wp_get_current_user();

?>

<div class="container">

  <?php $author_query = (array(
    'post_type'      => 'mensagens',
    'posts_per_page' => 50,
    //'author'         => $current_user->roles,
  ));

  $author_posts = new WP_Query($author_query);
  ?>

  <div class="row justificativa justify-content-center">
    <div class="col-md-12">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Assunto</th>
            <th scope="col">Mensagem</th>
            <th scope="col">Data</th>
          </tr>
        </thead>

        <?php if(is_user_logged_in() AND have_posts()): while($author_posts->have_posts()): $author_posts->the_post(); ?>

        <?php
          $cargo=get_field('cargo');
          $role = get_userdata($current_user->ID);
          $funcao = implode(', ', $role->roles);
          if($funcao == $cargo) :
        ?>

          <tbody>
            <tr>
              <th><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></th>
              <td><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></td>
              <td><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php  the_date(); ?></a></td>
            </tr>
          </tbody>

        <?php endif; ?>

  <?php endwhile;?>

  <?php endif; ?>

  </table>
  </div>
  </div>

<div class="row justify-content-center">
  <div class="col-md-4 text-center">
    <?php posts_nav_link( ' | ', $prelabel, $nextlabel ); ?>
  </div>
</div></br>

<?php wp_reset_query(); ?>

</div>

<?php get_footer();?>
