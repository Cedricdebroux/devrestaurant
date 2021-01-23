<div> <!-- Fin dans le footer -->
<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

    <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>

    <?php the_title( '<h2><a class="text-dark" href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>

   

  </header>

  <div class="entry-content container">

    <?php the_excerpt(); ?>
   



</div>



  </div>
 

</article>
