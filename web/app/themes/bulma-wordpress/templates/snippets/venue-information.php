<div class="message is-dark">
    <div class="message-header">Venue Information</div>
    <div class="message-body">
        <ul>
            <?php if (get_post_meta($post->ID, 'address', true)) : ?><li>Address: <?= get_post_meta($post->ID, 'address', true); ?></li><?php endif; ?>
            <?php if (get_post_meta($post->ID, 'phone', true)) : ?><li>Phone: <?= get_post_meta($post->ID, 'phone', true); ?></li><?php endif; ?>
            <?php if (get_post_meta($post->ID, 'website_url', true)) : ?><li>website_url: <?= get_post_meta($post->ID, 'website_url', true); ?></li><?php endif; ?>
            <?php if (get_post_meta($post->ID, 'facebook_url', true)) : ?><li>facebook_url: <?= get_post_meta($post->ID, 'facebook_url', true); ?></li><?php endif; ?>
            <?php if (get_post_meta($post->ID, 'twitter_url', true)) : ?><li>twitter_url: <?= get_post_meta($post->ID, 'twitter_url', true); ?></li><?php endif; ?>
            <?php if (get_post_meta($post->ID, 'instagram_url', true)) : ?><li>instagram_url: <?= get_post_meta($post->ID, 'instagram_url', true); ?></li><?php endif; ?>
            <?php if (get_post_meta($post->ID, 'email_address', true)) : ?><li>email_address: <?= get_post_meta($post->ID, 'email_address', true); ?></li><?php endif; ?>
        </ul>

        <div class="has-text-centered map-embed">
        <iframe
        seamless=""
        width="100%"
        height="100%"
        frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB0CBPoeI2IO_ep6mJ6lGrtAjuVS-3nHcQ
            &q=<?= get_post_meta($post->ID, 'address', true); ?>" allowfullscreen>
        </iframe>
        </div>
    </div>
</div>

<div class="section">
    <?php the_meta(); ?>
</div>

<?php 

//$eventQuery = include(TEMPLATEPATH . '/' . 'templates/queries/events.php');
$eventQuery = bulmawordpress_event_query('events-by-venue', $post->ID);

$the_query = new WP_Query($eventQuery);

if ($the_query->have_posts()) : ?>
<h3>Upcoming Events</h3>
    <?php while ($the_query->have_posts()) :
        $the_query->the_post();

        get_template_part('templates/views/li', get_post_format());

    endwhile;

endif;

wp_reset_query();

?>