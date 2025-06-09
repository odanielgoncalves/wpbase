<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="keywords" content="keys, keys">
    <meta name="author" content="Daniel Gonçalves">
    
    <!-- Open Graph for social media -->
    <meta property="og:title" content="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>">
    <meta property="og:description" content="<?php bloginfo( 'description' ); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/social-share-image.jpg">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card for Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>">
    <meta name="twitter:description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/social-share-image.jpg">

    
    <title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>

  
    <link rel="canonical" href="<?php echo home_url(); ?>">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">

    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>


<header class="header">

</header>