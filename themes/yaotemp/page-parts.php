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

        <div class="slim-contents">

            <article> 
                <div class="yao-youtube">
                    <img class="videoThumb" data-video-id="f0bNIs8xizE" src="" alt="Video Thumbnail">
                    <img class="videoThumb" data-video-id="PFls4tZ6NPE" src="" alt="Video Thumbnail">
                    <img class="videoThumb" data-video-id="UqWlu0IeXkc" src="" alt="Video Thumbnail">
                </div>

                <!--画像拡大
                画像拡大する場合は、下記のコードをfunction.phpに追記
                echo'<script src="'.get_template_directory_uri().'/js/modaal.min.js"></script>'."\n";
                ※design.jsよりも後に読み込みさせる

                echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/css/modaal.min.css">'."\n";
                -->

                <div class="yao-picture">
                    <img data-group="gallery" class="gallery" src="<?php bloginfo('template_url');?>/img/img_no.gif" alt=""/>
                    <img data-group="gallery" class="gallery" src="<?php bloginfo('template_url');?>/img/img_no.gif" alt=""/>
                    <img data-group="gallery" class="gallery" src="<?php bloginfo('template_url');?>/img/img_no.gif" alt=""/>
                </div>
            </article> 
        </div>

        </main>
        <!-- /l-main -->

    </div>
    <!-- /l-wrapper -->

<?php get_footer(); ?>