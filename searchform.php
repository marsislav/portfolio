<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form"
      action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="inputGroup">
        <input type="search" id="<?php echo $unique_id; ?>"
               class="formControl" name="s"
               value="<?php the_search_query(); ?>"
               placeholder="<?php _e( 'Whar are you searching for?', 'mars' ); ?>"/>
        <span class="inputGroupBtn">
            <button type="submit" class="mainButton buttonBig"><?php _e( 'Search', 'mars' ); ?><i class="icon-search"></i></button>
        </span>
    </div>
</form>