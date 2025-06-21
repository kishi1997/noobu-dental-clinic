<?php get_header(); ?>
<div class="reason">
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
            $reason_feature_items = [
                [
                    'img_src_num'        => 1,
                    'img_alt'            => '「豊富な治療実績と高い成功率」イメージ',
                    'title' => '豊富な治療実績と高い成功率',
                    'description' => 'ノブデンタルクリニックでは、これまでに累計4,000本以上のインプラント埋入実績を誇ります。<br />
                    さらに、10年生存率は98％以上という高い安定性を実現。<br />
                    豊富な症例と経験が、信頼できる治療の根拠です。',
                    'bg_number_alt' => '01', 
                ],
                [
                    'img_src_num'            => 2,
                    'img_alt'            => '「最新デンサーバー技術による骨造成」イメージ',
                    'title' => '最新デンサーバー技術による骨造成',
                    'description' => '骨量が不足している方にも対応できる最新の骨造成技術「デンサーバー法」を採用。<br />
                    自家骨を用いた副鼻腔底挙上術により、人工骨に比べて痛みや感染のリスクを大幅に抑えた安全な骨造成を実現します。',
                    'bg_number_alt' => '02', 
                ],
                [
                    'img_src_num'            => 3,
                    'img_alt'            => '「短期完了プラン(最短3カ月保証)」イメージ',
                    'title' => '短期完了プラン(最短3カ月保証)',
                    'description' => 'カウンセリングから最終的な補綴までを、最短3ヶ月で完了する短期集中型治療プランをご用意。<br />
                    通院回数を最小限に抑えることで、仕事や育児で忙しい方にも負担の少ないインプラント治療をご提供します。',
                    'bg_number_alt' => '03', 
                ],
                [
                    'img_src_num'            => 4,
                    'img_alt'            => '「精密診断とオーダーメイド治療計画」イメージ',
                    'title' => '精密診断とオーダーメイド治療計画',
                    'description' => '当院では、歯科用CTと3Dシミュレーションソフトを駆使して顎骨の状態を正確に診断。<br />
                    患者様一人ひとりの口腔環境に合わせた、無理のない治療プランをご提案します。<br />
                    科学的根拠に基づいた治療で安心です。',
                    'bg_number_alt' => '04',
                ],
                [
                    'img_src_num'            => 5,
                    'img_alt'            => '「安心のハイブリッド手術室完備」イメージ',
                    'title' => '安心のハイブリッド手術室完備',
                    'description' => 'クラス1000相当の清潔な手術環境を整えたハイブリッド手術室を完備。<br />
                    静脈内鎮静法により手術中のストレスを軽減し、高気圧酸素ルームで術後の回復もサポート。<br />
                    快適で安全なインプラント治療を実現します。',
                    'bg_number_alt' => '05',
                ],
                [
                    'img_src_num'            => 6,
                    'img_alt'            => '「総合歯科診察でトータルサポート」イメージ',
                    'title' => '総合歯科診察でトータルサポート',
                    'description' => 'ノブデンタルクリニックでは、インプラントだけでなく、一般歯科・審美・矯正まで一貫対応。<br />
                    治療前後のメンテナンスや予防歯科、ホワイトニングまで、患者様の口腔内全体を総合的にサポートいたします。',
                    'bg_number_alt' => '06',
                ],
                [
                    'img_src_num'            => 7,
                    'img_alt'            => '「万全のアフターサポート」イメージ',
                    'title' => '万全のアフターサポート',
                    'description' => '治療後も安心して通っていただけるよう、3〜6ヶ月ごとの定期検診・クリーニングを実施。<br />
                    万が一のトラブルにも迅速に対応する保証制度を完備し、長期にわたって快適な口腔環境を維持するお手伝いをいたします。',
                    'bg_number_alt' => '07',
                ]
            ];
        ?>
        <section class="c-feature__2col">
            <div class="l-container">
                <div class="c-parts__sec__ttl">
                    <div class="c-parts__sec__ttl__bg">
                        <span>FEATURE</span>
                    </div>
                    <h3 class="c-parts__sec__ttl__text">当院の7つの特徴</h3>
                </div>

                <div class="c-feature__2col__content">
                    <?php foreach ($reason_feature_items as $item) : ?>
                    <div class="c-feature__2col__item">
                        <div class="c-parts__circle">
                            <img alt="<?php echo esc_attr($item['img_alt']); ?>"
                            src="<?php bloginfo('template_url');?>/img/reason-feature-img<?php echo esc_attr($item['img_src_num']); ?>.jpg" />
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