<?php

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        echo '<ul>';
        get_template_part('templates/li', get_post_format());
        echo '</ul>';
    }
}

get_footer();

?>