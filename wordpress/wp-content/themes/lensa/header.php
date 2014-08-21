<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]--><!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]--><!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]--><!--[if gt IE 8]><!--> 
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>> <!--<![endif]-->
  <head> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php colabs_title(); ?></title>    

    <!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->    

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/includes/css/framework.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/includes/css/fancybox/jquery.fancybox-1.3.4.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

    <?php 
colabs_meta(); 
colabs_meta_head(); 
wp_head(); 
colabs_head();    
global $site_title,$site_url;    
$site_title = get_bloginfo( 'name' );  
$site_url = home_url( '/' );  
$site_description = get_bloginfo( 'description' );
    ?> 

    <?php if(get_option('colabs_disable_mobile')=='false'){?>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php }?>    
    <?php 
if (is_home()){
  colabs_background_slideshow();
}else if((!is_home()) && (get_option('colabs_background_slider')=='false')){
  colabs_background_slideshow();
}
    ?>	
  </head>

  <body <?php body_class(); ?>>
    <header class="header-section container">
      <div class="row">

        <nav class="nav-collapse collapse">   
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'top-nav', 'container' => 'nav', 'menu_class' => '', 'fallback_cb'=>'colabs_nav_fallback') );?><!-- .topnav right -->

          <div class="branding">
            <h1 class="logo">
              <a href="<?php echo $site_url;?>">
                <?php     
if (get_option('colabs_logotitle')=='logo'){
  echo '<img src="' . get_option('colabs_logo') . '" alt="' . $site_title . '" />';
} else {        
  echo $site_title;
} // End IF Statement
                ?>      
              </a>    
            </h1>      
            <div class="site-description"><?php echo $site_description; ?></div>    
          </div><!-- .branding -->   

<!--          <a class="btn-navbar collapsed">      
            <span class="icon-bar"></span>      
            <span class="icon-bar"></span>      
            <span class="icon-bar"></span>    
          </a>  -->  

          <nav class="nav-collapse collapse column col4">   
            <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container_class' => 'top-nav', 'container' => 'nav', 'menu_class' => '', 'fallback_cb'=>'colabs_nav_fallback') );?><!-- .topnav left -->    
          </nav><!-- .nav-collapse -->

          </div>
        </header><!-- .header-section -->

      <div class="main-container container">