<?php

get_header();

if (have_posts()) : ?>

<?php $loopCount = 0; ?>

<div class="summary columns">

<?php
    while (have_posts()) :
        the_post();
?>
<div class="column is-one-third">
<?php
        get_template_part('templates/views/summary', get_post_format());
?>
</div>
<?php

// we need to get the loop count and either increment it or reset it
    if ($loopCount == 2) {
        echo '</div><div class="columns">';
        $loopCount = 0;
    } else {
        $loopCount++;
    }

    endwhile;

    get_template_part('templates/snippets/pagination');

    ?>

</div> <!-- .columns -->

<?php

endif;

get_footer();

?>