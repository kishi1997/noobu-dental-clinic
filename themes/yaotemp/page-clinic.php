<?php get_header(); ?>
<div class="clinic">
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
                    <div class="c-parts__about__inner">
                        <div class="c-parts__about__content">
                            <div class="c-parts__about__item">
                                <div class="c-parts__about__item__text">
                                    <img src="<?php bloginfo('template_url');?>/img/clinic-about-img1.jpg"
                                    alt="「札幌ノブデンタルインプラントクリニックについて」イメージ">
                                    <div>
                                        <h3>札幌ノブデンタルインプラントクリニックについて</h3>
                                        <p>ノブデンタルクリニックは、札幌市豊平区にあるインプラント治療専門の歯科クリニックです。最先端のCT診断機器とガイドシステムを用い、安全で的確な治療をご提供しております。従来の治療法に比べ、見た目や噛み心地の自然さ、衛生面での利点に優れたインプラント治療で、患者様の健康で快適な生活をサポートいたします。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
                $clinic_concept_items = [
                [
                    'img_src_num'            => 1,
                    'img_alt'            => 'インプラントによる治療イメージ',
                    'title' => 'インプラントによる治療',
                    'description' => 'インプラントは、失われた歯の機能と見た目を補う最先端の治療法です。顎の骨にチタン製の人工歯根を埋め込み、その上に人工歯を装着することで、天然歯に近い自然な噛み心地と美しい口元を再現します。',
                    'deco_img_alt' => '01', 
                ],
                [
                    'img_src_num'            => 2,
                    'img_alt'            => '最先端歯科用CT導入イメージ',
                    'title' => '最先端歯科用CT導入',
                    'description' => '当院では歯科用CTを用いた三次元画像診断を行い、精密な位置確認や神経の位置把握を可能にしています。術前シミュレーションから治療後の評価までを的確に行うことで、より安心・安全な治療を実現します。',
                    'deco_img_alt' => '02', 
                ],
                [
                    'img_src_num'            => 3,
                    'img_alt'            => 'シムプラント100％使用 安心の長期保証イメージ',
                    'title' => 'シムプラント100％使用<br>安心の長期保証',
                    'description' => '最先端ガイドシステム「シムプラント」を100％使用し、治療の予測精度と安全性を高めています。三次元画像と連動したガイドにより、患者様一人ひとりに最適な治療計画を提供します。',
                    'deco_img_alt' => '03', 
                ],
                [
                    'img_src_num'            => 4,
                    'img_alt'            => '最先端歯科用CT導入イメージ',
                    'title' => 'わかりやすい料金体系',
                    'description' => '治療前に費用や手順について丁寧にご説明し、納得いただいたうえで治療を進めます。明瞭な料金体系を整えており、患者様にとって不安のない診療体制を整えております。',
                    'deco_img_alt' => '04',
                ]
                ];
            ?>
            <section class="c-concept__2col">
                <div class="l-container">
                    <div class="c-parts__sec__ttl">
                        <div class="c-parts__sec__ttl__bg">
                            <span>CONCEPT</span>
                        </div>
                        <h3 class="c-parts__sec__ttl__text">当院の4つの特徴</h3>
                    </div>

                    <div class="c-concept__2col__content">
                        <?php foreach ($clinic_concept_items as $item) : ?>
                        <div class="c-concept__2col__item">
                            <h3>
                                <span><?php echo wp_kses_post($item['deco_img_alt']); ?>
                                -
                                </span>
                                <?php echo wp_kses_post($item['title']); ?>
                            </h3>
                            <div class="c-parts__circle">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/clinic-concept-img<?php echo esc_attr($item['img_src_num']); ?>.jpg"
                            alt="<?php echo esc_attr($item['img_alt']); ?>" />
                            </div>
                            <p><?php echo wp_kses_post($item['description']); ?></p>
                        </div>
                        <?php endforeach; ?>

                        <div class="clinic_about__button">
                            <a href="<?php bloginfo('url'); ?>/reason/" class="c-btn c-btn--primary">
                                <span class="c-btn__text">当院が選ばれる理由</span>
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
                </div>
            </section>
            <section class="clinic_message">
                <div class="l-container">
                    <div class="clinic_message__inner">
                        <div class="clinic_message__left">
                            <div class="c-parts__sec__ttl u-pc">
                                <div class="c-parts__sec__ttl__bg">
                                    <span>MESSAGE</span>
                                </div>
                                <h3 class="c-parts__sec__ttl__text">担当医挨拶</h3>
                            </div>
                            <div class="clinic_message__text">
                                <h3>当院が大切にすること</h3>
                                <p>インプラント治療は、単に歯を補うだけではなく、患者様の「これからの人生」を支える大切な医療行為だと私たちは考えています。
                                噛む力や見た目を取り戻すことは、健康維持はもちろん、食事や会話の楽しさ、自信ある笑顔を取り戻すことにもつながります。
                                当院では、最先端の機器と安全性の高い治療技術を駆使し、一人ひとりの患者様に合わせた丁寧なカウンセリングとオーダーメイドの治療を行っています。
                                安心して治療を受けていただけるよう、疑問や不安にも真摯に向き合い、信頼関係を大切にしています。
                                歯を失ってしまったその先の未来に、もう一度「自然な自分らしさ」を取り戻していただけるよう、全力でサポートいたします。</p>
                                <h4>院長 水柿 伸郎</h4>
                            </div>
                        </div>
                        <div class="clinic_message__right">
                            <div class="c-parts__sec__ttl u-sp">
                                <div class="c-parts__sec__ttl__bg">
                                    <span>MESSAGE</span>
                                </div>
                                <h3 class="c-parts__sec__ttl__text">担当医挨拶</h3>
                            </div>
                            <div class="deco-img">
                                <img src="<?php bloginfo('template_url');?>/img/top-message-name.svg"
                                alt="Noburo Mizugaki">
                            </div>
                            <div class="c-parts__circle">
                                <img src="<?php bloginfo('template_url');?>/img/clinic-message-img.jpg" alt="院長 水柿伸郎" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
                $clinic_history_items = [
                    [
                        'year'            => '2006年',
                        'description'     => '北海道医療大学 歯学部　卒業',
                    ],
                    [
                        'year'            => '2007年',
                        'description'     => '北海道医療大学病院　勤務',
                    ],
                    [ 
                        'year'            => '2010年',
                        'description'     => '旭川 林歯科　勤務',
                    ],
                    [
                        'year'            => '2014年',
                        'description'     => 'ノブデンタルクリニック　新規開院',
                    ],
                    [
                        'year'            => '2017年',
                        'description'     => 'ホワイトエッセンス札幌平岸　加盟',
                    ]
                ];
            ?>
            <section class="clinic_history">
                <div class="l-container">
                    <div class="c-parts__sec__ttl">
                        <div class="c-parts__sec__ttl__bg">
                            <span>HISTORY</span>
                        </div>
                        <h3 class="c-parts__sec__ttl__text">略歴</h3>
                    </div>

                    <div class="clinic_history__inner">
                        <div class="c-concept__2col__content">
                            <div class="clinic_history__table">
                                <?php foreach ($clinic_history_items as $item) : ?>             
                                <dl>
                                    <dt><?php echo wp_kses_post($item['year']); ?></dt>
                                    <dd><?php echo wp_kses_post($item['description']); ?></dd>
                                </dl>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="c-parts__map">
                <div class="l-container">
                    <div class="c-parts__map__inner">
                        <div class="c-parts__sec__ttl">
                            <div class="c-parts__sec__ttl__bg">
                                <span>CLINIC HOURS</span>
                            </div>
                            <h3 class="c-parts__sec__ttl__text">診療時間</h3>
                        </div>
                        <div class="c-parts__map__content">
                            <div class="c-parts__map__info">
                                <div class="c-parts__map__info_details">
                                    <h3 class="c-parts__map__info_clinic_name">札幌ノブデンタルインプラントクリニック</h3>
                                    <p class="c-parts__map__info_tel">
                                        <a href="tel:011-598-1181">
                                            <span class="c-parts__map__info_tel_icon">
                                                <img src="<?php echo get_theme_file_uri('/img/ico-tel.svg'); ?>" alt="tel-icon">
                                            </span>
                                            011-598-1181
                                        </a>
                                    </p>
                                </div>
                                <div class="c-parts__map__info_hours">
                                    <table class="c-parts__map__info_hours_table">
                                        <thead>
                                            <tr>
                                                <th class="c-parts__map__info_hours_th c-parts__map__info_hours_th_label">診療時間</th>
                                                <th class="c-parts__map__info_hours_th">月</th>
                                                <th class="c-parts__map__info_hours_th">火</th>
                                                <th class="c-parts__map__info_hours_th">水</th>
                                                <th class="c-parts__map__info_hours_th">木</th>
                                                <th class="c-parts__map__info_hours_th">金</th>
                                                <th class="c-parts__map__info_hours_th">土</th>
                                                <th class="c-parts__map__info_hours_th">日</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="c-parts__map__info_hours_row">
                                                <td class="c-parts__map__info_hours_td c-parts__map__info_hours_td_time">9:00~12:30</td>
                                                <td class="c-parts__map__info_hours_td"><span class="c-parts__map__info_hours_symbol">○</span>
                                                </td>
                                                <td class="c-parts__map__info_hours_td"><span class="c-parts__map__info_hours_symbol">○</span>
                                                </td>
                                                <td class="c-parts__map__info_hours_td"><span class="c-parts__map__info_hours_symbol">○</span>
                                                </td>
                                                <td class="c-parts__map__info_hours_td"><span class="c-parts__map__info_hours_symbol">○</span>
                                                </td>
                                                <td class="c-parts__map__info_hours_td"><span class="c-parts__map__info_hours_symbol">○</span>
                                                </td>
                                                <td class="c-parts__map__info_hours_td"><span class="c-parts__map__info_hours_symbol">○</span>
                                                </td>
                                                <td class="c-parts__map__info_hours_td"><span
                                                class="c-parts__map__info_hours_symbol is_unavailable">×</span></td>
                                            </tr>
                                            <tr class="c-parts__map__info_hours_row">
                                                <td class="c-parts__map__info_hours_td c-parts__map__info_hours_td_time">14:00~18:30</td>
                                                <td class="c-parts__map__info_hours_td"><span class="c-parts__map__info_hours_symbol">○</span>
                                                </td>
                                                <td class="c-parts__map__info_hours_td"><span class="c-parts__map__info_hours_symbol">○</span>
                                                </td>
                                                <td class="c-parts__map__info_hours_td"><span class="c-parts__map__info_hours_symbol">○</span>
                                                </td>
                                                <td class="c-parts__map__info_hours_td"><span class="c-parts__map__info_hours_symbol">○</span>
                                                </td>
                                                <td class="c-parts__map__info_hours_td"><span class="c-parts__map__info_hours_symbol">○</span>
                                                </td>
                                                <td class="c-parts__map__info_hours_td"><span
                                                class="c-parts__map__info_hours_symbol is_unavailable">×</span></td>
                                                <td class="c-parts__map__info_hours_td"><span
                                                class="c-parts__map__info_hours_symbol is_unavailable">×</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="c-parts__map__info_hours_note">※日曜・祝日は休診日です。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="c-parts__access">
                <div class="l-container">
                    <div class="c-parts__access__inner">
                        <div class="c-parts__sec__ttl">
                            <div class="c-parts__sec__ttl__bg">
                                <span>ACCESS INFO</span>
                            </div>
                            <h3 class="c-parts__sec__ttl__text">アクセス情報</h3>
                        </div>
                        <div class="c-parts__access__content">
                            <div class="c-parts__access__info">
                                <div class="c-parts__access__info_details">
                                    <p class="c-parts__access__info_address">〒062-0934<br />
                                        札幌市豊平区平岸4条8丁目B</p>
                                    <div class="c-parts__access__info_clinic_guide">
                                        <dl>
                                            <dt class="c-parts__access__left_line">電車でお越しの方</dt>
                                            <dd>地下鉄平岸駅から徒歩7分<br>
                                                スーパーアークス平岸店さんの隣</dd>
                                        </dl>
                                        <dl>
                                            <dt class="c-parts__access__left_line">バスでお越しの方</dt>
                                            <dd>じょうてつバス（平岸4条7丁目）<br>
                                                中央バス（平岸5の8）バス停から徒歩1分</dd>
                                        </dl>
                                        <dl>
                                            <dt class="c-parts__access__left_line">お車でお越しの方</dt>
                                            <dd>・当院前3台あり<br>
                                                当院前の駐車場が満車の場合は下記の提携駐車場をご利用ください（無料）<br><br>
                                                ※ご利用の方は受付でお知らせください。無料券をお渡しいたします。<br><br>
                                                【提携駐車場】<a href="https://times-info.net/P01-hokkaido/C105/park-detail-BUK0024891/" target="_blank">タイムズイースト平岸</a>　台数：37台</p></dd>
                                        </dl>
                                    </div>
                                    <div class="clinic_about__button">
                                        <a href="https://maps.app.goo.gl/ZBnxNKSgmCGENccM8" target="_blank" class="c-btn c-btn--primary">
                                            <span class="c-btn__text">Google Map</span>
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
                                <div class="c-parts__access__visuals">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2916.375562915476!2d141.376606!3d43.033529!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2b1bd0676353%3A0x72de589b870286e3!2z44OO44OW44OH44Oz44K_44Or44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1749699922530!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <!-- /l-main -->

</div>
<?php get_footer(); ?>