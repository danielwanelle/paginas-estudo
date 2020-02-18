<!--FOOTER BEGIN-->

<footer class="footer container-fluid endereco">
  <div class="container">
    <div class="row">
      <div class="col-md-4 ">
        <p><strong>Informações de contato:</strong></p>
        <p>Consórcio Intermunicipal de Saúde da Região Ampliada Oeste para Gerenciamento dos Serviços de Urgência e Emergência CIS-URG Oeste</p>
        <address><strong>Endereço:</strong> Praça Pedro Xisto Gontijo, 550, Centro - Divinópolis - MG. </br>
        <strong>Cep:</strong> 35500-051</address>
        <p><abbr title="Telefone"><strong>Telefone:</strong></abbr> (37) 3690-3200</p></br>
        <img class="" style="width: 10vw; heigh: auto;" src="<?php echo get_theme_mod( 'm1_logo' ); ?>  " alt="Logo CIS-URG Oeste" title="Logo CIS-URG Oeste"/>
      </div>
      <div class="col-md-4">
        <p>
          Mapa do site
        </p>
        <?php

        wp_nav_menu( array(
          'theme_location'  => 'primary',
          'container'       => '',
          'menu_class'      => 'list-unstyled'
        ) )

        ?>
      </div>
      <div class="col-md-4">

        <a href="https://www.facebook.com/cisurg" target="_blank" id="faceboook" class='float-right'>
          <svg style="width:6vw;height:auto" viewBox="0 0 24 24">
              <path fill="#FFF" d="M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M18,5H15.5A3.5,3.5 0 0,0 12,8.5V11H10V14H12V21H15V14H18V11H15V9A1,1 0 0,1 16,8H18V5Z" />
          </svg>
        </a><a href="https://www.instagram.com/cisurgoeste/" target="_blank" id="instagram" class='float-right'>
          <svg style="width:6vw;height:auto" viewBox="0 0 24 24">
              <path fill="#FFF" d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
          </svg>
        </a><br />
        <img class="img-fluid float-right pt-4" style="width: 25vw; heigh: auto;" src="wp-content/themes/CISURGOeste/images/LOGOS.png" alt="Logo CIS-URG Oeste" title="Logo CIS-URG Oeste"/>
          <!--logos orgãos-->
      </div>
    </div>
    </div>
</footer>

<!---->

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>


<?php wp_footer(); ?>

</body>
</html>
