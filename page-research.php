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

    <div class="scene">
        <article class="book">
            <section class="page active">
                <div class="content">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </section>
        </article>
        <button id='next'>Next</button>
        <button id='prev'>Previous</button>
    </div>

<?php }
get_footer(); ?>