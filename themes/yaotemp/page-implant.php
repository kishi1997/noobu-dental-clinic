<?php get_header(); ?>
<div class="implant">
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
                                <img src="<?php bloginfo('template_url');?>/img/implant-about-img1.jpg"
                                    alt="「インプラントについて」イメージ">
                                <div>
                                    <h3>インプラントについて</h3>
                                    <p>インプラントとは、虫歯や歯周病、事故などで失われた歯の機能と見た目を回復させるために、顎の骨にチタン製の人工歯根を埋め込み、その上に人工歯を取り付ける治療法です。まるで自分の歯のように自然な噛み心地と見た目を再現できる、注目の先進医療です。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            $implant_feature_items = [
                [
                    'img_src_num'            => 1,
                    'img_alt'            => '「他の歯への負担がかからないピンポイント治療の効果」イメージ',
                    'title' => '他の歯への負担がかからない<br />
                                ピンポイント治療の効果',
                    'description' => 'インプラントは失った歯の部分にのみ治療を行うため、周囲の健康な歯を削ったり支えにしたりする必要がありません。<br />
                    従来のブリッジや入れ歯のように他の歯に負担をかけることなく、自然な噛み心地を実現できます。',
                    'bg_number_alt' => '01', 
                ],
                [
                    'img_src_num'            => 2,
                    'img_alt'            => '「見た目が天然の歯とほぼ変わらない安心の笑顔、明るい笑顔」イメージ',
                    'title' => '見た目が天然の歯とほぼ変わらない<br />
                                安心の笑顔、明るい笑顔',
                    'description' => 'インプラントに用いる人工歯は、セラミックなどの審美性に優れた素材を使用。<br />
                    色や形も周囲の歯と調和するように設計可能です。<br />
                    口元の見た目を気にせず、自然な笑顔で日常生活を楽しむことができます。',
                    'bg_number_alt' => '02', 
                ],
                [
                    'img_src_num'            => 3,
                    'img_alt'            => '「噛む力・若々しく健康的な口元」イメージ',
                    'title' => '噛む力・若々しく健康的な口元',
                    'description' => 'インプラントは顎の骨にしっかり固定されるため、噛む力も天然歯とほぼ同等です。<br />
                    「噛む」という行為が筋肉や骨に適度な刺激を与えることで、フェイスラインの維持や口元の若々しさにもつながります。',
                    'bg_number_alt' => '03', 
                ],
                [
                    'img_src_num'            => 4,
                    'img_alt'            => '「噛み心地・味覚・食べる喜び」イメージ',
                    'title' => '噛み心地・味覚・食べる喜び',
                    'description' => 'インプラントは、噛み心地・味覚ともに天然の歯に近く、従来の入れ歯と比較して食事のおいしさをしっかり味わえます。<br />
                    硬いものや粘着性のある食べ物も問題なく楽しめ、食べる喜びを取り戻せる治療法です。',
                    'bg_number_alt' => '04',
                ],
                [
                    'img_src_num'            => 5,
                    'img_alt'            => '「噛む力・若々しく健康的な口元」イメージ',
                    'title' => '噛む力・若々しく健康的な口元',
                    'description' => '噛む力の低下は、口周りの筋肉の衰えや顎の骨の減少に直結します。<br />
                    インプラントはこうした退行を防ぎ、しっかりとした噛み合わせを実現することで、若々しく健康的な表情を保つことに貢献します。',
                    'bg_number_alt' => '05',
                ],[
                    'img_src_num'            => 6,
                    'img_alt'            => '「顎の骨の吸収が無いのでずっと安心」イメージ',
                    'title' => '顎の骨の吸収が無いのでずっと安心',
                    'description' => '歯を失ったまま放置すると、顎の骨が痩せていく「骨吸収」が進行します。<br />
                    インプラントは顎の骨に直接埋め込むことで、噛む力を伝え続け、骨の健康を保ちます。<br />
                    将来にわたって口腔環境の安定が期待できます。<br />
                    硬いものや粘着性のある食べ物も問題なく楽しめ、食べる喜びを取り戻せる治療法です。',
                    'bg_number_alt' => '06',
                ]
            ];
        ?>
        <section class="c-feature__2col">
            <div class="l-container">
                <div class="c-parts__sec__ttl">
                    <div class="c-parts__sec__ttl__bg">
                        <span>FEATURE</span>
                    </div>
                    <h3 class="c-parts__sec__ttl__text">ストレスフリーな毎日へ<br />
                    インプラントの代表的な特徴・利点</h3>
                </div>

                <div class="c-feature__2col__content">
                    <?php foreach ($implant_feature_items as $item) : ?>
                    <div class="c-feature__2col__item">
                        <div class="c-parts__circle">
                            <img alt="<?php echo esc_attr($item['img_alt']); ?>"
                            src="<?php bloginfo('template_url');?>/img/implant-feature-img<?php echo esc_attr($item['img_src_num']); ?>.jpg" />
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

        <?php
            $implant_point_items = [
                [
                    'img_src_num'            => 1,
                    'img_alt'            => '「最先端の歯科用CTとガイドシステム」イメージ',
                    'title' => '最先端の歯科用CTとガイドシステム',
                    'description' => '当院では、シムプラントと呼ばれるガイドシステムと、歯科用CTを導入しています。<br />
                    三次元の高精度な診断画像により、安全かつ正確なインプラント埋入を実現します。',
                    'point_number_alt' => '01', 
                ],
                [
                    'img_src_num'            => 2,
                    'img_alt'            => '「CT(Computed Tomography)とは」イメージ',
                    'title' => 'CT(Computed Tomography)とは',
                    'description' => 'CTは従来のレントゲンとは異なり、撮影部位を三次元で立体的に把握できます。<br />
                    神経や血管の位置、骨の厚みや形状を正確に確認でき、インプラント治療におけるリスクを大幅に軽減できます。',
                    'point_number_alt' => '02', 
                ],
                [
                    'img_src_num'            => 3,
                    'img_alt'            => '「手術をシミュレートできる」イメージ',
                    'title' => '手術をシミュレートできる',
                    'description' => 'シムプラントではCT画像から得られたデータをもとに、インプラント埋入の位置・角度・深さを事前にシミュレーション可能です。<br />
                    患者様も視覚的に治療計画を理解できるため、安心して治療に臨めます。',
                    'point_number_alt' => '03', 
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
                    <?php foreach ($implant_point_items as $item) : ?>
                    <div class="c-point__2col__item">
                        <div class="c-parts__circle">
                            <img alt="<?php echo esc_attr($item['img_alt']); ?>"
                            src="<?php bloginfo('template_url');?>/img/implant-point-img<?php echo esc_attr($item['img_src_num']); ?>.jpg" />
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

        <?php
            $implant_concept_items = [
                [
                    'img_src_num'            => 1,
                    'img_alt'            => 'ジンマー社製インプラント',
                    'title' => 'ジンマー社製インプラント',
                    'description' => '世界中の大学病院でも採用されているジンマーデンタル社製インプラントを使用。<br />
                    HAコーティングによる高い骨結合力と信頼性で、長期的な安定性を実現しています。',
                    'deco_img_alt' => '01', 
                ],
                [
                    'img_src_num'            => 2,
                    'img_alt'            => 'オステム製インプラント',
                    'title' => 'オステム製インプラント',
                    'description' => 'アジア人の骨格に合わせて設計されたオステム製インプラントは、ISO9001・CEマーク認証を取得した高品質な製品です。<br />
                    高い安全性と審美性を兼ね備えています。',
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
                    <h3 class="c-parts__sec__ttl__text">当院で使用するインプラントの種類</h3>
                </div>

                <div class="c-concept__2col__content">
                    <?php foreach ($implant_concept_items as $item) : ?>
                    <div class="c-concept__2col__item">
                        <h3>
                            <span><?php echo wp_kses_post($item['deco_img_alt']); ?>
                                -
                            </span>
                            <?php echo wp_kses_post($item['title']); ?>
                        </h3>
                        <div class="c-parts__circle">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/implant-concept-img<?php echo esc_attr($item['img_src_num']); ?>.jpg"
                                alt="<?php echo esc_attr($item['img_alt']); ?>" />
                        </div>
                        <p><?php echo wp_kses_post($item['description']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="implant_hosho">
            <div class="l-container">
                <div class="implant_hosho__content">
                    <div class="implant_hosho__image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/implant-hosho-img.jpg" alt="「安心の10年保証」イメージ">
                    </div>
                    <div class="implant_hosho__text">
                        <h3>安心の10年保証</h3>
                        <p>当院ではインプラント治療に10年の長期保証を設けています。<br />
                        治療後も安心してお過ごしいただけるよう、継続的なメンテナンス体制を整えています。</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="c-parts__map">
            <div class="l-container">
                <div class="c-parts__map__inner">
                    <div class="c-parts__map__content">
                        <div class="c-parts__map__info">
                            <div class="c-parts__map__info_details">
                                <div class="c-parts__sec__ttl">
                                    <div class="c-parts__sec__ttl__bg">
                                        <span>CLINIC HOURS</span>
                                    </div>
                                    <h3 class="c-parts__sec__ttl__text">診療時間</h3>
                                </div>
                                <div>
                                    <h3 class="c-parts__map__info_clinic_name">札幌ノブデンタルインプラントクリニック</h3>
                                    <p class="c-parts__map__info_tel">
                                        <a href="tel:011-598-1181">
                                            <span class="c-parts__map__info_tel_icon">
                                                <img src="<?php echo get_theme_file_uri('/img/ico-tel.svg'); ?>"
                                                    alt="tel-icon">
                                            </span>
                                            011-598-1181
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="c-parts__map__info_hours">
                                <table class="c-parts__map__info_hours_table">
                                    <thead>
                                        <tr>
                                            <th class="c-parts__map__info_hours_th c-parts__map__info_hours_th_label">
                                                診療時間</th>
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
                                            <td class="c-parts__map__info_hours_td c-parts__map__info_hours_td_time">
                                                9:00~12:30</td>
                                            <td class="c-parts__map__info_hours_td"><span
                                                    class="c-parts__map__info_hours_symbol">○</span>
                                            </td>
                                            <td class="c-parts__map__info_hours_td"><span
                                                    class="c-parts__map__info_hours_symbol">○</span>
                                            </td>
                                            <td class="c-parts__map__info_hours_td"><span
                                                    class="c-parts__map__info_hours_symbol">○</span>
                                            </td>
                                            <td class="c-parts__map__info_hours_td"><span
                                                    class="c-parts__map__info_hours_symbol">○</span>
                                            </td>
                                            <td class="c-parts__map__info_hours_td"><span
                                                    class="c-parts__map__info_hours_symbol">○</span>
                                            </td>
                                            <td class="c-parts__map__info_hours_td"><span
                                                    class="c-parts__map__info_hours_symbol">○</span>
                                            </td>
                                            <td class="c-parts__map__info_hours_td"><span
                                                    class="c-parts__map__info_hours_symbol is_unavailable">×</span></td>
                                        </tr>
                                        <tr class="c-parts__map__info_hours_row">
                                            <td class="c-parts__map__info_hours_td c-parts__map__info_hours_td_time">
                                                14:00~18:30</td>
                                            <td class="c-parts__map__info_hours_td"><span
                                                    class="c-parts__map__info_hours_symbol">○</span>
                                            </td>
                                            <td class="c-parts__map__info_hours_td"><span
                                                    class="c-parts__map__info_hours_symbol">○</span>
                                            </td>
                                            <td class="c-parts__map__info_hours_td"><span
                                                    class="c-parts__map__info_hours_symbol">○</span>
                                            </td>
                                            <td class="c-parts__map__info_hours_td"><span
                                                    class="c-parts__map__info_hours_symbol">○</span>
                                            </td>
                                            <td class="c-parts__map__info_hours_td"><span
                                                    class="c-parts__map__info_hours_symbol">○</span>
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
                                            【提携駐車場】<a
                                                href="https://times-info.net/P01-hokkaido/C105/park-detail-BUK0024891/"
                                                target="_blank">タイムズイースト平岸</a>　台数：37台</p>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="clinic_about__button">
                                    <a href="https://maps.app.goo.gl/ZBnxNKSgmCGENccM8" target="_blank"
                                        class="c-btn c-btn--primary">
                                        <span class="c-btn__text">Google Map</span>
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
                            <div class="c-parts__access__visuals">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2916.375562915476!2d141.376606!3d43.033529!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2b1bd0676353%3A0x72de589b870286e3!2z44OO44OW44OH44Oz44K_44Or44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1749699922530!5m2!1sja!2sjp"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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