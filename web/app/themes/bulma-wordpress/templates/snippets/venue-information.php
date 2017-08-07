<div class="has-text-centered">
    <iframe
      width="600"
      height="450"
      frameborder="0" style="border:0"
      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB0CBPoeI2IO_ep6mJ6lGrtAjuVS-3nHcQ
        &q=<?= get_post_meta($eventVenueID, 'address', true); ?>" allowfullscreen>
    </iframe>
</div>

<div class="section">
    <?php the_meta(); ?>
</div>

<h3>Upcoming Events</h3>
<?php 

//$eventQuery = include(TEMPLATEPATH . '/' . 'templates/queries/events.php');
$eventQuery = bulmawordpress_event_query('events-by-venue', $post->ID);

$the_query = new WP_Query($eventQuery);

if ($the_query->have_posts()) : 
    while ($the_query->have_posts()) :
        $the_query->the_post();

        get_template_part('templates/views/li', get_post_format());

    endwhile;

endif;

wp_reset_query();

?>