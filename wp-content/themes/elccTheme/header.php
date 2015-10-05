<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>elcc</title>
    <meta name="description" content="l'école de langue et de culture chinoise de paris">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

    <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script>(function(){document.documentElement.className='js'})();</script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.2.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/bootstrap.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/main.css">
<?php wp_head(); ?>
</head>

<body>

 <div class="navbar navbar-default navbar-fixed-top hidden-xs">
    <div class="container">
        <div="row">
            <div class="col-sm-4">
                <a class="logo_nav" href="/elcc">
                    <img class="logo" src="<?php echo get_template_directory_uri() ?>/img/logo-school-haut.jpg" alt="" />
                </a>
            </div>
            <div class="col-sm-8">
                <nav class="navbar-collapse collapse">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu',
                                          'menu_class' => 'nav navbar-nav navbar-right'
                ) ); ?>
                </nav>
            </div>
        </div>
    </div><!-- /container -->
</div>
       
    
    



 