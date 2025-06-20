<?php get_header(); ?>
<div class="foryou">
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

        <section class="c-parts__introduction">
            <div class="l-container">
                <div class="c-parts__introduction__item">
                    <div class="c-parts__introduction__item__text">
                        <h3 class="c-parts__introduction__item__ttl">あなたのライフスタイル・お悩みに合わせた<br />最適な治療法をチェック！</h3>
                        <div>
                            <p>歯を失った際の治療方法には、インプラント、ブリッジ、入れ歯など複数の選択肢があります。<br />
                            どの治療が自分に合っているのかは、年齢や健康状態、ライフスタイル、審美性へのこだわり、費用面などによって異なります。<br />
                            当院では、患者様一人ひとりのご要望やお悩みに丁寧に向き合い、それぞれにとって最適な治療法をご提案しています。<br />
                            こちらでは、各治療法の特徴やメリット・デメリットを比較しながら、どんな方に向いているかをご紹介します。<br />
                            まずはご自身に合う治療の方向性を見つけてみましょう。</p>
                        </div>
                    </div>
                    <div class="c-parts__introduction__item__img">
                        <div class="c-parts__circle">
                            <img alt="「あなたのライフスタイル・お悩みに合わせた最適な治療法をチェック！」イメージ" src="<?php bloginfo('template_url');?>/img/foryou-introduction-img1.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
            $foryou_treatment_items = [
                [
                    'img_src_num'            => 1,
                    'img_alt'            => '「インプラント治療」イメージ',
                    'title' => 'インプラント治療',
                    'description' => 'しっかり噛めて自然な見た目<br />長く使える先進的な治療法',
                    'bg_number_alt' => '01', 
                ],
                [
                    'img_src_num'            => 2,
                    'img_alt'            => '「入れ歯・ブリッジ」イメージ',
                    'title' => '入れ歯・ブリッジ',
                    'description' => '短期間・低コストで治療可能<br />手術なしで早く治したい方に',
                    'bg_number_alt' => '01', 
                ]
            ];
        ?>
        <section class="foryou_treatment">
            <div class="l-container">
                <div class="c-parts__sec__ttl">
                    <div class="c-parts__sec__ttl__bg">
                        <span>TREATMENT OPTIONS</span>
                    </div>
                    <h3 class="c-parts__sec__ttl__text">治療法の種類</h3>
                </div>

                <div class="foryou_treatment__content">
                    <?php foreach ($foryou_treatment_items as $item) : ?>
                    <div class="foryou_treatment__item">
                        <div class="foryou_treatment__image">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/foryou-treatment-img<?php echo esc_attr($item['img_src_num']); ?>.svg" alt="<?php echo esc_attr($item['img_alt']); ?>">
                        </div>
                        <h4 class="foryou_treatment__item__ttl"><?php echo wp_kses_post($item['title']); ?></h4>
                        <p class="description"><?php echo wp_kses_post($item['description']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div> 
            </div>
        </section>

        <?php
            $foryou_concept_items = [
                [
                    'img_src_num'            => 1,
                    'img_alt'            => '「インプラント治療」イメージ',
                    'title' => 'インプラント治療',
                    'description' => '顎の骨に人工歯根（チタン）を埋め込み、その上に人工歯を装着する治療法です。<br />
                    見た目や噛み心地が自然で、健康な歯に負担をかけることなく、長期間の使用が可能です。',
                    'deco_img_alt' => '01', 
                ],
                [
                    'img_src_num'            => 2,
                    'img_alt'            => '「入れ歯・ブリッジ」イメージ',
                    'title' => '入れ歯・ブリッジ',
                    'description' => '入れ歯は取り外し式で、複数の歯を補う際に使われます。<br />
                    ブリッジは失った歯の両隣を削って橋をかけるように人工歯を装着する固定式の治療法です。<br />
                    比較的短期間・低コストで治療可能です。',
                    'deco_img_alt' => '02', 
                ]
            ];
        ?>
        
        <section class="c-concept__2col">
            <div class="l-container">
                <div class="c-parts__sec__ttl">
                    <div class="c-parts__sec__ttl__bg">
                        <span>TYPES OF IMPLANTS</span>
                    </div>
                    <h3 class="c-parts__sec__ttl__text">それぞれの特徴とは</h3>
                </div>

                <div class="c-concept__2col__content">
                    <?php foreach ($foryou_concept_items as $item) : ?>
                    <div class="c-concept__2col__item">
                        <h3>
                            <span><?php echo wp_kses_post($item['deco_img_alt']); ?>
                                -
                            </span>
                            <?php echo wp_kses_post($item['title']); ?>
                        </h3>
                        <div class="c-parts__circle">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/foryou-concept-img<?php echo esc_attr($item['img_src_num']); ?>.jpg"
                                alt="<?php echo esc_attr($item['img_alt']); ?>" />
                        </div>
                        <p><?php echo wp_kses_post($item['description']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <?php
            $foryou_recommended_items = [
                [
                    'img_src_num'  => 1,
                    'lists' => [
                        'できるだけ自然な見た目を重視したい方',
                        'しっかり噛める状態を長く保ちたい方',
                        '周囲の歯を削りたくない方',
                    ],
                    'bg_number_alt' => '01', 
                ],
                [
                    'img_src_num'  => 2,
                    'lists' => [
                        '費用を抑えながら早く治療を終えたい方',
                        '外科手術に抵抗がある方',
                        '高齢で骨量が少ない方',
                    ],
                    'bg_number_alt' => '02', 
                ]
            ];
        ?>
        <section class="foryou_recommended">
            <div class="l-container">
                <div class="c-parts__sec__ttl">
                    <div class="c-parts__sec__ttl__bg">
                        <span>RECOMMENDED</span>
                    </div>
                    <h3 class="c-parts__sec__ttl__text">向いている人</h3>
                </div>

                <div class="foryou_recommended__content">
                    <?php foreach ($foryou_recommended_items as $item) : ?>
                    <div class="foryou_recommended__item">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/foryou-recommended-img<?php echo esc_attr($item['img_src_num']); ?>.jpg" alt="<?php echo esc_attr($item['img_alt']); ?>">
                        <ul class="foryou_recommended__list">
                            <?php foreach ($item['lists'] as $list) : ?>
                            <li>
                                <p class="danger-text"><?php echo esc_html($list); ?></p>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="foryou_recommended__note">
                    <h4 class="">インプラント理療法の詳細について<br class="u-sp">気になった方はこちら</h4>
                    <div class="clinic_about__button">
                        <a href="<?php bloginfo('url'); ?>/service/implant/" class="c-btn c-btn--primary">
                            <span class="c-btn__text">詳しくはこちら</span>
                            <span class="c-btn__icon" data-svg-wrapper>
                                <svg width="21" height="8" viewBox="0 0 21 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                    <path
                                    d="M20.4276 4.35355C20.6229 4.15829 20.6229 3.84171 20.4276 3.64645L17.2456 0.464466C17.0503 0.269204 16.7338 0.269204 16.5385 0.464466C16.3432 0.659728 16.3432 0.976311 16.5385 1.17157L19.3669 4L16.5385 6.82843C16.3432 7.02369 16.3432 7.34027 16.5385 7.53553C16.7338 7.7308 17.0503 7.7308 17.2456 7.53553L20.4276 4.35355ZM0.0740356 4V4.5H20.074V4V3.5H0.0740356V4Z"
                                    fill="<?php echo $primary_color;  ?>" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part('access-detail'); ?>

    </main>
    <!-- /l-main -->

</div>
<?php get_footer(); ?>