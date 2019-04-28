<?php 
    // Adiciona imagens destacadas
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'thumb-custom', 200, 200, true );



    include_once( dirname( __FILE__ ) . '/inc/kirki/kirki.php' );
    
    Kirki::add_config( 'theme_config_id', array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );

    Kirki::add_panel( 'pn_cabecalho', array(
        'priority'    => 1,
        'title'       => esc_html__( 'Cabeçalho', 'kirki' ),
        'description' => esc_html__( 'Parte superior do site', 'kirki' ),
    ) );

    Kirki::add_section( 'bg_header', array(
        'title'          => esc_html__( 'Fundo', 'kirki' ),
        'description'    => esc_html__( 'Configurações do fundo do cabeçalho.', 'kirki' ),
        'panel'          => 'pn_cabecalho',
        'priority'       => 10,
    ) );

    Kirki::add_section( 'logo_header', array(
        'title'          => esc_html__( 'Logo', 'kirki' ),
        'description'    => esc_html__( 'Configurações do cabeçalho.', 'kirki' ),
        'panel'          => 'pn_cabecalho',
        'priority'       => 10,
    ) );

    Kirki::add_section( 'txt_header', array(
        'title'          => esc_html__( 'Texto', 'kirki' ),
        'description'    => esc_html__( 'Configurações do cabeçalho.', 'kirki' ),
        'panel'          => 'pn_cabecalho',
        'priority'       => 10,
    ) );

    Kirki::add_section( 'menu', array(
        'title'          => esc_html__( 'Menu', 'kirki' ),
        'description'    => esc_html__( 'Configurações do cabeçalho.', 'kirki' ),
        'panel'          => 'pn_cabecalho',
        'priority'       => 10,
    ) );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'dimensions',
        'settings'    => 'logo-dimensions',
        'label'       => esc_html__( 'Dimension Control', 'kirki' ),
        'description' => esc_html__( 'Description Here.', 'kirki' ),
        'section'     => 'logo_header',
        'default'     => [
            'width'  => '100px',
            'height' => '100px',
        ],
        'transport' => 'auto',
        'partial_refresh' => array(
            'header_logo_setting' => array(
                'selector' => '.logo',
                'render_callback' => '__return_false'
            )
        ),
        'output'      => [
            [
                'element' => '.logo',
            ],
        ],
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'background',
        'settings'    => 'logo_background_setting',
        'label'       => esc_html__( 'Background Control', 'kirki' ),
        'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'kirki' ),
        'section'     => 'logo_header',
        'default'     => [
            'background-color'      => 'rgba(20,20,20,.8)',
            'background-image'      => '',
            'background-repeat'     => 'repeat',
            'background-position'   => 'center center',
            'background-size'       => 'cover',
            'background-attachment' => 'scroll',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.logo',
            ],
        ],
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'background',
        'settings'    => 'background_setting',
        'label'       => 'Fundo',
        'section'     => 'bg_header',
        'default'     => [
            'background-color'      => 'rgba(20,20,20,.8)',
            'background-image'      => '',
            'background-repeat'     => 'repeat',
            'background-position'   => 'center center',
            'background-size'       => 'cover',
            'background-attachment' => 'scroll',
        ],
        'transport' => 'auto',
        'partial_refresh' => array(
            'header_bg_setting' => array(
                'selector' => '.edit-icon',
                'render_callback' => '__return_false'
            )
        ),
        'output'      => [
            [
                'element' => '.header',
            ],
        ],
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'slider',
        'settings'    => 'header_height',
        'label'       => 'Altura',
        'section'     => 'bg_header',
        'default'     => 20,
        'choices'     => [
            'min'  => 10,
            'max'  => 30,
            'step' => 1,
        ],
        'transport' => 'auto',
        'partial_refresh' => array(
            'header_bg_setting' => array(
                'selector' => '.edit-icon',
                'render_callback' => '__return_false'
            )
        ),
        'output'    => array(
            array(
                'element'         => '.header',
                'property'        => 'height',
                'value_pattern'   => '$vh',
            ),
        ),
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'header_title',
        'label'    => 'Título',
        'section'  => 'txt_header',
        'default'  => 'BigDesign',
        'transport' => 'auto',
        'partial_refresh' => array(
            'header_title_setting' => array(
                'selector' => '.header-title',
                'render_callback' => '__return_false'
            )
        ),
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'typography',
        'settings'    => 'header_title_typo',
        'label'       => 'Fonte do título',
        'section'     => 'txt_header',
        'default'     => [
            'font-family'    => 'Roboto',
            'variant'        => 'regular',
            'font-size'      => '14px',
            'line-height'    => '1.5',
            'letter-spacing' => '0',
            'color'          => '#333333',
            'text-transform' => 'none',
            'text-align'     => 'left',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.header-title',
            ],
        ],
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'header_subtitle',
        'label'    => 'Subtítulo',
        'section'  => 'txt_header',
        'default'  => 'Meu subtítulo',
        'transport'=> 'auto',
        'partial_refresh' => array(
            'header_subtitle_setting' => array(
                'selector' => '.header-subtitle',
                'render_callback' => '__return_false'
            )
        ),
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'typography',
        'settings'    => 'header_subtitle_typo',
        'label'       => 'Fonte do Subtítulo',
        'section'     => 'txt_header',
        'default'     => [
            'font-family'    => 'Roboto',
            'variant'        => 'regular',
            'font-size'      => '14px',
            'line-height'    => '1.5',
            'letter-spacing' => '0',
            'color'          => '#333333',
            'text-transform' => 'none',
            'text-align'     => 'left',
        ],
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.header-subtitle',
            ],
        ],
    ] );


    Kirki::add_field( 'theme_config_id', [
        'type'        => 'slider',
        'settings'    => 'menu_margin',
        'label'       => 'Distância entre itens',
        'section'     => 'menu',
        'default'     => 20,
        'choices'     => [
            'min'  => 0,
            'max'  => 100,
            'step' => 1,
        ],
        'transport' => 'auto',
        'partial_refresh' => array(
            'menu_item_setting' => array(
                'selector' => '.menu-item',
                'render_callback' => '__return_false'
            )
        ),
        'output'    => array(
            array(
                'element'         => '.menu-item',
                'property'        => 'margin-left',
                'value_pattern'   => '$px',
            ),
        ),
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'multicolor',
        'settings'    => 'menu_item_setting',
        'label'       => esc_html__( 'Label', 'kirki' ),
        'section'     => 'menu',
        'priority'    => 10,
        'choices'     => [
            'link'    => 'Cor do link',
            'hover'   => 'Mouse over',
            'active'  => 'Ativo',
        ],
        'default'     => [
            'link'    => '#0088cc',
            'hover'   => '#00aaff',
            'active'  => '#00ffff',
        ],
        'output'    => array(
            array(
              'choice'    => 'link',
              'element'   => '.link',
              'property'  => 'color',
            ),
            array(
              'choice'    => 'hover',
              'element'   => '.link:hover',
              'property'  => 'color',
            ),
            array(
                'choice'    => 'active',
                'element'   => '.link:active',
                'property'  => 'color',
              ),
        )
    ] );

?>