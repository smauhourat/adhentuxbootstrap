<!doctype html>
<html <?php language_attributes() ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/yeti/bootstrap.min.css"> -->

    <!-- <title>Hello, world!</title> -->
    <?php
        wp_head()
    ?>
</head>

<body <?php body_class() ?> >
    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container mw-100">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Logo</a>

            <?php
            wp_nav_menu( array(
                'theme_location'  => 'header-menu',
                'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarSupportedContent',
                'menu_class'      => 'navbar-nav ml-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );    
            ?>            

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Features</a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                </div>
            </div> -->

        </div>
    </nav>
    <!-- fin menu -->

    <!-- blog -->
    <div class="container">
        <h2 class="my-5 text-center text-primary">Mi Blog Personal</h2>
        <hr>
