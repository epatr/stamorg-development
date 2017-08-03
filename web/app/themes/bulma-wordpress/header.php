<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    
<!-- wp_head() -->
    <?php wp_head(); ?>
<!-- /wp_head() -->

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {

  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any nav burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {

        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});
</script>

</head>
<body class="content">

<nav class="navbar is-mobile">
    <div class="navbar-brand">
        <a href="/" class="navbar-item navbar-title">St. Augustine Music Project</a>
        <a href="/event/" class="navbar-item">Events</a>    
        <div class="navbar-burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="navbar-menu" id="navMenu">
        <div class="navbar-start">
            <a href="/venue/" class="navbar-item">Venues</a>
            <a href="#" class="navbar-item">Submit Show</a>
            <a href="#" class="navbar-item">Help</a>
            <a href="/about/" class="navbar-item">About</a>
        </div>
    </div>
</nav>

<div class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-three-quarters">