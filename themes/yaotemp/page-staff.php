<?php get_header(); ?>
<div class="page-staff">
    <div class="pagehead-set">
        <div class="pagehead-text">
            <h1><?php the_title(); ?></h1>
            <p><?php echo $slug = get_post(get_the_ID())->post_name; ?></p>
        </div>
    </div>

    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="container">
        <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
        </div>
    </div>

    <!-- l-wrapper -->
    <div class="l-wrapper">

        <!-- l-main -->
        <main class="l-main<?php if ( get_option('fit_theme_pageLayout') == 'value2' ):?> l-main-single
        <?php if ( get_option('fit_theme_singleWidth') == 'value2' ):?> l-main-w740<?php endif; ?>
        <?php if ( get_option('fit_theme_singleWidth') == 'value3' ):?> l-main-w900<?php endif; ?>
        <?php if ( get_option('fit_theme_singleWidth') == 'value4' ):?> l-main-w100<?php endif; ?>
        <?php endif; ?>">

        <!-- スタッフ一覧固定　使わない場合は消す -->
        <div class="sub-contents">
            <ul class="staff-list">
                <li>
                    <div class="left-box">
                        <img src="<?php bloginfo('template_url');?>/img/staff-test.jpg" alt="スタッフの名前">
                    </div>
                    <div class="right-box">
                        <p class="position">役職が入ります</p>
                        <h2>山田　花子</h2>
                        <dl>
                            <dt>出身地</dt>
                            <dd>出身地が入ります</dd>
                        </dl>
                        <dl>
                            <dt>保有資格</dt>
                            <dd>保有資格が入ります
                            </dd>
                        </dl>
                        <dl>
                            <dt>趣味</dt>
                            <dd>趣味が入ります</dd>
                        </dl>
                        <dl>
                            <dt>座右の銘</dt>
                            <dd>座右が入ります</dd>
                        </dl>

                        <div class="message">
                            <p class="heading">一言メッセージ</p>
                            <p class="text">一言メッセージが入ります。</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="left-box">
                        <img src="<?php bloginfo('template_url');?>/img/staff-test.jpg" alt="スタッフの名前">
                    </div>
                    <div class="right-box">
                        <p class="position">役職が入ります</p>
                        <h2>山田　花子</h2>
                        <dl>
                            <dt>出身地</dt>
                            <dd>出身地が入ります</dd>
                        </dl>
                        <dl>
                            <dt>保有資格</dt>
                            <dd>保有資格が入ります<br>
                                保有資格が入ります<br>
                                保有資格が入ります保有資格が入ります保有資格が入ります
                            </dd>
                        </dl>
                        <dl>
                            <dt>趣味</dt>
                            <dd>趣味が入ります</dd>
                        </dl>
                        <dl>
                            <dt>座右の銘</dt>
                            <dd>座右のが入ります</dd>
                        </dl>

                        <div class="message">
                            <p class="heading">一言メッセージ</p>
                            <p class="text">一言メッセージが入ります。一言メッセージが入ります。</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- スタッフ一覧固定ここまで -->

        <!-- スタッフ一覧リンクあり -->
        <div class="main-contents">
            <ul class="staff-link-list">
                <li>
                    <img src="<?php bloginfo('template_url');?>/img/staff-test.jpg" alt="スタッフの名前">
                    <p class="position">役職が入ります</p>
                    <h2>山田　花子</h2>
                    <p class="message">一言メッセージが入ります。一言メッセージが入ります。</p>
                    <p class="more-btn">
                        <a href="<?php bloginfo('url'); ?>/staff/name/">詳しくはこちら</a>
                    </p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url');?>/img/staff-test.jpg" alt="スタッフの名前">
                    <p class="position">役職が入ります</p>
                    <h2>山田　花子</h2>
                    <p class="message">一言メッセージが入ります。一言メッセージが入ります。</p>
                    <p class="more-btn">
                        <a href="<?php bloginfo('url'); ?>">詳しくはこちら</a>
                    </p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url');?>/img/staff-test.jpg" alt="スタッフの名前">
                    <p class="position">役職が入ります</p>
                    <h2>山田　花子</h2>
                    <p class="message">一言メッセージが入ります。一言メッセージが入ります。</p>
                    <p class="more-btn">
                        <a href="<?php bloginfo('url'); ?>">詳しくはこちら</a>
                    </p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url');?>/img/staff-test.jpg" alt="スタッフの名前">
                    <p class="position">役職が入ります</p>
                    <h2>山田　花子</h2>
                    <p class="message">一言メッセージが入ります。一言メッセージが入ります。</p>
                    <p class="more-btn">
                        <a href="<?php bloginfo('url'); ?>">詳しくはこちら</a>
                    </p>
                </li>
            </ul>
            <!-- スタッフ一覧リンクありここまで -->
        </div>

        </main>
        <!-- /l-main -->

    </div>
    <!-- /l-wrapper -->

<?php get_footer(); ?>