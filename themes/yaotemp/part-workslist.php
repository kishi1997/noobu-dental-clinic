        <!-- //////////　イベント読み込み ////////// -->
        <div class="archive">
                    
                <?php query_posts( 
                    array(
                        'post_type' => 'works', //カスタム投稿名
                        //'taxonomy' => 'area',
                        //'term' => 'aomori',
                        'posts_per_page' => 3 //表示件数( -1 = 全件 )
                    )); 
                ?>
                <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                    
                <article class="archiveItem
                <?php if(get_option('fit_theme_articleLayout') == 'value2'): ?> archiveItem-wide<?php endif; ?>
                <?php if(get_option('fit_theme_articleLayout') == 'value3'): ?> archiveItem-wideSp<?php endif; ?>">    
                        
                    <div class="eyecatch eyecatch-archive">    
                        <a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()) {the_post_thumbnail('icatch');} else {echo '<img src="'.get_template_directory_uri().'/img/img_no.gif" alt="NO IMAGE"/>';}?></a>
                    </div>

                    <ul class="dateList dateList-archive">
                        <li>
                            <p class="category-name">
                            <?php
                                $terms = get_the_terms($post->ID, 'works_cat');
                                if(!empty($terms)) {
                                    foreach($terms as $term):
                                    echo $term->name;
                                    endforeach;
                                } else {
                                    echo '未分類';
                                }
                            ?>
                            </p>
                        </li>
                        <li>
                            <?php echo get_field( 'area-name' ); ?>
                        </li> 
                    </ul>
                    
                    <div class="dateList__item icon-calendar">
                        <time><?php the_time('Y.m.d'); ?></time>
                    </div>

                    <h3 class="heading heading-archive">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>

                    <div class="btn btn-right">
                        <a class="btn__link" href="<?php the_permalink(); ?>">詳しくみる</a>
                    </div>    
                </article>
                <?php endwhile; else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <!-- //////////　施工事例読み込みここまで ////////// -->