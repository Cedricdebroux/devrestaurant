<?php get_header(); ?>
  <div id="primary" class="content-area extended">
    <main id="main" class="site-main" role="main">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
          <header class="entry-header">
            <div class="recipeSinglePageHeader"> <!-- Back, date, taxonomy V -->
              <a href="https://teamperfect.bout-de-creations.com/recipes-post/"><img class="recipeSinglePageHeaderArrow" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/left-arrow.svg" alt=""> <p>Retour</p></a> 
              <?php echo get_the_date( 'j F, Y' ); ?>
              <?php $term = get_term_by( 'slug', get_query_var('term'), get_query_var('taxonomy') );
                    echo $term->name; ?>
            </div>
            <?php the_title( '<h1>', '</h1>' ); ?>
            <!-- Description V-->
            <?php the_field('description') ; ?>
          </header>
          <div class="entry-content">
            <div class="recipeSinglePageContent">
              <div class="recipeSinglePageThumbnail"><?php the_post_thumbnail( 'full' ); ?></div>  <!-- Image of the recipe V -->
              <?php the_content(); ?> <!-- Content of the page "Recipe" V -->

              <!-- ingredients -->
              <?php the_field('ingretients') ; ?>
              <!-- serve and preparation time -->
              <?php the_field('serve') ; ?> 
              <!-- intructions (steps) --> <!-- Aside social network -->
              <?php the_field('preparation_time') ; ?>
              <?php if(have_rows('instructions')) :
                      while(have_rows('instructions')) : the_row(); 
                      $sub_value = get_sub_field('steps');
                      echo $sub_value;

                      endwhile;
                    endif;?>
          
              <!-- Latest blog -->
            
              <!-- FIN Content of the page "Recipe" -->
            </div>
          </div>
        </article>
      <?php endwhile; endif; ?>
    </main>
  </div>
<?php get_footer(); ?>
