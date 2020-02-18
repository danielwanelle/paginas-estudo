<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">


    <div class="input-group">
      <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
      <input type="text" class="form-control" placeholder="Digite algo..." aria-label="Digite algo" aria-describedby="button-addon2" value="<?php echo get_search_query(); ?>" name="s" id="s">
      <div class="input-group-append">
        <button class="btn btn-danger " value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" type="submit" id="searchsubmit">Pesquisar</button>
      </div>
    </div>
</form>
