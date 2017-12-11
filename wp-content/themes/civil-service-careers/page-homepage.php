<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

	<div class="page-homepage">
		<?php while ( have_posts() ) : the_post(); ?>

		<h1 class="heading-xlarge"><?php the_title(); ?></h1>

		<?php 
			// VIDEO COMPONENT
			$video = get_field('homepage_video');
			$data = array(
				'video' => $video['homepage_video_url']
			);

			include(locate_template('template-parts/components/video.php'));
		?>

		<?php 
			// SEARCH BOX COMPONENT
			$search = get_field('homepage_search_box');
			$data = array(
				'label' => $search['homepage_search_label'],
				'explainer' => $search['homepage_search_explanation_text']
			);

			include(locate_template('template-parts/components/search.php'));
		?>

		<?php 
			// TEXT / IMAGE COMPONENT
			$textimage1 = get_field('homepage_text_and_image_component_1');
			$data = array(
				'heading' => $textimage1['homepage_text_and_image_1_heading'],
				'image' => $textimage1['homepage_text_and_image_1_image'],
				'intro' => $textimage1['homepage_text_and_image_1_intro_text'],
				'content' => $textimage1['homepage_text_and_image_1_content']
			);

			include(locate_template('template-parts/components/text-image.php'));
		?>

		<?php endwhile; ?>
	</div>

<?php
get_footer();
