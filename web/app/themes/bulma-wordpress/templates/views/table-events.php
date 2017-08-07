<?php
    $eventDate = DateTime::createFromFormat('Ymd', $post->event_date)->format('l, F jS');
    $eventTitle = get_the_title( '<a href="' . esc_url( get_permalink() ) . '">', '</a>' );
    $eventVenue = '<a href="' . get_the_permalink($eventVenueID) . ' title="' . get_post_meta($eventVenueID, 'address', true) . '"> ' . get_the_title($eventVenueID) . '</a>';
    $eventCost = get_post_meta($post->ID, 'cost', true);
?>

<tr>
<td><?= $eventDate; ?></td>
<td><?= $eventTitle; ?></td>
<td><?= $eventVenue ?></td>
<td><?= $eventCost ?></td>
<td></td>

</tr>
