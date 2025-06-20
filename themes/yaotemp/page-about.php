<?php get_header(); ?>
<div class="about">
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

        <section class="about_overview">
            <div class="l-container">

                <div class="about_overview__content">
                    <div class="about_overview__item">           
                        <dl>
                            <dt>医院名</dt>
                            <dd>札幌ノブデンタルクリニック</dd>
                        </dl>
                        <dl>
                            <dt>院長</dt>
                            <dd>水柿　伸郎</dd>
                        </dl>
                        <dl>
                            <dt>電話番号</dt>
                            <dd>011-598-1181</dd>
                        </dl>
                        <dl>
                            <dt>住所</dt>
                            <dd>〒062-0934　<br class="u-sp">札幌市豊平区平岸4条8丁目8</dd>
                        </dl>
                        <dl>
                            <dt>診療時間</dt>
                            <dd>9:00〜12:30　/　14:00〜18:30</dd>
                        </dl>
                        <dl>
                            <dt>休診日</dt>
                            <dd>日曜・祝日</dd>
                        </dl>
                    </div>

                    <div class="about_overview__access">
                        <div class="about_overview__access_map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2916.3759434503822!2d141.37402807555657!3d43.03352099229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2b1bd0676353%3A0x72de589b870286e3!2z44OO44OW44OH44Oz44K_44Or44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1750446792778!5m2!1sja!2sjp" width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="about_overview__access_info">
                            <dl>
                                <dt>電車でお越しの方</dt>
                                <dd>地下鉄平岸駅から徒歩7分 / <br class="u-sp">スーパーアークス平岸店さんの隣</dd>
                            </dl>
                            <dl>
                                <dt>バスでお越しの方</dt>
                                <dd>じょうてつバス（平岸4条7丁目）/ <br class="u-sp">中央バス（平岸5の8）<br>
                                バス停から徒歩1分</dd>
                            </dl>
                            <dl>
                                <dt>お車でお越しの方</dt>
                                <dd>当院前3台あり<br>
                                当院前の駐車場が満車の場合は下記の提携駐車場をご利用ください（無料）<br>
                                ※ご利用の方は受付でお知らせください。無料券をお渡しいたします。<br><br>
                                【提携駐車場】<br>
                                <a href="https://times-info.net/P01-hokkaido/C105/park-detail-BUK0024891/" target="_blank">タイムズイースト平岸</a><br>
                                台数：37台<br>
                                住所：北海道札幌市豊平区平岸5条8丁目2</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </section> 

        <?php get_template_part('access-detail'); ?>

    </main>
    <!-- /l-main -->

</div>
<?php get_footer(); ?>