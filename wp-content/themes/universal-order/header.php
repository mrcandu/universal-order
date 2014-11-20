<!doctype html>
<html>
  <head>
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <script>
      document.createElement('header');
      document.createElement('time');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
    </script>
    <![endif]-->
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-media.css" type="text/css" />
  <!--[if lt IE 9]>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-ie8.css" type="text/css" />
  <![endif]-->
  <!--[if lt IE 8]>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-ie7.css" type="text/css" />
  <![endif]-->  
  </head>

  <body>
    
    <header>
      <a href="#" id="mobile" class="flaticon-menu"></a>
      <div class="wrap">
        <img src="<?php bloginfo('template_directory'); ?>/images/universal-order-logo.png" alt="Universal Order Live Music Band" id="logo" title="Universal Order Live Music Band"/>       
        <nav>
          <?php wp_nav_menu( array('menu' => 'main-menu','container' => false )); ?>
          <ul class="social" id="social">
            <li><a href="https://www.facebook.com/pages/Universal-Order/811894985509505" target="_blank" class="flaticon-facebook"></a></li>
            <li><a href="https://twitter.com/uniorder" target="_blank" class="flaticon-social"></a></li>
            <li><a href="https://www.youtube.com/user/universalorderband" target="_blank" class="flaticon-youtube"></a></li>
            <li><a href="https://soundcloud.com/universalorder/" target="_blank" class="flaticon-soundcloud"></a></li>
          </ul>
        </nav>

      </div>
    </header>

<?php if(is_front_page()==true): ?>		

    <article class="banner">
      <div class="wrap">
        <section class="full">
          <article>
            <h1>Universal Order</h1>
            <h2>Live Music Band</h2>
            <h3>Corporate Events | Weddings | Pub Gigs | Clubs</h3>
          </article>
        </section>        
        <div class="clear"></div>
      </div>
    </article>

<?php endif; ?>	 
    
    <div class="wrap">