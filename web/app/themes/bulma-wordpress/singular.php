<?php

get_header();

?>

<article>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>

        <?php get_template_part('templates/single', get_post_format()); ?>

</article>

    <?php if ( comments_open() || get_comments_number() ) : ?>
        <hr>
        <div class="content">
            <?php comments_template(); ?>
        </div>
    <?php endif; ?>

<?php
    endwhile;
endif;

get_footer();

?>