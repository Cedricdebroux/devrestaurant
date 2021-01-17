<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  

  <div class="entry-content">

    <?php the_excerpt(); ?>
   




    <div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-7">
    <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail( 'full' ); ?>
    </a>
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
