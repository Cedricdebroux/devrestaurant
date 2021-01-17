<?php get_header(); ?>

  <div id="primary" class="content-area extended">

    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

          <header class="entry-header">

            <?php the_title( '<h1>', '</h1>' ); ?>

          </header>

          <div class="entry-content">

            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail( 'full' ); ?>
            </a>

            <?php the_content(); ?>

            <?php the_field('description');?>
            <?php the_field('ingredients');?>
            <?php the_field('instructions');?>

           

          </div>

        </article>


      <?php endwhile; endif; ?>

      <p>Template: single-recipe.php</p>

    </main>

  </div>

<?php get_footer(); ?>
