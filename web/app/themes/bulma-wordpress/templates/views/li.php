<?php

the_title( '<li><a href="' . esc_url( get_permalink() ) . '">', '</a></li>' );

?>

<pre style="max-height: 24em; overflow: scroll;">
<?php var_dump($post); ?>
</pre>