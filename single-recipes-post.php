<?php get_header(); ?>

  <div id="primary" class="content-area extended">
    <main id="main" class="site-main" role="main">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
          <header class="entry-header">
            <div class="recipeSinglePageHeader"> <!-- Back, date, taxonomy V -->
              <a href="https://teamperfect.bout-de-creations.com/recipes-post/"><img src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/left-arrow.svg" alt=""> <p>Retour</p></a> 
              <?php get_the_date( 'j F, Y' ); ?>
              <?php the_field('type_of_recipe'); ?>
            </div>

            <?php the_title( '<h1>', '</h1>' ); ?>
            <!-- Description V-->
            <?php the_field('description', 'recipe') ; ?>

          </header>
          <div class="entry-content">
            <div class="recipeSinglePageContent">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'full' ); ?> <!-- Image of the recipe V -->
              </a>

              <?php the_content(); ?> <!-- Content of the page "Recipe" V -->

              <!-- ingredients -->
              <!-- serve and preparation time --> 
              <!-- intructions (steps) --> <!-- Aside social network -->
              <!-- Latest blog -->

            
              <!-- Content of the page "Recipe" -->
            </div>
          </div>
        </article>
      <?php endwhile; endif; ?>
    </main>
  </div>
<?php get_footer(); ?>
