<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

  

  </header>

  <div class="entry-content">

    <?php the_content(); ?>
    <p>Template:content page.php</p>
    <div class="theMenu_welcome">
        <?php 
          if(have_rows('category1')) :
            while(have_rows('category1')) : the_row();
              the_sub_field('category_title');
            endwhile;  
          endif;  
        ?>
    </div>

    <?php 
      if(have_rows('menu')) :
        while(have_rows('menu')) : the_row();
          the_sub_field('title');
        endwhile;  
      endif;  
    ?>

  </div>

</article>
