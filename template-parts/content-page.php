<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

  

  </header>

  <div class="entry-content">
    <div class="theMenu_welcome">

    </div>

    <?php the_content(); ?>
    <p>Template:content page.php</p>

    <?php 
      if(have_rows('the_menu')) :
        while(have_rows('the_menu')) : the_row();
          the_sub_field('title');
        endwhile;  
      endif;  
    ?>

  </div>

</article>
