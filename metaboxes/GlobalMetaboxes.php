<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_global_theme_options');
function crb_global_theme_options()
{
    Container::make('post_meta', 'Header Settings')
        ->where('post_type', '=', 'page')
        ->add_fields(array(
            Field::make('image', 'crb_header_image', 'Banner Image File'),
            Field::make('rich_text', 'crb_banner_heading', __('Banner Heading')),
            Field::make('text', 'crb_subheading', __('Subheading Content')),
            Field::make('rich_text', 'crb_description', __('Altius definition')),
            // Field::make('text', 'crb_content_heading', __('Content Heading')),
            // Field::make('text', 'crb_content_description', __('Content description')),


        ));
}

add_filter('crb_media_buttons_html', function ($html, $field_name) {
    if ($field_name === 'crb_banner_heading' || $field_name === 'crb_description') {
        return;
    }
    return $html;
}, 10, 2);
