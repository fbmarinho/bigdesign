<?php


class Bigdesign_Customizer {
    /**
     * Bigdesign_Customizer constructor.
     *
     * @access public
     * @since  1.0
     * @return void
     */
    public function __construct() {

        add_action( 'customize_register', array( $this, 'register_customize_sections' ) );

    }

    public function register_customize_sections( $wp_customize ) {

 
        $wp_customize->add_section( 'cores-id', array(
            'title'    => 'Cores',
            'description' => 'Cores',
            'priority' => 1
        ) );
        
        $wp_customize->add_setting( 'cor-do-texto', array(
            'default'           => '#000000',
            'sanitize_callback' => 'sanitize_hex_color'
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'cor-do-texto', array(
            'label'    => 'Cor do texto',
            'section'  => 'cores-id',
            'settings' => 'cor-do-texto',
            'priority' => 1
        ) ) );

        
    
    }

}




?>