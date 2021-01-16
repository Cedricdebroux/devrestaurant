
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
          <div class="d-flex flex-row bd-highlight">
            <a href="<?php the_field('twitter_link');?>" target="_blank"> 
              <div class="mr-2">
                <svg id="twitter" xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 11.433 9.285">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #fff;
                      }
                    </style>
                  </defs>
                  <path class="cls-1" d="M-1813.441,4229.412a4.709,4.709,0,0,0,1.349-.363,4.9,4.9,0,0,1-1.175,1.211c0,.068.007.17.007.305a6.661,6.661,0,0,1-.276,1.883,6.8,6.8,0,0,1-.838,1.8,7.043,7.043,0,0,1-1.338,1.527,5.925,5.925,0,0,1-1.872,1.059,6.833,6.833,0,0,1-2.343.4,6.51,6.51,0,0,1-3.6-1.052,5.091,5.091,0,0,0,.566.029,4.589,4.589,0,0,0,2.909-1,2.287,2.287,0,0,1-1.364-.468,2.29,2.29,0,0,1-.827-1.157,3,3,0,0,0,.442.036,2.446,2.446,0,0,0,.617-.079,2.305,2.305,0,0,1-1.346-.81,2.26,2.26,0,0,1-.533-1.49v-.029a2.311,2.311,0,0,0,1.059.3,2.327,2.327,0,0,1-.761-.834,2.276,2.276,0,0,1-.283-1.117,2.3,2.3,0,0,1,.319-1.183,6.622,6.622,0,0,0,2.136,1.73,6.527,6.527,0,0,0,2.695.722,2.651,2.651,0,0,1-.058-.536,2.26,2.26,0,0,1,.686-1.658,2.258,2.258,0,0,1,1.658-.686,2.261,2.261,0,0,1,1.712.74,4.607,4.607,0,0,0,1.487-.566,2.279,2.279,0,0,1-1.03,1.292Z" transform="translate(1823.525 -4227.946)"/>
                </svg>
              </div>
            </a>
            <a href="<?php the_field('linkedin_link');?>" target="_blank">
              <div class="mr-2">
                <svg  id="linkedin" xmlns="http://www.w3.org/2000/svg" width="11.143" height="10.648" viewBox="0 0 11.143 10.648">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #fff;
                      }
                    </style>
                  </defs>
                  <path class="cls-1" d="M-1724.907,4228.4a1.149,1.149,0,0,1-.366.885,1.369,1.369,0,0,1-.983.356h-.015a1.31,1.31,0,0,1-.957-.356,1.19,1.19,0,0,1-.363-.885,1.166,1.166,0,0,1,.374-.888,1.361,1.361,0,0,1,.975-.352,1.323,1.323,0,0,1,.965.352A1.207,1.207,0,0,1-1724.907,4228.4Zm-.152,2.22v7.189h-2.394v-7.189Zm8.611,3.069v4.12h-2.387v-3.845a2.1,2.1,0,0,0-.294-1.193,1.029,1.029,0,0,0-.917-.432,1.177,1.177,0,0,0-.766.251,1.539,1.539,0,0,0-.46.62,1.761,1.761,0,0,0-.08.588v4.011h-2.387q.015-2.894.015-4.693t-.007-2.148l-.008-.348h2.387v1.045h-.015a3.035,3.035,0,0,1,.3-.406,3.077,3.077,0,0,1,.41-.378,1.894,1.894,0,0,1,.631-.315,2.884,2.884,0,0,1,.831-.113,2.579,2.579,0,0,1,1.995.824A3.455,3.455,0,0,1-1716.448,4233.692Z" transform="translate(1727.591 -4227.163)"/>
                </svg>
              </div>
            </a>
            <a href="<?php the_field('linkedin_link');?>" target="_blank">
              <div class="mr-2">
                <svg id="facebook" xmlns="http://www.w3.org/2000/svg" width="6.267" height="12.072" viewBox="0 0 6.267 12.072">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #fff;
                      }
                    </style>
                  </defs>
                  <path class="cls-1" d="M-1864.1,4226.089a12.064,12.064,0,0,1,1.654.087v1.915h-1.139a1.062,1.062,0,0,0-.841.262,1.2,1.2,0,0,0-.218.783v1.371h2.126l-.283,2.147h-1.843v5.507h-2.22v-5.507h-1.849v-2.147h1.849v-1.581a2.81,2.81,0,0,1,.755-2.094,2.741,2.741,0,0,1,2.009-.743Z" transform="translate(1868.716 -4226.089)"/>
                </svg>
              </div>
            </a>
            <a href="<?php the_field('instagram_link');?>" target="_blank">
              <div class="mr-2">
                <svg id="instagram" xmlns="http://www.w3.org/2000/svg" width="11.143" height="11.144" viewBox="0 0 11.143 11.144">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #fff;
                      }
                    </style>
                  </defs>
                  <path class="cls-1" d="M-1764.375,4230.29q.036.637.036,2.3t-.036,2.3a3.4,3.4,0,0,1-.9,2.336,3.4,3.4,0,0,1-2.335.9q-.639.036-2.3.037t-2.3-.037a3.4,3.4,0,0,1-2.336-.9,3.4,3.4,0,0,1-.9-2.336q-.038-.639-.037-2.3t.037-2.3a3.4,3.4,0,0,1,.9-2.336,3.4,3.4,0,0,1,2.336-.9q.639-.037,2.3-.036t2.3.036a3.4,3.4,0,0,1,2.335.9,3.4,3.4,0,0,1,.9,2.336Zm-4.98-2.275-.555,0-.555,0q-.5,0-.765,0c-.175,0-.408.01-.7.022a5.822,5.822,0,0,0-.747.072,2.805,2.805,0,0,0-.518.135,1.852,1.852,0,0,0-.639.421,1.87,1.87,0,0,0-.421.638,2.986,2.986,0,0,0-.134.518,5.821,5.821,0,0,0-.072.748c-.012.292-.02.526-.022.7s0,.429,0,.765,0,.521,0,.555,0,.219,0,.555,0,.591,0,.765.01.408.022.7a5.786,5.786,0,0,0,.072.747,2.982,2.982,0,0,0,.134.519,1.884,1.884,0,0,0,.421.639,1.887,1.887,0,0,0,.639.421,2.98,2.98,0,0,0,.518.134,5.813,5.813,0,0,0,.747.072c.293.012.526.02.7.022s.429,0,.765,0l.555,0,.555,0q.5,0,.765,0c.174,0,.408-.01.7-.022a5.782,5.782,0,0,0,.747-.072,2.971,2.971,0,0,0,.519-.134,1.886,1.886,0,0,0,.639-.421,1.9,1.9,0,0,0,.42-.639,2.9,2.9,0,0,0,.134-.519,5.58,5.58,0,0,0,.073-.747c.012-.292.019-.526.022-.7s0-.429,0-.765,0-.521,0-.555,0-.219,0-.555,0-.591,0-.765-.01-.408-.022-.7a5.613,5.613,0,0,0-.073-.748,2.9,2.9,0,0,0-.134-.518,1.886,1.886,0,0,0-.42-.638,1.851,1.851,0,0,0-.639-.421,2.8,2.8,0,0,0-.519-.135,5.791,5.791,0,0,0-.747-.072c-.292-.012-.526-.019-.7-.022S-1769.019,4228.013-1769.355,4228.015Zm1.469,2.55a2.756,2.756,0,0,1,.834,2.024,2.756,2.756,0,0,1-.834,2.024,2.756,2.756,0,0,1-2.024.834,2.756,2.756,0,0,1-2.024-.834,2.756,2.756,0,0,1-.834-2.024,2.756,2.756,0,0,1,.834-2.024,2.756,2.756,0,0,1,2.024-.834A2.756,2.756,0,0,1-1767.886,4230.565Zm-.711,3.337a1.786,1.786,0,0,0,.544-1.313,1.79,1.79,0,0,0-.544-1.313,1.79,1.79,0,0,0-1.313-.544,1.789,1.789,0,0,0-1.313.544,1.79,1.79,0,0,0-.544,1.313,1.785,1.785,0,0,0,.544,1.313,1.787,1.787,0,0,0,1.313.544A1.788,1.788,0,0,0-1768.6,4233.9Zm2.133-4.759a.647.647,0,0,1,.2.472.642.642,0,0,1-.2.471.643.643,0,0,1-.472.2.64.64,0,0,1-.471-.2.639.639,0,0,1-.2-.471.643.643,0,0,1,.2-.472.643.643,0,0,1,.471-.2A.647.647,0,0,1-1766.464,4229.143Z" transform="translate(1775.482 -4227.018)"/>
                </svg>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-2 text-center">
          <div class="h5">Opening Hours</div>
          <div class="row openingHours">
              <div class="gridHr">
                <div><img class="logoFooter" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/time-clock-1.svg" alt=""></div>
                <div class="dayOpen">Mondays</div> 
                <div class="middle"><hr></div>
                <div class="rightSide"><?php the_field('monday');?></div>
              </div>
            </div>
            <div class="row openingHours">
              <div class="gridHr">
                <div><img class="logoFooter" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/time-clock-1.svg" alt=""></div>
                <div class="dayOpen">Tue - Fri</div> 
                <div class="middle"><hr></div>
                <div class="rightSide"><?php the_field('tue-fri');?></div>
              </div>
            </div>
            <div class="row openingHours">
              <div class="gridHr">
                <div><img class="logoFooter" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/time-clock-1.svg" alt=""></div>
                <div class="dayOpen">Sat - Sun</div> 
                <div class="middle"><hr></div>
                <div class="rightSide"><?php the_field('sat-sun');?></div>
              </div>
            </div>
            <div class="row openingHours">
              <div class="gridHr">
                <div><img class="logoFooter" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/time-clock-1.svg" alt=""></div>
                <div class="dayOpen">Public Holidays</div> 
                <div class="middle"><hr></div>
                <div class="rightSide"><?php the_field('public_holidays');?></div>
              </div>
            </div>
         
          
      </div>
        <div class="col-lg-3 col-md-6 col-sm-12 mb-2 text-center"><?php dynamic_sidebar('footer-area-three');?>
          <div class="test mt-3">
            <div class="row row-cols-2">
              <img class="col-2 logoFooter" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/call-10-1.svg" alt="" width="20" height="20">
              <p class="col-10 infoItem"><?php the_field('phone_number');?></p> 
            </div>
            <div class="row row-cols-2">
              <img class="col-2 logoFooter" src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/place-14-1.svg" alt="" width="20" height="20">
              <p class="col-10 infoItem"><?php the_field('adress_street');?></p>
            </div>
            <div class="row row-cols-2">
              <div class="col-2"></div>
              <p class="col-10 infoItem"><?php the_field('adress_number');?></p>
            </div>
            <div class="row row-cols-2">
              <div class="col-2"></div>              
              <p class="col-10 infoItem"><?php the_field('adress_country');?></p>
            </div>
            <div class="row row-cols-2">
              <img class="col-2 logoFooter"src="https://teamperfect.bout-de-creations.com/wp-content/uploads/2021/01/mail-2-1.svg" alt="" width="20" height="20">
              <p class="col-10 infoItem"><?php the_field('email');?> </p>  
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


