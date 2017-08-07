<?php the_title( '<h1 class="title is-1">', '</h1>' ); ?>

<?php if ( !is_page() && !is_singular('event') && !is_singular('venue') ) : ?>
    <div class="article__metadata">Posted <span><?php echo get_the_date(); ?></span> by <?php the_author_posts_link(); ?> <?php if(get_the_category()): echo ' in ' , the_category(); endif; ?></div>
<?php endif; ?>
<div class="article__content">
    <?php the_content(); ?>
</div>

<?php if ( is_singular('venue') ) : ?>
<div class="section">
    <?php the_meta(); ?>
</div>
<?php endif; ?>

<?php if ( is_singular('event') ) : ?>
<div class="message is-dark">
    <div class="message-header">Event Information</div>
    <div class="message-body">
        <ul>
            <?php if ($post->event_date) : $eventDate = DateTime::createFromFormat('Ymd', $post->event_date)->format('l, F jS'); ?><li><?= $eventDate ?></li> <?php endif; ?>
            <?php if ($post->website_url) : ?><li><a href="<?php get_post_meta($post->ID, 'website_url', true); ?>" target="_blank"><?php get_post_meta($post->ID, 'website_url', true); ?></a></li> <?php endif; ?>
        </ul>
    </div>
</div>

<?php endif ?>