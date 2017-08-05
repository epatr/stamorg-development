<?php

get_header();

?>

<article>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>

        <?php get_template_part('templates/summary', get_post_format()); ?>

</article>
        
<?php
    endwhile;
?>
<nav class="level">
	<div class="level-item has-text-centered">
		<?php next_posts_link( 'Previous' ); ?>
    </div>
    <div class="level-item has-text-centered">
		<?php previous_posts_link( 'Next' ); ?>
	</div>
</nav>
<?
endif;

get_footer();

?>