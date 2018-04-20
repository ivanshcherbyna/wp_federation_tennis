<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <style>
        .preloader{
            overflow: hidden;
        }
        .load{
            width: 100%;
            height: 100%;
            position: fixed;
            top:0;
            left:0;
            z-index: 1000001;
            background: url('<?php bloginfo("template_directory"); ?>/img/ping-pong4.gif') no-repeat center center ;
        }
    </style>

    <?php wp_head(); ?>
    <?php global $mytheme;
   // $background=redux_post_meta(THEME_OPT,$post->ID,'header-background-img');?>
</head>
<body <?php body_class(); ?>>
<div class="preloader load"></div>
<div id="custom-my-overlay"></div>
<div class="contact-stripe" style="background:<?php echo $mytheme['header-background-color']['background-color'];?>">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-right">
                <div class="phone"><i class="fa fa-phone"></i><a href="tel:<?php echo $mytheme['telephone-text'];?>"><?php echo $mytheme['telephone-text'];?></a> </div>
                <div class="address"><i class="fa fa-map-marker"></i><?php echo $mytheme['adress-street-text'].$mytheme['adress-city-text'];?></div>
            </div>
        </div>
    </div>
</div>
<!-- wrapper -->
<div class="wrapper">
    <header class="header" role="banner">
        <div id="navigation"  class="">
            <div class="container">
            <div class="row">
                <div class="search-wrap">
                    <div class="col-sm-2 logo-general"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo $mytheme['logo-header-general']['url'];?>"></a></div>
                    <div class="col-sm-10"><h3>Запорожская федерация настольного тенниса Украины</h3></div>
                </div>
            </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12 text-center">
                        <?php get_search_form(true); ?>
                    </div>
                </div>

            </div>
            <div class="main-nav-wrap">
                <nav class="navbar custom-nav" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" id="clicked-show-menu">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <?php my_nav(); ?>
                        </div>
                        <div class="mobile"><?php my_nav(); ?></div>
                    </div>
                </nav>
            </div>


    </header>
    <script>
        jQuery(document).ready(function() {
            jQuery('.preloader').removeClass("load");
        });
    </script>