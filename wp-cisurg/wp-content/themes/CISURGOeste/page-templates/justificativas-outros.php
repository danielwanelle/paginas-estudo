<?php get_header();
/*
 * Template Name: Justificativas-Outros
 */
?>

<?php

  global $current_user;
  wp_get_current_user();

?>

<div class="container"  id="form-ajax-resposta">



  <!--Botão justificativa-->
</br>
  <?php

  $ids_medicos=author_ids_by_role_admin();

  $author_query = (array(
    'post_type'      => 'justificativas',
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
            <td colspan="3"><?php the_author_firstname(); ?>&nbsp;<?php the_author_lastname();  ?></td>
            <td class="font-weight-bold">Tipo</td>
            <td><?php the_field('tipo'); ?></td>
            <td class="font-weight-bold">Status</td>
            <td><?php echo the_field('status') ?></td>
          </tr>
          <tr>
            <td class="font-weight-bold">Protocolo</td>
            <td><?php the_title( ); ?></td>
            <td class="font-weight-bold">Data</td>
            <td><?php the_field('data'); ?></td>
            <td class="font-weight-bold">Horario de entrada</td>
            <td><?php the_field('hora_de_entrada'); ?></td>
            <td class="font-weight-bold">Horario de saída</td>
            <td><?php the_field('hora_de_saida'); ?></td>
          </tr>
          <tr>
            <td class="font-weight-bold" rowspan="2">Justificativa</td>
            <td colspan="3" rowspan="2"><?php the_content(); ?></td>
            <td class="font-weight-bold">Observação</td>
            <td colspan="3"><?php the_excerpt(); ?></td>
          </tr>
          <tr>
            <td colspan="4">
              <form id="form-ajax" method="post" action="#">
                <div class="input-group mb-3">
                  <input type="text" name="resposta" id="form_ajax_resposta" placeholder="Motivo da recusa"  class="form-control">
                  <div class="input-group-prepend" id="button-addon3">
                    <input type="hidden" name="id_post" id="form_ajax_id_post" value="<?php the_ID(); ?>" />
                    <input type="hidden" name="status" id="form_ajax_status" value="Reprovada"/>
                    <input type="hidden" name="page" id="form_ajax_page" value="justificativas-outros"/>
                    <input class="btn btn-danger" type="submit" value="Recusar"/>
              </form>
              <form id="form-ajax" method="post" action="#">
                    <input type="hidden" name="id_post" id="form_ajax_id_post" value="<?php the_ID(); ?>" />
                    <input type="hidden" name="status" id="form_ajax_status" value="Aguardando lançamento"/>
                    <input type="hidden" name="page" id="form_ajax_page" value="justificativas-outros"/>
                    <input class="btn btn-success" type="submit" value="Aceitar"/>
                  </div>
                </div>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>



<?php endif; endwhile; endif; ?>

<div class="row justify-content-center">
  <div class="col-md-4 text-center">
    <?php posts_nav_link( ' | ', $prelabel, $nextlabel ); ?>
  </div>
</div></br>

<?php wp_reset_query(); ?>

</div>

<!-- Modal Justificativas -->

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <form class="form-justificativa" method="post">
        <div class="form-row">
          <div class="form-group">
            <label for="inputTipo">Justificativa</label>
            <select id="inputTipo" name="inputTipo" class="custom-select" required>
              <option selected value="">Escolha o tipo de justificativa...</option>
              <option>Esquecimento de registro</option>
              <option>Problemas técnicos do relógio de ponto</option>
              <option>Hora extra</option>
              <option>Plantão extra</option>
              <option>Outros...</option>
            </select>
            <div class="invalid-feedback">
                    Escolha ao tipo de justificativa
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputData">Data</label>
            <input type="date" class="form-control" id="inputData" name="inputData" required>
            <div class="invalid-feedback">
              Campo obrigatório!
            </div>
          </div>
          <div class="form-group col-md-3">
            <label for="inputHoraEnt">Hora inicial</label>
            <input type="time" class="form-control" id="inputHoraEnt" name="inputHoraEnt" required>
            <div class="invalid-feedback">
              Campo obrigatório!
            </div>
          </div>
          <div class="form-group col-md-3">
            <label for="inputHoraSai">Hora final</label>
            <input type="time" class="form-control" id="inputHoraSai" name="inputHoraSai" required>
            <div class="invalid-feedback">
              Campo obrigatório!
            </div>
          </div>
        </div>


        <div class="form-group">
          <label for="inputObs">Observação</label>
          <input type="text" class="form-control" id="inputObs" name="inputObs" placeholder="Ocorrência, hora extra sem atividade laboral, etc.">
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="inputJusti">Justificativa</label>
            <textarea type="textarea" name="inputJusti" class="form-control" id="inputJusti"></textarea>
          </div>
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
