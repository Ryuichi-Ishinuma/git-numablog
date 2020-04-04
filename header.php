<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="ITやWeb系の知識、スキル、ツールを中心に、WebデザインやWebマーケティング関連の情報を発信中。<br>ITやWeb初心者に分かりやすく丁寧に解説します。">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link href="https://fonts.googleapis.com/css?family=Arial' rel='stylesheet' type=" text/css">
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/main.css">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WJ9FP9Q');</script>
    <!-- End Google Tag Manager -->

<!-- Googleアドセンス -->
<script data-ad-client="ca-pub-4640265523301177" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!--Adobe Affiliate program -->
<!-- TradeDoubler site verification 3117251 -->


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJ9FP9Q"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <header>
        <div class="siteinfo">
            <?php if ( wp_is_mobile() ) : ?>
            <div id="nav-drawer">
                <input id="nav-input" type="checkbox" class="nav-unshown">
                <label id="nav-open" for="nav-input"><span></span></label>
                <label class="nav-unshown" id="nav-close" for="nav-input"></label>
                <div id="nav-content">
                    <h1><a href="<?php echo home_url(); ?>">
                            <?php bloginfo('name'); ?></a></h1>
                    <?php wp_nav_menu( 'theme_location=navigation'); ?>
                </div>
            </div>
            <?php endif; ?>
            <div class="container">
                <h1><a href="<?php echo home_url(); ?>">
                        <?php bloginfo('name'); ?></a></h1>

            </div>
        </div>

        <nav>
            <div class="container">
                <?php wp_nav_menu( 'theme_location=navigation'); ?>
            </div>
        </nav>
    </header>
