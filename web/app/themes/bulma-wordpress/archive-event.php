<?php

get_header();


$todaysDate = date('Ymd');
$eventQuery = array(
    'posts_per_page' => -1,
    'post_type' => 'event',
	'order' => 'ASC',
	'orderby' => 'event_date',
    'meta_key' => 'event_date',
    'meta_query' => array(
        array(
            'key' => 'event_date',
            'value' => $todaysDate,
            'type' => 'NUMERIC',
            'compare' => '>='
        )
    )
);

$the_query = new WP_Query($eventQuery);

if ($the_query->have_posts()) : 
    while ($the_query->have_posts()) :
        $the_query->the_post();

        get_template_part('templates/views/li', get_post_format());

    endwhile;

endif;

get_footer();

?>