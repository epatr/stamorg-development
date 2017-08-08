<?php

get_header();

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