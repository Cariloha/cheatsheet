<?php

/**
 * Template Name: Institute Page
 * PHP version 7
 *
 * @category   Page_Template
 * @package    scistories
 * @subpackage scistories-page-institute
 * @author      SciStories
 * @license    http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 * @link       http://scistories.com/
 * @since      1.0.0
 */

get_header();

if (have_posts()) {
    the_post();
    $header_image_id = carbon_get_post_meta(get_the_ID(), 'crb_header_image');
    $header_image_url = wp_get_attachment_url($header_image_id);
    $heading_title = carbon_get_post_meta(get_the_ID(), 'crb_banner_heading');
    $heading_description = carbon_get_post_meta(get_the_ID(), 'crb_subheading');
    $altius_definition = carbon_get_post_meta(get_the_ID(), 'crb_description');
?>

    <!-- <main class="institute"> -->
    <section class="hero hero--institute" style="background-image: url('<?php echo $header_image_url ?>');">
        <!-- <div class="hero__definition--institute">
            <?= $altius_definition ?>
        </div> -->

        <div class="hero__description container">
            <div class="row">
                <div class="col-12">
                    <?= $heading_title ?>
                    <p class="hero__text"><?= $heading_description ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="main__blur">


    </section> -->
    <div class="main__bg">

        <section class="institute__the__content pt-10">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/img/Line_horizontal.png' ?>" alt="">
                </div>
            </div>
        </div>

        <section class="institute__quote" id="institute-quote">
            <?php
            $quote_info = carbon_get_post_meta(get_the_ID(), 'crb_quotes');
            // var_dump(count($quote_info));
            ?>

            <div class="container pt-8 pb-8">
                <div class="row">
                    <div class="col-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <?php
                                if (count($quote_info) > 0) {
                                    $i = 0;
                                    foreach ($quote_info as $quote) { ?>
                                        <div class="carousel-item <?php if ($i === 0) { ?> active <?php } ?>">
                                            <div class="row quote__row">
                                                <div class="col-6 col-md-4 quote-img">
                                                    <img src="<?php echo wp_get_attachment_image_url($quote['crb_quote_image']) ?>" class="img-fluid quote__img" alt="">
                                                    <p class="quote-author quote-author--institute"><?php echo $quote['crb_quote_author'] ?></p>
                                                    <p class="quote-job-title quote-job-title--institute"><?php echo $quote['crb_quote_job_title'] ?></p>

                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <p class="quote-content quote-content--institute"><span>"</span><?php echo $quote['crb_quote_content'] ?><span>"</span></p>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                        $i++;
                                    }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid" src="<?= get_template_directory_uri() . '/assets/img/Line_horizontal.png' ?>" alt="">
                </div>
            </div>
        </div>

        <section class="institute__innovation">
            <?php
            $innovation_img = carbon_get_post_meta(get_the_ID(), 'crb_institute_image');
            $innovation_content = carbon_get_post_meta(get_the_ID(), 'crb_institute_content');
            $video_id = carbon_get_post_meta(get_the_ID(), 'crb_institute_video');
            $video_url = wp_get_attachment_url($video_id);
            $video_safari_id = carbon_get_post_meta(get_the_ID(), 'crb_institute_video_safari');
            $video_safari_url = wp_get_attachment_url($video_safari_id);


            ?>

            <div class="container">
                <div class="row institute-featured-updates">
                    <div class="col-12 col-md-6 institute-box-text">
                        <h2 class="title__h2"><span>Innovation</span> as a core </br> <span>mission</span></h2>
                        <?= $innovation_content ?>
                    </div>
                    <div class="col-12 col-md-6 institute-image-box">
                        <video muted playsinline class="scroll-video">
                            <source poster="" src="<?= $video_safari_url ?>" type='video/mp4; codecs="hvc1"' ">
                            <source poster="" src=" <?= $video_url ?>" type="video/webm">
                        </video>
                    </div>
                </div>
            </div>

        </section>

        <div class=" container">
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/img/Line_horizontal.png' ?>" alt="">
                </div>
            </div>
        </div>

        <section class="institute__collaborators">
            <?php $logos = carbon_get_post_meta(get_the_ID(), 'crb_logos') ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 pb-5">
                        <h2 class="title__h2">Collaborators</h2>
                    </div>
                </div>
                <div class="row align-items-center">
                    <?php
                    foreach ($logos as $logo) {
                        $pencil = $logo['crb_pencil_image'];
                        $color = $logo['crb_color_image'];
                    ?>
                        <div class="col-12 col-md-6 col-lg-3 logos__wrapper">
                            <img class="img-fluid logo" alt="logo" onmouseover="this.src='<?= wp_get_attachment_url($color); ?>'" onmouseout="this.src='<?= wp_get_attachment_url($pencil); ?>'" src="<?= wp_get_attachment_url($pencil); ?>">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/img/Line_horizontal.png' ?>" alt="">
                </div>
            </div>
        </div>

        <section class="institute__apply" id="opportunities">
            <?php

            $opportunities_text = carbon_get_post_meta(get_the_ID(), 'crb_opportunities_text');
            $opportunities_btn_url = carbon_get_post_meta(get_the_ID(), 'crb_opportunities_url');

            ?>
            <div class="container pt-8 pb-8">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title__h2">Applying to Altius</h2>
                    </div>
                    <div class="col-12">
                        <p><?php echo $opportunities_text ?></p>
                        <a href="<?php echo $opportunities_btn_url ?>" class="button first">Learn More</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- </main> -->

<?php
}
get_footer(); ?>