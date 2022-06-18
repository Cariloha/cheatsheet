<?php

/**
 * Template Name: Research Page
 * PHP version 7
 *
 * @category   Page_Template
 * @package    scistories
 * @subpackage scistories-page-research
 * @author      SciStories
 * @license    http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 * @link       http://scistories.com/
 * @since      1.0.0
 */

get_header();

if (have_posts()) {
    the_post();
?>

    <div class="wrapper">
        <div class="aspect">
            <div class="aspect-inner">
                <div class="flipbook" id="flipbook">
                    <div class="page"><img src="https://raw.github.com/blasten/turn.js/master/demos/magazine/pages/01.jpg" draggable="false" alt="" /></div>
                    <div class="page"><img src="https://raw.github.com/blasten/turn.js/master/demos/magazine/pages/02.jpg" draggable="false" alt="" /></div>
                    <div class="page"><img src="https://raw.github.com/blasten/turn.js/master/demos/magazine/pages/03.jpg" draggable="false" alt="" /></div>
                    <div class="page"><img src="https://raw.github.com/blasten/turn.js/master/demos/magazine/pages/04.jpg" draggable="false" alt="" /></div>
                    <div class="page"><img src="https://raw.github.com/blasten/turn.js/master/demos/magazine/pages/05.jpg" draggable="false" alt="" /></div>
                    <div class="page"><img src="https://raw.github.com/blasten/turn.js/master/demos/magazine/pages/06.jpg" draggable="false" alt="" /></div>
                </div>
            </div>
        </div>
    </div>


<?php }
get_footer(); ?>