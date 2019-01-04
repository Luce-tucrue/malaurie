<?php
/*
Template Name: One page
*/
 ?>
<?php
get_header();

$menu_items = wp_get_nav_menu_items('main-menu');
if( $menu_items ) {
  foreach ($menu_items as $menu_item ) {
    $args = array('p' => $menu_item->object_id,'post_type' => 'any');

    global $wp_query;
    $wp_query = new WP_Query($args);
    ?>

    <section <?php post_class('section'); ?> id="<?php echo sanitize_title($menu_item->title); ?>">
      <div class="container">
      <?php while(have_posts()) : the_post(); ?>
        <h2 class="section__title"><?php the_title(); ?></h2>
        <div class="section__content"><?php the_content(); ?></div>
      <?php endwhile; ?>
      </div>
    </section>
  <?php }}; ?>

<div class="badge-danger" id="toto">
    <script>

    </script>
</div>




<?php get_footer(); ?>

