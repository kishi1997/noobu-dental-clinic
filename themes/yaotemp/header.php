<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <?php fit_ogp();?>
</head>

<?php if (is_home()) : ?>

<body class="top">
    <?php else : ?>
    <!--　body Start-->
    <body<?php fit_body_class();?>>
        <?php endif; ?>

        <!--l-header-->
        <header>
            <div class="menu_bar">
                <?php if (is_home()) : ?>
                <h1 class="menu_logo_wrapper">
                    <img class="menu_logo_image" src="<?php bloginfo('template_url');?>/img/logo.svg"
                        alt="<?php wp_title(); ?>" />
                </h1>
                <?php else : ?>
                <a href="<?php echo home_url() ?>" class="menu_logo_wrapper">
                    <img class="menu_logo_image" src="<?php bloginfo('template_url');?>/img/logo.svg"
                        alt="<?php wp_title(); ?>" />
                </a>
                <?php endif; ?>
                <div class="menu_navigation_contact_wrapper">
                    <nav class="menu_navigation">
                        <div class="menu_nav_item"><a href="<?php bloginfo('url'); ?>/service/implant/" class="menu_nav_text">インプラント</a></div>
                        <div class="menu_nav_item"><a href="" class="menu_nav_text">患者様の声</a></div>
                        <div class="menu_nav_item"><a href="" class="menu_nav_text">クリニック案内</a></div>
                        <div class="menu_nav_item"><a href="" class="menu_nav_text">コラム</a></div>
                        <div class="menu_nav_item"><a href="" class="menu_nav_text">お問い合わせ</a></div>
                    </nav>
                    <div class="menu_contact_info_desktop_wrapper">
                        <div class="menu_contact_info">
                            <div class="menu_contact_phone_block">
                                <div class="menu_contact_phone_icons_number">
                                    <img src="<?php bloginfo('template_url');?>/img/ico-tel.svg" alt="phone">
                                    <a href="tel:011-598-1181" class="menu_contact_phone_number_text_wrapper"><span
                                            class="menu_contact_phone_number_text">011-598-1181</span></a>
                                </div>
                            </div>
                            <div class="menu_contact_hours_block">
                                <div class="menu_contact_hours_text_container">
                                    <span class="menu_contact_hours_title">診療時間</span>
                                    <span class="menu_contact_hours_time">/9：00～12：30 /14：00～18：30</span>
                                </div>
                                <div class="menu_contact_closed_info">休診日/日曜・祝日</div>
                            </div>
                        </div>
                    </div>
                    <div class="menuNavi-wrapper">
                        <nav class="js-nav menuNavi">
                            <span class="js-nav-menu menuNavi__link menuNavi__link-current" id="menuNavi__menu"">
                    </span>
                </nav>
                </div>
                <div class=" header-openNav js-navLists">
                                <div class="header-openNav__container">
                                    <div class="header-openNav__pcLeft">
                                        <img src="<?php bloginfo('template_url');?>/img/logo.svg"
                                            alt="<?php bloginfo( 'name' ); ?>">
                                    </div>
                                    <div class="header-openNav__pcRight">
                                        <div class="header-openNav__pcRight__container">
                                            <div class="header-menu__2col header-menu__2col__noChildMenu">
                                                <ul>
                                                    <li><a href="<?php echo home_url() ?>">トップページ</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php bloginfo('url'); ?>/clinic/">ノブデンタルクリニックについて</a>
                                                    </li>
                                                    <li>
                                                        <div>サービス</div>
                                                        <ul class="header-childMenu">
                                                            <li><a href="<?php bloginfo('url'); ?>/service/implant/">- インプラント</a>
                                                            </li>
                                                            <li><a href="<?php bloginfo('url'); ?>/service/dentistry/">- 審美歯科</a>
                                                            </li>
                                                            <li><a href="<?php bloginfo('url'); ?>/service/ceramic/">-
                                                                    セラミック治療</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="<?php bloginfo('url'); ?>/reason/">選ばれる理由</a></li>
                                                    <li><a href="<?php bloginfo('url'); ?>/foryou/">あなたにピッタリの治療法は？</a>
                                                    </li>
                                                    <li><a href="<?php bloginfo('url'); ?>/faq">よくある質問</a>
                                                    </li>
                                                    <li><a href="<?php bloginfo('url'); ?>/flow/">治療の流れ</a>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li><a href="<?php bloginfo('url'); ?>/price/">治療費用</a>
                                                    </li>
                                                    <li><a href="<?php bloginfo('url'); ?>/recruit/">採用情報</a>
                                                    </li>
                                                    <li><a href="<?php bloginfo('url'); ?>/about/">院概要・診療時間・アクセス</a></li>
                                                    <li>
                                                        <div>ブログ</div>
                                                        <ul class="header-childMenu">
                                                            <li><a href="<?php bloginfo('url'); ?>/news/">- お知らせ</a>
                                                            </li>
                                                            <li><a href="<?php bloginfo('url'); ?>/column/">- コラム</a>
                                                            </li>
                                                            <li><a href="<?php bloginfo('url'); ?>/column/">-
                                                                    スタッフブログ</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div>お問い合わせ</div>
                                                        <ul class="header-childMenu">
                                                            <li><a href="<?php bloginfo('url'); ?>/news/">-
                                                                    お問い合わせフォーム</a>
                                                            </li>
                                                            <li><a href="<?php bloginfo('url'); ?>/column/">- LINE相談</a>
                                                            </li>
                                                            <li><a href="<?php bloginfo('url'); ?>/column/">-
                                                                    採用フォーム</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <div class="phone-block__inner">
                                                        <div class="menu_contact_phone_icons_text">
                                                            <p>お電話でのお問い合わせ</p>
                                                            <p>[毎週日曜日定休]</p>
                                                        </div>
                                                        <div class="menu_contact_phone_icons_number">
                                                            <img src="<?php bloginfo('template_url');?>/img/ico-tel.svg"
                                                                alt="phone">
                                                            <div class="menu_contact_phone_number_text_wrapper"><span
                                                                    class="menu_contact_phone_number_text">011-598-1181</span>
                                                            </div>
                                                        </div>
                                                        <div class="openNav-cta">
                                                            <a href="<?php bloginfo('url'); ?>/contact/">
                                                                <img src="<?php bloginfo('template_url');?>/img/ico-mail-white.svg"
                                                                    alt="mail-icon">
                                                                お問い合わせ
                                                            </a>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
            </div>
        </header>
        <!--/l-header-->

        <!-- <?php get_sidebar(); ?> -->