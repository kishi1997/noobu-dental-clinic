            <!-- //////////　通常記事読み込み ////////// -->
            <div class="archive">
                
                <?php $posts = get_posts('numberposts=6&cat=1');
                foreach($posts as $post): ?>
                    
                <article class="archiveItem
                <?php if(get_option('fit_theme_articleLayout') == 'value2'): ?> archiveItem-wide<?php endif; ?>
                <?php if(get_option('fit_theme_articleLayout') == 'value3'): ?> archiveItem-wideSp<?php endif; ?>">    
                        
                    <div class="eyecatch eyecatch-archive">    
                        <a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()) {the_post_thumbnail('icatch');} else {echo '<img src="'.get_template_directory_uri().'/img/img_no.gif" alt="NO IMAGE"/>';}?></a>
                    </div>

                    <ul class="dateList dateList-archive">
                        <li>
                            <p class="category-name">
                                <?php // カテゴリーのデータを取得
                                    $cat = get_the_category();
                                    $cat = $cat[0];
                                ?>
                                <?php echo $cat->cat_name; ?>
                            </p>
                        </li>
                        <time>
                            <li class="dateList__item icon-calendar"><?php the_time('Y.m.d'); ?></li>                                
                        </time>
                    </ul>    

                    <h3 class="heading heading-archive">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>

                    <div class="btn btn-right">
                        <a class="btn__link" href="<?php the_permalink(); ?>">詳しくみる</a>
                    </div>    
                </article>
                <?php endforeach ?>
            </div>
            <!-- //////////　通常記事読み込みここまで ////////// -->