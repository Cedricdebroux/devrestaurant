<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

  

  </header>

  <div class="entry-content">

    <?php the_content(); ?>
    <p>Template:content page.php</p>
    <?php 
      if(have_rows('the_menu_title')) :
        while(have_rows('the_menu_title')) : the_row();
          the_sub_field('title');
        endwhile;  
      endif;  
    ?>

  </div>

</article>
