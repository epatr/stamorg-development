<?php

return array(
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

?>