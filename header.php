<html>

<head>

    <head>
        <title></title>
        <meta name="description" content="" />
        <meta name="distribution" content="" />
        <meta name="robots" content="All" />
        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <meta property="og:image" content="" />
        <meta property="og:url" content="" />
        <meta property="og:site_name" content="" />
        <meta property="og:type" content="article" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="/favicon.ico" type="image/x-icon" />
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <ul class="header__ul">
            <li>+383 0 38 220 220</li>
            <li>+383 0 38 220 220</li>
            <li>+383 0 38 220 220</li>
        </ul>
    </header>
    <div class="nav-wrapper">
        <nav class="container d-flex align-items-center justify-content-between">

            <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" class="img-fluid logo" />
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'top-menu d-flex '
                )
            );
            ?>
        </nav>
    </div>