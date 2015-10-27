<?php
/**
 * The template for displaying case studies archive
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
* @package WordPress
 * @subpackage Accelerate Child
 * @since Accelerate 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		<?php query_posts('post_type=case_studies'); ?>
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field('services');
				$size = "full";
				$icon= false;
				$attr = array(
					'class' => 'archive-image',
				);
				$image1 = get_field('image_1');
			?>

			<div class="case-studie-wrapper">
				<div class="case-studie-content clearfix">
					<aside class="left-description">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<h5><?php echo $services; ?></h5>
						<p><?php the_excerpt(); ?></p>
						<a class="visit-link" href="<?php the_permalink(); ?>" title="visit site">Visit Live Site</a>
					</aside>

					<div class="project-content">
						<a href="<?php the_permalink(); ?>">
							<?php if ($image1) { echo wp_get_attachment_image( $image1, $size, $icon, $attr ); } ?>
						</a>
					</div>
				</div>
			</div>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>