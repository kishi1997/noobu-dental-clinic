<?php get_header(); ?>

<div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
	<div class="container">
		<?php if(function_exists('bcn_display'))
		{
		bcn_display();
		}?>
	</div>
</div>

<div class="single-events">
	<!-- l-wrapper -->
	<div class="l-wrapper">
		
		<!-- l-main -->
		<main class="l-main">
			<div class="sub-contents">
				<ul class="dateList dateList-singleTitle">
					<time>
						<li class="dateList__item icon-calendar">公開 <?php the_time('Y.m.d'); ?></li>
						<?php if(get_the_time('Y/m/d') != get_the_modified_date('Y/m/d')):?>
						<li class="dateList__item icon-calendar">更新 <?php the_modified_date('Y.m.d') ?></li>
						<?php endif;?>
					</time>
				</ul>
				<h1 class="heading heading-singleTitle"><?php the_title(); ?></h1>
				
				<!-- スライダー -->
				<div class="slider-gallery">
					<div class="yao-slider">
						<?php $thumbnail_id = get_post_thumbnail_id($post->ID);
						$image = wp_get_attachment_image_src($thumbnail_id, 'large'); ?>
						<?php if (has_post_thumbnail()) : ?>
							<div class="slick-img">
								<?php the_post_thumbnail(''); ?>
							</div>
						<?php else : ?>
						<?php endif ; ?>

						<?php $ctm = get_post_meta($post->ID, 'gallery01', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="slick-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery01', true),'large'); ?>
						</div>
						<?php endif;?>

						<?php $ctm = get_post_meta($post->ID, 'gallery02', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="slick-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery02', true),'large'); ?>
						</div>
						<?php endif;?>
						
						<?php $ctm = get_post_meta($post->ID, 'gallery03', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="slick-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery03', true),'large'); ?>
						</div>
						<?php endif;?>

						<?php $ctm = get_post_meta($post->ID, 'gallery04', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="slick-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery04', true),'large'); ?>
						</div>
						<?php endif;?>

						<?php $ctm = get_post_meta($post->ID, 'gallery05', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="slick-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery05', true),'large'); ?>
						</div>
						<?php endif;?>
					</div>


					<div class="yao-thumbnail">
						<?php $thumbnail_id = get_post_thumbnail_id($post->ID);
						$image = wp_get_attachment_image_src($thumbnail_id, 'large'); ?>
						<?php if (has_post_thumbnail()) : ?>
						<div class="thumbnail-img">
							<?php the_post_thumbnail(''); ?>
						</div>
						<?php else : ?>
						<?php endif ; ?>

						<?php $ctm = get_post_meta($post->ID, 'gallery01', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="thumbnail-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery01', true),'large'); ?>
						</div>
						<?php endif;?>

						<?php $ctm = get_post_meta($post->ID, 'gallery02', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="thumbnail-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery02', true),'large'); ?>
						</div>
						<?php endif;?>

						<?php $ctm = get_post_meta($post->ID, 'gallery03', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="thumbnail-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery03', true),'large'); ?>
						</div>
						<?php endif;?>

						<?php $ctm = get_post_meta($post->ID, 'gallery04', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="thumbnail-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery04', true),'large'); ?>
						</div>
						<?php endif;?>

						<?php $ctm = get_post_meta($post->ID, 'gallery05', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="thumbnail-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery05', true),'large'); ?>
						</div>
						<?php endif;?>
					</div>
				</div>		
				
				<?php if ( get_option('fit_post_shareTop') != 'value2' ):?>
				<!-- 記事上シェアボタン -->
					<?php fit_share_btn(); ?>
				<!-- /記事上シェアボタン -->
				<?php endif; ?>     
					
				<?php $ctm = get_post_meta($post->ID, 'day-time', true);?>
        <?php if(empty($ctm)):?>
        <?php else:?>
      	<div class="event-info">
          <dl>
              <dt>開催日時</dt>
              <dd><?php echo post_custom('day-time');?></dd>
          </dl>
          <?php $ctm = get_post_meta($post->ID, 'place', true);?>
          <?php if(empty($ctm)):?>
          <?php else:?>
            <dl>
              <dt>開催場所</dt>
              <dd><?php echo post_custom('place');?></dd>
            </dl>
          <?php endif;?>
        </div>
       <?php endif;?>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="content">
					<?php the_content(); ?>
				</section>
				<?php endwhile; endif; ?>
				
				<?php if ( get_option('fit_post_shareBottom') != 'value2' ):?>
				<!-- 記事下シェアボタン -->
					<?php fit_share_btn(); ?>
				<!-- /記事下シェアボタン -->
				<?php endif; ?>
			</div>
		
			<?php if(!is_user_logged_in() && !is_bot()): ?>
			<!-- PVカウンター -->
			<?php set_post_views(get_the_ID()); ?>
			<!-- /PVカウンター -->
			<?php endif; ?>
			
		</main>
		<!-- /l-main -->
			
	</div>
	<!-- /l-wrapper -->

	<div class="form">
		<div class="wrap">
			<div class="title">
				<p class="en-title">RESERVATION</p>
				<h2>イベント予約</h2>
			</div>
			<?php echo do_shortcode('[mwform_formkey key="171"]'); ?>
		</div>
	</div>
</div>
	
	<div class="categoryBox<?php if(get_option('fit_skin_base') != 'value2' ):?> categoryBox-gray<?php endif; ?>">

		<div class="container">
			<h2 class="heading heading-primary">
				<span class="heading__bg u-txtShdw bgc<?php if (isset($cat_meta[$cat_id])) { echo esc_html($cat_meta[$cat_id]);} ?>">
				<?php  if (is_singular('events')):?>
					<?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span>の最新記事
				<?php else :?>	
					<?php echo $cat_name; ?></span>の最新記事
				<?php endif; ?>
			</h2>

			<ul class="categoryBox__list">
			<?php query_posts( array(
			'post_type' => 'events', //カスタム投稿名を指定
			'taxonomy' => 'events_cat',     //タクソノミー名を指定
			'posts_per_page' => 3      ///表示件数（-1で全ての記事を表示）
			)); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<li class="categoryBox__item">
					<a href="<?php the_permalink();?>?post_id=<?php echo get_the_ID();?>">
						<div class="eyecatch eyecatch-archive">
						<?php $thumbnail_id = get_post_thumbnail_id($post->ID);
						$image = wp_get_attachment_image_src($thumbnail_id, 'large'); ?>
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail(''); ?>        		
						<?php else :?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/img_no.gif" alt="NO IMAGE" width="730" height="410" >		
						<?php endif; ?>
						</div>
						<ul class="dateList dateList-archive">
							
							<li class="dateList__item icon-calendar"><?php the_time('Y.m.d'); ?></li>
						</ul>
			
						<h2 class="heading heading-archive ">
							<?php the_title(); ?>
						</h2>
					</a>
				</li>
				<?php endwhile; endif; ?>
			</ul>
		</div>
	</div>



<!-- schema -->
<script type="application/ld+json">
  {
  "@context": "http://schema.org",
  "@type": "Article ",
  "mainEntityOfPage":{
	  "@type": "WebPage",
	  "@id": "<?php the_permalink(); ?>"
  },
  "headline": "<?php echo get_the_title(); ?>",
  "image": {
	  "@type": "ImageObject",
	  <?php if(has_post_thumbnail()) : ?>"url": "<?php echo $src; ?>",
	  "height": "<?php echo $height; ?>",
	  "width": "<?php echo $width; ?>"
	  <?php else: ?>"url": "<?php echo get_template_directory_uri(); ?>/img/img_no.gif",
	  "height": "890",
	  "width": "500"
	  <?php endif; ?>
  },
  "datePublished": "<?php echo get_the_date(DATE_ISO8601); ?>",
  "dateModified": "<?php if ( get_the_date() != get_the_modified_time() ){ the_modified_date(DATE_ISO8601); } else { echo get_the_date(DATE_ISO8601); } ?>",
  "author": {
	  "@type": "Person",
	  "name": "<?php the_author_meta('display_name'); ?>"
  },
  "publisher": {
	  "@type": "Organization",
	  "name": "<?php bloginfo('name'); ?>",
	  "logo": "ImageObject"
  },
  "description": "<?php echo get_the_excerpt(); ?>"
  }
</script>
<!-- /schema -->

<?php get_footer(); ?>