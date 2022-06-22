 <?php

   /**
    * Footer file for the scistories theme.
    * PHP version 7
    *
    * @category   Page_Template
    * @package    scistories
    * @subpackage sciestories-page-footer
    * @author      SciStories
    * @license    http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
    * @link       http://scistories.com/
    * @since      1.0.0
    */

   ?>
 <footer class="main__footer" id="footer">
    <div class="container">
       <div class="row footer-content">
          <div class="col-4">
             <div class="row address">
                <div class="col-2">
                   <i class="fa-solid fa-building"></i>
                </div>
                <div class="col-10">
                   <p><?php echo get_theme_mod('address'); ?></p>
                </div>
             </div>
             <div class="row location">
                <div class="col-2">
                   <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="col-10">
                   <a href="<?php echo get_theme_mod('url_map'); ?>" target="_blank">View on Google Maps</a>
                </div>
             </div>
             <div class="row phone">
                <div class="col-2">
                   <i class="fa-solid fa-mobile-screen-button"></i>
                </div>
                <div class="col-10">
                   <p>Phone: <?php echo get_theme_mod('phone'); ?></p>
                </div>
             </div>
             <div class="row email">
                <div class="col-2">
                   <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="col-10">
                   <a href="mailto:<?php echo get_theme_mod('email') ?>">Email: <?php echo get_theme_mod('email') ?></a>
                </div>
             </div>
          </div>

          <div class="col-8 footer-img">
             <img class="img-fluid" src="<?php echo get_theme_mod('image'); ?>" alt="">
          </div>
       </div>
    </div>
 </footer>
 <?php wp_footer(); ?>
 </body>

 </html>