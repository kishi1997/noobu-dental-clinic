<?php get_header(); ?>

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
    <main class="l-main">
		<div class="slim-contents">

			<h1 class="heading heading-singleTitle"><?php the_title(); ?></h1>
			<ul class="dateList dateList-singleTitle">
				<time>
					<li class="dateList__item icon-calendar">公開 <?php the_time('Y.m.d'); ?></li>
					<?php if(get_the_time('Y/m/d') != get_the_modified_date('Y/m/d')):?>
					<li class="dateList__item icon-calendar">更新 <?php the_modified_date('Y.m.d') ?></li>
					<?php endif;?>
				</time>

				<li class="dateList__item icon-folder">
					<?php
						$categories = get_the_category();
						if ( $categories ) {
							
							foreach ( $categories as $category ) {
								echo  '<span>' . $category->name . '</span>'; 
							}
						}
					?>
				</li>
			</ul>
			
			<!-- アイキャッチ -->
			<div class="single-head-thumbnail">	
				<?php if(has_post_thumbnail()) : ?>
					<?php $thumbnail_id = get_post_thumbnail_id($post->ID);
					$image = wp_get_attachment_image_src($thumbnail_id, 'large'); ?>
					<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" >
				<?php endif; ?>
			</div>  			
			<!-- /アイキャッチ -->    
			
			<?php if ( get_option('fit_post_shareTop') != 'value2' ):?>
			<!-- 記事上シェアボタン -->
				<?php fit_share_btn(); ?>
			<!-- /記事上シェアボタン -->
			<?php endif; ?>     
	  
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
  
<?php if ( get_option('fit_post_category') != 'value2' ) :
	$cat_meta = get_option('cat_meta_data');
	$category = get_the_category();
	$cat_id   = $category[0]->cat_ID;
	$cat_name = $category[0]->cat_name;  
?>
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
        	<?php query_posts('cat='.$cat_id.'&posts_per_page=6'); ?>
        	<?php if (have_posts()) : while (have_posts()) : the_post();
				// icatchサイズの画像内容を取得
				$thumbnail_id = get_post_thumbnail_id(); 
				$icatch_img = wp_get_attachment_image_src( $thumbnail_id , 'icatch' );
				// アイキャッチ画像出力
				$src = $icatch_img[0];
				$width = $icatch_img[1];
				$height = $icatch_img[2];
			?>
        	
			<li class="categoryBox__item">

        		<div class="eyecatch eyecatch-archive">
            		<a href="<?php the_permalink(); ?>">
              			<?php if(has_post_thumbnail()) : ?>
							<img src="<?php echo $src; ?>" alt="<?php the_title(); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" >		        		
		      			<?php else :?>
                			<img src="<?php echo get_template_directory_uri(); ?>/img/img_no.gif" alt="NO IMAGE" width="730" height="410" >		
		    			<?php endif; ?>
            		</a>
        		</div>
          
        		<?php if (get_option('fit_post_time') != 'value2' || has_tag() == true ) :?>
          		
					<ul class="dateList dateList-archive">
            			
					<?php if (get_option('fit_post_time') != 'value2' ) :	?>
            			<li class="dateList__item icon-calendar"><?php the_time('Y.m.d'); ?></li>
            			<?php endif; ?>
            			
						<?php if(has_tag()==true) :  ?>
            			<li class="dateList__item icon-tag">
							<?php
		    					if (get_option('fit_theme_tagNumber')){
			    					$number = get_option('fit_theme_tagNumber');
		    					}else{
			    					$number = '5';
		    					}
            					$posttags = get_the_tags();
		    					$count = '0';
		    					foreach($posttags as $tag) {
			    					$count++;
			    					if ($count > $number) break; 
			    					echo '<a href="'. get_tag_link($tag->term_id) .'" rel="tag">'. $tag->name ."</a><span>, </span>";
		    					}
		    				?>
						</li>
            			<?php endif; ?>
          			</ul>
        		<?php endif; ?>
          
        		<h2 class="heading heading-archive ">
            		<a class="hc<?php if (isset($cat_meta[$cat_id])) { echo esc_html($cat_meta[$cat_id]);} ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>

        	</li>
        	<?php endwhile; endif; wp_reset_query(); ?>
    	</ul>
    </div>
</div>
<?php endif; ?>


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