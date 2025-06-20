<?php get_header(); ?>
<div class="flow">
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


        <?php
            $flow_step_items = [
                [
                    'img_src_num'       => 1,
                    'img_alt'           => '「精密検査・カウンセリング」イメージ',
                    'title'             => '精密検査・カウンセリング',
                    'description'       => 'まずは患者様のお悩みやご希望を丁寧に伺い、現在のお口の状態を把握するための精密検査を行います。<br />
                    審美性や機能性を考慮しながら、患者様一人ひとりに最適な治療方法を一緒に考えていくための大切なステップです。',
                    'item_number'       => '1',
                ],
                [
                    'img_src_num'       => 2,
                    'img_alt'           => '「CT撮影・診断・治療計画・お見積もり作成」イメージ',
                    'title'             => 'CT撮影・診断・治療計画・お見積もり作成',
                    'description'       => 'より安全かつ正確な治療のために、歯科用CTによる立体的な画像診断を行います。<br />
                    得られたデータを基に、治療の流れや使用する材料、期間、費用などを具体的にご説明し、患者様にご納得いただける計画を立案します。',
                    'item_number'       => '2',
                ],
                [
                    'img_src_num'       => 3,
                    'img_alt'           => '「歯周初期治療」イメージ',
                    'title'             => '歯周初期治療',
                    'description'       => 'インプラント手術を行う前に、歯周病の治療や歯石の除去など、お口全体の衛生状態を整える処置を行います。<br />
                    これにより、手術後の感染リスクを最小限に抑えることができ、インプラントの長期安定性が向上します。',
                    'item_number'       => '3',
                ],
                [
                    'img_src_num'       => 4,
                    'img_alt'           => '「一時手術(インプラント挿入手術)」イメージ',
                    'title'             => '一時手術(インプラント挿入手術)',
                    'description'       => '顎の骨にインプラントを埋入する最も重要な工程です。ノブデンタルクリニックでは、痛みや腫れに最大限配慮しながら、経験豊富な医師が安全に処置を行います。<br />
                    局所麻酔または必要に応じて鎮静法を併用することも可能です。',
                    'item_number'       => '4',
                ],
                [
                    'img_src_num'       => 5,
                    'img_alt'           => '「インプラントと骨の安定化」イメージ',
                    'title'             => 'インプラントと骨の安定化',
                    'description'       => 'インプラント体が顎の骨としっかり結合する期間を設けます。<br />
                    通常は数ヶ月を要し、この期間にインプラントと骨が結合することで、しっかり噛める強固な土台が完成します。<br />
                    経過観察を丁寧に行い、治癒を見守ります。',
                    'item_number'       => '5',
                ],
                [
                    'img_src_num'       => 6,
                    'img_alt'           => '「二次手術(頭出し手術)」イメージ',
                    'title'             => '二次手術(頭出し手術)',
                    'description'       => 'インプラントが骨と結合した後、歯肉の中に埋まっていたインプラントの頭部を露出させる手術を行います。<br />
                    この処置により、人工歯を装着する準備が整います。簡単な処置であり、通常は短時間で完了します。',
                    'item_number'       => '6',
                ],
                [
                    'img_src_num'       => 7,
                    'img_alt'           => '「上部構造制作・装着」イメージ',
                    'title'             => '上部構造制作・装着',
                    'description'       => '患者様の歯並びや色調に合わせた人工歯（セラミッククラウンなど）を製作し、装着します。<br />
                    見た目の美しさだけでなく、機能性にも優れた歯を再現することで、自然な噛み心地と見た目を実現します。',
                    'item_number'       => '7',
                ],
                [
                    'img_src_num'       => 8,
                    'img_alt'           => '「定期健診・メンテナンス」イメージ',
                    'title'             => '定期健診・メンテナンス',
                    'description'       => 'インプラントを長持ちさせるためには、治療後の定期的なメンテナンスが欠かせません。<br />
                    3〜6ヶ月ごとの定期健診で噛み合わせや清掃状態を確認し、必要に応じてクリーニングや調整を行います。',
                    'item_number'       => '8',
                ],
            ];
        ?>
        <section class="flow_step">
            <div class="l-container">
                <div class="flow_step__content">
                    <?php foreach ($flow_step_items as $item) : ?>
                    <div class="flow_step__item">
                        <div class="flow_step__item_image">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/flow-step-img<?php echo esc_attr($item['img_src_num']); ?>.jpg" alt="<?php echo esc_attr($item['img_alt']); ?>">
                        </div>
                        <div class="flow_step__item_wrapper">
                            <h3 class="flow_step__item_title">
                                <span class="flow_step__item_title_number">
                                    <?php echo wp_kses_post($item['item_number']); ?>
                                </span>
                                <?php echo wp_kses_post($item['title']); ?>
                            </h3>
                            <p class="flow_step__item_description"><?php echo wp_kses_post($item['description']); ?></p>
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