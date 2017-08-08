<div class="card">

<?php 
if ( has_post_thumbnail() ) : ?>
  <div class="card-image">
    <figure class="image">
      <?php the_post_thumbnail('open-graph-half'); ?>
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
    <a class="card-footer-item">Read More</a>
    <a class="card-footer-item">0 Comments</a>
  </footer>

</div>