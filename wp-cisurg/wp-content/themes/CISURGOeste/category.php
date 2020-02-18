<?php get_header();?>

<div class="container">
  <div class="row">
    <h2 class="h2" style="color: #C20D2F; font-weight: bold;"><?php single_cat_title(); ?></h2>
  </div>
  <div class="row justificativa justify-content-center">
    <div class="col-md-12">
      <table class="table table table-striped">
        <tbody>
        <?php if(have_posts()): while(have_posts()): the_post();?>


            <tr>
              <th><a style="text-decoration: none; color: #555;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></th>
              <td><a style="text-decoration: none; color: #555;" href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></td>
            </tr>

        <?php endwhile; endif;?>

        </tbody>
      </table>
    </div>
  </div>



  <div class="row justify-content-center">
    <div class="col-md-4 text-center">
      <?php posts_nav_link( ' | ', $prelabel, $nextlabel ); ?>
    </div>
  </div></br>


</div>

<?php get_footer();?>
