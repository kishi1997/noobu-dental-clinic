<?php get_header(); ?>
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

    <!-- l-wrapper -->
    <div class="l-wrapper">

        <!-- l-main -->
        <main class="l-main<?php if ( get_option('fit_theme_pageLayout') == 'value2' ):?> l-main-single
        <?php if ( get_option('fit_theme_singleWidth') == 'value2' ):?> l-main-w740<?php endif; ?>
        <?php if ( get_option('fit_theme_singleWidth') == 'value3' ):?> l-main-w900<?php endif; ?>
        <?php if ( get_option('fit_theme_singleWidth') == 'value4' ):?> l-main-w100<?php endif; ?>
        <?php endif; ?>">

            <div class="sub-contents">

                <article id="Company-table">
                    <div class="heading-set">
                        <h2>企業情報</h2>
                        <p>Company info</p>
                    </div>                   
                    <dl>
                        <dt>社名</dt>
                        <dd>〇〇株式会社</dd>
                    </dl>
                    <dl>
                        <dt>代表者</dt>
                        <dd>名前　名前</dd>
                    </dl>
                    <dl>
                        <dt>住所</dt>
                        <dd>〒000-0000<br>住所がはいります</dd>
                    </dl>
                    <dl>
                        <dt>事業内容</dt>
                        <dd>事業内容が入ります</dd>
                    </dl>
                    <dl>
                        <dt>資本金</dt>
                        <dd>0000000円</dd>
                    </dl>
                    <dl>
                        <dt>従業員数</dt>
                        <dd>人</dd>
                    </dl>
                </article> 

                <article id="Company-accses">
                    <div class="heading-set">
                        <h2>アクセス情報</h2>
                        <p>Access info</p>
                    </div>    
                    <div class="company-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.192903179718!2d135.4925906752169!3d34.67508058458795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e704fb4fbad3%3A0x4325595a5c98505!2z44CSNTUwLTAwMTQg5aSn6Ziq5bqc5aSn6Ziq5biC6KW_5Yy65YyX5aCA5rGf77yR5LiB55uu77yR77yZ4oiS77yRIOWFq-WFieW_g-aWjuapiyBBaXIgQmxkZy4!5e0!3m2!1sja!2sjp!4v1718759883911!5m2!1sja!2sjp" width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="company-accessinfo">
                        <table>
                            <tr>
                                <th>本店住所</th>
                                <td>〒000-0000<br>住所がはいります</td>
                            </tr>
                            <tr>
                                <th>お問い合わせ</th>
                                <td>TEL 000-0000-0000　FAX 000-0000-0000</td>
                            </tr>
                        </table>
                    </div>
                    <div class="company-mapinfo">
                        <dl>
                            <dt>電車でお越しの方</dt>
                            <dd>〇〇メトロ〇〇線〇〇駅から徒歩◯分</dd>
                        </dl>
                        <dl>
                            <dt>お車でお越しの方</dt>
                            <dd>〇〇から〇〇へ向かって〇〇方向へ◯分 〇〇が目印です</dd>
                        </dl>
                    </div>
                </article>

                <article id="Company-history">
                    <div class="heading-set">
                        <h2>沿革</h2>
                        <p>History</p>
                    </div> 
                    <div class="company-historylist">
                        <dl>
                            <dt>0000年</dt>
                            <dd>
                                <p>
                                    <strong>00月</strong>
                                    <span>沿革内容が入ります沿革内容が入ります沿革内容が入ります沿革内容が入ります</span>
                                </p>
                                <p>
                                    <strong>00月</strong>
                                    <span>沿革内容が入ります沿革内容が入ります沿革内容が入ります沿革内容が入ります</span>
                                </p>
                            </dd>
                        </dl>
                        <dl>
                            <dt>0000年</dt>
                            <dd>
                                <p>
                                    <strong>00月</strong>
                                    <span>沿革内容が入ります沿革内容が入ります沿革内容が入ります沿革内容が入ります</span>
                                </p>
                                <p>
                                    <strong>00月</strong>
                                    <span>沿革内容が入ります沿革内容が入ります沿革内容が入ります沿革内容が入ります</span>
                                </p>
                            </dd>
                        </dl>
                    </div>
                </article>
            </div>

        </main>
        <!-- /l-main -->

    </div>
    <!-- /l-wrapper -->

<?php get_footer(); ?>