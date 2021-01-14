
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
        <div class="col-lg-3 col-md-6 col-sm-12 mb-2"><?php dynamic_sidebar('footer-area-one');?> 
        <svg xmlns="http://www.w3.org/2000/svg" width="11.433" height="9.285" viewBox="0 0 11.433 9.285">
  <defs>
    <style>
      .cls-1 {
        fill: #fff;
      }
    </style>
  </defs>
  <path id="twitter" class="cls-1" d="M-1813.441,4229.412a4.709,4.709,0,0,0,1.349-.363,4.9,4.9,0,0,1-1.175,1.211c0,.068.007.17.007.305a6.661,6.661,0,0,1-.276,1.883,6.8,6.8,0,0,1-.838,1.8,7.043,7.043,0,0,1-1.338,1.527,5.925,5.925,0,0,1-1.872,1.059,6.833,6.833,0,0,1-2.343.4,6.51,6.51,0,0,1-3.6-1.052,5.091,5.091,0,0,0,.566.029,4.589,4.589,0,0,0,2.909-1,2.287,2.287,0,0,1-1.364-.468,2.29,2.29,0,0,1-.827-1.157,3,3,0,0,0,.442.036,2.446,2.446,0,0,0,.617-.079,2.305,2.305,0,0,1-1.346-.81,2.26,2.26,0,0,1-.533-1.49v-.029a2.311,2.311,0,0,0,1.059.3,2.327,2.327,0,0,1-.761-.834,2.276,2.276,0,0,1-.283-1.117,2.3,2.3,0,0,1,.319-1.183,6.622,6.622,0,0,0,2.136,1.73,6.527,6.527,0,0,0,2.695.722,2.651,2.651,0,0,1-.058-.536,2.26,2.26,0,0,1,.686-1.658,2.258,2.258,0,0,1,1.658-.686,2.261,2.261,0,0,1,1.712.74,4.607,4.607,0,0,0,1.487-.566,2.279,2.279,0,0,1-1.03,1.292Z" transform="translate(1823.525 -4227.946)"/>
</svg></div>
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


