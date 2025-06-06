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
                <div class="menu_logo_wrapper">
                    <img class="menu_logo_image" src="<?php bloginfo('template_url');?>/img/logo.svg" alt="Site Logo" />
                </div>
                <div class="menu_navigation_contact_wrapper">
                    <nav class="menu_navigation">
                        <div class="menu_nav_item"><span class="menu_nav_text">インプラント</span></div>
                        <div class="menu_nav_item"><span class="menu_nav_text">患者様の声</span></div>
                        <div class="menu_nav_item"><span class="menu_nav_text">クリニック案内</span></div>
                        <div class="menu_nav_item"><span class="menu_nav_text">コラム</span></div>
                        <div class="menu_nav_item"><span class="menu_nav_text">お問い合わせ</span></div>
                    </nav>
                    <div class="menu_contact_info_desktop_wrapper">
                        <div class="menu_contact_info">
                            <div class="menu_contact_phone_block">
                                <div class="menu_contact_phone_icons_number">
                                    <img src="<?php bloginfo('template_url');?>/img/ico-tel.svg" alt="phone">
                                    <div class="menu_contact_phone_number_text_wrapper"><span
                                            class="menu_contact_phone_number_text">011-598-1181</span></div>
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
                            <span class="js-nav-menu menuNavi__link menuNavi__link-current icon-menu"
                                id="menuNavi__menu"">
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
                                                    <li><a class="font-l" href="<?php echo home_url() ?>">トップページ</a>
                                                    </li>
                                                    <li><a href="<?php bloginfo('url'); ?>/beginner/">初めての方へ</a></li>
                                                    <li><a href="<?php bloginfo('url'); ?>/reason/">選ばれる理由</a></li>
                                                    <li><a href="<?php bloginfo('url'); ?>/company/">会社概要</a></li>
                                                    <li class="u-pc"><a class="font-l u-mt12"
                                                            href="<?php bloginfo('url'); ?>/company">料金プラン</a>
                                                    </li>
                                                    <li class="u-pc">
                                                        <div class="font-l">ブログ</div>
                                                        <ul class="header-childMenu">
                                                            <li><a href="<?php bloginfo('url'); ?>/news/">- お知らせ</a>
                                                            </li>
                                                            <li><a href="<?php bloginfo('url'); ?>/column/">- コラム</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="font-l u-pc"><a
                                                            href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li class="font-l">サービスメニュー
                                                    </li>
                                                    <div class="header-menu__2col header-menu__2col__withChildMenu">
                                                        <ul>
                                                            <li>
                                                                <div>屋根工事</div>
                                                                <ul class="header-childMenu">
                                                                    <li><a href="<?php bloginfo('url'); ?>/yane-tosou">-
                                                                            屋根塗装</a>
                                                                    </li>
                                                                    <li><a href="<?php bloginfo('url'); ?>/fukikae/">-
                                                                            葺き替え</a>
                                                                    </li>
                                                                    <li><a href="<?php bloginfo('url'); ?>/kasanebuki/">-
                                                                            重ね葺き</a></li>
                                                                    <li><a
                                                                            href="<?php bloginfo('url'); ?>/buki-naoshi/">-
                                                                            葺き直し</a></li>
                                                                    <li><a
                                                                            href="<?php bloginfo('url'); ?>/tsuminaoshi/">-
                                                                            棟積み直し</a>
                                                                    </li>
                                                                    <li><a href="<?php bloginfo('url'); ?>/bankin/">-
                                                                            棟板金交換</a>
                                                                    </li>
                                                                    <li><a href="<?php bloginfo('url'); ?>/shikkui/">-
                                                                            漆喰補修</a></li>
                                                                    <li><a href="<?php bloginfo('url'); ?>/yanezai/">-
                                                                            屋根材補修</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                        <ul>
                                                            <li>
                                                                <div>外壁工事</div>
                                                                <ul class="header-childMenu">
                                                                    <li><a
                                                                            href="<?php bloginfo('url'); ?>/gaiheki-tosou/">-
                                                                            外壁塗装</a></li>
                                                                    <li><a href="<?php bloginfo('url'); ?>/kasanebari/">-
                                                                            重ね張り</a></li>
                                                                    <li><a href="<?php bloginfo('url'); ?>/harikae/">-
                                                                            張り替え</a></li>
                                                                    <li><a
                                                                            href="<?php bloginfo('url'); ?>/gaiheki-hoshu/">-
                                                                            外壁補修</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="u-mt12"><a
                                                                    href="<?php bloginfo('url'); ?>/amadoi-koukan/">雨樋工事</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </ul>
                                            </div>
                                            <div class="header-menu__2col header-menu__2col__alighnRight">
                                                <ul class="u-sp">
                                                    <li><a class="font-l"
                                                            href="<?php bloginfo('url'); ?>/company">料金プラン</a>
                                                    </li>
                                                    <li>
                                                        <div class="font-l">ブログ</div>
                                                        <ul class="header-childMenu">
                                                            <li><a href="<?php bloginfo('url'); ?>/news/">- お知らせ</a>
                                                            </li>
                                                            <li><a href="<?php bloginfo('url'); ?>/column/">- コラム</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="font-l"><a
                                                            href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a>
                                                    </li>
                                                </ul>
                                                <div class="openNav-cta">
                                                    <a href="<?php bloginfo('url'); ?>/contact/">
                                                        <img src="<?php bloginfo('template_url');?>/img/ico-mail-white.svg"
                                                            alt="mail-icon">
                                                        お問い合わせ
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- <div class=" header-top">
                        <div class="siteTitle">
                            <?php if (is_home()) : ?>
                            <h1>
                                <a href="<?php echo home_url() ?>">
                                    <img src="<?php bloginfo('template_url');?>/img/logo.svg"
                                        alt="<?php wp_title(); ?>">
                                </a>
                            </h1>
                            <?php else : ?>
                            <div>
                                <a href="<?php echo home_url() ?>">
                                    <img src="<?php bloginfo('template_url');?>/img/logo.svg"
                                        alt="<?php wp_title(); ?>">
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
            </nav> -->
        </header>
        <!--/l-header-->

        <!-- <?php get_sidebar(); ?> -->