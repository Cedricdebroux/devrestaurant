<?php get_header(); ?>

  <div>

    <main id="main" class="site-main" role="main">

      

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content-posts', get_post_format() ); ?>

      <?php endwhile; else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <?php echo paginate_links(); ?>


      </main>

</div>






<?php get_footer(); ?>
