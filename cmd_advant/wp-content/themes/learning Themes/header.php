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
            <h5><?php bloginfo('description')?>
               -
               <?php if(is_page('home')): ?>
                    Home

                 <?php elseif(is_page('case-study')): ?>
                   Case Study
               
                 <?php elseif(is_page('About us')): ?>
                  About Us

                 <?php elseif(is_page('shop')): ?>
                  Shop
                 
                 <?php elseif(is_page('Contact Us')): ?>
                   Contact Us
                 <?php endif ?>
          </h5>

            <nav class="site-nav">
                 <?php $arge= array('Theme_location'=>'primary')?>
                 <?php wp_nav_menu($arge); ?>
            </nav>
      </header>

      

        

