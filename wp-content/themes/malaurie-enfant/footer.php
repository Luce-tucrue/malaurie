<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package malaurie
 */

?>

</div><!-- #content -->

<footer id="colophon" class="footer">
    <div class="container">
        <a class="footer__link" role="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="mentions-legales">
            Mentions légales
        </a>


        <span class="sep"> | </span>
        <a href="http://www.lucile-fromant.fr" class="footer__link" target="_blank">
            <?php
            /* translators: 1: Theme name, 2: Theme author. */
            printf(esc_html__('Site réalisé par %s.', 'malaurie'), 'Lucile Fromant');
            ?>
        </a>


        <div class="collapse mt-5" id="collapseExample">
            <div class="card card-body">
                <?php
                $id=3; // legals page id
                $post = get_post($id);
                $title= apply_filters('the_title', $post->post_title);
                $content = apply_filters('the_content', $post->post_content);

                ?>

                <h2 class="section__title"><?php  echo $title; ?> </h2>
                <div class="section__content">
                    <?php  echo $content; ?>
                </div>

            </div>
        </div>
    </div>

    </div><!-- .site-info -->
</footer><!-- #colophon -->



</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
