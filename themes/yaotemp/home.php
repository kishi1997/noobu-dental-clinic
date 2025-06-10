<?php get_header(); ?>
<div class="mv">
    <div class="mv-bg">
        <picture>
            <source media="(max-width: 568px)" srcset="<?php bloginfo('template_url');?>/img/top-fv-spBg.jpg">
            <img src="<?php bloginfo('template_url');?>/img/top-fv-bg.jpg" alt="Main Visual Image" />
        </picture>
        <a href="" class="line_cta_banner">
            <div class="line_cta_background_circle">
                <div data-svg-wrapper class="line_cta_icon_wrapper">
                    <img src="<?php bloginfo('template_url');?>/img/line-white.svg" alt="line-icon">
                </div>
                <span class="line_cta_text_jp">LINE相談</span>
                <span class="line_cta_text_en">LINE CONSULTANT</span>
            </div>
        </a>
    </div>
    <div class="mv_caption_container">
        <h2 class="mv_caption_text">
            <span>術後の安心まで考え抜いた、</span>
            <span>自家骨使用のインプラント治療</span>
        </h2>
        <h3>デンサーバー副鼻腔底挙上術だからこその安全性</h3>
    </div>
    <div class="mv_news_banner">
        <div class="mv_news_banner_label"><span class="mv_news_banner_label_text">お知らせ</span></div>
        <a href="" class="mv_news_banner_content"><span
                class="mv_news_banner_content_text">2024.12.21　年末年始の営業日時について</span>
            <div class="mv_news_banner_arrow">
                <img src="<?php bloginfo('template_url');?>/img/ico-arrow-right.svg" alt="arrow">
            </div>
        </a>
    </div>
</div>

<?php
$features = [
    [
        'img_num' => 1,
        'title'   => '累計埋入本数',
        'value'   => '4,000本以上',
        'alt'     => '累計埋入本数アイコン：笑顔の口元',
    ],
    [
        'img_num' => 2,
        'title'   => '治療期間',
        'value'   => '平均3ヶ月以内',
        'alt'     => '治療期間アイコン：虫眼鏡で見る歯',
    ],
    [
        'img_num' => 3,
        'title'   => '10年生存率',
        'value'   => '98%',
        'alt'     => '10年生存率アイコン：輝く歯',
    ],
    [
        'img_num' => 4,
        'title'   => '信頼と実績',
        'value'   => '創業15年',
        'alt'     => '信頼と実績アイコン：デンタルミラーと探針',
    ],
];
?>

<section class="top_features">
    <div class="l-container">
        <div class="top_features__inner">
            <?php foreach ( $features as $feature ) : ?>
            <div class="top_features__item">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top-feat-img<?php echo esc_attr( $feature['img_num'] ); ?>.svg"
                    alt="<?php echo esc_attr( $feature['alt'] ); ?>" class="top_features__icon" width="80"
                    <?php // Add approximate width/height for better CLS and initial rendering ?> height="80">
                <p class="top_features__title"><?php echo esc_html( $feature['title'] ); ?></p>
                <p class="top_features__value"><?php echo esc_html( $feature['value'] ); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
/**
 * Section: Top Concept
 */

$concept_items_data = [
    [
        'modifier_class'     => 'speed',
        'img_src_num'        => 1,
        'img_alt'            => 'スピード感 イメージ',
        'badge_text'         => 'スピード感',
        'title_text'         => '3ヶ月以内の治療完了保証',
        'description_text'   => '治療期間の長さが不安な方にも安心していただけるよう、インプラント治療を原則3ヶ月以内で完了する体制を整えています。綿密な治療計画と経験豊富なチームによって、スピーディーかつ確実な治療を提供。忙しい方や早く噛めるようになりたい方にもおすすめです。',
        'deco_img_alt' => '01', 
    ],
    [
        'modifier_class'     => 'skill',
        'img_src_num'        => 2,
        'img_alt'            => '技術力 イメージ',
        'badge_text'         => '技術力',
        'title_text'         => '自家骨を用いたデンサーバー副鼻腔底挙上術',
        'description_text'   => '骨が少ない難症例にも対応できるのが、当院の大きな強み。自家骨とデンサーバーという特殊器具を用い、副鼻腔底を安全に押し上げながら骨造成を行う高度な技術により、インプラントが難しいとされた部位でも治療が可能です。確かな技術で、あきらめない治療を実現します。',
        'deco_img_alt' => '02', 
    ],
    [
        'modifier_class'     => 'safety',
        'img_src_num'        => 3,
        'img_alt'            => '安全・安心 イメージ',
        'badge_text'         => '安全・安心',
        'title_text'         => '専用ハイブリッド手術室とISO準拠滅菌',
        'description_text'   => 'インプラント手術は、徹底した衛生管理のもとで行うことが重要です。当院では医科レベルの基準を満たした専用のハイブリッド手術室を完備。さらにISO基準に準拠した滅菌体制を徹底し、清潔かつ安全な環境で手術に臨みます。患者様にとって安心の治療環境をお約束します。',
        'deco_img_alt' => '03', 
    ],
];

?>

<section class="top_concept">
    <div class="top_concept__inner">
        <div class="top_concept__bg_shape"></div>

        <div class="top_sec__ttl">
            <div class="top_sec__ttl__bg">
                <span>CONCEPT</span>
            </div>
            <h3 class="top_sec__ttl__text">札幌ノブデンタルインプラントクリニックの特長</h3>
        </div>

        <div class="top_concept__items_container">
            <?php foreach ($concept_items_data as $item) : ?>
            <article class="top_concept__item top_concept__item--<?php echo esc_attr($item['modifier_class']); ?>">
                <div class="top_concept__item_image_wrapper">
                    <img class="top_concept__item_image"
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top-concept-img<?php echo esc_attr($item['img_src_num']); ?>.jpg"
                        alt="<?php echo esc_attr($item['img_alt']); ?>" />
                </div>
                <div class="top_concept__item_content">
                    <div class="top_concept__item_heading">
                        <span class="top_concept__item_badge"><?php echo esc_html($item['badge_text']); ?></span>
                        <h3 class="top_concept__item_title"><?php echo esc_html($item['title_text']); ?></h3>
                    </div>
                    <p class="top_concept__item_description"><?php echo wp_kses_post($item['description_text']); ?></p>
                </div>
                <div class="top_concept__item_icon_shield">
                    <img class="top_concept__item_image"
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top-concept-number<?php echo esc_attr($item['img_src_num']); ?>.svg"
                        alt="<?php echo esc_attr($item['deco_img_alt']); ?>" />
                </div>
            </article>
            <?php endforeach; ?>
        </div>

        <div class="top_concept__view_more">
            <a href="#" class="top_concept__view_more_button">
                <span class="top_concept__view_more_text">選ばれる利用を見る</span>
                <span class="top_concept__view_more_arrow">
                    <svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.3536 4.35355C20.5488 4.15829 20.5488 3.84171 20.3536 3.64645L17.1716 0.464466C16.9763 0.269204 16.6597 0.269204 16.4645 0.464466C16.2692 0.659728 16.2692 0.976311 16.4645 1.17157L19.2929 4L16.4645 6.82843C16.2692 7.02369 16.2692 7.34027 16.4645 7.53553C16.6597 7.7308 16.9763 7.7308 17.1716 7.53553L20.3536 4.35355ZM0 4V4.5H20V4V3.5H0V4Z"
                            fill="white" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
</section>

<?php

$service_items_data = [
    [
        'modifier_class'     => 'implant',
        'img_num'            => 1,
        'img_alt'            => 'インプラントイメージ',
        'title'              => 'インプラント',
        'description'        => '失った歯根部にチタン製の人工歯根（インプラント）を埋入し、顎骨としっかり結合させることで、天然歯とほぼ同等の咀嚼力と審美性を回復します。当院独自の「デンサーバー技術」による骨造成で、骨量不足の方も低リスクで安心して治療を受けていただけます。',
        'features_html'      => '自然な噛み心地：硬いものもストレスなく噛めます。<br />顎骨の健康維持：骨吸収を抑えて骨量を守ります。<br />長期安定性：適切なケアで10年以上、場合によっては20年以上持続します。<br />',
        'button_text'        => '詳しくはこちら',
        'button_link'        => '#', // 適切なリンクに置き換えてください
    ],
    [
        'modifier_class'     => 'item-w50',
        'img_num'            => 2,
        'img_alt'            => '審美歯科イメージ',
        'title'              => '審美歯科',
        'description'        => 'ホワイトニングやラミネートベニア、オールセラミッククラウンなど、多彩なメニューで歯の色・形・歯並びを総合プロデュース。自然な美しさと機能性を両立させ、笑顔に自信を取り戻します。',
        'features_html'      => null, // このカードには特徴リストがない
        'button_text'        => '詳しくはこちら',
        'button_link'        => '#', // 適切なリンクに置き換えてください
    ],
    [
        'modifier_class'     => 'item-w50',
        'img_num'            => 3,
        'img_alt'            => 'セラミック治療イメージ',
        'title'              => 'セラミック治療',
        'description'        => 'ホワイトニングやラミネートベニア、オールセラミッククラウンなど、多彩なメニューで歯の色・形・歯並びを総合プロデュース。自然な美しさと機能性を両立させ、笑顔に自信を取り戻します。',
        'features_html'      => null,
        'button_text'        => '詳しくはこちら',
        'button_link'        => '#',
    ],
];
?>

<section class="top_service">
    <div class="l-container">
        <div class="top_sec__ttl">
            <div class="top_sec__ttl__bg">
                <span>SERVICE</span>
            </div>
            <h3 class="top_sec__ttl__text">サービス</h3>
        </div>
        <div class="top_service__wrapper">
            <?php foreach ($service_items_data as $item) : ?>
            <article class="top_service__item top_service__item--<?php echo esc_attr($item['modifier_class']); ?>">
                <div class="top_service__item_image_wrapper">
                    <img class="top_service__item_image"
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/img/top-service-img<?php echo esc_attr($item['img_num']); ?>.jpg"
                        alt="<?php echo esc_attr($item['img_alt']); ?>"
                        class="<?php echo (wp_is_mobile() && wp_is_mobile() && wp_is_mobile()) ? 'top-service-spImg' . esc_attr($item['img_num']) : ''; ?>" />
                </div>
                <div class="top_service__item_content_wrapper">
                    <div class="top_service__item_text_content">
                        <h3 class="top_service__item_title"><?php echo esc_html($item['title']); ?></h3>
                        <p class="top_service__item_description"><?php echo esc_html($item['description']); ?></p>
                        <?php if ($item['features_html']) : ?>
                        <div class="top_service__item_features">
                            <?php echo wp_kses_post(nl2br($item['features_html'])); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <a href="<?php echo esc_url($item['button_link']); ?>" class="c-btn top_service__item_button">
                        <span class="c-btn__text"><?php echo esc_html($item['button_text']); ?></span>
                        <span class="c-btn__icon">
                            <svg width="21" height="8" viewBox="0 0 21 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.4276 4.35355C20.6229 4.15829 20.6229 3.84171 20.4276 3.64645L17.2456 0.464466C17.0503 0.269204 16.7338 0.269204 16.5385 0.464466C16.3432 0.659728 16.3432 0.976311 16.5385 1.17157L19.3669 4L16.5385 6.82843C16.3432 7.02369 16.3432 7.34027 16.5385 7.53553C16.7338 7.7308 17.0503 7.7308 17.2456 7.53553L20.4276 4.35355ZM0.0740356 4V4.5H20.074V4V3.5H0.0740356V4Z"
                                    fill="<?php echo $primary_color;  ?>" />
                            </svg>
                        </span>
                    </a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
$flow__items = [
    [
        'number'       => '1',
        'title'        => 'カウンセリング＆診断',
        'description'  => 'まずは患者様のお悩みやご希望をじっくりお伺いし、必要に応じてCTなどの精密検査を行います。骨の状態や噛み合わせを確認し、インプラントが可能かどうかを丁寧に判断。治療計画は分かりやすくご説明し、納得いただいた上で進めていきます。',
        'number_style' => 'style_1'
    ],
    [
        'number'       => '2',
        'title'        => '精密検査',
        'description'  => '衛生管理を徹底したオペ室で、歯科用CTによるシミュレーションに基づき、人工歯根を顎の骨に埋め込みます。局所麻酔を使用するため痛みは最小限。手術は短時間で終わることが多く、身体への負担も抑えられるよう配慮しています。',
        'number_style' => 'style_2'
    ],
    [
        'number'       => '3',
        'title'        => '補綴計画・装着',
        'description'  => 'インプラントと骨がしっかり結合した後、患者様の歯並びや色調に合わせた上部構造（人工歯）を製作・装着します。噛み合わせや見た目のバランスを細かく調整し、自然で美しい仕上がりを目指します。機能性と審美性の両立を大切にしています。',
        'number_style' => 'style_1'
    ],
    [
        'number'       => '4',
        'title'        => 'アフターケア＆メンテナンス',
        'description'  => 'インプラントを長く快適に使っていただくために、定期的なメンテナンスを推奨しています。専用器具でのクリーニングや噛み合わせのチェックを行い、トラブルを未然に防ぎます。私たちは治療後も患者様に寄り添い、健康をサポートします。',
        'number_style' => 'style_2'
    ]
];
?>
<section class="top_flow">
    <div class="l-container">
        <div class="top_sec__ttl">
            <div class="top_sec__ttl__bg">
                <span>FLOW</span>
            </div>
            <h3 class="top_sec__ttl__text">施術の流れ</h3>
        </div>
        <div class="top_flow__wrapper">
            <img class="top_flow__img" src="<?php bloginfo('template_url');?>/img/top-flow-img.jpg" alt="施術の流れイメージ">
            <ul class="top_flow__list">
                <?php foreach ($flow__items as $item) : ?>
                <li class="top_flow__item">
                    <div class="top_flow__item_number_container">
                        <div
                            class="top_flow__item_number top_flow__item_number_<?php echo htmlspecialchars($item['number_style']); ?>">
                            <?php echo htmlspecialchars($item['number']); ?>
                        </div>
                    </div>
                    <div class="top_flow__item_content_wrapper">
                        <h3 class="top_flow__item_title"><?php echo htmlspecialchars($item['title']); ?></h3>
                        <p class="top_flow__item_description">
                            <?php echo nl2br(htmlspecialchars($item['description'])); ?></p>
                        <?php
                    // echo '<img src="' . esc_url(get_bloginfo('template_url') . '/img/top-flow-img' . htmlspecialchars($item['number']) . '.jpg') . '" alt="' . esc_attr($item['title']) . '">';
                    ?>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="top_flow__button">
            <a href="<?php echo esc_url($item['button_link']); ?>" class="c-btn c-btn--primary">
                <span class="c-btn__text">詳しく見る</span>
                <span class="c-btn__icon" data-svg-wrapper>
                    <svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.4276 4.35355C20.6229 4.15829 20.6229 3.84171 20.4276 3.64645L17.2456 0.464466C17.0503 0.269204 16.7338 0.269204 16.5385 0.464466C16.3432 0.659728 16.3432 0.976311 16.5385 1.17157L19.3669 4L16.5385 6.82843C16.3432 7.02369 16.3432 7.34027 16.5385 7.53553C16.7338 7.7308 17.0503 7.7308 17.2456 7.53553L20.4276 4.35355ZM0.0740356 4V4.5H20.074V4V3.5H0.0740356V4Z"
                            fill="<?php echo $primary_color;  ?>" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
</section>

<section class="top_message">
    <div class="l-container">
        <div class="top_message__inner">
            <div class="top_message__left">
                <div class="top_sec__ttl u-pc">
                    <div class="top_sec__ttl__bg">
                        <span>MESSAGE</span>
                    </div>
                    <h3 class="top_sec__ttl__text">担当医挨拶</h3>
                </div>
                <div class="top_message__text">
                    <h3>一生涯、美しく健康な歯のために</h3>
                    <p>ノブデンタルクリニックはお口の健康をサポートし、綺麗な歯となれるようにサポートしております。<br />
                        一生涯にわたって健康な歯でいられることを前提に、見た目もキレイな歯であることが理想的。歯には自信を演出するような力もあるのです。<br />
                        患者様の体の健康を手助けし、人生に喜びを感じていただける。そんな歯科治療を目指して携わっていきたいと思っています。</p>
                    <h4>院長 水柿 伸郎</h4>
                </div>
            </div>
            <div class="top_message__right">
                <div class="top_sec__ttl u-sp">
                    <div class="top_sec__ttl__bg">
                        <span>MESSAGE</span>
                    </div>
                    <h3 class="top_sec__ttl__text">担当医挨拶</h3>
                </div>
                <div class="deco-img"><img src="<?php bloginfo('template_url');?>/img/top-message-name.svg"
                        alt="Noburo Mizugaki"></div>
                <img src="<?php bloginfo('template_url');?>/img/top-message-img.png" alt="担当医イメージ" />
            </div>
        </div>
    </div>
</section>

<!-- よくある質問 -->
<?php
$top_faq_items = [
    [
        'question' => 'インプラント治療は痛いですか？',
        'answer' => '局所麻酔を使用するため、手術中の痛みはほとんどありません。術後の痛みや腫れも、痛み止めや適切なケアでコントロールできます。',
        'is_open' => false,
    ],
    [
        'question' => '骨量が少なくても受けられますか？',
        'answer' => '骨量不足と診断された方も、自家骨を用いた「デンサーバー副鼻腔底挙上術」で骨造成が可能。<br />他院で断られたケースも対応実績があります。',
        'is_open' => false, 
    ],
    [
        'question' => '治療期間はどれくらいですか？',
        'answer' => '顎の骨の状態や埋め込む本数、手術方法によって異なりますが、一般的には上顎で約6ヶ月、下顎で約3ヶ月程度が目安です。骨造成が必要な場合はさらに期間が必要になることがあります。',
        'is_open' => false,
    ],
    [
        'question' => 'メンテナンスはどのように行いますか？',
        'answer' => 'インプラントを長持ちさせるためには、毎日の丁寧な歯磨きに加え、歯科医院での定期的なプロフェッショナルケアが不可欠です。通常3ヶ月～6ヶ月に一度のメンテナンスをおすすめしています。',
        'is_open' => false,
    ],
    [
        'question' => 'インプラントの寿命はどれくらいですか？',
        'answer' => '適切なセルフケアと定期的なメンテナンスを行えば、10年以上の長期にわたって機能することが多くの研究で報告されています。中には30年以上問題なく使用されているケースもあります。',
        'is_open' => false,
    ],
];
?>

<section class="top_faq">
    <div class="l-container">
        <div class="top_sec__ttl">
            <div class="top_sec__ttl__bg">
                <span>FAQ</span>
            </div>
            <h3 class="top_sec__ttl__text">よくあるご質問</h3>
        </div>
        <div class="top_faq__inner">
            <?php foreach ($top_faq_items as $index => $item) : ?>
            <?php
            $item_base_id = 'top-faq-item-' . $index;
            $header_id = $item_base_id . '-header';
            $body_id = $item_base_id . '-body';
            ?>
            <div class="top_faq__item <?php echo $item['is_open'] ? 'is-open' : ''; ?>">
                <div class="top_faq__item_header" role="button" tabindex="0" id="<?php echo esc_attr($header_id); ?>"
                    aria-controls="<?php echo esc_attr($body_id); ?>"
                    aria-expanded="<?php echo $item['is_open'] ? 'true' : 'false'; ?>">
                    <div class="top_faq__item_question">
                        <span class="top_faq__item_q_label">Q</span>
                        <p class="top_faq__item_q_text"><?php echo esc_html($item['question']); ?></p>
                    </div>
                    <div class="top_faq__item_toggle">
                        <span class="screen-reader-text"><?php echo $item['is_open'] ? '閉じる' : '開く'; ?></span>
                    </div>
                </div>
                <div class="top_faq__item_body" id="<?php echo esc_attr($body_id); ?>" role="region"
                    aria-labelledby="<?php echo esc_attr($header_id); ?>">
                    <div class="top_faq__item_answer_wrapper">
                        <div class="top_faq__item_answer_content">
                            <span class="top_faq__item_a_label">A</span>
                            <div class="top_faq__item_a_text">
                                <?php echo wp_kses_post($item['answer']); ?>
                            </div>
                        </div>
                        <div class="top_faq__item_close_button" role="button" tabindex="0" aria-label="この質問を閉じる">
                            <span class="screen-reader-text">閉じる</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="top_faq__button">
            <a href="<?php echo esc_url($item['button_link']); ?>" class="c-btn c-btn--primary">
                <span class="c-btn__text">詳しく見る</span>
                <span class="c-btn__icon" data-svg-wrapper>
                    <svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.4276 4.35355C20.6229 4.15829 20.6229 3.84171 20.4276 3.64645L17.2456 0.464466C17.0503 0.269204 16.7338 0.269204 16.5385 0.464466C16.3432 0.659728 16.3432 0.976311 16.5385 1.17157L19.3669 4L16.5385 6.82843C16.3432 7.02369 16.3432 7.34027 16.5385 7.53553C16.7338 7.7308 17.0503 7.7308 17.2456 7.53553L20.4276 4.35355ZM0.0740356 4V4.5H20.074V4V3.5H0.0740356V4Z"
                            fill="<?php echo $primary_color;  ?>" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
</section>
<!-- ブログスライダー -->
<?php
$top_blog_items = [
    [
        'image' => 'top-blog-img1.jpg', // 拡張子は .jpg や .png など実際のファイルに合わせる
        'category' => ['slug' => 'news', 'name' => 'お知らせ'],
        'title' => '歯並び改善！裏側矯正のメリットと選び方のポイント',
        'excerpt' => '装置のせいで磨きにくい口呼吸になりやすいなど、口臭の原因は様々です。',
        'url' => home_url('/blog/post-1/'), // ダミーURL
    ],
    [
        'image' => 'top-blog-img2.jpg',
        'category' => ['slug' => 'column', 'name' => 'コラム'],
        'title' => '矯正中の口臭でお悩みの方へ！効果的なケア方法とは？',
        'excerpt' => '装置のせいで磨きにくい口呼吸になりやすいなど、口臭の原因は様々です。',
        'url' => home_url('/blog/post-2/'),
    ],
    [
        'image' => 'top-blog-img3.jpg',
        'category' => ['slug' => 'column', 'name' => 'コラム'],
        'title' => 'インビザラインとガミースマイルの関係性・改善策を探る！',
        'excerpt' => '装置のせいで磨きにくい口呼吸になりやすいなど、口臭の原因は様々です。',
        'url' => home_url('/blog/post-3/'),
    ],
    [
        'image' => 'top-blog-img4.jpg',
        'category' => ['slug' => 'news', 'name' => 'お知らせ'],
        'title' => '歯を抜かない治療！最先端技術で天然歯を守る方法とは',
        'excerpt' => '装置のせいで磨きにくい口呼吸になりやすいなど、口臭の原因は様々です。',
        'url' => home_url('/blog/post-4/'),
    ],
    [
        'image' => 'top-blog-img5.jpg',
        'category' => ['slug' => 'column', 'name' => 'コラム'],
        'title' => '歯並び改善！裏側矯正のメリットと選び方のポイント紹介',
        'excerpt' => '装置のせいで磨きにくい口呼吸になりやすいなど、口臭の原因は様々です。',
        'url' => home_url('/blog/post-5/'),
    ]
];
?>

<section class="top_blog">
    <div class="top_sec__ttl">
        <div class="top_sec__ttl__bg">
            <span>COLUMN</span>
        </div>
        <h3 class="top_sec__ttl__text">コラム</h3>
    </div>
    <p class="top_blog__desc">「こんな歯医者があったらいいな」を形にし、<br />
        怖くない、また行きたくなる歯科医院を目指しています。</p>
    <div class="top_blog__inner">
        <?php if (!empty($top_blog_items)) : ?>
        <div class="top_blog__slider_wrapper">
            <div class="top_blog__slider">
                <?php foreach ($top_blog_items as $item) : ?>
                <div class="top_blog__slide_item">
                    <a href="<?php echo esc_url($item['url']); ?>" class="top_blog__item_link">
                        <div class="top_blog__item_image_wrapper">
                            <img src="<?php echo get_theme_file_uri('/img/' . esc_attr($item['image'])); ?>"
                                alt="<?php echo esc_attr($item['title']); ?> のアイキャッチ画像" class="top_blog__item_image">
                            <?php if (!empty($item['category'])) : ?>
                            <span
                                class="top_blog__item_category category-<?php echo esc_attr($item['category']['slug']); ?>"><?php echo esc_html($item['category']['name']); ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="top_blog__item_content">
                            <h3 class="top_blog__item_title"><?php echo esc_html($item['title']); ?></h3>
                            <p class="top_blog__item_excerpt"><?php echo esc_html($item['excerpt']); ?></p>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php else : ?>
        <p class="top_blog__no_posts">お知らせやコラムはまだありません。</p>
        <?php endif; ?>
    </div>
    <div class="top_blog__button">
        <a href="<?php echo esc_url($item['button_link']); ?>" class="c-btn c-btn--primary">
            <span class="c-btn__text">もっと見る</span>
            <span class="c-btn__icon" data-svg-wrapper>
                <svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20.4276 4.35355C20.6229 4.15829 20.6229 3.84171 20.4276 3.64645L17.2456 0.464466C17.0503 0.269204 16.7338 0.269204 16.5385 0.464466C16.3432 0.659728 16.3432 0.976311 16.5385 1.17157L19.3669 4L16.5385 6.82843C16.3432 7.02369 16.3432 7.34027 16.5385 7.53553C16.7338 7.7308 17.0503 7.7308 17.2456 7.53553L20.4276 4.35355ZM0.0740356 4V4.5H20.074V4V3.5H0.0740356V4Z"
                        fill="<?php echo $primary_color;  ?>" />
                </svg>
            </span>
        </a>
    </div>
</section>
<!-- map -->
<section class="top_map">
    <div class="l-container">
        <div class="top_map__inner">
            <div class="top_map__content">
                <div class="top_map__info">
                    <div class="top_map__info_header">
                        <div class="top_map__info_logo_wrapper">
                            <img src="<?php echo get_theme_file_uri('/img/logo.png'); ?>" alt="NOBU DENTAL CLINIC ロゴ"
                                class="top_map__info_logo">
                        </div>
                        <div class="top_map__info_clinic_details">
                            <h3 class="top_map__info_clinic_name">札幌ノブデンタルインプラントクリニック</h3>
                            <p class="top_map__info_address">〒062-0934 札幌市豊平区平岸4条8丁目B</p>
                            <p class="top_map__info_tel">
                                <span class="top_map__info_tel_icon">
                                    <img src="<?php echo get_theme_file_uri('/img/ico-tel.svg'); ?>" alt="tel-icon">
                                </span>
                                011-598-1181
                            </p>
                        </div>
                    </div>
                    <div class="top_map__info_hours">
                        <table class="top_map__info_hours_table">
                            <thead>
                                <tr>
                                    <th class="top_map__info_hours_th top_map__info_hours_th_label">診療時間</th>
                                    <th class="top_map__info_hours_th">月</th>
                                    <th class="top_map__info_hours_th">火</th>
                                    <th class="top_map__info_hours_th">水</th>
                                    <th class="top_map__info_hours_th">木</th>
                                    <th class="top_map__info_hours_th">金</th>
                                    <th class="top_map__info_hours_th">土</th>
                                    <th class="top_map__info_hours_th">日</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="top_map__info_hours_row">
                                    <td class="top_map__info_hours_td top_map__info_hours_td_time">9:00~12:30</td>
                                    <td class="top_map__info_hours_td"><span class="top_map__info_hours_symbol">○</span>
                                    </td>
                                    <td class="top_map__info_hours_td"><span class="top_map__info_hours_symbol">○</span>
                                    </td>
                                    <td class="top_map__info_hours_td"><span class="top_map__info_hours_symbol">○</span>
                                    </td>
                                    <td class="top_map__info_hours_td"><span class="top_map__info_hours_symbol">○</span>
                                    </td>
                                    <td class="top_map__info_hours_td"><span class="top_map__info_hours_symbol">○</span>
                                    </td>
                                    <td class="top_map__info_hours_td"><span class="top_map__info_hours_symbol">○</span>
                                    </td>
                                    <td class="top_map__info_hours_td"><span
                                            class="top_map__info_hours_symbol is_unavailable">×</span></td>
                                </tr>
                                <tr class="top_map__info_hours_row">
                                    <td class="top_map__info_hours_td top_map__info_hours_td_time">14:00~18:30</td>
                                    <td class="top_map__info_hours_td"><span class="top_map__info_hours_symbol">○</span>
                                    </td>
                                    <td class="top_map__info_hours_td"><span class="top_map__info_hours_symbol">○</span>
                                    </td>
                                    <td class="top_map__info_hours_td"><span class="top_map__info_hours_symbol">○</span>
                                    </td>
                                    <td class="top_map__info_hours_td"><span class="top_map__info_hours_symbol">○</span>
                                    </td>
                                    <td class="top_map__info_hours_td"><span class="top_map__info_hours_symbol">○</span>
                                    </td>
                                    <td class="top_map__info_hours_td"><span
                                            class="top_map__info_hours_symbol is_unavailable">×</span></td>
                                    <td class="top_map__info_hours_td"><span
                                            class="top_map__info_hours_symbol is_unavailable">×</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="top_map__info_hours_note">※日曜・祝日は休診日です。</p>
                    </div>
                </div>
                <div class="top_map__visuals">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2916.3716081549996!2d141.37220577614434!3d43.03361222113824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2a46e75bb435%3A0x1c879877a0808352!2z5pel5pys44CB44CSMDYyLTA5MzQg5YyX5rW36YGT5pyt5bmM5biC6LGK5bmz5Yy65bmz5bK477yU5p2h77yY5LiB55uu!5e0!3m2!1sja!2sca!4v1749515580247!5m2!1sja!2sca"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <img src="<?php bloginfo('template_url');?>/img/top-map-pcImg.jpg" alt="クリニックイメージ" />
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>