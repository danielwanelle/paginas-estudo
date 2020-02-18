<?php get_header();?>

    <!--SLIDER BEGIN-->

    <div class="container-fluid">
      <div class="row">
        <div class="carousel-fade bg-dark">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <?php

            $posts_slide = new WP_Query(array(

              'post_type'       => 'post',
              'category_name'   => 'slides'

            ));

            ?>

            <ol class="carousel-indicators">

              <?php

                $i = 1;

                while ($posts_slide->have_posts()): $posts_slide->the_post();

              ?>

              <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i.'"'; if($i = 1) echo 'class="active">'; ?>"></li>

              <?php $i++; endwhile; wp_reset_postdata(); ?>

            </ol>
            <div class="carousel-inner">

              <?php

                $i = 1;

                while ($posts_slide->have_posts()): $posts_slide->the_post();

              ?>

              <div class="carousel-item <?php if($i == 1) echo 'active'; ?> div-slide">
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('full',['class' => 'img-slide']); ?></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5><?php the_title(); ?></h5>
                  <p><?php the_excerpt()?></p>
                </div>
              </div>

            <?php $i++; endwhile; wp_reset_postdata(); ?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Próximo</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!--SLIDER END-->

    <!--CONTENT BEGIN-->

    <div class="container">
      <div class="row">
        <h2 class="titulo" style="color: #C20D2F; font-weight: bold;">Últimas notícias</h2>

      </div>

      <?php

      $posts_slide = new WP_Query(array(

        'post_type'       => 'post',
        'category_name'   => 'noticias',
        'posts_per_page'  => 5

      ));

      while ($posts_slide->have_posts()): $posts_slide->the_post();

      ?>

      <a style="text-decoration: none;" href="<?php the_permalink();?>">
        <article class="row border-bottom border-warning noticia">
          <div class="col-md-4 div-capa">
              <?php the_post_thumbnail('medium_large',['class' => 'align-self-center mr-3 img-fluid card-img img-capa']); ?>
          </div>
          <div class="card-body col-md-8">
            <h6 class="text-muted"><?php the_date(); ?></h6>
            <h5 class="card-title "><?php the_title(); ?></h5>
            <p class="card-text"><?php the_excerpt(); ?></p>
          </div>
        </article>
      </a>

      <?php endwhile; wp_reset_postdata(); ?>

      <div class="row justify-content-end">
        <div class="col-md-2">
          <a href="http://localhost/wp-cisurg/index.php/category/noticias/"><button type="button" class="btn btn-danger btn-lg h2">Mais notícias</button></a>
        </div>
      </div>
    </div>

    <!--CONTENT END-->

<?php get_footer();?>
