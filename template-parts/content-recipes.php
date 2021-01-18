<div id="primary" class="content-area extended">

    <main id="main" class="site-main" role="main">
<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">
   
  </header>

  <div class="entry-content container">

  <div class="card mb-12 text-center">
  <div class="row no-gutters">
    <div class="col-md-7">
    <?php the_post_thumbnail( 'full' ); ?>

    </div>
    <div class="col-md-5">
      <div class="card-body">
      <p class="card-text"><small class="text-muted"><?php echo get_the_date( 'j F' ); ?></small></p>
        <h5 class="card-title"> <?php the_title( '<h2><a href="' . get_the_permalink() .'">', '</a></h2>' ); ?></h5>
        <p class="card-text"> <?php the_field('description');?></p>
      <button type="button" class="btn btn-dark"> <a href="<?php the_permalink(); ?>">Read more </a></button> 
      </div>
    </div>
  </div>
</div>

  </div>

</article>
