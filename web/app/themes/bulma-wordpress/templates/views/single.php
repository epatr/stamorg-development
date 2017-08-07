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
            <li>Date: <?php if ($post->event_date) : $eventDate = DateTime::createFromFormat('Ymd', $post->event_date)->format('l, F jS'); ?><?= $eventDate ?><?php endif; if (get_post_meta($post->ID, 'start_time', true)) : echo get_post_meta($post->ID, 'start_time', true); endif; ?></li>
            <?php if ($post->website_url) : ?><li>More Information: <a href="<?php echo get_post_meta(get_the_ID(), 'website_url', true); ?>" target="_blank"><?php echo get_post_meta($post->ID, 'website_url', true); ?></a></li> <?php endif; ?>
            <?php if (get_post_meta($post->ID, 'venue', true)) : $eventVenueID = $post->venue[0]; ?><li>Location: <a href="<?= get_the_permalink($eventVenueID); ?>"><?= get_the_title($eventVenueID); ?></a></li><?php endif; ?>
            <?php if (get_post_meta($post->ID, 'cost', true)) : ?><li>Cost: <?= get_post_meta($post->ID, 'cost', true); ?></li><?php endif; ?>
            <li>Meta: <?php 
                $meta_values = get_post_meta(get_the_ID(), '', true);
                print_r($meta_value);
            ?><br>
            <?php the_meta(); ?></li>
        </ul>
    </div>
</div>

<?php endif ?>