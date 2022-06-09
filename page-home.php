<?php

/**
 * Template Name: Home Page
 * PHP version 7
 *
 * @category   Page_Template
 * @package    scistories
 * @subpackage scistories-page-home
 * @author      SciStories
 * @license    http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 * @link       http://scistories.com/
 * @since      1.0.0
 */

get_header();

if (have_posts()) {
  the_post();

?>

  <div class="hero__section">
    <h1>Some title</h1>
    <p>Some description</p>
  </div>

  <div class="wrapper first">
    <img class="bnw-filter" src="https://wordpress-576448-2675264.cloudwaysapps.com/wp-content/uploads/2022/06/istockphoto-1356638196-170667a.jpg" alt="" sizes="
    (min-width: 2420px) 2000px, 
    (min-width: 720px) calc(94.76vw - 274px), 
    (min-width: 520px) calc(100vw - 96px), 
    calc(100vw - 32px)
    " />
  </div>



  <!-- <div class="wrapper second">
    <img class="bnw-filter" src="https://wordpress-576448-2675264.cloudwaysapps.com/wp-content/uploads/2022/06/istockphoto-1356638196-170667a.jpg" alt="" sizes="
    (min-width: 2420px) 2000px, 
    (min-width: 720px) calc(94.76vw - 274px), 
    (min-width: 520px) calc(100vw - 96px), 
    calc(100vw - 32px)
    " />
  </div>

  <div class="wrapper third">
    <img class="bnw-filter" src="https://wordpress-576448-2675264.cloudwaysapps.com/wp-content/uploads/2022/06/istockphoto-1356638196-170667a.jpg" alt="" sizes="
    (min-width: 2420px) 2000px, 
    (min-width: 720px) calc(94.76vw - 274px), 
    (min-width: 520px) calc(100vw - 96px), 
    calc(100vw - 32px)
    " />
  </div>

  <div class="wrapper fourth">
    <img class="bnw-filter" src="http://testing.local/wp-content/uploads/2022/05/istockphoto-1356638196-170667a.jpg" alt="" sizes="
    (min-width: 2420px) 2000px, 
    (min-width: 720px) calc(94.76vw - 274px), 
    (min-width: 520px) calc(100vw - 96px), 
    calc(100vw - 32px)
    " />
  </div> -->




<?php }
get_footer(); ?>