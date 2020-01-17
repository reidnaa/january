<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php wp_head(); ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>January</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body <?php body_class();?> >
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <div class="container">
                <div class="logo">
                    <img class="logo-image" src="<?php  echo get_template_directory_uri() . '/img/logo.png';?>" />
                </div>
                <div class="navigation">
                
                        <?php 
                            $args = array(
                                'theme_location' => 'first_menu',
                                'container' => 'nav',
                                'container_class' => 'menu'
                            );

                            wp_nav_menu($args);
                        ?>
                   

                        <?php 
                            $args = array(
                                'theme_location' => 'second_menu',
                                'container' => 'nav',
                                'container_class' => 'menu'
                            );

                            wp_nav_menu($args);
                        ?>
               
                </div>
            </div>

        </header>
     