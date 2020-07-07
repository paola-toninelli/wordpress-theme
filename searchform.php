<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
Ricerca per:
    <input type="text" class="search-field" name="s" value="<?php echo get_search_query(); ?>">
    <input type="submit" value="Cerca" class="btn btn-primary">
</form>