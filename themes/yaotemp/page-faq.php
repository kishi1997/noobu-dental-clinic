<?php get_header(); ?>
<div class="page-faq">
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

        <div class="sub-contents">
            <ul class="faq-linkList">
                <li>
                    <a href="#faq01">テスト01</a>
                </li>
                <li>
                    <a href="#faq02">テスト02</a>
                </li>
                <li>
                    <a href="#faq03">テスト03</a>
                </li>
                <li>
                    <a href="#faq04">テスト04</a>
                </li>
                
            </ul>

            <div id="faq01" class="faqBox">
                <h2>テスト01</h2>
                <div class="item">
                    <dl class="click-title">
                        <dt>Q</dt>
                        <dd>よくある質問タイトルが入ります</dd>
                    </dl>
                    <div class="click-content">
                        <p>よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。</p>
                    </div>
                </div>
                <div class="item">
                    <dl class="click-title">
                        <dt>Q</dt>
                        <dd>よくある質問タイトルが入りますよくある質問タイトルが入りますよくある質問タイトルが入ります</dd>
                    </dl>
                    <div class="click-content">
                        <p>よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。</p>
                    </div>
                </div>
                <div class="item">
                    <dl class="click-title">
                        <dt>Q</dt>
                        <dd>よくある質問タイトルが入ります</dd>
                    </dl>
                    <div class="click-content">
                        <p>よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。</p>
                    </div>
                </div>
            </div>

            <div id="faq02" class="faqBox">
                <h2>テスト02</h2>
                <div class="item">
                    <dl class="click-title">
                        <dt>Q</dt>
                        <dd>よくある質問タイトルが入ります</dd>
                    </dl>
                    <div class="click-content">
                        <p>よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。</p>
                    </div>
                </div>
                <div class="item">
                    <dl class="click-title">
                        <dt>Q</dt>
                        <dd>よくある質問タイトルが入りますよくある質問タイトルが入りますよくある質問タイトルが入ります</dd>
                    </dl>
                    <div class="click-content">
                        <p>よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。</p>
                    </div>
                </div>
                <div class="item">
                    <dl class="click-title">
                        <dt>Q</dt>
                        <dd>よくある質問タイトルが入ります</dd>
                    </dl>
                    <div class="click-content">
                        <p>よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。</p>
                    </div>
                </div>
            </div>

            <div id="faq03" class="faqBox">
                <h2>テスト03</h2>
                <div class="item">
                    <dl class="faq-title">
                        <dt>Q</dt>
                        <dd>よくある質問タイトルが入ります</dd>
                    </dl>
                    <dl class="faq-content">
                        <dt>A</dt>
                        <dd>よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。</dd>
                    </dl>
                </div>
                <div class="item">
                    <dl class="faq-title">
                        <dt>Q</dt>
                        <dd>よくある質問タイトルが入りますよくある質問タイトルが入りますよくある質問タイトルが入ります</dd>
                    </dl>
                    <dl class="faq-content">
                        <dt>A</dt>
                        <dd>よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。</dd>
                    </dl>
                </div>
                <div class="item">
                    <dl class="faq-title">
                        <dt>Q</dt>
                        <dd>よくある質問タイトルが入ります</dd>
                    </dl>
                    <dl class="faq-content">
                        <dt>A</dt>
                        <dd>よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。</dd>
                    </dl>
                </div>
            </div>

            <div id="faq04" class="faqBox">
                <h2>テスト04</h2>
                <div class="item">
                    <dl class="faq-title">
                        <dt>Q</dt>
                        <dd>よくある質問タイトルが入ります</dd>
                    </dl>
                    <dl class="faq-content">
                        <dt>A</dt>
                        <dd>よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。</dd>
                    </dl>
                </div>
                <div class="item">
                    <dl class="faq-title">
                        <dt>Q</dt>
                        <dd>よくある質問タイトルが入りますよくある質問タイトルが入りますよくある質問タイトルが入ります</dd>
                    </dl>
                    <dl class="faq-content">
                        <dt>A</dt>
                        <dd>よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。</dd>
                    </dl>
                </div>
                <div class="item">
                    <dl class="faq-title">
                        <dt>Q</dt>
                        <dd>よくある質問タイトルが入ります</dd>
                    </dl>
                    <dl class="faq-content">
                        <dt>A</dt>
                        <dd>よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。よくある質問の回答が入ります。</dd>
                    </dl>
                </div>
            </div>
        </div>

        </main>
        <!-- /l-main -->

    </div>
    <!-- /l-wrapper -->
</div>

<?php get_footer(); ?>