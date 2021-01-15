<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

  

  </header>

  <div class="entry-content">

    <?php the_content(); ?>
    <p>Template:content page.php</p>
    <?php (the_field('the_menu_title')); ?>

  </div>

</article>
