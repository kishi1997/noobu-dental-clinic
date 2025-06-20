<?php get_header(); ?>
<div class="ceramic">
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
                        <img src="<?php bloginfo('template_url');?>/img/ceramic-about-img1.jpg"
                        alt="「金属類を使わないオールセラミックス」イメージ">
                        <div class="c-parts__about__item__text">
                            <h3>金属類を使わないオールセラミックス</h3>
                            <p>オールセラミック治療とは、被せ物や差し歯に金属を一切使用せず、全てセラミック（陶材）で仕上げる審美歯科治療です。<br />
                            金属を使わないため、自然な透明感があり、歯や歯茎の変色の心配もなく、見た目にも機能面にも優れた治療法です。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            $ceramic_feature_items = [
                [
                    'img_src_num'        => 1,
                    'img_alt'            => '「天然の歯に近い透明感を持ち自然な仕上がりになる」イメージ',
                    'title' => '天然の歯に近い透明感を持ち<br />
                    自然な仕上がりになる',
                    'description' => 'セラミックは光を透過する性質があるため、自然の歯に近い透明感を持ち、周囲の歯に違和感なく溶け込みます。<br />
                    周囲の歯の色に合わせた調整ができるだけでなく、希望の白さを表現することも可能です。<br />
                    まるで自分の歯のような自然な美しさを再現します。',
                    'bg_number_alt' => '01', 
                ],
                [
                    'img_src_num'            => 2,
                    'img_alt'            => '「長期間使用しても変色しにくく美しさが続く」イメージ',
                    'title' => '長期間使用しても変色しにくく<br />
                    美しさが続く',
                    'description' => 'オールセラミックに使用される素材は耐久性・安定性に優れており、変色や着色汚れが付きにくいのが特徴です。<br />
                    高精度な色調整を行うことで、美しさを長く保つだけでなく、虫歯になりにくいクラウンを実現しています。',
                    'bg_number_alt' => '02', 
                ],
                [
                    'img_src_num'            => 3,
                    'img_alt'            => '「体に優しく金属アレルギーの心配がない」イメージ',
                    'title' => '体に優しく<br />
                    金属アレルギーの心配がない',
                    'description' => '金属を一切使用しないため、金属イオンの溶け出しによるアレルギー反応やガルバニー電流の発生を心配する必要がありません。<br />
                    特に金属アレルギーのある方や、体への優しさを重視したい方にとって、安全性の高い選択肢です。',
                    'bg_number_alt' => '03', 
                ],
                [
                    'img_src_num'            => 4,
                    'img_alt'            => '「金属類委によってできる歯の根元や歯茎の変色が無い」イメージ',
                    'title' => '金属類委によってできる<br />
                    歯の根元や歯茎の変色が無い',
                    'description' => 'メタルボンド治療では金属の溶出により歯茎が黒ずむことがありますが、オールセラミックではそうしたリスクはありません。<br />
                    歯茎のラインまで自然な色調を維持できるため、将来にわたって美しい口元を保つことができます。',
                    'bg_number_alt' => '04',
                ]
            ];
        ?>
        <section class="c-feature__2col">
            <div class="l-container">
                <div class="c-parts__sec__ttl">
                    <div class="c-parts__sec__ttl__bg">
                        <span>FEATURE</span>
                    </div>
                    <h3 class="c-parts__sec__ttl__text">オールセラミックス<br />4つの特徴</h3>
                </div>

                <div class="c-feature__2col__content">
                    <?php foreach ($ceramic_feature_items as $item) : ?>
                    <div class="c-feature__2col__item">
                        <div class="c-parts__circle">
                            <img alt="<?php echo esc_attr($item['img_alt']); ?>"
                            src="<?php bloginfo('template_url');?>/img/ceramic-feature-img<?php echo esc_attr($item['img_src_num']); ?>.jpg" />
                        </div>
                        <div>
                            <span class="deco-number">
                                <img alt="<?php echo esc_attr($item['bg_number_alt']); ?>"
                                src="<?php bloginfo('template_url');?>/img/bg-number-0<?php echo esc_attr($item['img_src_num']); ?>.svg" />
                            </span>
                            <h3 class="c-feature__2col__item__ttl"><?php echo wp_kses_post($item['title']); ?></h3>
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