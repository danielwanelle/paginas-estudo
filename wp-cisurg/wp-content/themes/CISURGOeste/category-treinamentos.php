<?php get_header();?>

<div class="container">
  <div class="row">
    <h2 class="h2" style="color: #C20D2F; font-weight: bold;"><?php single_cat_title(); ?></h2>
  </div>

  <?php if(have_posts()): while(have_posts()): the_post();?>

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

<?php endwhile; endif;?>



<div class="row justify-content-center">
  <div class="col-md-4 text-center">
    <?php posts_nav_link( ' | ', $prelabel, $nextlabel ); ?>
  </div>
</div></br>


</div>

<?php get_footer();?>
