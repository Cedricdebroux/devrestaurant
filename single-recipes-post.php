<?php get_header(); ?>
<?php echo "COUCOUUUUUUU" ;?>
  <div id="primary" class="content-area extended">
    <?php echo "cOUCOUUUUUUU 2 " ;?>
    <main id="main" class="site-main" role="main">
    <?php echo "cOUCOUUUUUUU 3 " ;?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php echo "cOUCOUUUUUUU 4 " ;?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
        <?php echo "cOUCOUUUUUUU 5 " ;?>
          <header class="entry-header">
          <?php echo "cOUCOUUUUUUU 6 " ;?>
            <div class="recipeSinglePageHeader"> <!-- Back, date, taxonomy V -->
            <?php echo "cOUCOUUUUUUU 7 " ;?>
              <a href="https://teamperfect.bout-de-creations.com/recipes-post/"><img class="recipeSinglePageHeaderArrow" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/left-arrow.svg" alt=""> <p>Retour</p></a> 
              <?php echo "cOUCOUUUUUUU 8 " ;?>
              <?php get_the_date( 'j F, Y' ); ?>
              <?php echo "cOUCOUUUUUUU 9 " ;?>
              <?php the_category('type_of_recipe'); ?>
              <?php echo "cOUCOUUUUUUU 10 " ;?>
            </div>
            <?php echo "TITLE" ; ?>
            <?php echo "cOUCOUUUUUUU 11 " ;?>
            <?php the_title( '<h1>', '</h1>' ); ?>
            <?php echo "cOUCOUUUUUUU 12 --" ;?>
            <!-- Description V-->
            <?php the_field('description', 'recipe') ; ?>
            <?php echo "cOUCOUUUUUUU 13" ;?>
          </header>
          <?php echo "CONTENT" ; ?>
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
              <?php echo "FIN CONTENT" ; ?>
            </div>
          </div>
        </article>
      <?php endwhile; endif; ?>
    </main>
  </div>
<?php get_footer(); ?>
