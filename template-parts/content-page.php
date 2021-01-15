<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

  

  </header>

  <div class="entry-content">
    <div class="theMenu_welcome">

    </div>

    <?php the_content(); ?>
  

    <?php 
      if(have_rows('menu')) :
        while(have_rows('menu')) : the_row();
          the_sub_field('title');
        endwhile;  
      endif;  
    ?>

  </div>

</article>
