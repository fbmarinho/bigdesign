<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' );?>">
    <?php wp_head(); ?>
</head>
<body>
<div class="header">
    <div class="header-content">
            <div class="logo"></div>
            <div class="header-text">
                <div class="header-title"><?php echo get_theme_mod( 'header_title', 'Título') ?></div>
                <div class="header-subtitle"><?php echo get_theme_mod( 'header_subtitle', 'Subtítulo') ?></div>
            </div>
    </div>
</div>

<div class="menu">
    <ul>
        <li class='menu-item'><a class='link' href="<?php echo home_url( '/produtos/' ) ?>">Produtos</a></li>
        <li class='menu-item'><a class='link' href="<?php echo get_permalink( get_page_by_title( 'Filhotes' ) ); ?>">Filhotes</a></li>
        <li class='menu-item'><a class='link' href="<?php echo get_permalink( get_page_by_path( 'doacoes' ) ); ?>">Doações</a></li>
        <li class='menu-item'><a class='link' href="<?php echo home_url( '/contato/' ); ?>">Contato</a></li>
    </ul>
</div>
    
