<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charest'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name')?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>

<div class="container-fluid">
      <header class="site-header">
            <h1><a href="<?php echo home_url();?>"><?php bloginfo('name')?></a></h1>
            <nav class="site-nav">
                 <?php $locat= array('Theme_location'=>'primary')?>
                 <?php wp_nav_menu($locat); ?>
            </nav>
      </header>

      

        

