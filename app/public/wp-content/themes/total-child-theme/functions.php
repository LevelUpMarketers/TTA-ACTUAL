<?php

/**
 * Load the parent style.css file.
 */
function total_child_theme_enqueue_parent_style() {
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css',
        [],
        wp_get_theme( 'Total' )->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'total_child_theme_enqueue_parent_style' );



/**
 * Inject Microsoft Clarity script into <head> of every page.
 * Paste this in your child theme's functions.php.
 */
if ( ! function_exists( 'tda_add_clarity_to_head' ) ) {
    function tda_add_clarity_to_head() {
        ?>
        <script type="text/javascript">
            (function(c,l,a,r,i,t,y){
                c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
                t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
                y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
            })(window, document, "clarity", "script", "sxe7knn5s4");
        </script>
        <?php
    }
}
if ( ! is_user_logged_in() || ! current_user_can( 'manage_options' ) ) {
    add_action( 'wp_head', 'tda_add_clarity_to_head', 20 );
}


