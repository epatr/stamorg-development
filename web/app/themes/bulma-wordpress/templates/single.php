<? the_title( '<h1 class="title is-1">', '</h1>' ); ?>

<div class="article__metadata">Posted <span><?php echo get_the_date(); ?></span> by <?php the_author_posts_link(); ?> <?php if(get_the_category()): echo ' in ' , the_category(); endif; ?></div>
<div class="article__content">
    <?php the_content(); ?>
</div>
    
<div class="content">
<?php if ( comments_open() || get_comments_number() ) :
    comments_template();
endif; ?>
</div>

<hr>

<div class="content">
    <?php the_meta(); ?>
    <pre><?php var_dump($post); ?></pre>
</div>