<?php get_header(); ?>

    <div class="pagehead-set">
        <div class="pagehead-text">
            <?php
                // カテゴリーのデータを取得
                $cat = get_the_category();
                $cat = $cat[0];
                $category_slug = get_query_var('category_name');
            ?>
            
            <h1><?php single_cat_title(); ?></h1>
            <p><?php echo $category_slug; ?></p>
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
                    <div class="eyecatch eyecatch-archive">    
                        <a href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail()) {the_post_thumbnail('icatch');} else {echo '<img src="'.get_template_directory_uri().'/img/img_no.gif" alt="NO IMAGE"/>';}?></a>
                    </div>
  
                    <ul class="dateList dateList-archive">
                        <li>
                            <p class="category-name"><?php single_cat_title(); ?></p>
                        </li>
                        <time>
                            <li class="dateList__item icon-calendar"><?php the_time('Y.m.d'); ?></li>                                
                        </time>
                    </ul>    

                    <h2 class="heading heading-archive">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <p class="archiveItem__text">
                        <?php echo get_the_excerpt(); ?>
                    </p>
    
                    <div class="btn btn-right">
                        <a class="btn__link" href="<?php the_permalink(); ?>">詳しくみる</a>
                    </div>
    
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
<?php get_footer(); ?>