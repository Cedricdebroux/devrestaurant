<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

    <?php the_title( '<h2><a href="' . get_the_permalink() .'">', '</a></h2>' ); ?>

    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail( 'full' ); ?>
    </a>

  </header>

  <div class="entry-content">

    <?php the_excerpt(); ?>
   




    <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-7">
    <?php the_post_thumbnail( 'full' ); ?>
    </div>
    <div class="col-md-5">
      <div class="card-body">
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <h5 class="card-title"> <?php the_title( '<h2><a href="' . get_the_permalink() .'">', '</a></h2>' ); ?></h5>
        <p class="card-text"> <?php the_field('description');?></p>
       
      </div>
    </div>
  </div>
</div>






  </div>

</article>
