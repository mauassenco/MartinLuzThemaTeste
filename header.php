
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- favicon -->
    <link rel="icon" href="https://martinluz.com/wp-content/uploads/2020/03/cropped-Asset-1-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://martinluz.com/wp-content/uploads/2020/03/cropped-Asset-1-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://martinluz.com/wp-content/uploads/2020/03/cropped-Asset-1-180x180.png" />
    <meta name="msapplication-TileImage" content="https://martinluz.com/wp-content/uploads/2020/03/cropped-Asset-1-270x270.png" />
    
    <title>
        <?php bloginfo('name') ?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- MAterial icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- Google fonts -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <!-- Estilos Css -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>    
  </head>