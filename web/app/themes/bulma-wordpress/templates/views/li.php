<li><?php

echo get_the_date() , ' - ';
the_title( '<a href="' . esc_url( get_permalink() ) . '">', '</a>' );

?></li>
