<?php get_header(); ?>
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

        <div class="slim-contents">

            <article> 
                <div class="content-top">
                    <h2>お問い合わせに関して</h2>
                    <p>〇〇へのお問い合わせは、こちらで受付しております。<br>
                    以下のフォームよりお問い合わせください。<br>
                    折り返し、担当者よりご連絡させていただきます。<br>
                    通常、お返事には1〜3営業日かかりますので、あらかじめご了承ください。<br>お急ぎの場合は大変お手数ではございますが、お電話にてご連絡ください。</p>

                    <div class="tel-box">
                            <h3>お電話でのお問い合わせ</h3>
                            <a href="tel:">
                                <dl>
                                    <dt><img src="<?php bloginfo('template_url');?>/img/tel-icon.png" alt="電話アイコン"></dt>
                                    <dd>000-0000-000</dd>
                                </dl>
                                <p class="day">営業時間 00:00〜00:00／定休日 〇〇</p>
                            </a>
                        </div>
                </div>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <section class="content content-page">
                <?php the_content(); ?>
                </section>
                <?php endwhile; endif; ?>
            </article> 
        </div>

        </main>
        <!-- /l-main -->

    </div>
    <!-- /l-wrapper -->

<?php get_footer(); ?>