<?php/*Template Name: スタッフ詳細*/?>

<?php get_header(); ?>
<div class="page-staff_detail">
    

    <!-- l-wrapper -->
    <div class="l-wrapper">

        <!-- l-main -->
        <main class="l-main<?php if ( get_option('fit_theme_pageLayout') == 'value2' ):?> l-main-single
        <?php if ( get_option('fit_theme_singleWidth') == 'value2' ):?> l-main-w740<?php endif; ?>
        <?php if ( get_option('fit_theme_singleWidth') == 'value3' ):?> l-main-w900<?php endif; ?>
        <?php if ( get_option('fit_theme_singleWidth') == 'value4' ):?> l-main-w100<?php endif; ?>
        <?php endif; ?>">

            <div class="slim-contents">
                <!-- スタッフ写真横長 -->
                <div class="staff-top">
                    <img src="<?php bloginfo('template_url');?>/img/staff-test.jpg" alt="スタッフの名前">
                    <div class="name">
                        <?php $ctm = get_post_meta($post->ID, 'position', true);?>
                        <?php if(empty($ctm)):?>
                        <?php else:?>
                        <p class="position"><?php echo post_custom('position');?></p>
                        <?php endif;?>
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="profile">
                    <?php $ctm = get_post_meta($post->ID, 'from', true);?>
                    <?php if(empty($ctm)):?>
                    <?php else:?>
                    <dl>
                        <dt>出身地</dt>
                        <dd><?php echo post_custom('from');?></dd>
                    </dl>
                    <?php endif;?>
                    
                    <?php $ctm = get_post_meta($post->ID, 'qualification', true);?>
                    <?php if(empty($ctm)):?>
                    <?php else:?>
                    <dl>
                        <dt>保有資格</dt>
                        <dd><?php echo post_custom('qualification');?></dd>
                    </dl>
                    <?php endif;?>

                    <?php $ctm = get_post_meta($post->ID, 'hobby', true);?>
                    <?php if(empty($ctm)):?>
                    <?php else:?>
                    <dl>
                        <dt>趣味</dt>
                        <dd><?php echo post_custom('hobby');?></dd>
                    </dl>
                    <?php endif;?>

                    <?php $ctm = get_post_meta($post->ID, 'motto', true);?>
                    <?php if(empty($ctm)):?>
                    <?php else:?>
                    <dl>
                        <dt>座右の銘</dt>
                        <dd><?php echo post_custom('motto');?></dd>
                    </dl>
                    <?php endif;?>
                </div>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <section class="content">
                    <?php the_content(); ?>
                </section>
                <?php endwhile; endif; ?>
                <!-- スタッフ写真横長ここまで -->

                <!-- スタッフ写真縦長 -->
                <div class="flex">
                    <div class="staff-top">
                        <img src="<?php bloginfo('template_url');?>/img/staff-test02.jpg" alt="スタッフの名前">
                        <div class="name">
                            <?php $ctm = get_post_meta($post->ID, 'position', true);?>
                            <?php if(empty($ctm)):?>
                            <?php else:?>
                            <p class="position"><?php echo post_custom('position');?></p>
                            <?php endif;?>
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                    <div class="profile">
                        <?php $ctm = get_post_meta($post->ID, 'from', true);?>
                        <?php if(empty($ctm)):?>
                        <?php else:?>
                        <dl>
                            <dt>出身地</dt>
                            <dd><?php echo post_custom('from');?></dd>
                        </dl>
                        <?php endif;?>
                        
                        <?php $ctm = get_post_meta($post->ID, 'qualification', true);?>
                        <?php if(empty($ctm)):?>
                        <?php else:?>
                        <dl>
                            <dt>保有資格</dt>
                            <dd><?php echo post_custom('qualification');?></dd>
                        </dl>
                        <?php endif;?>

                        <?php $ctm = get_post_meta($post->ID, 'hobby', true);?>
                        <?php if(empty($ctm)):?>
                        <?php else:?>
                        <dl>
                            <dt>趣味</dt>
                            <dd><?php echo post_custom('hobby');?></dd>
                        </dl>
                        <?php endif;?>

                        <?php $ctm = get_post_meta($post->ID, 'motto', true);?>
                        <?php if(empty($ctm)):?>
                        <?php else:?>
                        <dl>
                            <dt>座右の銘</dt>
                            <dd><?php echo post_custom('motto');?></dd>
                        </dl>
                        <?php endif;?>
                    </div>
                </div>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <section class="content">
                    <?php the_content(); ?>
                </section>
                <?php endwhile; endif; ?>

                <!-- スタッフ写真横長ここまで -->

                <div class="more-btn">
                    <a href="<?php bloginfo('url'); ?>/staff/">スタッフ一覧を見る</a>
                </div>             
            </div>
        </main>
        <!-- /l-main -->
    </div>
    <!-- /l-wrapper -->
    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="container">
        <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
        </div>
    </div>

<?php get_footer(); ?>