<?php

get_header();

if (have_posts()) : ?>

<div class="columns">

<?php
    while (have_posts()) :

        the_post();
?>
<div class="column">
<?php
        get_template_part('templates/views/summary', get_post_format());
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