<?php get_header(); ?>
<div class="archive-events">
    <div class="pagehead-set">
        <div class="pagehead-text">
            <h1><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></h1>
            <p><?php echo esc_html(get_post_type_object(get_post_type())->name); ?></p>            
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
    
        <?php if (have_posts()) : $count = 1; ?>
            <div class="archive">
            
                <?php while (have_posts()) : the_post(); ?>
                <?php
                    if(get_the_category()){
                        $cat_meta = get_option("cat_meta_data");
                        $cat = get_the_category();
                        $cat_id   = $cat[0]->cat_ID;
                    }
                ?>

                <article class="archiveItem
                <?php if(get_option('fit_theme_articleLayout') == 'value2'): ?> archiveItem-wide<?php endif; ?>
                <?php if(get_option('fit_theme_articleLayout') == 'value3'): ?> archiveItem-wideSp<?php endif; ?>">    
                    <a href="<?php the_permalink();?>?post_id=<?php echo get_the_ID();?>">
                            <?php $ctm = get_post_meta($post->ID, 'event_end', true);?>
                            <?php if(empty($ctm)):?>
                                <?php if(has_post_thumbnail()) {the_post_thumbnail('icatch');} else {echo '<img src="'.get_template_directory_uri().'/img/img_no.gif" alt="NO IMAGE"/>';}?>
                            <?php else:?>
                            <?php
                                $today = date("Y/m/d");//今日を取得
                                $eventDay = get_field('event_end'); // イベント開催日を取得
                                if ($today < $eventDay):
                            ?>
                            <div class="eyecatch eyecatch-archive">    
                                <?php if(has_post_thumbnail()) {the_post_thumbnail('icatch');} else {echo '<img src="'.get_template_directory_uri().'/img/img_no.gif" alt="NO IMAGE"/>';}?>
                            </div>
                            <?php else: ?>
                            <div class="events-end">
                                <div class="eyecatch eyecatch-archive">    
                                    <?php if(has_post_thumbnail()) {the_post_thumbnail('icatch');} else {echo '<img src="'.get_template_directory_uri().'/img/img_no.gif" alt="NO IMAGE"/>';}?>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php endif;?>

                            <h2 class="heading heading-archive">
                                <?php the_title(); ?>
                            </h2>
      
                            <div class="event-info">
                                <?php $ctm = get_post_meta($post->ID, 'day-time', true);?>
                                <?php if(empty($ctm)):?>
                                <?php else:?>
                                <dl>
                                    <dt>開催日時</dt>
                                    <dd><?php echo post_custom('day-time');?></dd>
                                </dl>
                                <?php endif;?>

                                <?php $ctm = get_post_meta($post->ID, 'place', true);?>
                                <?php if(empty($ctm)):?>
                                <?php else:?>
                                <dl>
                                    <dt>開催場所</dt>
                                    <dd><?php echo post_custom('place');?></dd>
                                </dl>
                                <?php endif;?>
                            </div>
        
                            <div class="btn btn-right">
                                <p class="btn__link">詳しくみる</p>
                            </div>
                    </a>
                </article>                
                <?php endwhile; ?>
            </div>

        <?php else : ?>

            <div class="archive">
                <div class="archiveList">
                    <p class="archiveList__text archiveList__text-center">投稿が1件も見つかりませんでした。</p>
                </div>
            </div>
         <?php endif; ?>
    
    </div>
    <!-- /l-wrapper -->
    <div class="container">
        <?php fit_posts_pagination(); ?>
    </div>
</div>
<?php get_footer(); ?>