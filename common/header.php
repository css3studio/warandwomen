<?php
$themeName = Theme::getCurrentThemeName();
$this->addHelperPath(PUBLIC_THEME_DIR . "/$themeName/views/helpers", 'Omeka_View_Helper_');
?>

<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
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

    <?php echo auto_discovery_link_tags(); ?>
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">

    <?php
    queue_css_file('iconfonts');

    // Bump the version to force a reload in all browsers.
    $version = OMEKA_VERSION . '.3';
    //queue_css_file('style', 'all', false, 'css', $version);
    queue_css_file('jquery.fullpage', 'all', false, 'css', $version);
    queue_css_file('style-build', 'all', false, 'css', $version);

    $customCss = get_theme_option('css_file');
    if ($customCss)
    {
        $file = BASE_DIR . '/' . $customCss;
        if (file_exists($file))
        {
            $url = PUBLIC_BASE_URL . '/' . $customCss;
            get_view()->headLink()->appendStylesheet($url, 'all', false);
        }
    }

    echo head_css();

    $siteCss = get_theme_option('css_text');
    if ($siteCss)
    {
        echo PHP_EOL . '<style>';
        echo $siteCss;
        echo '</style>'. PHP_EOL;
    }

    ?>

    <?php
    // Use the AvantTheme version of jquery-accessibleMegaMenu instead of the one that ships with Omeka to avoid
    // this warning: "Use of Mutation Events is deprecated. Use MutationObserver instead."
    //queue_js_file('vendor/jquery-accessibleMegaMenu');
    queue_js_file('jquery-accessibleMegaMenu');

    queue_js_file('avant');
    queue_js_file('globals');
    queue_js_file('jquery.fullpage.min');
    queue_js_file('script');
    echo head_js();
    ?>
</head>

<?php
$dependentPluginsActive = plugin_is_active('AvantCommon');
if (!$dependentPluginsActive)
{
    echo '<body>';
    echo '<h2 style="color:red;">AvantTheme requires that the AvantCommon plugin be installed.</h2>';
    echo '</body>';
    return;
}
?>

<?php echo body_tag(array('class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
    <div id="wrap">

        <header id="header" role="banner" class="fixed w-full lg:pt-10 pt-[34px] bg-white z-20">
            <div class="container lg:h-14 h-11 flex justify-between items-center relative z-10">
                <a class="brand" href="http://wowarko.alab.kr">
                    <img class="black lg:h-14 h-10" src="/themes/AvantTheme/images/logo.png" alt="전쟁과여성인권 아카이브">
                    <img class="white lg:h-14 h-10" src="/themes/AvantTheme/images/logo-white.png" alt="전쟁과여성인권 아카이브">
                </a>
                <a href="#" class="btn-menu-mobile  w-7 h-7 lg:hidden text-2xl flex items-center justify-center" title="모바일메뉴 열기/닫기">
                    <i class="xi-bars"></i>
                    <i class="xi-close"></i>
                </a>
                <nav id="top-nav" role="navigation" class="flex lg:items-center lg:flex-row flex-col lg:static absolute">
                    <?php echo public_nav_main(); ?>
                    <ul class="functions lg:ml-[12.5rem] flex gap-2 mt-4 lg:mt-0">
                        <li class="w-1/2 lg:w-auto">
                            <a href="#" class="lg:h-12 lg:w-12 h-10 flex justify-center items-center border border-white lg:border-0 hover:text-primary" title="검색">
                                <span class="lg:hidden inline text-white">검색</span>
                                <i class="xi-search text-2xl !hidden lg:!inline"></i>
                            </a>
                        </li>
                        <li class="w-1/2 lg:w-auto">
                            <a href="#" class="lg:h-12 lg:w-12 h-10 flex justify-center items-center border border-white lg:border-0 hover:text-primary"  title="마아페이지">
                                <span class="lg:hidden inline text-white">마아페이지</span>
                                <i class="xi-user-o text-2xl !hidden lg:!inline"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="bg-menu"></div>

        </header>

        <article id="content" role="main" tabindex="-1" class=""><!--pt-24-->

