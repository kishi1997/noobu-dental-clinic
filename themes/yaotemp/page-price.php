<?php get_header(); ?>
<div class="price">
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

        <section class="price_list">
            <div class="l-container">
                <div class="c-parts__sec__ttl">
                    <div class="c-parts__sec__ttl__bg">
                        <span>IMPLANT</span>
                    </div>
                    <h3 class="c-parts__sec__ttl__text">インプラント</h3>
                </div>

                <div class="price_list__item">
			        <table>
				    <tbody>
                        <tr>
					        <th>シンプラント<br />
                            <p>インプラントを適正な位置に埋入するためのシュミレーションガイド</p></th>
					        <td>55,000円(税込) <br class="u-sp">/ 1回</td>
				        </tr>
				        <tr>
					        <th>インプラント<br />
                            <p>オペ代、仮歯、型どり等インプラントの歯を入れる料金を全て含む</p></th>
					        <td>385,000円(税込) <br class="u-sp">/ 1本</td>
				        </tr>
				        <tr>
					        <th>ガイドデント保証システム</span><br />
                            <p>転居後のサポートシステムです。10年間の長期保証で全国の提携クリニックでどこでも保証が受けられます。</p></th>
					        <td>30,000円(税込)～</td>
				        </tr>
			        </tbody>
                    </table>
		        </div>
            </div>
        </section>

        <section class="price_list">
            <div class="l-container">
                <div class="c-parts__sec__ttl">
                    <h4 class="c-parts__sec__ttl__text">安心のインプラント保証</h4>
                    <p>当院では、患者様に治療後も安心していただけるよう、8年間の保証制度を設けております。<br />
                    インプラントは純チタン製ですので、折れたり欠落することはほとんどありませんが、<br class="u-pc"/>
                    万が一、埋入したインプラントに支障が生じた場合、すべて無料で再生治療を行いますのでご安心ください。</p>
                </div>

                <div class="price_list__item">
                    <h4 class="price_list__item_title">上部の歯の保証について</h4>
			        <table>
				    <tbody>
                        <tr>
					        <th>1年以内</th>
					        <td>100%当院負担で<br class="u-sp">行います</td>
				        </tr>
                        <tr>
					        <th>1〜2年以内</th>
					        <td>90%当院負担で<br class="u-sp">行います</td>
				        </tr>
                        <tr>
					        <th>2〜3年以内</th>
					        <td>70%当院負担で<br class="u-sp">行います</td>
				        </tr>
                        <tr>
					        <th>3〜4年以内</th>
					        <td>50%当院負担で<br class="u-sp">行います</td>
				        </tr>
                        <tr>
					        <th>4〜5年以内</th>
					        <td>40%当院負担で<br class="u-sp">行います</td>
				        </tr>
                        <tr>
					        <th>5〜6年以内</th>
					        <td>30%当院負担で<br class="u-sp">行います</td>
				        </tr>
                        <tr>
					        <th>6〜7年以内</th>
					        <td>20%当院負担で<br class="u-sp">行います</td>
				        </tr>
                        <tr>
					        <th>7〜8年以内</th>
					        <td>10%当院負担で<br class="u-sp">行います</td>
				        </tr>
                        <tr>
					        <th>8年目以降</th>
					        <td>100%患者様負担と<br class="u-sp">させていただきます</td>
				        </tr>
			        </tbody>
                    </table>
                    <p class="price_list__item_text">当院では、メーカーにこだわらず、患者様の口腔内を丁寧に検査した上でひとりひとりに合ったインプラント治療を行っております。<br class="u-sp">さらに、シムプラントというインプラント手術前に行う3Dコンピューターシミュレーションシステムを導入しております。顎の骨の断面画像を撮影し、その画像を見ながら治療の計画を立てますので、安全で無理のない治療を受けることができます。<br class="u-sp">長期保証サービスもございますので、安心して治療を受けられます。
                    </p>
		        </div>
            </div>
        </section>

        <section class="price_list">
            <div class="l-container">
                <div class="c-parts__sec__ttl">
                    <div class="c-parts__sec__ttl__bg">
                        <span>COSMETIC DENTISTRY</span>
                    </div>
                    <h3 class="c-parts__sec__ttl__text">審美歯科</h3>
                </div>

                <div class="price_list__item">
			        <table>
				    <tbody>
                        <tr>
					        <th>ファイバーコア</th>
					        <td>16,500円(税込) <br class="u-sp">/ 1本</td>
				        </tr>
                        <tr>
					        <th>ゴールドインレー</th>
					        <td>53,900円(税込)～</td>
				        </tr>
                        <tr>
					        <th>ゴールド冠</th>
					        <td>75,900円(税込)～</td>
				        </tr>
                        <tr>
					        <th>メタルボンド</th>
					        <td>77,000円(税込)</td>
				        </tr>
			        </tbody>
                    </table>
		        </div>
            </div>
        </section>

        <section class="price_list">
            <div class="l-container">
                <div class="c-parts__sec__ttl">
                    <div class="c-parts__sec__ttl__bg">
                        <span>CERAMIC</span>
                    </div>
                    <h3 class="c-parts__sec__ttl__text">セラミック</h3>
                </div>

                <div class="price_list__item">
			        <table>
				    <tbody>
                        <tr>
					        <th>オールセラミックス<br class="u-sp">（e.max プレスインレー）</th>
					        <td>53,900円(税込)～</td>
				        </tr>
				        <tr>
					        <th>オールセラミックス<br class="u-sp">（e.max プレスクラウン）</th>
					        <td>64,900円(税込)～</td>
				        </tr>
				        <tr>
					        <th>ラミネートベニア</th>
					        <td>99,000円(税込)</td>
				        </tr>
			        </tbody>
                    </table>
		        </div>
            </div>
        </section>

        <section class="price_list">
            <div class="l-container">
                <div class="c-parts__sec__ttl">
                    <div class="c-parts__sec__ttl__bg">
                        <span>PREVENT</span>
                    </div>
                    <h3 class="c-parts__sec__ttl__text">予防歯科</h3>
                </div>

                <div class="price_list__item">
			        <table>
				    <tbody>
                        <tr>
					        <th>歯周病菌DNA検査<br />
                            <p>（検査後約1か月で<br class="u-sp">結果が分かります）</p></th>
					        <td>5,390円(税込)</td>
				        </tr>
				        <tr>
					        <th>ブレスケア診断</th>
					        <td>5,500円(税込)</td>
				        </tr>
			        </tbody>
                    </table>
		        </div>
            </div>
        </section>

        <?php get_template_part('access-detail'); ?>

    </main>
    <!-- /l-main -->

</div>
<?php get_footer(); ?>