<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

    <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID ); ?>"></span>

    <?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>

    <div class="byline">
      <?php esc_html_e( 'Author:' ); ?> <?php the_author_posts_link(); ?>
    </div>

  </header>

  <div class="entry-content">
  <div class="the_menu_title">
  <?php the_field('the_menu_title'); ?>
  <?php the_field('title'); ?>
  <?php the_field('text'); ?>
  <?php the_field('price'); ?>
  </div>

    <?php the_excerpt(); ?>

  </div>


</article>
