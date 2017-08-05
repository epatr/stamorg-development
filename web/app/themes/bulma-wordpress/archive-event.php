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
            'value' => $todaysDate;
            'type' => 'NUMERIC',
            'compare' => '>='
        )
    )
);
?>

        <?php get_template_part('templates/li', get_post_format()); ?>

</article>
        
<?php
    endwhile;

    get_template_part('templates/snippets/pagination');
    
endif;

get_footer();

?>