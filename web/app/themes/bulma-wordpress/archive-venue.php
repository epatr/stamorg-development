<?php

get_header();

$venueQuery = array(
    'posts_per_page' => -1,
    'post_type' => 'venue',
	'order' => 'ASC',
    'orderby' => 'post_name'
);

$the_query = new WP_Query($venueQuery);

if ($the_query->have_posts()) : 
    while ($the_query->have_posts()) :
        $the_query->the_post();

        get_template_part('templates/views/li', get_post_format());

    endwhile;

endif;

get_footer();

?>