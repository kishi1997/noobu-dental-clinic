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
                <div class="c-parts__about__inner">
                    <div class="c-parts__about__content">
                        <div class="c-parts__about__item">
                            <div class="c-parts__about__item__text">
                                <img src="<?php bloginfo('template_url');?>/img/dentistry-about-img1.jpg"
                                    alt="「審美歯科とは」イメージ">
                                <div>
                                    <h3>審美歯科とは</h3>
                                    <p>審美歯科とは、虫歯や歯周病といった疾患の治療を主目的とする一般歯科とは異なり、「美しさ」に重点を置いた総合的な歯科医療です。
                                    白く整った歯並びや歯肉とのバランス、自然な色調など、機能と美しさの両立を目指し、口元から健康で美しい笑顔をつくることを目的としています。
                                    </p>
                                </div>
                            </div>
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