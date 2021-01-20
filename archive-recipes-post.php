<?php get_header(); ?>

  <div>

    <main id="main" class="site-main" role="main">

    

      <?php $i = 2;
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php $i++ ; ?>
        <?php echo "COUCOU JE SUIS UNE INCREMENTATIONNNNNN" ;?>
        <?php get_template_part( 'template-parts/content', 'recipes' ); ?>
        

      <?php endwhile; else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

      <?php echo paginate_links(); ?>

      <p>Template: archive-recipes-post.php</p>

      </main>

</div>



<?php get_footer(); ?>
