<?php get_header(); ?>
<div class="recruit">
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
                        <h3 class="c-parts__introduction__item__ttl">あなたの“笑顔”を支える<br class="u-sp">プロフェッショナルへ</h3>
                        <div>
                            <p>ノブデンタルクリニックでは、インプラントをはじめとする先進歯科医療を通じて、患者様の「食べる喜び」と「自信ある笑顔」を支えています。<br /><br />
                            私たちと一緒に、技術力とホスピタリティで地域の健康を守り、患者様に安心と感動を提供しませんか？</p>
                        </div>
                    </div>
                    <div class="c-parts__introduction__item__img">
                        <div class="c-parts__circle">
                            <img alt="「あなたの“笑顔”を支えるプロフェッショナルへ」イメージ" src="<?php bloginfo('template_url');?>/img/recruit-introduction-img1.jpg">
                            <img alt="「あなたの“笑顔”を支えるプロフェッショナルへ」イメージ" src="<?php bloginfo('template_url');?>/img/recruit-introduction-img2.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="recruit_jobs">
            <div class="l-container">
                <div class="c-parts__sec__ttl">
                    <div class="c-parts__sec__ttl__bg">
                        <span>JOBS</span>
                    </div>
                    <h3 class="c-parts__sec__ttl__text">募集要項</h3>
                </div>

                <div class="recruit_jobs__content">
                <table>
                    <tbody><tr>
                        <th>募集職種</th>
                        <td>歯科衛生士（正社員）</td>
                    </tr>
                    <tr>
                        <th>仕事内容    
                        </th>
                        <td>患者さんの問診、印象取り、口腔写真、Sc、SRP、治療アシスト、ホワイトニング、自費クリーニングの業務をしていただきます。<br />
                        ホワイトエッセンスに加盟しているため、ホワイトエッセンスが行っているホワイトニングとクリーニング、デンタルエステを行ってもらいます。<br />
                        入社1年程度は、歯科全般の知識を技術を身に着けてもらいながら、ホワイトエッセンスの技術の習得を行っていきます。</td>
                    </tr>
                    <tr>
                        <th>必要なスキルや<br class="u-sp">経験等</th>
                        <td>歯科衛生士免許</td>
                    </tr>
                    <tr>
                        <th>試用期間</th>
                        <td>3ヶ月</td>
                    </tr>
                    <tr>
                        <th>給与</th>
                        <td>230,000円〜</td>
                    </tr>
                    <tr>
                        <th>給与内訳</th>
                        <td><span class="recruit_jobs__content_label">基本給</span><br />
                        170,000円～<br /><br />
                        <span class="recruit_jobs__content_label">定額的に支払われる手当</span><br />
                        資格手当：30,000円<br />
                        職務手当：10,000円<br />
                        住宅手当：10,000円<br />
                        特別手当：10,000円<br /><br />
                        <span class="recruit_jobs__content_label">昇給制度</span><br />
                        あり<br />
                        賞与制度の有無<br />
                        あり（年2回、2ヶ月分）</td>
                    </tr>
                    <tr>
                        <th>就業時間</th>
                        <td>8時30分〜18時30分</td>
                    </tr>
                    <tr>
                        <th>休日</th>
                        <td>週休二日制<br />
                        日曜日、祝日、その他<br />
                        年末年始、院長研修日など</td>
                    </tr>
                    <tr>
                        <th>有給休暇</th>
                        <td>あり（6ヶ月経過後の年次有給休暇日数：10日）</td>
                    </tr>
                    <tr>
                        <th>待遇</th>
                        <td>雇用保険，労災保険，健康保険，厚生年金あり</td>
                    </tr>
                    <tr>
                        <th>勤務地</th>
                        <td>〒062-0934<br />北海道札幌市豊平区平岸4条8丁目8-8</td>
                    </tr>
                    <tr>
                        <th>担当者</th>
                        <td>事務長　大庭（オオバ）</td>
                    </tr>
                </tbody></table>
                </div>
            </div>
        </section> 

        <?php get_template_part('access-detail'); ?>

    </main>
    <!-- /l-main -->

</div>
<?php get_footer(); ?>