<?php

use Carbon_Fields\Field;
use Carbon_Fields\Container;


add_action('carbon_fields_register_fields', 'crb_institute_post_meta');
function crb_institute_post_meta()
{
    Container::make('post_meta', __('Institute Page Settings'))
        ->where('post_id', '=', SciStoriesPage::page_get_id('institute'))
        ->add_fields(array(
            Field::make('complex', 'crb_quotes', 'Quote')
                ->set_layout('grid')
                ->set_max(1)
                ->add_fields(array(
                    Field::make('image', 'crb_quote_image', 'Image'),
                    Field::make('text', 'crb_quote_content', __('Quote Content')),
                    Field::make('text', 'crb_quote_author', __('Quote Author')),
                    Field::make('text', 'crb_quote_job_title', __('Quote Job Title')),
                )),
        ))
        ->add_fields(array(
            Field::make('file', 'crb_institute_video', 'Video File')
                ->set_type(array('video')),
            Field::make('file', 'crb_institute_video_safari', 'Video File for Safari')
                ->set_type(array('video')),
            Field::make('rich_text', 'crb_institute_content', __('Institute Content'))

        ))
        ->add_fields(array(
            Field::make('complex', 'crb_logos', 'Logos')
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('image', 'crb_pencil_image', 'Pencil logo'),
                    Field::make('image', 'crb_color_image', __('Color logo')),
                )),
        ))
        // ->add_fields(array(
        //     Field::make('media_gallery', 'crb_media_gallery_collaborators', __('Collaborators Logos')),
        // ))
        ->add_fields(array(
            Field::make('text', 'crb_opportunities_text', __('Opportunities text')),
            Field::make('text', 'crb_opportunities_url', __('Opportunities button url')),
        ));
}

add_filter('crb_media_buttons_html', function ($html, $field_name) {
    if ($field_name === 'crb_institute_content') {
        return;
    }
    return $html;
}, 10, 2);
