
<div class="content">

    <p class="menu-label">Upcoming</p>

    <ul class="menu-list">
    <?php 

    $eventQuery = include(TEMPLATEPATH . '/' . 'templates/queries/events.php');

    $the_query = new WP_Query($eventQuery);

    if ($the_query->have_posts()) : 
        while ($the_query->have_posts()) :
            $the_query->the_post();

            get_template_part('templates/views/li', get_post_format());

        endwhile;

    endif;

    ?>
    </ul>
</div>