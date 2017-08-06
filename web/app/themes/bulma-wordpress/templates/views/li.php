<li><?php

if (get_post_type() !== 'venue') :
    if (get_post_type() === 'event') :
        $postDate = DateTime::createFromFormat('Ymd', $post->event_date)->format('l, F jS');
    else : 
        $postDate = get_the_date();
    endif; // post = event or not event
endif; // post != venue


    echo $postDate . ' - ';
the_title( '<a href="' . esc_url( get_permalink() ) . '">', '</a>' );

?></li>
