<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

  

  </header>

  <div class="entry-content">

    <?php the_content(); ?>
  
    <p class="h1 mt-3 d-flex justify-content-center theMenu_category">
        <?php 
          if(have_rows('category1')) :
            while(have_rows('category1')) : the_row();
              the_sub_field('category_title');
            endwhile;  
          endif;  
        ?>
    </p>
    <div class="menu1">
    <?php 
      if(have_rows('menu1')) :
        while(have_rows('menu1')) : the_row();
          the_sub_field('name_of_the_meal');
        endwhile;  
      endif;  
    ?>
    </div>

  </div>

</article>
