<?php

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
?>

<article>
    <h1><? the_title(); ?></h1>
        <?php get_template_part('templates/li', get_post_format()); ?>
</article>
        
<?php
    }
}

get_footer();

?>