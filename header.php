<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="keywords" content="共通キーワード" />
  <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
  <title><?php bloginfo( 'name' ); ?></title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/seishin_fav.png" />
  <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Vollkorn:400i" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css" media="screen">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
  <script type="text/javascript" src="//webfonts.xserver.jp/js/xserver.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/stickyfill/2.1.0/stickyfill.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
  -->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="container">
    <header id="header">
      <div class="header-inner">
        <div class="logo">
          <a class="logo-header" href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/main_logo.png" class="main-logo" alt="株式会社誠信電設" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/fixed_logo.jpg" class="fixed-logo" alt="株式会社誠信電設" />
          </a>
        </div>
        <button class="toggle-menu js-toggoleNav">
          <span class="toggle-line">メニュー</span>
        </button>
        <div class="header-nav">
          <nav class="global-nav">
<?php
wp_nav_menu(
    array (
      'theme_location' => 'place_global',
      'container' => false,
    )
);
?>
          </nav>
        </div>
      </div>
    </header>
<?php if( is_front_page() ): ?>
  <section id="keyvisual">
    <div class="top-slick">
      <div class="slick1">
          <div class="top-text">
              <p class="text-contents animate__animated animate__fadeInUp animate__delay-1s">安心、安全、</p>
              <p class="text-contents animate__animated animate__fadeInUp animate__delay-2s">住み良い街づくり。</p>
          </div>
      </div>
      <div class="slick2">
          <div class="top-text">
              <p class="text-contents">
                企業として電気設備工事のみならず、地域から国、さらに地球へと、<br>
                「自然、環境、人、住、生」を考えた活動が必要不可欠となっております。
              </p>  
          </div>
      </div>
      <div class="slick3">
          <div class="top-text">
            <h1 class="animate__animated animate__fadeIn animate__delay-3s">株式会社 誠信電設</h1>
          </div>
      </div>
    </div>
  </section>
<?php else: ?>
  <div class="wrap">
    <div id="primary" class="content-area">
      <main>
        <div class="page-contents">
          <div class="page-head">
            <?php echo get_main_image(); ?>
            <div class="wrapper">
              <span class="page-title-en"></span>
              <h2 class="page-title"><?php echo get_main_title(); ?></h2>
            </div>
          </div>
          <div class="page-container">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<?php endif; ?>

    