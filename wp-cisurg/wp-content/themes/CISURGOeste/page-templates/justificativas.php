<?php get_header();
/*
 * Template Name: Justificativas
 */
?>

<?php

  global $current_user;
  wp_get_current_user();

?>

<div class="container" id="form-ajax-resposta">

  <!--Botão justificativa-->
</br>
  <div class="row justify-content-end">
    <div class="col-md-3">
      <button class="btn btn-success float-right" data-toggle="modal" data-target=".bd-example-modal-xl">Criar nova justificativa</button>
    </div>
  </div>

  <?php $author_query = (array(
    'post_type'      => 'justificativas',
    'posts_per_page' => -1,
    'author'         => $current_user->ID,
  ));

  $author_posts = new WP_Query($author_query);
  ?>

  <?php if(is_user_logged_in() AND have_posts()): while($author_posts->have_posts()): $author_posts->the_post(); ?>

  <div class="row justificativa justify-content-center">
    <div class="col-md-12">
      <table class="table-responsive-sm table-bordered

      <?php

      $status=get_field('status');

      if($status=='Aprovada'):
        echo 'table-success';
      elseif($status=='Reprovada'):
        echo 'table-danger';
      else:
        echo 'table-primary';
      endif;

       ?>

      " style="text-align: center; vertical-align: middle; width: 100%;">

      <input type="hidden" name="id_post" id="id_post" value="<php echo the_ID(); >"/>

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
              <?php the_field('resposta'); ?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


<?php endwhile; endif; ?>

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
              <option value="Esquecimento de registro">Esquecimento de registro</option>
              <option value="Problemas técnicos">Problemas técnicos do relógio de ponto</option>
              <option value="Hora extra">Hora extra</option>
              <option value="Jornada extra autorizada">Plantão extra</option>
              <option value="Outros">Outros...</option>
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
