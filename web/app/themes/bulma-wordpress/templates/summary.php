<?php the_title( '<h3 class="title is-3">', '</h3>' ); ?>

<div class="article__metadata">Posted <span><?php echo get_the_date(); ?></span> by <?php the_author_posts_link(); ?> <?php if(get_the_category()): echo ' in ' , the_category(); endif; ?></div>
<div class="article__content">
    <?php the_content(); ?>
</div>
