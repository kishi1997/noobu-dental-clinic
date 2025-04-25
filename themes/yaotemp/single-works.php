<?php get_header(); ?>

<div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
	<div class="container">
		<?php if(function_exists('bcn_display'))
		{
		bcn_display();
		}?>
	</div>
</div>

<div class="single-works">
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
				
				<ul class="s-category-list">
					<?php $terms = get_the_terms($post->ID, 'works_cat'); ?>
					<?php if($terms): ?>
						<?php foreach($terms as $term): ?>
							<?php echo '<li class="dateList__item cate">'.$term->name.'</li>'; ?>
						<?php endforeach; ?>
					<?php endif; ?>
						
					<?php if(has_tag() == true) : ?><li class="dateList__item icon-tag"><?php the_tags(''); ?></li><?php endif; ?>
				</ul>
				
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

						<?php $ctm = get_post_meta($post->ID, 'gallery06', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="slick-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery06', true),'large'); ?>
						</div>
						<?php endif;?>

						<?php $ctm = get_post_meta($post->ID, 'gallery07', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="slick-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery07', true),'large'); ?>
						</div>
						<?php endif;?>

						<?php $ctm = get_post_meta($post->ID, 'gallery08', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="slick-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery08', true),'large'); ?>
						</div>
						<?php endif;?>

						<?php $ctm = get_post_meta($post->ID, 'gallery09', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="slick-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery09', true),'large'); ?>
						</div>
						<?php endif;?>
						<?php $ctm = get_post_meta($post->ID, 'gallery10', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="slick-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery10', true),'large'); ?>
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

						<?php $ctm = get_post_meta($post->ID, 'gallery06', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="thumbnail-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery06', true),'large'); ?>
						</div>
						<?php endif;?>

						<?php $ctm = get_post_meta($post->ID, 'gallery07', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="thumbnail-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery07', true),'large'); ?>
						</div>
						<?php endif;?>

						<?php $ctm = get_post_meta($post->ID, 'gallery08', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="thumbnail-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery08', true),'large'); ?>
						</div>
						<?php endif;?>

						<?php $ctm = get_post_meta($post->ID, 'gallery09', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="thumbnail-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery09', true),'large'); ?>
						</div>
						<?php endif;?>

						<?php $ctm = get_post_meta($post->ID, 'gallery10', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<div class="thumbnail-img">
							<?php echo wp_get_attachment_image(get_post_meta($post->ID, 'gallery10', true),'large'); ?>
						</div>
						<?php endif;?>
					</div>
					</div>		
				
				<?php if ( get_option('fit_post_shareTop') != 'value2' ):?>
				<!-- 記事上シェアボタン -->
					<?php fit_share_btn(); ?>
				<!-- /記事上シェアボタン -->
				<?php endif; ?>     
					
				<div class="info">
					<h3>
						<?php $ctm = get_post_meta($post->ID, 'name', true);?>
						<?php if(empty($ctm)):?>
						<?php else:?>
						<?php echo post_custom('name');?>
						<?php endif;?>
					</h3>
					
					<?php $ctm = get_post_meta($post->ID, 'details', true);?>
					<?php if(empty($ctm)):?>
					<?php else:?>
					<dl>
						<dt>施工内容</dt>
						<dd><?php echo post_custom('details');?></dd>
					</dl>
					<?php endif;?>

					<?php $ctm = get_post_meta($post->ID, 'material', true);?>
					<?php if(empty($ctm)):?>
					<?php else:?>
					<dl>
						<dt>使用材料</dt>
						<dd><?php echo post_custom('material');?></dd>
					</dl>
					<?php endif;?>

					<?php $ctm = get_post_meta($post->ID, 'years', true);?>
					<?php if(empty($ctm)):?>
					<?php else:?>
					<dl>
						<dt>築年数</dt>
						<dd><?php echo post_custom('years');?></dd>
					</dl>
					<?php endif;?>

					<?php $ctm = get_post_meta($post->ID, 'period', true);?>
					<?php if(empty($ctm)):?>
					<?php else:?>
					<dl>
						<dt>施工期間</dt>
						<dd><?php echo post_custom('period');?></dd>
					</dl>
					<?php endif;?>

					<?php $ctm = get_post_meta($post->ID, 'security', true);?>
					<?php if(empty($ctm)):?>
					<?php else:?>
					<dl>
						<dt>保証年数</dt>
						<dd><?php echo post_custom('security');?></dd>
					</dl>
					<?php endif;?>
				</div>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="content">
					<?php the_content(); ?>
				</section>
				<?php endwhile; endif; ?>
				
				<?php $ctm = get_post_meta($post->ID, 'comment', true);?>
				<?php if(empty($ctm)):?>
				<?php else:?>
				<div class="voice-content">
					<div class="title">
						<h2>お客様の声</h2>
						<p class="en-title">Voice</p>
					</div>

					<div class="wrap">
						<div class="text-box">
							<p class="name"><?php echo post_custom('name');?></p>
							<p class="text"><?php echo post_custom('comment');?></p>
						</div>

						<div class="pic">
							<img src="<?php the_field('voice-pic'); ?>" >
						</div>
					</div>
				</div>
				<?php endif;?>
				
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
</div>
	
	<div class="categoryBox<?php if(get_option('fit_skin_base') != 'value2' ):?> categoryBox-gray<?php endif; ?>">

		<div class="container">
			<h2 class="heading heading-primary">
				<span class="heading__bg u-txtShdw bgc<?php if (isset($cat_meta[$cat_id])) { echo esc_html($cat_meta[$cat_id]);} ?>">
				<?php  if (is_singular('works')):?>
					<?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span>の最新記事
				<?php else :?>	
					<?php echo $cat_name; ?></span>の最新記事
				<?php endif; ?>
			</h2>

			<ul class="categoryBox__list">
			<?php query_posts( array(
			'post_type' => 'works', //カスタム投稿名を指定
			'taxonomy' => 'works_cat',     //タクソノミー名を指定
			'posts_per_page' => 3      ///表示件数（-1で全ての記事を表示）
			)); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<li class="categoryBox__item">
					<a href="<?php the_permalink(); ?>">
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