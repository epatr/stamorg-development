<?php

get_header();

?>

<h1>The St. Augustine Music Project</h1>

<p>Hello, and welcome to the St. Augustine Music Project! On this site you will find information about upcoming shows and events going on in St. Augustine, FL. The site is in active development and will be changing rapidly over time. Please add us to your bookmarks and check back regularly! Enjoy.</p>
<hr>

<h3>Latest News</h3>

<?php

if (have_posts()) : ?>

<?php $loopCount = 0; ?>

<div>

<?php
    while (have_posts()) :
        the_post();

        get_template_part('templates/views/summary', get_post_format());

    endwhile;

    get_template_part('templates/snippets/pagination');

    ?>

</div> <!-- .columns -->

<?php

endif;

get_footer();

?>
