<?php the_title( '<h1 class="title is-1">', '</h1>' ); ?>

<?php if ( !is_page() && !is_singular('event') && !is_singular('venue') ) : ?>
    <div class="article__metadata">Posted <span><?php echo get_the_date(); ?></span> by <?php the_author_posts_link(); ?> <?php if(get_the_category()): echo ' in ' , the_category(); endif; ?></div>
<?php endif; ?>

<div class="article__content">
    <?php the_content(); ?>
</div>

<?php if ( is_singular('venue') ) : ?>
<?php get_template_part('templates/snippets/venue-information'); ?>
<?php endif; ?>

<?php if ( is_singular('event') ) : ?>
    <?php get_template_part('templates/snippets/event-information'); ?>
<?php endif ?>