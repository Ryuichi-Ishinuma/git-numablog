<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="ITやWeb系の知識、スキル、ツールを中心に、WebデザインやWebマーケティング関連の情報を発信中。<br>ITやWeb初心者に分かりやすく丁寧に解説します。">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- スタイルシート -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/main.css">
    <!-- Font Awesome CDN -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WJ9FP9Q');</script>
    <!-- End Google Tag Manager -->

    <!--Adobe Affiliate program -->
    <!-- TradeDoubler site verification 3117251 -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJ9FP9Q" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

    <header class="header">
        <div class="header__bar">

            <div class="inner">
                <h1 class="header__ttl">
                  <a href="<?php echo home_url(); ?>">
                    <?php bloginfo('name'); ?>
                  </a>
                </h1>
            </div>
        </div>

        <div class="header__nav-toggle">
          <?php if ( wp_is_mobile() ) : ?>
            <div id="nav-toggle">
              <div>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>

            <div id="global-nav">
              <nav>
                <?php wp_nav_menu( 'theme_location=navigation'); ?>
              </nav>
            </div>
          <?php endif; ?>
        </div>

        <nav class="header__nav">
            <div class="inner">
                <?php wp_nav_menu( 'theme_location=navigation'); ?>
            </div>
        </nav>
    </header>
