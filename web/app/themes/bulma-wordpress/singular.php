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

<?php
    endwhile;
endif;

get_footer();

?>