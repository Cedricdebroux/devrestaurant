
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
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 17.979 17.979">
                <g id="time-clock" transform="translate(-1 -1)">
                  <circle id="Ellipse_57" data-name="Ellipse 57" cx="8.489" cy="8.489" r="8.489" transform="translate(1.5 1.5)" stroke-width="1" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" fill="none"/>
                  <path id="Path_1469" data-name="Path 1469" d="M5.5,5.5,9.138,9.138H15.2" transform="translate(0.851 0.851)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Line_191" data-name="Line 191" y2="1.213" transform="translate(9.989 3.926)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Line_192" data-name="Line 192" y1="1.213" transform="translate(9.989 14.84)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Line_193" data-name="Line 193" x2="1.213" transform="translate(3.926 9.989)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                </g>
              </svg> <p class="dayOpen">Mondays <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="76.609" height="51.796" viewBox="0 0 76.609 51.796">
                        <defs>
                          <style>
                            .cls-1, .cls-2, .cls-5 {
                              fill: none;
                            }

                            .cls-1, .cls-2 {
                              stroke-miterlimit: 10;
                            }

                            .cls-2 {
                              stroke: #000;
                              stroke-width: 2px;
                            }

                            .cls-3, .cls-4 {
                              stroke: none;
                            }

                            .cls-5 {
                              clip-path: url(#clip);
                            }
                          </style>
                          <clipPath id="clip">
                            <use xlink:href="#fill"/>
                          </clipPath>
                        </defs>
                        <g id="brunch" transform="translate(652.029 -294.836)">
                          <g id="Group_400" data-name="Group 400" transform="translate(-652.029 294.836)">
                            <g id="Path_4155" data-name="Path 4155" class="cls-1" transform="translate(656.898 -293.213)">
                              <path class="cls-3" d="M-605.861,303.925a18.906,18.906,0,0,0-18.906,18.907h37.813A18.908,18.908,0,0,0-605.861,303.925Z"/>
                              <path class="cls-4" d="M -605.861083984375 305.9249572753906 C -610.3771362304688 305.9249572753906 -614.6226806640625 307.6835632324219 -617.8156127929688 310.8767700195312 C -620.532470703125 313.5938415527344 -622.2106323242188 317.0726318359375 -622.6506958007812 320.8320922851562 L -589.0698852539062 320.8320922851562 C -589.5093994140625 317.0733947753906 -591.1881103515625 313.5946960449219 -593.906494140625 310.8770141601562 C -597.1007080078125 307.6836242675781 -601.3462524414062 305.9249572753906 -605.861083984375 305.9249572753906 M -605.861083984375 303.9249572753906 C -595.42333984375 303.9249572753906 -586.9515380859375 312.3896789550781 -586.9539794921875 322.8320922851562 L -624.7669677734375 322.8320922851562 C -624.7669677734375 312.3896789550781 -616.303466796875 303.9249572753906 -605.861083984375 303.9249572753906 Z"/>
                            </g>
                            <g id="Path_4156" data-name="Path 4156" class="cls-1" transform="translate(655.888 -290.158)">
                              <path class="cls-3" d="M-584.055,321.032h-41.589a4.779,4.779,0,0,0-4.776,4.778,4.777,4.777,0,0,0,4.776,4.776h41.589a4.777,4.777,0,0,0,4.776-4.776A4.779,4.779,0,0,0-584.055,321.032Z"/>
                              <path class="cls-4" d="M -625.644287109375 323.031982421875 C -627.1748046875 323.031982421875 -628.4199829101562 324.2781982421875 -628.4199829101562 325.8100280761719 C -628.4199829101562 327.3405456542969 -627.1748046875 328.5857238769531 -625.644287109375 328.5857238769531 L -584.0549926757812 328.5857238769531 C -582.5244750976562 328.5857238769531 -581.279296875 327.3405456542969 -581.279296875 325.8100280761719 C -581.279296875 324.2781982421875 -582.5244750976562 323.031982421875 -584.0549926757812 323.031982421875 L -625.644287109375 323.031982421875 M -625.644287109375 321.031982421875 L -584.0549926757812 321.031982421875 C -581.41845703125 321.031982421875 -579.279296875 323.1734924316406 -579.279296875 325.8100280761719 C -579.279296875 328.446533203125 -581.41845703125 330.5857238769531 -584.0549926757812 330.5857238769531 L -625.644287109375 330.5857238769531 C -628.28076171875 330.5857238769531 -630.4199829101562 328.446533203125 -630.4199829101562 325.8100280761719 C -630.4199829101562 323.1734924316406 -628.28076171875 321.031982421875 -625.644287109375 321.031982421875 Z"/>
                            </g>
                            <g id="Rectangle_200" data-name="Rectangle 200" class="cls-2" transform="translate(30.543 41.375)">
                              <rect id="fill" class="cls-3" width="39.403" height="1.282"/>
                              <path class="cls-5" d="M0,0.2819563150405884h39.403167724609375M38.403167724609375,0v1.2819563150405884M39.403167724609375,1h-39.403167724609375M1,1.2819563150405884v-1.2819563150405884"/>
                            </g>
                            <g id="Path_4157" data-name="Path 4157" class="cls-1" transform="translate(656.708 -288.201)">
                              <path class="cls-3" d="M-625.832,336.391a3.024,3.024,0,0,0,3.025,3.023h32.683a3.025,3.025,0,0,0,3.025-3.023v-4.4h-38.733Z"/>
                              <path class="cls-4" d="M -590.1238403320312 337.4141845703125 C -589.5584106445312 337.4141845703125 -589.0984497070312 336.9552001953125 -589.0984497070312 336.3910522460938 L -589.0984497070312 333.989013671875 L -623.8319091796875 333.989013671875 L -623.8319091796875 336.3910522460938 C -623.8319091796875 336.9552001953125 -623.3719482421875 337.4141845703125 -622.8065185546875 337.4141845703125 L -590.1238403320312 337.4141845703125 M -590.1238403320312 339.4141845703125 L -622.8065185546875 339.4141845703125 C -624.4777221679688 339.4141845703125 -625.8319091796875 338.0611267089844 -625.8319091796875 336.3910522460938 L -625.8319091796875 331.989013671875 L -587.0984497070312 331.989013671875 L -587.0984497070312 336.3910522460938 C -587.0984497070312 338.0611267089844 -588.4537963867188 339.4141845703125 -590.1238403320312 339.4141845703125 Z"/>
                            </g>
                            <g id="Path_4158" data-name="Path 4158" class="cls-1" transform="translate(652.029 -294.836)">
                              <path class="cls-3" d="M-635.942,297.461a7.235,7.235,0,0,0-2.724,5.667v10.455h-13.363v33.049h22.422V313.583h-6.709V303.127a4.887,4.887,0,0,1,1.885-3.865,9.223,9.223,0,0,1,6.162-2.047l.408-2.314A11.5,11.5,0,0,0-635.942,297.461Z"/>
                              <path class="cls-4" d="M -650.0289916992188 315.582763671875 L -650.0289916992188 344.6318969726562 L -631.6072998046875 344.6318969726562 L -631.6072998046875 315.582763671875 L -636.31591796875 315.582763671875 L -638.31591796875 315.582763671875 L -638.6659545898438 315.582763671875 L -650.0289916992188 315.582763671875 M -628.7522583007812 294.8362121582031 C -628.4158325195312 294.8362121582031 -628.115234375 294.8590087890625 -627.8617553710938 294.9019470214844 L -628.2695922851562 297.2155456542969 C -628.4166870117188 297.1883239746094 -628.5977172851562 297.1741638183594 -628.805908203125 297.1741638183594 C -630.1572265625 297.1741943359375 -632.6522216796875 297.7706909179688 -634.4313354492188 299.2627868652344 C -635.6817626953125 300.3117065429688 -636.31591796875 301.6128845214844 -636.31591796875 303.1274108886719 L -636.31591796875 313.582763671875 L -629.6072998046875 313.582763671875 L -629.6072998046875 346.6318969726562 L -652.0289916992188 346.6318969726562 L -652.0289916992188 313.582763671875 L -638.6659545898438 313.582763671875 L -638.6659545898438 303.1274108886719 C -638.6659545898438 300.9163513183594 -637.724365234375 298.9563293457031 -635.9422607421875 297.4606628417969 C -633.671142578125 295.5547485351562 -630.6419677734375 294.8361206054688 -628.7522583007812 294.8362121582031 Z"/>
                            </g>
                          </g>
                        </g>
                      </svg> <?php the_field('monday');?></p>
            </div>
            <div class="row openingHours">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 17.979 17.979">
                <g id="time-clock" transform="translate(-1 -1)">
                  <circle id="Ellipse_57" data-name="Ellipse 57" cx="8.489" cy="8.489" r="8.489" transform="translate(1.5 1.5)" stroke-width="1" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" fill="none"/>
                  <path id="Path_1469" data-name="Path 1469" d="M5.5,5.5,9.138,9.138H15.2" transform="translate(0.851 0.851)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Line_191" data-name="Line 191" y2="1.213" transform="translate(9.989 3.926)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Line_192" data-name="Line 192" y1="1.213" transform="translate(9.989 14.84)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Line_193" data-name="Line 193" x2="1.213" transform="translate(3.926 9.989)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                </g>
              </svg> <p class="dayOpen">Tue - Fri ---- <?php the_field('tue-fri');?></p>
            </div>
            <div class="row openingHours">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 17.979 17.979">
                <g id="time-clock" transform="translate(-1 -1)">
                  <circle id="Ellipse_57" data-name="Ellipse 57" cx="8.489" cy="8.489" r="8.489" transform="translate(1.5 1.5)" stroke-width="1" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" fill="none"/>
                  <path id="Path_1469" data-name="Path 1469" d="M5.5,5.5,9.138,9.138H15.2" transform="translate(0.851 0.851)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Line_191" data-name="Line 191" y2="1.213" transform="translate(9.989 3.926)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Line_192" data-name="Line 192" y1="1.213" transform="translate(9.989 14.84)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Line_193" data-name="Line 193" x2="1.213" transform="translate(3.926 9.989)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                </g>
              </svg> <p class="dayOpen">Sat - Sun  ---- <?php the_field('sat-sun');?></p>
            </div>
            <div class="row openingHours">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 17.979 17.979">
                <g id="time-clock" transform="translate(-1 -1)">
                  <circle id="Ellipse_57" data-name="Ellipse 57" cx="8.489" cy="8.489" r="8.489" transform="translate(1.5 1.5)" stroke-width="1" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" fill="none"/>
                  <path id="Path_1469" data-name="Path 1469" d="M5.5,5.5,9.138,9.138H15.2" transform="translate(0.851 0.851)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Line_191" data-name="Line 191" y2="1.213" transform="translate(9.989 3.926)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Line_192" data-name="Line 192" y1="1.213" transform="translate(9.989 14.84)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Line_193" data-name="Line 193" x2="1.213" transform="translate(3.926 9.989)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                </g>
              </svg> <p class="dayOpen">Public Holidays---- <?php the_field('public_holidays');?></p>
            </div>
          
      
      </div>
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


