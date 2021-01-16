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
        while(have_rows('menu1')) : the_row(); ?>
            <div class="container row row-cols-3">
                <div class="col"> <?php the_sub_field('name_of_the_meal');?> </div>
                <div class="col"> <?php the_sub_field('description_of_the_meal');?> </div>
                <div class="col"> <?php the_sub_field('price_of_the_meal');?> </div>
            </div>
       <?php endwhile;  
      endif;  
    ?>
    </div>
    <p class="h1 mt-3 d-flex justify-content-center theMenu_category">
    <?php 
      if(have_rows('category2')) :
        while(have_rows('category2')) : the_row();
          the_sub_field('category_title2');
        endwhile;  
      endif;  
    ?>
</p>
    <div class="menu2">
<?php 
  if(have_rows('menu2')) :
    while(have_rows('menu2')) : the_row(); ?>
        <div class="container row row-cols-3">
            <div class="col"> <?php the_sub_field('name_of_the_meal');?> </div>
            <div class="col"> <?php the_sub_field('description_of_the_meal');?> </div>
            <div class="col"> <?php the_sub_field('price_of_the_meal');?> </div>
        </div>
   <?php endwhile;  
  endif;  
?>
</div>
<p class="h1 mt-3 d-flex justify-content-center theMenu_category">
    <?php 
      if(have_rows('category3')) :
        while(have_rows('category3')) : the_row();
          the_sub_field('category_title3');
        endwhile;  
      endif;  
    ?>
</p>
<div class="menu3">
<?php 
  if(have_rows('menu3')) :
    while(have_rows('menu3')) : the_row(); ?>
        <div class="container row row-cols-3">
            <div class="col"> <?php the_sub_field('name_of_the_meal');?> </div>
            <div class="col"> <?php the_sub_field('description_of_the_meal');?> </div>
            <div class="col"> <?php the_sub_field('price_of_the_meal');?> </div>
        </div>
   <?php endwhile;  
  endif;  
?>
</div>

  </div>

</article>
