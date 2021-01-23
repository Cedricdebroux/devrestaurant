
<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
<div class="card mb-12 text-center">
  <header class="entry-header">

    <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>

    <?php the_title( '<h2><a class="text-dark" href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>

   

  </header>

  <div class="entry-content container">

    <?php the_excerpt(); ?>
   



</div>



  </div>
 
  </div>
</article>
