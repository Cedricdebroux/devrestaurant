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

      coucou
      <?php echo yourtheme_paging_nav() ?>
      coucou

    </main>

</div>



<?php get_footer(); ?>
