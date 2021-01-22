<?php get_header(); ?>

  <div>

    <main id="main" class="site-main contentRecipeMain" role="main">

    

      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'recipes' ); ?>
        

      <?php endwhile; else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <div class="paginateArchiveBlog">
        <?php echo paginate_links(); ?>
      </div>
      
      <?php

        $big = 999999999;

        $paginate_links = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $the_query->max_num_pages,
            'prev_text'    => __('<div class="prev pull-left"><i class="icon-arrow_thin_left"></i></div>'),
            'next_text'    => __('<div class="next pull-right"><i class="icon-arrow_thin_right"></i></div>'),
            'type' => 'array',
            'n_display' => 'test'
        ) );

        foreach ( $paginate_links as $pgl ) {
            echo "$pgl";
        }

      ?>


    </main>

</div>



<?php get_footer(); ?>
