<?php get_header(); ?>
<div class="video-bg desktop">
  <video id="example_video_1" class="video-js vjs-default-skin"  preload="auto" data-setup='{"example_option":true}'>
    <source src="<?php echo get_template_directory_uri(); ?>/images/homepage_animation.ogv#t=1,17" type="video/ogv">
    <source src="<?php echo get_template_directory_uri(); ?>/images/homepage_animation.webm#t=1,17" type="video/webm">
    <source src="<?php echo get_template_directory_uri(); ?>/images/homepage_animation.mp4#t=1,17" type="video/mp4">
    <!--[if IE]><div style='clear: both; height: 112px; padding:0; position: relative;'><a href="http://www.theie8countdown.com/ie-users-info"><img src="" border="0" height="112" width="348" alt="" /></a></div><![endif]-->
  </video>
</div>
<div class="home-page animation-text-wrapper">
<?php while ( have_posts() ) : the_post(); ?>
  <div class="animation-text">
    <?php the_content(); ?>
  </div>
<?php endwhile; wp_reset_query(); ?>
</div>

<div class='rest-of-homepage'>
  <div class="mid-cont home-page">
    <div class='tech-intro'><?php the_field('technology_intro'); ?></div>
    <div class="icon-container">
      <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500"
     enable-background="new 0 0 500 500" xml:space="preserve" style="padding: 10px 2%">
        <switch>
          <foreignObject requiredExtensions="&ns_ai;" x="0" y="0" width="1" height="1">
            <i:pgfRef  xlink:href="#adobe_illustrator_pgf">
            </i:pgfRef>
          </foreignObject>
          <g i:extraneous="self">
            <path fill="none" stroke="#2B3990" stroke-width="2" stroke-miterlimit="10" d="M217.6,386.8V257.3h-33.9v-49.1h33.9v-53
              c0,0,3.9-40.7,47.6-46.6c0,0,26.5-4.4,53,0v46.6l-37.3-1c0,0-11.8,0.5-13.2,12.8l-0.5,41.2h51v48.6h-51v130H217.6z"/>
            <circle fill="none" stroke="#2B3990" stroke-width="2" stroke-miterlimit="10" cx="256.6" cy="239.5" r="194.7"/>
          </g>
        </switch>
      </svg>
      <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
   xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500"
   enable-background="new 0 0 500 500" xml:space="preserve" style="padding: 0 2%">
        <switch>
          <foreignObject requiredExtensions="&ns_ai;" x="0" y="0" width="1" height="1">
            <i:pgfRef  xlink:href="#adobe_illustrator_pgf">
            </i:pgfRef>
          </foreignObject>
          <g i:extraneous="self">
            <g>
              <g>
                <path fill="none" stroke="#58BE91" stroke-width="2" stroke-miterlimit="10" d="M390.8,356.9H116.1c-3,0-5.5-2.5-5.5-5.5V132.5
                  c0-3,2.5-5.5,5.5-5.5h274.7c3,0,5.5,2.5,5.5,5.5v218.9C396.3,354.4,393.9,356.9,390.8,356.9z"/>
                <line fill="none" stroke="#58BE91" stroke-width="2" stroke-miterlimit="10" x1="110.6" y1="307.1" x2="396.3" y2="307.1"/>
                <line fill="none" stroke="#58BE91" stroke-width="2" stroke-miterlimit="10" x1="210.8" y1="394.5" x2="299.5" y2="394.5"/>
                <line fill="none" stroke="#58BE91" stroke-width="2" stroke-miterlimit="10" x1="237.7" y1="394.5" x2="237.7" y2="356.9"/>
                <line fill="none" stroke="#58BE91" stroke-width="2" stroke-miterlimit="10" x1="272" y1="394.5" x2="272" y2="356.9"/>
              </g>
              <circle fill="none" stroke="#58BE91" stroke-width="2" stroke-miterlimit="10" cx="253.5" cy="252.7" r="215.1"/>
            </g>
          </g>
        </switch>
      </svg>
      <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
   xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500"
   enable-background="new 0 0 500 500" xml:space="preserve" style="padding: 0 2%">
        <switch>
          <foreignObject requiredExtensions="&ns_ai;" x="0" y="0" width="1" height="1">
            <i:pgfRef  xlink:href="#adobe_illustrator_pgf">
            </i:pgfRef>
          </foreignObject>
          <g i:extraneous="self">
            <g>
              <path fill="none" stroke="#41A9E0" stroke-width="2" stroke-miterlimit="10" d="M240.8,211.8c0,0,2.4-81.4,75.8-35.9l21.7-11.1
                L325.8,187l19.3-3.3l-19.3,19.9c0,0,10.6,177.8-177.9,111.4c0,0,49.5-2.4,53.9-16c0,0-38.6-24.7-38.6-32l16.7,1
                c0,0-24.9-13.6-31.9-42.6l19.1,0.5c0,0-26.7-25.2-11.7-53.8C155.3,172.1,196.4,221.5,240.8,211.8z"/>
              <ellipse fill="none" stroke="#41A9E0" stroke-width="2" stroke-miterlimit="10" cx="246.5" cy="246" rx="206" ry="206.7"/>
            </g>
          </g>
        </switch>
      </svg>
      <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
   xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500"
   enable-background="new 0 0 500 500" xml:space="preserve" style="padding: 0 2%">
        <switch>
          <foreignObject requiredExtensions="&ns_ai;" x="0" y="0" width="1" height="1">
            <i:pgfRef  xlink:href="#adobe_illustrator_pgf">
            </i:pgfRef>
          </foreignObject>
          <g i:extraneous="self">
            <line fill="none" stroke="#58BE91" stroke-width="2" stroke-miterlimit="10" x1="-350.7" y1="266" x2="-65" y2="266"/>
            <line fill="none" stroke="#58BE91" stroke-width="2" stroke-miterlimit="10" x1="-250.5" y1="353.4" x2="-161.8" y2="353.4"/>
            <line fill="none" stroke="#58BE91" stroke-width="2" stroke-miterlimit="10" x1="-223.6" y1="353.4" x2="-223.6" y2="315.7"/>
            <line fill="none" stroke="#58BE91" stroke-width="2" stroke-miterlimit="10" x1="-189.4" y1="353.4" x2="-189.4" y2="315.7"/>
            <g>
              <circle fill="none" stroke="#9B74B3" stroke-width="2" stroke-miterlimit="10" cx="248.9" cy="252.7" r="215.1"/>
              <path fill="none" stroke="#9B74B3" stroke-width="2" stroke-miterlimit="10" d="M361.2,314.4H137.5c-3,0-5.5-2.5-5.5-5.5V169.6
                c0-3,2.5-5.5,5.5-5.5h223.8c3,0,5.5,2.5,5.5,5.5v139.3C366.7,312,364.3,314.4,361.2,314.4z"/>
              <path fill="none" stroke="#9B74B3" stroke-width="2" stroke-miterlimit="10" d="M373.7,326H248.9H125.2c-3,0-5.5-2.5-5.5-5.5
                V157.9c0-3,2.5-5.5,5.5-5.5h248.5c3,0,5.5,2.5,5.5,5.5v162.6C379.2,323.5,376.7,326,373.7,326z"/>
              <path fill="none" stroke="#58BE91" stroke-width="2" stroke-miterlimit="10" d="M248.9,328"/>
              <path fill="none" stroke="#9B74B3" stroke-width="2" stroke-miterlimit="10" d="M375.6,325.6H401c0,0-0.9,16.3-42.8,16.7H248.9
                h0.1H139.7c-41.9-0.5-42.8-16.7-42.8-16.7l28.8,0.3"/>
              <path fill="#9B74B3" d="M277.8,326v2.2c0,1.3-1.5,2.4-3.4,2.4H224c-1.9,0-3.4-1.1-3.4-2.4v-2L277.8,326z"/>
            </g>
          </g>
        </switch>
      </svg>
      <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
   xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500"
   enable-background="new 0 0 500 500" xml:space="preserve" style="padding: 10px 2%">
        <switch>
          <foreignObject requiredExtensions="&ns_ai;" x="0" y="0" width="1" height="1">
            <i:pgfRef  xlink:href="#adobe_illustrator_pgf">
            </i:pgfRef>
          </foreignObject>
          <g i:extraneous="self">
            <g>
              <g>
                <g>
                  <path fill="#D81C5C" d="M222.7,195.8c0,25.1,0,50.2,0,75.3c0,3.7,0,7.3,0,11c0,0.8,1,1.4,1.7,1c22.8-14.4,45.6-28.8,68.4-43.1
                    c0.7-0.5,0.7-1.5,0-1.9c-22.8-14.4-45.6-28.8-68.4-43.1c-1.2-0.8-2.4,1.2-1.1,1.9c22.8,14.4,45.6,28.8,68.4,43.1
                    c0-0.6,0-1.3,0-1.9c-22.8,14.4-45.6,28.8-68.4,43.1c0.6,0.3,1.1,0.6,1.7,1c0-25.1,0-50.2,0-75.3c0-3.7,0-7.3,0-11
                    C225,194.4,222.7,194.3,222.7,195.8z"/>
                </g>
              </g>
              <path fill="none" stroke="#D81C5C" stroke-width="2" stroke-miterlimit="10" d="M365.3,353.1H150.4c-2.2,0-4-1.8-4-4V132.8
                c0-2.2,1.8-4,4-4h214.9c2.2,0,4,1.8,4,4V349C369.4,351.2,367.5,353.1,365.3,353.1z"/>
              <line fill="none" stroke="#D81C5C" stroke-width="2" stroke-miterlimit="10" x1="145" y1="168" x2="368" y2="168"/>
              <line fill="none" stroke="#D81C5C" stroke-width="2" stroke-miterlimit="10" x1="146" y1="312" x2="369" y2="312"/>
              <g>
                <g>
                  <path fill="#D81C5C" d="M162.7,331.9c4.8,0,9.7,0,14.5,0c1.9,0,1.9-3,0-3c-4.8,0-9.7,0-14.5,0
                    C160.8,328.9,160.8,331.9,162.7,331.9L162.7,331.9z"/>
                </g>
              </g>
              <g>
                <g>
                  <path fill="#D81C5C" d="M193.5,331.9c4.8,0,9.7,0,14.5,0c1.9,0,1.9-3,0-3c-4.8,0-9.7,0-14.5,0
                    C191.6,328.9,191.6,331.9,193.5,331.9L193.5,331.9z"/>
                </g>
              </g>
              <g>
                <g>
                  <path fill="#D81C5C" d="M221.7,331.9c4.8,0,9.7,0,14.5,0c1.9,0,1.9-3,0-3c-4.8,0-9.7,0-14.5,0
                    C219.8,328.9,219.8,331.9,221.7,331.9L221.7,331.9z"/>
                </g>
              </g>
              <g>
                <g>
                  <path fill="#D81C5C" d="M250.6,331.9c4.8,0,9.7,0,14.5,0c1.9,0,1.9-3,0-3c-4.8,0-9.7,0-14.5,0
                    C248.7,328.9,248.7,331.9,250.6,331.9L250.6,331.9z"/>
                </g>
              </g>
              <g>
                <g>
                  <path fill="#D81C5C" d="M280.6,331.9c4.8,0,9.7,0,14.5,0c1.9,0,1.9-3,0-3c-4.8,0-9.7,0-14.5,0
                    C278.7,328.9,278.7,331.9,280.6,331.9L280.6,331.9z"/>
                </g>
              </g>
              <g>
                <g>
                  <path fill="#D81C5C" d="M310.5,331.9c4.8,0,9.7,0,14.5,0c1.9,0,1.9-3,0-3c-4.8,0-9.7,0-14.5,0
                    C308.6,328.9,308.6,331.9,310.5,331.9L310.5,331.9z"/>
                </g>
              </g>
              <g>
                <g>
                  <path fill="#D81C5C" d="M338.7,331.9c4.8,0,9.7,0,14.5,0c1.9,0,1.9-3,0-3c-4.8,0-9.7,0-14.5,0
                    C336.8,328.9,336.8,331.9,338.7,331.9L338.7,331.9z"/>
                </g>
              </g>
              <g>
                <g>
                  <path fill="#D81C5C" d="M162.7,148.2c4.8,0,9.7,0,14.5,0c1.9,0,1.9-3,0-3c-4.8,0-9.7,0-14.5,0
                    C160.8,145.2,160.8,148.2,162.7,148.2L162.7,148.2z"/>
                </g>
              </g>
              <g>
                <g>
                  <path fill="#D81C5C" d="M193.5,148.2c4.8,0,9.7,0,14.5,0c1.9,0,1.9-3,0-3c-4.8,0-9.7,0-14.5,0
                    C191.6,145.2,191.6,148.2,193.5,148.2L193.5,148.2z"/>
                </g>
              </g>
              <g>
                <g>
                  <path fill="#D81C5C" d="M221.7,148.2c4.8,0,9.7,0,14.5,0c1.9,0,1.9-3,0-3c-4.8,0-9.7,0-14.5,0
                    C219.8,145.2,219.8,148.2,221.7,148.2L221.7,148.2z"/>
                </g>
              </g>
              <g>
                <g>
                  <path fill="#D81C5C" d="M250.6,148.2c4.8,0,9.7,0,14.5,0c1.9,0,1.9-3,0-3c-4.8,0-9.7,0-14.5,0
                    C248.7,145.2,248.7,148.2,250.6,148.2L250.6,148.2z"/>
                </g>
              </g>
              <g>
                <g>
                  <path fill="#D81C5C" d="M280.6,148.2c4.8,0,9.7,0,14.5,0c1.9,0,1.9-3,0-3c-4.8,0-9.7,0-14.5,0
                    C278.7,145.2,278.7,148.2,280.6,148.2L280.6,148.2z"/>
                </g>
              </g>
              <g>
                <g>
                  <path fill="#D81C5C" d="M310.5,148.2c4.8,0,9.7,0,14.5,0c1.9,0,1.9-3,0-3c-4.8,0-9.7,0-14.5,0
                    C308.6,145.2,308.6,148.2,310.5,148.2L310.5,148.2z"/>
                </g>
              </g>
              <g>
                <g>
                  <path fill="#D81C5C" d="M338.7,148.2c4.8,0,9.7,0,14.5,0c1.9,0,1.9-3,0-3c-4.8,0-9.7,0-14.5,0
                    C336.8,145.2,336.8,148.2,338.7,148.2L338.7,148.2z"/>
                </g>
              </g>
            </g>
            <circle fill="none" stroke="#D81C5C" stroke-width="2" stroke-miterlimit="10" cx="257.5" cy="240.9" r="208.2"/>
          </g>
        </switch>
      </svg>
      <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
   xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500"
   enable-background="new 0 0 500 500" xml:space="preserve" style="padding: 10px 2%">
        <switch>
          <foreignObject requiredExtensions="&ns_ai;" x="0" y="0" width="1" height="1">
            <i:pgfRef  xlink:href="#adobe_illustrator_pgf">
            </i:pgfRef>
          </foreignObject>
          <g i:extraneous="self">
            <g>
              <circle fill="none" stroke="#BD1E2D" stroke-width="2" stroke-miterlimit="10" cx="246.7" cy="247" r="199.2"/>
              <g>
                <path fill="none" stroke="#BD1E2D" stroke-width="2" stroke-miterlimit="10" d="M155.5,308.2c-19.8-16.5-31.8-38.4-31.8-62.4
                  c0-51.3,55.1-92.9,123-92.9s123,41.6,123,92.9s-55.1,92.9-123,92.9c-27,0-50.9-5.7-71.2-16.9"/>
                <path fill="none" stroke="#BD1E2D" stroke-width="2" stroke-miterlimit="10" d="M154.5,307.3c0,0-18.6,31-28.2,33.8l50.2-19"/>
                <circle fill="none" stroke="#BD1E2D" stroke-width="2" stroke-miterlimit="10" cx="199.8" cy="249.2" r="9.2"/>
                <circle fill="none" stroke="#BD1E2D" stroke-width="2" stroke-miterlimit="10" cx="246.7" cy="249.2" r="9.2"/>
                <circle fill="none" stroke="#BD1E2D" stroke-width="2" stroke-miterlimit="10" cx="294" cy="249.2" r="9.2"/>
              </g>
            </g>
          </g>
        </switch>
      </svg>
      <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
   xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500"
   enable-background="new 0 0 500 500" xml:space="preserve" style="padding: 10px 2%">
        <switch>
          <foreignObject requiredExtensions="&ns_ai;" x="0" y="0" width="1" height="1">
            <i:pgfRef  xlink:href="#adobe_illustrator_pgf">
            </i:pgfRef>
          </foreignObject>
          <g i:extraneous="self">
            <g>
              <rect x="147.4" y="170.5" fill="none" stroke="#F06522" stroke-width="2" stroke-miterlimit="10" width="220" height="156.3"/>
              <polygon fill="none" stroke="#F06522" stroke-width="2" stroke-miterlimit="10" points="173.3,304 223.5,197.8 275.2,268.5
                300.8,247.4 342.8,304       "/>
              <circle fill="none" stroke="#F06522" stroke-width="2" stroke-miterlimit="10" cx="321.4" cy="215.2" r="14.8"/>
            </g>
            <circle fill="none" stroke="#F06522" stroke-width="2" stroke-miterlimit="10" cx="257.4" cy="245.6" r="211.2"/>
          </g>
        </switch>
      </svg>
      <svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
   xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500"
   enable-background="new 0 0 500 500" xml:space="preserve" style="padding: 10px 2%">
        <switch>
          <foreignObject requiredExtensions="&ns_ai;" x="0" y="0" width="1" height="1">
            <i:pgfRef  xlink:href="#adobe_illustrator_pgf">
            </i:pgfRef>
          </foreignObject>
          <g i:extraneous="self">
            <g>
              <path fill="none" stroke="#FBB040" stroke-miterlimit="10" d="M258.6,141h-17.2c-0.7,0-1.3-0.6-1.3-1.3V132
                c0-0.7,0.6-1.3,1.3-1.3h17.2c0.7,0,1.3,0.6,1.3,1.3v7.6C260,140.4,259.4,141,258.6,141z"/>
              <path fill="none" stroke="#FBB040" stroke-miterlimit="10" d="M258.6,369.9h-17.2c-0.7,0-1.3-0.6-1.3-1.3v-7.6
                c0-0.7,0.6-1.3,1.3-1.3h17.2c0.7,0,1.3,0.6,1.3,1.3v7.6C260,369.3,259.4,369.9,258.6,369.9z"/>
              <path fill="none" stroke="#FBB040" stroke-width="2" stroke-miterlimit="10" d="M330.4,387.9H171.6c-4,0-7.3-3.3-7.3-7.3V121.2
                c0-4,3.3-7.3,7.3-7.3h158.8c4,0,7.3,3.3,7.3,7.3v259.4C337.7,384.6,334.4,387.9,330.4,387.9z"/>
              <line fill="none" stroke="#FBB040" stroke-width="2" stroke-miterlimit="10" x1="164.3" y1="155.8" x2="337.7" y2="155.8"/>
              <line fill="none" stroke="#FBB040" stroke-width="2" stroke-miterlimit="10" x1="164.3" y1="346" x2="337.7" y2="346"/>
              <circle fill="none" stroke="#FBB040" stroke-width="2" stroke-miterlimit="10" cx="251" cy="250.9" r="206.3"/>
            </g>
          </g>
        </switch>
      </svg>
    </div>
    <?php the_field('work_smarter'); ?>
    <div class="computer-container">
      <img src="<?php echo get_template_directory_uri(); ?>/images/homepage_computer.png">
    </div>
  </div>

  <div class="home-page client-testimonial-wrapper">
    <div class="client-testimonial-carousel flexslider">
      <ul class="slides">
      <?php query_posts( array( 'post_type' => 'client testimonials') ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <li>
          <div class="mid-cont">
            <?php the_content(); ?>
            <p class="client-name bold-type"><?php the_title(); ?></p>
          </div>
        </li>
      <?php endwhile; wp_reset_query(); ?>
      </ul>
    </div>
  </div>

  <div class="home-page client-wrapper">
    <div class="wide-cont clients">
      <ul class="">
      <?php query_posts( array( 'post_type' => 'clients', 'posts_per_page' => 6) ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <li>
          <div class="logo-wrapper">
            <?php the_post_thumbnail(full); ?>
          </div>
        </li>
      <?php endwhile; wp_reset_query(); ?>
      </ul>
    </div>
  </div>

  <div class="mid-cont home-page">
    <?php the_field('case_study_intro'); ?>
    <div class="case-study-grid">
      <?php query_posts( array( 'post_type' => 'case studies', 'order' => 'ASC', 'posts_per_page' => 6) ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="case-study">
        <a href="<?php the_permalink(); ?>">
          <div class="photo"><?php the_post_thumbnail('full'); ?></div>
          <div class="color-overlay"></div>
          <div class="text-overlay">
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="learn-more">Learn More
          </div>
        </a>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>

  <div class="pre-footer-cta">
    <p class="newsletter-signup">Start receiving Adaptly emails weekly</p>
    <form action="//adaptly.us3.list-manage.com/subscribe/post?u=1304346d0242a3209ad4480f9&amp;id=db19f9e852" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate mailchimp-signup" target="_blank" novalidate>
      <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter Email">
      <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
      </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;"><input type="text" name="b_1304346d0242a3209ad4480f9_db19f9e852" tabindex="-1" value=""></div>
      <div class="clear"><input type="submit" value="" name="subscribe" id="mc-embedded-subscribe" class="button" ><img src="<?php echo get_template_directory_uri(); ?>/images/cta arrow.svg" class="cta-arrow"></div>
    </form>
  </div>
</div>
<?php get_footer(); ?>
