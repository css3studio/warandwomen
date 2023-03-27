<?php
$themeName = Theme::getCurrentThemeName();
$this->addHelperPath(PUBLIC_THEME_DIR . "/$themeName/views/helpers", 'Omeka_View_Helper_');
?>
<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:url" content="">
	<meta property="og:type" content="website">
	<meta property="og:image" content=""> 
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>
    <?php
    $globalSiteTag = get_theme_option('global_site_tag');
    if (!empty($globalSiteTag))
    {
        // Emit Google Analytics tracking code for public users, but not for logged in users.
        // This way admin operations such as data entry won't throw off usage statistics.
        $user = current_user();
        $isLoggedIn = !empty($user);
        if (!$isLoggedIn)
        {
            echo $globalSiteTag;
        }
    }
    ?>
    <?php //echo auto_discovery_link_tags(); ?>
    <?php //fire_plugin_hook('public_head', array('view'=>$this)); 활성화 시 사용 플러그인별 css와 js 로드  ?>
    <!-- link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
	<link href="/themes/AvantTheme/css/iconfonts.css?v=3.0.3" media="all" rel="stylesheet" type="text/css">
	<link href="/themes/AvantTheme/css/jquery.fullpage.css?v=3.0.3.3" media="all" rel="stylesheet" type="text/css">
	<link href="/themes/AvantTheme/css/style-build.css?v=3.0.3.3" media="all" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="/themes/AvantTheme/javascripts/jquery.fullpage.min.js?v=3.0.3"></script>
	<script type="text/javascript" src="/themes/AvantTheme/javascripts/script.js?v=3.0.3"></script -->
    <link type="text/css" rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo html_escape(url('themes/AvantTheme/css/iconfonts.css?')); ?><?php echo date('Y h:i:s'); ?>">
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo html_escape(url('themes/AvantTheme/css/jquery.fullpage.css?')); ?><?php echo date('Y h:i:s'); ?>">
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo html_escape(url('themes/AvantTheme/css/style-build.css?')); ?><?php echo date('Y h:i:s'); ?>">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo html_escape(url('themes/AvantTheme/javascripts/jquery.fullpage.min.js?')); ?><?php echo date('Y h:i:s'); ?>"></script>
	<script type="text/javascript" src="<?php echo html_escape(url('themes/AvantTheme/javascripts/script.js?')); ?><?php echo date('Y h:i:s'); ?>"></script>
</head>



<?php echo body_tag(array('class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
    <div id="wrap">

        <header id="header" role="banner" class="fixed w-full lg:pt-10 pt-[34px] bg-white z-20">
            <div class="container lg:h-14 h-11 flex justify-between items-center relative z-10">
                <a class="brand" href="<?php echo html_escape(url('/')); ?>">
                    <img class="black lg:h-14 h-10 max-w-none" src="<?php echo img('logo.png'); ?>" alt="전쟁과여성인권 아카이브">
                    <img class="white lg:h-14 h-10 max-w-none" src="<?php echo img('logo-white.png'); ?>" alt="전쟁과여성인권 아카이브">
                </a>
                <a href="#" class="btn-menu-mobile  w-7 h-7 lg:hidden text-2xl flex items-center justify-center" title="모바일메뉴 열기/닫기">
                    <i class="xi-bars"></i>
                    <i class="xi-close"></i>
                </a>
                <nav id="top-nav" role="navigation" class="flex lg:items-center lg:flex-row flex-col lg:static absolute">
                    <?php echo public_nav_main(); ?>
                    <ul class="functions lg:ml-[12.5rem] flex gap-2 mt-4 lg:mt-0">
                        <li class="w-1/2 lg:w-auto">
                            <a href="<?php echo html_escape(url('find?query=&amp;site=1')); ?>" class="lg:h-12 lg:w-12 h-10 flex justify-center items-center border border-white lg:border-0 hover:text-primary" title="검색">
                                <span class="lg:hidden inline text-white">검색</span>
                                <i class="xi-search text-2xl !hidden lg:!inline"></i>
                            </a>
                        </li>
                        <li class="w-1/2 lg:w-auto">
                            <a href="<?php echo html_escape(url('guest-user/user/me')); ?>" class="lg:h-12 lg:w-12 h-10 flex justify-center items-center border border-white lg:border-0 hover:text-primary"  title="마아페이지">
                                <span class="lg:hidden inline text-white">마아페이지</span>
                                <i class="xi-user-o text-2xl !hidden lg:!inline"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="bg-menu"></div>

        </header>

        <article id="content" role="main" tabindex="-1" class="lg:pt-24 pt-[78px]">

