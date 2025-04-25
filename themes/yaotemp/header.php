<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="<?php bloginfo('charset'); ?>">
<?php wp_head(); ?>
<?php fit_ogp();?>
</head>

<body<?php fit_body_class(); ?>><!--　body Start-->

<!--l-header-->
<header class="l-header">

    <div class="header-top">
        <div class="siteTitle">
            <?php if (is_home()) : ?>
                <h1>
                    <a href="<?php echo home_url() ?>">
                        <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="<?php wp_title(); ?>">
                    </a>
                </h1>
             <?php else : ?>
                <div>
                    <a href="<?php echo home_url() ?>">
                        <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="<?php wp_title(); ?>">
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <nav class="menuNavi">
            <span class="menuNavi__link menuNavi__link-current icon-menu" id="menuNavi__menu">
            </span>
        </nav>
    </div>

    <nav class="mainNavi">
        <ul>
            <li>
                <a href="<?php bloginfo('url'); ?>">HOME</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/category/topics/">記事一覧</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/works/">施工事例</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/events/">イベント</a>
            </li>
            <li>
                <p>ページA</p>
                <ul>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/company/">会社概要</a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/faq/">よくある質問</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/privacy-policy/">プライバシーポリシー</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a>
            </li>
        </ul>
    </nav>
</header>
<!--/l-header-->

<?php get_sidebar(); ?>