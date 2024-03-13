<!DOCTYPE html>
<html lang="ja">
<head prefix="og: https://ogp.me/ns#">
    <!-- Google tag (gtag.js) ここから-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FBH3DD1DSY"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-FBH3DD1DSY');
    </script>
    <!-- Google tag (gtag.js) ここまで-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="大阪府大阪市城東区の皮膚科・医療法人緑泉会・柳原皮膚科クリニック公式サイト。創業35年。安心を提供致します。"/>
    <meta property="og:url" content=" https://yanagihara-derma.site/" />
    <meta property="og:type" content=" website" />
    <meta property="og:title" content="医療法人緑泉会・柳原皮膚科クリニック公式サイト" />
    <meta property="og:description" content="大阪府大阪市城東区の皮膚科・医療法人緑泉会・柳原皮膚科クリニック公式サイト。創業35年。安心を提供致します。" />
    <meta property="og:site_name" content="医療法人緑泉会・柳原皮膚科クリニック公式サイト" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.jpg" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hero.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hamburger.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/initial.css">
    <?php if ( is_page('doctor')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/doctor.css">
    <?php endif; ?>
    <?php if ( is_page('treatment')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/all-treatment.css">
    <?php endif; ?>
    <?php if ( is_page('insurance-treatment') || is_page('own-expense-treatment') || is_page('treatment')|| is_page('fee')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/treatment.css">
    <?php endif; ?>
    <?php if ( is_singular('insurance') ||  is_singular('own-expense') || is_page('vaccine')  || is_page('fee')  || is_page('equipment')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/symptoms.css">
    <?php endif; ?>
    <?php if (is_singular('own-expense')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single-own-expense.css">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/faq.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/access.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--fontawesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/hamburger.js" defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/faq.js" defer></script>
    <title>柳原皮膚科クリニック</title>
    <meta name="google-site-verification" content="sTmPm_rjgl13EcCeVb9laoGPMRWcgoV-Hd6Kx7I3snY" />
</head>
<body>
<header>
    <div class="header-top">
        <div class="logo-img">
            <a href="<?php echo home_url(''); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/yanagihara-derma_logo-rectangle.png" alt="">
            </a>
        </div>
        <div>
            <div class="business-hours">
                <div class="header-info">
                    <a href="#medical-time" class="cmn-top-part">
                        <div>
                            <span class="cmn-top-part-span"><i class="fas fa-clock"></i></span>
                            <span class="info-title">診療時間</span>
                            <span class="triangle-arrow">&#9650;</span>
                        </div>
                    </a>
                    <a href="#access-info" class="cmn-top-part">
                        <div>
                            <span class="cmn-top-part-span"><i class="fas fa-map-pin"></i></span>
                            <span class="info-title">アクセス</span>
                            <span class="triangle-arrow">&#9650;</span>
                        </div>
                    </a>
                </div>
                <p class="safe"><span class="founding">創業35年</span>の当院へ安心してご来院下さい</p>
            </div>
        </div>
    </div>
    <section class="wrapper">
        <nav class="hamburger-navi">
            <ul class="nav-menu">
                <li class="hamburger-li"><a href="<?php echo home_url(''); ?>">HOME</a></li>
                <li class="hamburger-li"><a href="<?php echo home_url(''); ?>#first-time">初診の方へ</a></li>
                <li class="hamburger-li"><a href="<?php echo home_url(''); ?>/doctor">医師紹介</a></li>
                <li class="hamburger-li">
                    <a href="<?php echo get_template_directory_uri(); ?>/treatment">診療内容</a>
                    <ul class="hamburger-ul">
                        <li class="hamburger-li"><a href="<?php echo home_url('insurance-treatment'); ?>" >一般皮膚科</a></li>
                        <li class="hamburger-li"><a href="<?php echo home_url('own-expense-treatment'); ?>">美容皮膚科</a></li>
                    </ul></li>
                <li class="hamburger-li"><a href="<?php echo get_template_directory_uri(); ?>/fee">料金</a></li>
                <li class="hamburger-li"><a href="<?php echo get_template_directory_uri(); ?>/equipment">院内写真</a></li>
                <li class="hamburger-li"><a href="<?php echo get_template_directory_uri(); ?>/faq">よくある質問</a></li>
            </ul>
        </nav>
  
        <div class="toggle_btn">
          <span></span>
          <span></span>
        </div>
  
        <div id="mask"></div>
    </section>
    <div class="header-container">
        <nav>
            <ul class="menu-list">
                <?php if ( is_home() || is_front_page() ) : ?>
                    <li class="menu-item">
                        <a href="" class="menu-item-container">HOME</a>
                    </li>
                    <li class="menu-item">
                        <a href="#first-time" class="menu-item-container">初診の方へ</a>
                    </li>
                    <?php else: ?>
                    <li class="menu-item">
                        <a href="<?php echo home_url(''); ?>" class="menu-item-container">HOME</a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo home_url(''); ?>#first-time" class="menu-item-container">初診の方へ</a>
                    </li>
                <?php endif; ?>
                
                <li class="menu-item">
                    <a href="<?php echo home_url('doctor'); ?>" class="menu-item-container">医師紹介</a>
                </li>
                <li class="menu-item menu-item-pulldown">
                    <a href="<?php echo home_url('treatment'); ?>" class="menu-item-container">診療内容</a>
                    <ul class="js_menu_pulldown ">
                        <li class="js_menu_pulldown-item"><a href="<?php echo home_url('insurance-treatment'); ?>">一般皮膚科</a></li>
                        <li class="js_menu_pulldown-item"><a href="<?php echo home_url('own-expense-treatment'); ?>">美容皮膚科</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="<?php echo home_url('fee'); ?>" class="menu-item-container">料金</a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo home_url('equipment'); ?>" class="menu-item-container">院内写真</a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo home_url('faq'); ?>" class="menu-item-container">よくある質問</a>
                </li>

            </ul>
        </nav>
    </div>
</header>

