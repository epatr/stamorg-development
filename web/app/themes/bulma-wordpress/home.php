<?php

get_header();

if (have_posts()) : ?>

<div class="section">

<?php
    while (have_posts()) :

        the_post();

        get_template_part('templates/views/summary', get_post_format());

    endwhile;

    get_template_part('templates/snippets/pagination');

    ?>

</div>

<?php

endif;

get_footer();

?>