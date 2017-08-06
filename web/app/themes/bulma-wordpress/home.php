<?php

get_header();

?>

<article>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>

        <div class="section">
        <?php get_template_part('templates/views/summary', get_post_format()); ?>
        </div>

</article>
        
<?php
    endwhile;

    get_template_part('templates/snippets/pagination');

endif;

get_footer();

?>