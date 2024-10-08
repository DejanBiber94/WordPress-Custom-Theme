<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
     new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
     j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
     'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
     })(window,document,'script','dataLayer','GTM-MLB2ZMQ');</script>
    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-228286490-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-228286490-1');
        gtag('config', 'G-GTGC15CTZ6');
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 10901534288 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10901534288"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-10901534288');
    </script>
    <!-- Event snippet for Page view conversion page -->
    <script>
        gtag('event', 'conversion', {'send_to': 'AW-10901534288/QMD2CM3KrcMDENDsoM4o'});
    </script>
    <title><?php wp_title()?></title>
    <?php wp_head(); ?>
</head>
<body id="body" <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MLB2ZMQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<nav class="container-fluid navbar navbar-expand-lg navbar-light bg-light" role="navigation">
    <div class="container header_container">
        <div class="row header_row m-0">
            <?php if(pll_current_language() == 'sr'){ ?>
                <a href="/" class="a_for_header_logo">
                    <img class="logo header_logo" src="<?php bloginfo("template_url"); ?>/images/logo_light_bg.png" alt="logo" width="200" height="auto">
                </a>
            <?php } else { ?>
                <a href="/en/homepage/" class="a_for_header_logo">
                    <img class="logo header_logo" src="<?php bloginfo("template_url"); ?>/images/logo_light_bg.png" alt="logo" width="200" height="auto">
                </a>
            <?php } ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                <div id="nav-icon1">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <?php
            wp_nav_menu( array(
                'theme_location'    => 'header',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </div>
    </div>
</nav>
