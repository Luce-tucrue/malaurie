<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package malaurie
 */

?>

<section <?php post_class('section'); ?> id="<?php echo $post->post_name; ?>">

    <h2 class="section__title"> <?php the_title(); ?></h2>

	<div class="section__content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->


</section>
