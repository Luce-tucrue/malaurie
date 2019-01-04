<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package malaurie
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'malaurie'); ?></a>

  <header class="header" role="banner">
    <div class="header__branding">
      <div class="header__branding__logo">
        <?php the_custom_logo(); ?>
      </div>
      <h1 class="header__branding__title">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"  class="header__branding__title__link">
          <span class="header__branding__title__link__name"><?php bloginfo('name'); ?></span>

          <?php $malaurie_description = get_bloginfo('description', 'display'); ?>
          <span class="header__branding__title__link__description"><?php echo $malaurie_description; /* WPCS: xss ok. */ ?></span>

        </a>
      </h1>


    </div><!-- .site-branding -->

    <nav id="site-navigation" class="navbar" role="navigation">
      <div class="container">
        <button class="menu-toggle" aria-controls="primary-menu"
                aria-expanded="false"><?php esc_html_e('Primary Menu', 'malaurie'); ?></button>
        <div class="navigation">

          <?php wp_nav_menu( array( 'theme_location' => 'menu-1','menu' => 'navigation','walker' => new mono_walker() ) ); ?>
        </div>
      </div>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->

  <div id="content" class="site-content">
