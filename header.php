<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/icons/logo.png">
    <link type="text/plain" rel="socialmedia" href="/socialmedia.txt">
    <link rel="dns-prefetch" href="{{ SITEURL }}"/>
    <link rel="dns-prefetch" href="//www.gstatic.com"/>
    <link rel="dns-prefetch" href="//fonts.gstatic.com"/>
    <link rel="dns-prefetch" href="//fonts.googleapis.com"/>
    <link rel="dns-prefetch" href="//accounts.google.com"/>
    <link rel="dns-prefetch" href="//ssl.google-analytics.com"/>
    <link rel="dns-prefetch" href="//www.google-analytics.com"/>
    <link rel="dns-prefetch" href="//googleads.g.doubleclick.net"/>
    <link rel="dns-prefetch" href="//pagead2.googlesyndication.com"/>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="application-name" content="<?php bloginfo('name'); ?>"/>
    <meta name="msapplication-starturl" content="http:{{ SITEURL }}"/>
    <meta name="msapplication-tooltip" content="{{ TAG_LINE }}"/>
    <meta name="msapplication-window" content="width=1024;height=768"/>
    <meta name="msapplication-task" content="name={{ SITENAME }};action-uri=http:{{ SITEURL }};icon-uri={{ SITEURL }}/theme/images/favicon.ico"/>
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-144x144.png"/>
    <meta name="msapplication-TileColor" content="#1F1F21"/>    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="imagetoolbar" content="no">
    <meta http-equiv="pragma" content="cache">
    <meta http-equiv="cache-control" content="cache">
    <meta http-equiv="vary" content="content-language">
    <meta http-equiv="Cache-control" content="max-age=2592000, public">
    <meta http-equiv="content-style-type" content="text/css">
    <meta name="application-name" content="<?php bloginfo('name'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="medium" content="mult">
    <meta name="adblock" content="disable">
    <meta name="rating" content="General">
    <meta name="resource-type" content="document">
    <meta name="revisit-after" content="1 days">
    <meta name="revisit" content="1">
    <meta name="robots" content="index,follow">
    <meta name="no-email-collection" content="http://www.unspam.com/noemailcollection/">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-57x57.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png" sizes="16x16">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/iconsfavicon.ico">
    <?php wp_head(); ?>
    <script>
    // conditionizr.com
    // configure environment tests
    conditionizr.config({
        assets: '<?php echo get_template_directory_uri(); ?>',
        tests: {}
    });
    </script>

</head>
<body <?php body_class(); ?>>

    <div class="wrapper">

        <!-- header -->
        <header role="banner" id="header" class="clear">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 logo">
                        <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img"></a>    
                    </div>
                    <!--// END LOGO //-->
                    
                    <div class="col-sm-9 nav">
                        <nav role="navigation">
                            <?php html5blank_nav(); ?>
                        </nav>
                    </div>
                    <!--// END NAV //-->
                    
                </div>
                <!--// END ROW //-->
            </div>
            <!--// END CONTAINER //-->
        </header>
        <!--// END HEADER //-->
