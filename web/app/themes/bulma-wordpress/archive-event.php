<?php

get_header();

?>

<article>

<?php
$todaysDate = date('Ymd');
$eventQuery = array(
    'posts_per_page' => -1,
    'post_type' => 'event',
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
?>

        <?php get_template_part('templates/li', get_post_format()); ?>

<?php

    endwhile;

endif;

?>

</article>

<?php 

get_footer();

?>