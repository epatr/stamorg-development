<?php

/* Template Name: Event History */

?>

<?php
get_header();
?>

<article>

<?php

$eventQuery = bulmawordpress_event_query('events-all-desc');

$the_query = new WP_Query($eventQuery);

if ($the_query->have_posts()) : ?>
<table class="table">
    <thead>
        <tr>
            <th>Date</th>
            <th>Bands</th>
            <th>Venue</th>
            <th>Cost</th>
            <th>Flyer</th>
        </tr>
    </thead>
<?php
    while ($the_query->have_posts()) :
        $the_query->the_post();

        get_template_part('templates/views/table-events', get_post_format());

    endwhile;
?>
</table>
<?php
endif;

wp_reset_query();


get_footer();