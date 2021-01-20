<div> <!-- Fin dans le footer -->

 
<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
  <div class="entry-content container">
    <!-- NOTRE SUPER BOUCLE ICI -->
    <?php if ($i % 2 == 0) :?> 
      <div class="card mb-12 text-center">
        <div class="row no-gutters">
          <div class="col-md-7">
            <?php the_post_thumbnail( 'large', array('class' => 'img-fluid')); ?> 
          </div>
          <div class="col-md-5">
            <div class="card-body">
              <p class="card-text"><small class="text-muted"><?php echo get_the_date( 'j F, Y' ); ?></small></p>
              <h5 class="card-title"> <?php the_title( '<h2><a href="' . get_the_permalink() .'">', '</a></h2>' ); ?></h5>
              <p class="card-text"> <?php the_field('description');?></p>
              <button type="button" class="btn btn-dark text-white"> <a href="<?php the_permalink(); ?>">Read more </a></button> 
            </div>
          </div>
        </div>
      </div>
    <?php $i += 1; ?>
    <echo $i; ?>
    <?php else : ?>
      <div class="card mb-12 text-center">
        <div class="row no-gutters">
          <div class="col-md-5">
            <div class="card-body">
              <p class="card-text"><small class="text-muted"><?php echo get_the_date( 'j F, Y' ); ?></small></p>
              <h5 class="card-title"> <?php the_title( '<h2><a href="' . get_the_permalink() .'">', '</a></h2>' ); ?></h5>
              <p class="card-text"> <?php the_field('description');?></p>
              <button type="button" class="btn btn-dark text-white"> <a href="<?php the_permalink(); ?>">Read more </a></button> 
            </div>
          </div>
          <div class="col-md-7">
            <?php the_post_thumbnail( 'large', array('class' => 'img-fluid')); ?> 
          </div>
        </div>
      </div>
      <echo $i; ?>
    <?php $i += 1;
      endif; ?>

    <!-- FIN DE NOTRE SUPER BOUCLE ICI -->
  </div>
</article>
