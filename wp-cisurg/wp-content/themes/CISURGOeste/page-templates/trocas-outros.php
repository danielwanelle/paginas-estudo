<?php get_header();
/*
 * Template Name: Trocas-outros
 */
?>

<?php

  global $current_user;
  wp_get_current_user();

?>

<div class="container" id="form-ajax-resposta">

  <!--Botão justificativa-->
</br>

  <?php

  $ids_medicos=author_ids_by_role_admin();

  $author_query = (array(
    'post_type'      => 'trocas',
    'posts_per_page' => -1,
    'author__in'     => $ids_medicos
  ));

  $author_posts = new WP_Query($author_query);
  ?>

  <?php if(is_user_logged_in() AND have_posts()): while($author_posts->have_posts()): $author_posts->the_post(); ?>

  <?php

  $status=get_field('status');

  if($status=='Aguardando aprovação'):

  ?>

  <div class="row justificativa justify-content-center" id="<?php the_ID() ?>">
    <div class="col-md-12">
      <table class="table-responsive-sm table-bordered table-primary" style="text-align: center; vertical-align: middle; width: 100%;">

        <tbody>
          <tr>
            <td class="font-weight-bold">Solicitante</td>
            <td><?php the_author_firstname(); ?>&nbsp;<?php the_author_lastname();  ?></td>
            <td class="font-weight-bold">Jornada</td>
            <td><?php the_field('jornada'); ?></td>
            <td class="font-weight-bold">Status</td>
            <td><?php echo the_field('status') ?></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Protocolo</td>
            <td><?php the_title( ); ?></td>
            <td class="font-weight-bold">Data do Plantão</td>
            <td><?php the_field('data_solicitacao'); ?></td>
            <td class="font-weight-bold">Data da Reposição</td>
            <td><?php the_field('data_reposicao'); ?></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Substituto</td>
            <td><?php the_content(); ?></td>
            <td class="font-weight-bold">Turno do Plantão</td>
            <td><?php the_field('turno_da_troca'); ?></td>
            <td class="font-weight-bold">Turno da Reposição</td>
            <td><?php the_field('turno_da_reposicao'); ?></td>
          </tr>
          <tr>
            <td colspan="6">
              <form id="form-ajax" method="post" action="#">
                <div class="input-group mb-3">
                  <input type="text" name="resposta" id="form_ajax_resposta" placeholder="Motivo da recusa"  class="form-control">
                  <div class="input-group-prepend" id="button-addon3">
                    <input type="hidden" name="id_post" id="form_ajax_id_post" value="<?php the_ID(); ?>" />
                    <input type="hidden" name="status" id="form_ajax_status" value="Reprovada"/>
                    <input type="hidden" name="page" id="form_ajax_page" value="trocas-outros"/>
                    <input class="btn btn-danger" type="submit" value="Recusar"/>
              </form>
              <form id="form-ajax" method="post" action="#">
                    <input type="hidden" name="id_post" id="form_ajax_id_post" value="<?php the_ID(); ?>" />
                    <input type="hidden" name="status" id="form_ajax_status" value="Aguardando lançamento"/>
                    <input type="hidden" name="page" id="form_ajax_page" value="trocas-outros"/>
                    <input class="btn btn-success" type="submit" value="Aceitar"/>
                  </div>
                </div>
              </form>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


<?php endif; endwhile; else: ?>

</br><h3 class="postagem">=/ Ops! Não encontramos nenhum </br>resultado nesta pesquisa...</h3></br></br>

<?php endif; ?>

<div class="row justify-content-center">
  <div class="col-md-4 text-center">
    <?php posts_nav_link( ' | ', $prelabel, $nextlabel ); ?>
  </div>
</div></br>

<?php wp_reset_query(); ?>

</div>

<!-- Modal Trocas -->

<div class="modal fade bd-example-modal-xl-troca" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <form class="form-justificativa" method="post">
        <div class="form-row col-md-12">
          <div class="form-group">
            <input type="hidden" id="inputTipo" name="inputTipo" value="Troca de jornada"/>
            <label for="inputSubs">Nome do substituto</label>
            <input type="text" class="form-control" id="inputSubs" name="inputSubs" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputDataTroca">Data de seu plantão</label>
            <input type="date" class="form-control" id="inputDataTroca" name="inputDataTroca" required>
            <div class="invalid-feedback">
              Campo obrigatório!
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="inputDataRep">Data do plantão do substituto</label>
            <input type="date" class="form-control" id="inputDataRep" name="inputDataRep" required>
            <div class="invalid-feedback">
              Campo obrigatório!
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputTurnoTroca">Turno de sua jornada</label>
            <select id="inputTurnoTroca" name="inputTurnoTroca" class="custom-select" required>
              <option selected value="">Selecione uma opção...</option>
              <option>Diurna</option>
              <option>Noturna</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputTurnoRep">Turno do substituto</label>
            <select id="inputTurnoRep" name="inputTurnoRep" class="custom-select" required>
              <option selected value="">Selecione uma opção...</option>
              <option>Diurna</option>
              <option>Noturna</option>
            </select>
          </div>
        </div>
        <div class="form-row col-md-12">
          <label for="inputJornada">Jornada</label>
          <select id="inputJornada" name="inputJornada" class="custom-select" required>
            <option selected value="">Selecione uma opção...</option>
            <option>12 horas</option>
            <option>24 horas</option>
          </select>
        </div>
        <div class="form-row">
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" required>
            <label class="form-check-label" for="gridCheck">
              Eu li e concordo com as regras de trocas e justificativas.
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>

        <input type="hidden" name="post_type" id="post_type" value="justificativas"/>

        <?php wp_nonce_field('cpt_nonce_action', 'cpt_nonce_field'); ?>

      </form>

    </div>
  </div>
</div>

<?php get_footer();?>
