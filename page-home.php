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
    <div class="player-wrapper">
      <video muted playsinline loop class="scroll-video">
        <source poster="" src="<?php echo get_template_directory_uri() . '/assets/video/test.mp4' ?>">
      </video>
    </div>
  </div>

  <div class="wrapper second">
    <div class="player-wrapper">
      <video muted playsinline loop class="scroll-video-2">
        <source poster="" src="<?php echo get_template_directory_uri() . '/assets/video/test.mp4' ?>">
      </video>
    </div>
  </div>

<?php }
get_footer(); ?>