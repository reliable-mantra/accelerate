<?php
/**
 * The template for displaying case-studies
 *
 *
 * @package WordPress
 * @subpackage Accelerate Child
 * @since Accelerate 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$size = "full";
				$icon= false;
				$attr = array(
					'class' => 'mail-chimp',
				);
				$image1 = get_field('image_1');
				$image2 = get_field('image_2');
				$image3 = get_field('image_3');
			?>
				<div class="case-studie-content clearfix">
					<aside class="left-description">
						<h2><?php the_title(); ?></h2>
						<h5><?php echo $services; ?></h5>
						<p>Client: <?php echo $client; ?></p>
						<p><?php the_content(); ?></p>
						<a class="visit-link" href="<?php echo $link; ?>" title="visit site">Visit Live Site</a>
					</aside>

					<div class="project-content">
						<?php if ($image1) { echo wp_get_attachment_image( $image1, $size, $icon, $attr ); } ?>
						<?php if ($image2) { echo wp_get_attachment_image( $image2, $size, $icon, $attr ); } ?>
						<?php if ($image3) { echo wp_get_attachment_image( $image3, $size, $icon, $attr ); } ?>
					</div>
				</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>