<?php

get_header();

?>

<article>
    <h1><? the_title(); ?></h1>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>

        <?php get_template_part('templates/li', get_post_format()); ?>

</article>
        
<?php
    }
}

get_footer();

?>