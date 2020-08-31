<?php 
        echo get_permalink();
        echo "<br>";
        echo get_site_url('/');
        echo "<br>";
        echo home_url( add_query_arg( array(), $wp->request ) );
        echo "<br>";
        echo get_theme_file_uri('/');
        echo "<br>";
        echo get_the_title();
        if (is_page( 'Home' )) {echo 'correcto';};
    ?>