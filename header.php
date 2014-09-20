<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

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