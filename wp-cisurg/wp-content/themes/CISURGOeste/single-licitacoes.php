<?php get_header();?>

<div class="container">
  <div class="row">
    <?php if(have_posts()): while(have_posts()): the_post();?>
      <div class="col-md-12 postagem">
        <h1 class="display-5"><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php gravity_form(2); ?>
        <h6 class="text-muted float-right"><?php the_date(); ?></h6>
      </div>
    <?php endwhile; endif;?>
  </div>
</div>

<?php get_footer();?>
