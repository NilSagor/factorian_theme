<!-- code by rasel ahmed -->

<?php 
// cannot access page directly
if (!defined('ABSPATH')) {
    die;
}

function factorian_theme_metabox($options){
    // remove old options
    $options=array();

    // page metabox
    $options[]= array(
        'id'        => 'factorian_page_options',
        'title'     => 'Page Options',
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'high',
        'sections'  => array(
            // begin section
            array(
                'name'  => 'factorian_page_options_meta',
                'icon'  => 'fa fa-cog',
                //begin fields
                'fields'=> array(
                    // begin a field
                    array(
                        'id'        =>'enable_title',
                        'type'      =>'switcher',
                        'title'     =>'Enable title?',
                        'default'   =>true,
                        'desc'      =>esc_html__('If you want to enable title, select yes.','factorian_theme'),
                    ),
                    array(
                        'id'        =>'enable_content',
                        'type'      =>'switcher',
                        'title'     =>'Enable content?',
                        'default'   =>false,
                        'desc'      =>esc_html__('If you want to enable content, select yes.','factorian_theme'),
                    ),
                ),
                // ends fields
            )
        ),
    );


    // page metabox
    $options[]=array(
        'id'        => 'factorian_slide_options',
        'title'     => 'Slide Options',
        'post_type' => 'slide',
        'context'   => 'normal',
        'priority'  => 'high',
        'sections'  => array(
            // begin section
            array(
                'name'  =>'factorian_slide_options_meta',
                'icon'  =>'fa fa-cog',
                //begin fields
                'fields'=>array(
                    // begin a field
                    array(
                        'id'                => 'buttons',
                        'type'              => 'group',
                        'title'             => 'Slide buttons',
                        'button_title'      => 'Add New',
                        'accordion_title'   => 'Add new button',
                        'fields' => array(
                            array(
                                'id'    => 'type',
                                'type'  => 'select',
                                'title' => 'Button type',
                                'desc'  => 'Select button type',
                                'options'=>array(
                                    'bordered'=>'Bordered button',
                                    'filled'=>'Filled button',
                                ),
                            ),
                            array(
                                'id'        => 'text',
                                'type'      => 'text',
                                'title'     => 'Button text',
                                'desc'      => 'Type button text',
                                'default'   => 'Get free consultation',                     
                            ),
                            array(
                                'id'        => 'link_type',
                                'type'      => 'select',
                                'title'     => 'Link type',
                                'options'	=> array(
                                    '1' => 'Wordpress page',
                                    '2' => 'External link',
                                ),
                            ),  
                            array(
                                'id'        => 'link_to_page',
                                'type'      => 'select',
                                'title'     => 'Select page',
                                'desc'      => 'Select a page',
                                'options'   => 'page',
                                'dependency'=>array('link_type','==','1'),
                            ),
                            array(
                                'id'        => 'link_to_external',
                                'type'      => 'text',
                                'title'     => 'Text URL',
                                'desc'      => 'Type URL',
                                'dependency'=> array('link_type','==','2'),
                            ),
                        ),
                    ),
                                        
                    array(
                        'id'        => 'enable_overlay',
                        'type'      => 'switcher',
                        'default'   => true,
                        'title'     => 'Enable overlay!',
                    ),
                    array(
                        'id'        => 'overlay_percentage',// this is must be unique
                        'type'      => 'text',
                        'default'   => '.70',
                        'title'     => 'Overlay percentage',
                        'desc'      => 'Type overlay percentage in floating number. Max value is 1.',
                        'dependency'=>array('enable_overlay', '==', 'true'),
                    ),
                    array(
                        'id'        => 'overlay_color',
                        'type'      => 'Color_picker',
                        'title'     => 'Overlay color',
                        'desc'      => 'Pick a color',
                        'default'   => '#181a1f',
                        'dependency'=>array('enable_overlay', '==', 'true'),
                    ),
                // ends fields
                )
            ),

        ),
    );
return $options;
}

add_filter('cs_metabox_options', 'factorian_theme_metabox');