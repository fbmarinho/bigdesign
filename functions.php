<?php 
    /**
     * Include our Customizer settings.
     * Note: If you're using a parent theme, change get_stylesheet_directory() to get_template_directory()
     */
    require get_stylesheet_directory() . '/inc/customizer/class-bigdesign-customizer.php';
    new Bigdesign_Customizer();

    /**
     * Generate CSS based on the Customizer settings.
     *
     * @since 1.0
     * @return string
     */
    function bigdesign_customizer_css() {

        $css = '';

        $body_text = get_theme_mod( 'cor-do-texto', '#444444' );
        $css .= 'body { color: ' . $body_text . '; }';

        return $css;

    }

    /**
     * Add the parent Twenty Twelve stylesheet to the front-end.
     *
     * @since 1.0
     * @return void
     */
    function bigdesign_enqueue_css() {
        wp_enqueue_style( 'bigdesign-parent', get_template_directory_uri() . '/style.css', array(), '1.0' );
        wp_add_inline_style( 'bigdesign-parent', bigdesign_customizer_css() );
    }

    add_action( 'wp_enqueue_scripts', 'bigdesign_enqueue_css' );

?>