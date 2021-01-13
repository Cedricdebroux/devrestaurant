
  </div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="shapeDivider mb-5"><?php dynamic_sidebar('footer-area-divider');?></div>
    <?php
      $args = [
        // Location pickable in Customizer
        'theme_location'  =>  'footer-menu',
        // Main wrapper around the ul of posts
        'container'       =>  'nav',
        'container_id'    =>  'footer-menu',
        // Add text before link text (outside a tag)
        'before'          =>  '<',
        'after'           =>  '>',
        // Depth of child nav items to show
        'depth'           =>  1,
        // Callback function if menu is not available
        'fallback_cb'     =>  false,
      ];
      wp_nav_menu( $args );
    ?>

    <div class="row">
      <div class="footer row">
        <div class="col-lg-3 col-md-6 col-sm-12 mb-2"><?php dynamic_sidebar('footer-area-one');?></div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-2 text-center"><?php dynamic_sidebar('footer-area-two');?> </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-2 text-center"><?php dynamic_sidebar('footer-area-three');?></div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-2"><?php dynamic_sidebar('footer-area-four');?></div>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="text-center p-3">
        <p class="text-muted">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
        <a href="<?php echo esc_url( __( '#', 'TPrestaurant' ) ); ?>">
        <?php printf( esc_html__( 'Proudly powered by %s', 'TPrestaurant' ), 'Team Perfect' ); ?>
        </a>
      </div>
    </div>
        

    
  </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>


