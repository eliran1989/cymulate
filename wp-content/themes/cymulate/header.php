<!DOCTYPE html>
    <html lang="en">
        <head>



            <?php 

            wp_head();

            global $post;

            ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://cymulate.com/wp-content/uploads/2021/09/cymulate-logo-icon.png" sizes="32x32" />
        <link rel="icon" href="https://cymulate.com/wp-content/uploads/2021/09/cymulate-logo-icon.png" sizes="192x192" />

       
        <title><?php echo $post->post_title; ?></title>

        </head>

        <body>


        <div class="header">


                <ul class="top">
                    <li><a href="">BLOG</a></li>
                    <li><a href="">SIGN IN</a></li>
                </ul>

                <div class="nav">

                    <div class="logo">
                        <img src='<?php bloginfo('template_url'); ?>/assets/logo.png' alt='' width="154" height="40"/>
                    </div>


                    <div class="weather">

                        
                    </div>


                    <div class="hamburger">
                            <div></div>
                            <div></div>
                            <div></div>
                    </div>

                    <ul>
                        <li><a href="">Products</a></li>
                        <li><a href="">What’s in it for you?</a></li>
                        <li><a href="">Resources</a></li>
                        <li><a href="">Company</a></li>
                        <li><a href="">Partners</a></li>
                        <a href='#' class="button">Get Started</a>
                    </ul>



                </div>




        </div>