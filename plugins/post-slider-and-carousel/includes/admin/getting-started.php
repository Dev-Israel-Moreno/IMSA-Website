<?php
/**
 * Getting Started Page
 *
 * @package Post Slider and Carousel
 * @since 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Taking some variables
$upgrade_link = add_query_arg( array('page' => 'psac-about-pricing'), admin_url('admin.php') );
?>
<style type="text/css">
	.psac-pro-box .hndle{background-color:#0073AA; color:#fff;}
	.psac-pro-box.postbox{background:#dbf0fa none repeat scroll 0 0; border:1px solid #0073aa; color:#191e23;}
	.postbox-container .psac-list li{list-style:square inside;}
	.postbox-container .psac-list .psac-tag{display: inline-block; background-color: #fd6448; padding: 1px 5px; color: #fff; border-radius: 3px; font-weight: 600; font-size: 12px;}
	.psac-wrap .psac-button-full{display:block; text-align:center; box-shadow:none; border-radius:0;}
	.psac-shortcode-preview{background-color: #e7e7e7; font-weight:bold; padding: 2px 5px; display: inline-block; margin:0 0 2px 0;}
	.psac-feedback{clear:both; text-align:center;}
	.psac-feedback h3{font-size:24px; margin-bottom:0px;}
	.psac-feedback p{font-size:15px;}
	.psac-feedback .psac-feedback-btn { font-weight: 600;  color: #fff;text-decoration: none;text-transform: uppercase;padding: 1em 2em; background: #008ec2; border-radius: 0.2em;}
</style>

<div class="wrap psac-wrap">
	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content">
				<div class="meta-box-sortables">
					
					<div class="postbox">
						<h3 class="hndle">
							<span><?php _e( 'Getting Started - Post Slider and Carousel', 'post-slider-and-carousel' ); ?></span>
						</h3>

						<div class="inside">
							<table class="form-table">
								<tbody>
									<tr>
										<th>
											<label><?php _e('Getting Started', 'post-slider-and-carousel'); ?></label>
										</th>
										<td>
											<ul>
												<li><?php _e('Step-1. Go to "Post -- Add New".', 'post-slider-and-carousel'); ?></li>
												<li><?php _e('Step-2. Add post title, description and featured image and relevant fields.', 'post-slider-and-carousel'); ?></li>
												<li><?php _e('Step-3. Select post category and tag (Optional)', 'post-slider-and-carousel'); ?></li>
											</ul>
										</td>
									</tr>

									<tr>
										<th>
											<label><?php _e('Shortcode Page', 'post-slider-and-carousel'); ?></label>
										</th>
										<td>
											<ul>
												<li><?php _e('Step-1. Create a page like Blog OR any page where you want to display the post slider or carousel', 'post-slider-and-carousel'); ?></li>
												<li><?php _e('Step-2. Put below shortcode as per your need.', 'post-slider-and-carousel'); ?></li>
											</ul>
										</td>
									</tr>

									<tr>
										<th>
											<label><?php _e('All Shortcodes', 'post-slider-and-carousel'); ?></label>
										</th>
										<td>														
											
											<span class="psac-shortcode-preview">[psac_post_slider]</span> – <?php _e('Post Slider Shortcode', 'post-slider-and-carousel'); ?> <br />
											<span class="psac-shortcode-preview">[psac_post_carousel]</span> – <?php _e('Post Carousel Shortcode', 'post-slider-and-carousel'); ?> <br />
											<span class="psac-shortcode-preview">[psac_post_gridbox_slider]</span> – <?php _e('Post Gridbox Slider Shortcode', 'post-slider-and-carousel'); ?> - <a href="https://premium.infornweb.com/post-slider-and-carousel-pro-gridbox-slider-demo/" target="_blank"><?php _e('Check Demo', 'post-slider-and-carousel'); ?></a> <br/>
											<span class="psac-shortcode-preview">[psac_post_slider show_thumbnail="true"]</span> – <?php _e('Post Slider with Thumbnails', 'post-slider-and-carousel'); ?> - <a href="https://premium.infornweb.com/post-slider-and-carousel-pro-slider-with-thumbnails-demo/" target="_blank"><?php _e('Check Demo', 'post-slider-and-carousel'); ?></a> <br/>
											<span class="psac-shortcode-preview">[psac_post_slider stage_padding="50"]</span> – <?php _e('Post Slider Partial Slide', 'post-slider-and-carousel'); ?> - <a href="https://premium.infornweb.com/post-slider-and-carousel-pro-partial-slide-demo/" target="_blank"><?php _e('Check Demo', 'post-slider-and-carousel'); ?></a> <br/>
											<span class="psac-shortcode-preview">[psac_post_slider type="featured"]</span> – <?php _e('Featured and Trending Post', 'post-slider-and-carousel'); ?> - <a href="https://premium.infornweb.com/post-slider-and-carousel-pro-featured-and-trending-post/" target="_blank"><?php _e('Check Demo', 'post-slider-and-carousel'); ?></a> <br/>
											<br/>
											<a class="button button-primary wpos-button-full" href="https://demo.infornweb.com/post-slider-and-carousel/" target="_blank"><?php _e('Check All Free Demo', 'post-slider-and-carousel'); ?></a>
											<p><?php _e('You can find all shortcode parameters on', 'post-slider-and-carousel'); ?> <a href="https://wordpress.org/plugins/post-slider-and-carousel/" target="_blank"><?php _e('WordPress Page', 'post-slider-and-carousel'); ?></a></p>
										</td>
									</tr>												
								</tbody>
							</table>

							<hr/>
							<div class="psac-feedback">
								<h3 class="text-center"><?php _e('Want to Check Premium Demo?', 'post-slider-and-carousel'); ?></h3>
								<p><?php _e('Checkout the premium demo with 5+ Layouts and 30+ Designs', 'post-slider-and-carousel'); ?></p>
								<a href="https://premium.infornweb.com/post-slider-and-carousel-pro/" class="psac-feedback-btn psac-button-full" target="_blank"><?php _e('Premium Demo', 'post-slider-and-carousel'); ?></a>
							</div>
						</div><!-- .inside -->
					</div><!-- .postbox -->

				</div><!-- .meta-box-sortables -->
			</div><!-- #post-body-content -->

			<div id="postbox-container-1" class="postbox-container">
				<div class="postbox psac-pro-box">
					<h3 class="hndle">
						<span><?php _e( 'Post Slider and Carousel Pro', 'blog-designer-pack' ); ?></span>
					</h3>

					<div class="inside">
						<ul class="psac-list">
							<li>30+ Designs</li>
							<li>Elementor Page Builder Supports <span class="psac-tag">Hot</span></li>
							<li>Slider and Carousel layouts <span class="psac-tag">Hot</span></li>
							<li>Gridbox Slider layout</li>
							<li>Slider with Thumbnails <span class="psac-tag">Hot</span></li>
							<li>Partially Visible Slides <span class="psac-tag">Hot</span></li>
							<li>Works with any Custom Post Type <span class="psac-tag">Hot</span></li>
							<li>Custom Tags Support</li>
							<li>Featured & Trending Post Functionality</li>
							<li>Social Sharing Options</li>
							<li>Image Lazyload Option <span class="psac-tag">Hot</span></li>
							<li>2 Types of different widgets.</li>
							<li>Shortcode Builder</li>
							<li>Template Functionality - Override designs from your theme</li>
							<li>And Many More...</li>
						</ul>

						<a href="https://premium.infornweb.com/post-slider-and-carousel-pro/" class="button button-primary psac-button-full" target="_blank">Check Premium Demo</a>
						<br/>
						<a href="<?php echo $upgrade_link; ?>" class="button button-primary psac-button-full">Upgrade Now</a>
					</div><!-- end .inside -->
				</div>
			</div><!-- #postbox-container-1 -->
		</div><!-- #post-body -->
	</div><!-- #poststuff -->
</div><!-- end .wrap -->