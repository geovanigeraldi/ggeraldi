
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <label class="sr-only" for="s"><?php esc_html_e( 'Search', 'elizama' ); ?></label>
    <div class="input-group">
        <input class="field form-control" id="s" name="s" type="text"
            placeholder="<?php esc_attr_e( 'Search &hellip;', 'elizama' ); ?>" value="<?php the_search_query(); ?>">
        <span class="input-group-append">
            <button class="submit btn  search-buttom" id="searchsubmit" name="submit" type="submit">
            	<img src="<?php  echo esc_url(get_template_directory_uri(). '/assets/fonts/svg/search.svg');?>">
            </button>

    </span>
    </div>
</form>
