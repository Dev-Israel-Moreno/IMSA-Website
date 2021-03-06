<?php
/**
 * Carousel Design 2
 * 
 * @package Post Slider and Carousel
 * @since 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="psac-post-carousel-slide">
	<div class="psac-post-carousel-content">
		<?php if( $feat_image ) { ?>
		<div class="psac-post-img-wrap">
			<a href="<?php echo esc_url( $post_link ); ?>" class="psac-link-overlay"></a>
			<div class="psac-post-image-bg" style="<?php echo $image_bg_css; ?>"></div>
		</div>	
		<?php } ?>	
		<div class="psac-post-margin-content">

			<?php if($show_category && $cate_name !='') { ?>
			<div class="psac-post-categories">
				<?php echo $cate_name; ?>

			</div>
			<?php } ?>
                  <center><hr style=" width: 25%; border-style: solid; border-color: #FF2C21;border-width: thin; margin-bottom: 15px;"></center>
			<h2 class="psac-post-title">
				<a href="<?php echo esc_url( $post_link ); ?>"><?php the_title(); ?></a>

			</h2>

			<?php if($show_date || $show_author || $show_comments) { ?>
				<div class="psac-post-meta">
					<?php if($show_author) { ?>
						<span class="psac-user-img"><i aria-hidden="true" class="fas fa-user"></i> <?php the_author(); ?></span>
					<?php } ?>
					<?php echo ($show_author && $show_date) ? '|' : '' ?>
					<?php if($show_date) { ?>
						<span class="psac-time"><i aria-hidden="true" class="far fa-calendar-alt"></i>  <?php echo get_the_date(); ?> </span>
					<?php } ?>
					<?php echo ($show_author && $show_date && $show_comments && !empty($comments)) ? '|' : '' ?>
					<?php if(!empty($comments) && $show_comments) { ?>
						<span class="psac-post-comments">
							<a href="<?php the_permalink(); ?>#comments"><?php echo $comments.' '.$reply;  ?></a>
						</span>
					<?php } ?>
				</div>
			<?php }

			if( $show_content ) { ?>
			<div class="psac-post-content">
				<div class="psac-post-short-content"><?php echo psac_get_post_excerpt( $post->ID, get_the_content(), $words_limit ); ?></div>
				<?php if( $show_read_more ) { ?>
					<a href="<?php echo esc_url( $post_link ); ?>" class="psac-readmorebtn"><?php _e('Seguir leyendo +', 'post-slider-and-carousel'); ?></a>
				<?php } ?>
			</div>
			<?php }

			if( !empty($tags) && $show_tags ) { ?>
				<div class="psac-post-tags"><?php echo $tags; ?></div>
			<?php } ?>
		</div>
	</div>
</div>