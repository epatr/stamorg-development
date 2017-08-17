<?php

get_header();

?>

<h1>The St. Augustine Music Project</h1>

<p>Hello, and welcome to the St. Augustine Music Project website. This site was created as a way to document and give exposure to the wonderful music scene of St. Augustine, FL. Musicians here have a very strong do-it-yourself attitude, and this project is no exception. It was coded from a home office in downtown St. Augustine and contains no tracking software, advertisements, or any other horrors that sites like Facebook and Instagram thrive on.</p>
<p>The project is still in its very early stages, so please bookmark us and check back often. If you're interested in helping out, please check out the <a href="/about">about</a> section to learn more.</p>

<hr>

<h3>Latest Articles</h3>

<?php

if (have_posts()) : ?>

<?php $loopCount = 0; ?>

<div class="summary columns is-multiline">

<?php
    while (have_posts()) :
        the_post();
?>
<div class="column is-one-third">

<?php
        get_template_part('templates/views/summary-card', get_post_format());
?>
</div>
<?php

    endwhile;

    get_template_part('templates/snippets/pagination');

    ?>

</div> <!-- .columns -->

<?php

endif;

get_footer();

?>
