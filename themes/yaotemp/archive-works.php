<?php get_header(); ?>

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

<div class="archive-works">
    <!-- l-wrapper -->
    <div class="l-wrapper">
    
        <?php if (have_posts()) : $count = 1; ?>
            
            <div class="archive">
            
                <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink() ?>">
                    <article class="archiveItem
                    <?php if(get_option('fit_theme_articleLayout') == 'value2'): ?> archiveItem-wide<?php endif; ?>
                    <?php if(get_option('fit_theme_articleLayout') == 'value3'): ?> archiveItem-wideSp<?php endif; ?>">    
                        <div class="eyecatch eyecatch-archive">    
                        <?php if(has_post_thumbnail()) {the_post_thumbnail('icatch');} else {echo '<img src="'.get_template_directory_uri().'/img/img_no.gif" alt="NO IMAGE"/>';}?>
                        </div>
                        

                        <ul class="dateList dateList-archive">
                            <li class="name">
                                <?php echo get_field( 'area-name' ); ?>
                            </li>
                            <li>
                                <time><?php the_time('Y.m.d'); ?></time>
                            </li>                                 
                        </ul> 
                        

                        <h2 class="heading heading-archive">
                            <?php the_title(); ?>
                        </h2>

                        <ul class="category">
                            <?php $terms = get_the_terms($post->ID, 'works_cat'); ?>
                            <?php if($terms): ?>
                                <?php foreach($terms as $term): ?>
                                    <?php echo '<li>'.$term->name.'</li>'; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>

                        <p class="archiveItem__text">
                            <?php
                            if(mb_strlen(get_the_excerpt(), 'UTF-8')>40){
                                $excerpt= mb_substr(get_the_excerpt(), 0, 40);
                                echo $excerpt.'…';
                            }else{
                            echo get_the_excerpt();
                            }
                            ?>
                        </p>

                        <div class="btn btn-right">
                            <p class="btn__link" href="<?php the_permalink(); ?>">詳しくみる</p>
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