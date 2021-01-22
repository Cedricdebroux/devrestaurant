<div> <!-- Fin dans le footer -->
 <?php global $wp_query; ?>
  <article class="recipeContent mb-3 mt-5" id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
  <p class="text-center text-black-50"><?php the_terms( $post->ID, 'recipe_types', ' ' , ' ' ); ?> </p>
    <div class="entry-content container">
      <!-- NOTRE SUPER BOUCLE ICI -->
      <?php if ( $wp_query->$current_post %2==0 ){ ?> 
        <div class="card mb-12 text-center">
          <div class="row no-gutters">
            <div class="col-md-7">
              <?php the_post_thumbnail( 'large', array('class' => 'img-fluid')); ?> 
            </div>
            <div class="col-md-5">
              <div class="card-body">
                <p class="card-text"><small class="text-muted"><?php echo get_the_date( 'j F, Y' ); ?></small></p>
                <h5 class="card-title"> <?php the_title( '<h2><a class="text-dark" href="' . get_the_permalink() .'">', '</a></h2>' ); ?></h5>
                <p class="card-text"> <?php the_field('description');?></p>
                <button type="button" class="recipeButton btn btn-dark text-white"> <a href="<?php the_permalink(); ?>">READ MORE</a></button> 
              </div>
            </div>
          </div>
        </div>
      <?php $wp_query->$current_post++; ?>

      <?php } else { ?>
        <div class="card mb-12 text-center">
          <div class="row no-gutters">
            <div class="col-md-5">
              <div class="card-body">
                <p class="card-text"><small class="text-muted"><?php echo get_the_date( 'j F, Y' ); ?></small></p>
                <h5 class="card-title"> <?php the_title( '<h2><a class="text-dark" href="' . get_the_permalink() .'">', '</a></h2>' ); ?></h5>
                <p class="card-text"> <?php the_field('description');?></p>
                <button type="button" class="recipeButton btn btn-dark text-white"> <a href="<?php the_permalink(); ?>">READ MORE </a></button> 
              </div>
            </div>
            <div class="col-md-7">
              <?php the_post_thumbnail( 'large', array('class' => 'img-fluid')); ?> 
            </div>
          </div>
        </div>
      <?php $wp_query->$current_post++;

      }/*FIN DE IF*/ ?>

      <!-- FIN DE NOTRE SUPER BOUCLE ICI -->
    </div>
  </article>