<div class="card">

<?php 
if ( has_post_thumbnail() ) : ?>
  <div class="card-image">
    <figure class="image">
      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('open-graph-half'); ?></a>
    </figure>
  </div>
<?php endif; 
?>

  <header class="card-header">
    <p class="card-header-title">
      <?php the_title(); ?>
    </p>
  </header>

  <div class="card-content">

    <div class="content">
        <?php the_excerpt(); ?>
      <br>
      <small><?php echo get_the_date(); ?></small>
    </div>
  </div>

  <footer class="card-footer">
    <a href="<?php the_permalink() ?>" class="card-footer-item">Read More</a>
    <a href="<?php comments_link(); ?>" class="card-footer-item">0 Comments</a>
  </footer>

</div>