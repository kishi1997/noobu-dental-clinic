<?php get_header(); ?>
<div class="dentistry">
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

    <!-- l-main -->
    <main class="l-main<?php if ( get_option('fit_theme_pageLayout') == 'value2' ):?> l-main-single
        <?php if ( get_option('fit_theme_singleWidth') == 'value2' ):?> l-main-w740<?php endif; ?>
        <?php if ( get_option('fit_theme_singleWidth') == 'value3' ):?> l-main-w900<?php endif; ?>
        <?php if ( get_option('fit_theme_singleWidth') == 'value4' ):?> l-main-w100<?php endif; ?>
        <?php endif; ?>">

        <section class="c-parts__about">
            <div class="l-container">
                <div class="c-parts__about__content">
                    <div class="c-parts__about__item">
                        <img src="<?php bloginfo('template_url');?>/img/dentistry-about-img1.jpg"
                        alt="「審美歯科とは」イメージ">
                        <div class="c-parts__about__item__text">
                            <h3>審美歯科とは</h3>
                            <p>審美歯科とは、虫歯や歯周病といった疾患の治療を主目的とする一般歯科とは異なり、「美しさ」に重点を置いた総合的な歯科医療です。
                            白く整った歯並びや歯肉とのバランス、自然な色調など、機能と美しさの両立を目指し、口元から健康で美しい笑顔をつくることを目的としています。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            $dentistry_point_items = [
                [
                    'img_src_num'            => 1,
                    'img_alt'            => '「本来あるべき口腔の姿」イメージ',
                    'title' => '本来あるべき口腔の姿',
                    'description' => '歯の健康は、見た目だけではなく「口腔全体のバランス」が大切です。<br />
                    歯、歯茎、顎の骨が調和してこそ、自然で健康な状態といえます。<br />
                    審美歯科ではこの全体の調和に着目し、本来あるべき美しい口元を再現していきます。',
                    'point_number_alt' => '01', 
                ],
                [
                    'img_src_num'            => 2,
                    'img_alt'            => '「予防としての側面」イメージ',
                    'title' => '予防としての側面',
                    'description' => '審美歯科には見た目の美しさだけでなく、口腔トラブルの予防にもつながる側面があります。<br />
                    正しい歯並びは噛み合わせの負担を軽減し、歯垢が溜まりにくい環境をつくることで、歯周病や虫歯のリスクを低減します。<br />
                    結果として、長期的な口腔の健康維持にも貢献します。',
                    'point_number_alt' => '02', 
                ]
            ];
        ?>

        <section class="c-point__2col">
            <div class="l-container">
                <div class="c-parts__sec__ttl">
                    <div class="c-parts__sec__ttl__bg">
                        <span>ABOUT</span>
                    </div>
                    <h3 class="c-parts__sec__ttl__text">当院で使用するインプラントについて</h3>
                </div>

                <div class="c-point__2col__content">
                    <?php foreach ($dentistry_point_items as $item) : ?>
                    <div class="c-point__2col__item">
                        <div class="c-parts__circle">
                            <img alt="<?php echo esc_attr($item['img_alt']); ?>"
                            src="<?php bloginfo('template_url');?>/img/dentistry-point-img<?php echo esc_attr($item['img_src_num']); ?>.jpg" />
                        </div>
                        <div>
                            <span class="deco-number">
                                <img alt="POINT<?php echo esc_attr($item['point_number_alt']); ?>"
                                src="<?php bloginfo('template_url');?>/img/point-number-<?php echo esc_attr($item['img_src_num']); ?>.svg" />
                            </span>
                            <h3><?php echo wp_kses_post($item['title']); ?></h3>
                            <p><?php echo wp_kses_post($item['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <?php get_template_part('access-detail'); ?>

    </main>
    <!-- /l-main -->

</div>
<?php get_footer(); ?>