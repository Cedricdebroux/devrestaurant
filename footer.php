
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
          <div class="d-flex flex-row bd-highlight socialNetwork">
            <a href="<?php the_field('twitter_link');?>" target="_blank"> 
              <div class="mr-2 network" id="twitter">
                <img  src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/twitter.svg" alt="">
              </div>
            </a>
            <a href="<?php the_field('linkedin_link');?>" target="_blank">
              <div class="mr-2 network" id="linkedin" >
                <img src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/linkedin.svg" alt="">
              </div>
            </a>
            <a href="<?php the_field('facebook_link');?>" target="_blank">
              <div class="mr-2 network" id="facebook">
                <img src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/facebook.svg" alt="">
              </div>
            </a>
            <a href="<?php the_field('instagram_link');?>" target="_blank">
              <div class="mr-2 network" id="instagram" >
                <img src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/instagram.svg" alt="">
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
          <div class="h5">Opening Hours</div>
          <div class="row openingHours">
              <div class="gridHr">
                <div class="d-flex align-items-center mr-2"><img class="logoFooter" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/time-clock-1.svg" alt=""></div>
                <div class="dayOpen">Mondays</div> 
                <div class="middle"><hr></div>
                <div class="rightSide"><?php the_field('monday');?></div>
              </div>
            </div>
            <div class="row openingHours">
              <div class="gridHr">
                <div class="d-flex align-items-center mr-2"><img class="logoFooter" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/time-clock-1.svg" alt=""></div>
                <div class="dayOpen">Tue - Fri</div> 
                <div class="middle"><hr></div>
                <div class="rightSide"><?php the_field('tue-fri');?></div>
              </div>
            </div>
            <div class="row openingHours">
              <div class="gridHr">
                <div class="d-flex align-items-center mr-2"><img class="logoFooter" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/time-clock-1.svg" alt=""></div>
                <div class="dayOpen">Sat - Sun</div> 
                <div class="middle"><hr></div>
                <div class="rightSide"><?php the_field('sat-sun');?></div>
              </div>
            </div>
            <div class="row openingHours">
              <div class="gridHr">
                <div class="d-flex align-items-center mr-2"><img class="logoFooter" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/time-clock-1.svg" alt=""></div>
                <div class="dayOpen">Public Holidays</div> 
                <div class="middle"><hr></div>
                <div class="rightSide"><?php the_field('public_holidays');?></div>
              </div>
            </div>
         
          
      </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
          <div class="h5">Opening Hours</div>
            <div class="infoUser mt-3">
              <div class="contactUs">
                <div><img src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/call-10-1.svg" alt=""></div>
                <div><p class="infoItem"><?php the_field('phone_number');?></p></div>
              </div>
              <div class="contactUs">
                <div><img src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/place-14-1.svg" alt=""></div>
                <div><p class="infoItem"><?php the_field('adress_street') . ", " . the_field('adress_number');?></p></div>
              </div>
              <div class="contactUs">
                <div></div>
                <div><p class="infoItem"><?php the_field('adress_city');?></p></div>
              </div>
              <div class="contactUs">
                <div></div>              
                <div><p class="infoItem"><?php the_field('adress_country');?></p></div>
              </div>
              <div class="contactUs">
                <div><img src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/mail-2-1.svg" alt=""></div>
                <div><p class="infoItem"><?php the_field('email');?> </p></div>  
              </div>
            </div>
          </div>
        </div>
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


