<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Gotham-Pro-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Gotham-Pro-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Gotham-Pro-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Unbounded-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Unbounded-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Unbounded-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Unbounded-Light.ttf" as="font" type="font/ttf" crossorigin>
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
</head>
<body>
    <header class="header">
        <div class="container-block">
            <div class="header-block">
                <a href="/" aria-label="Logo">
                    <img width="266" height="51" src="<?php echo get_template_directory_uri() ?>/img/logo.webp" alt="Fiviolead logo">
                </a>
                <div class="header-btn">
                    <a href="tel:+359876381318">Contact Us</a>
                </div>
            </div>
        </div>
    </header>
