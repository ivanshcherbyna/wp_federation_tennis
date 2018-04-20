<?php

// INCLUDE THIS BEFORE you load your ReduxFramework object config file.


// You may replace $redux_opt_name with a string if you wish. If you do so, change loader.php
// as well as all the instances below.
$redux_opt_name = THEME_OPT;

if ( !function_exists( "redux_add_metaboxes" ) ):
	function redux_add_metaboxes($metaboxes) {
	
//	$page_options = array();
//
//	$metaSection = array(
//		'title' => 'Page meta',
//		'icon_class'    => 'icon-large',
//		'icon'          => 'el-icon-list-alt',
//		'fields' => array(
//			array(
//				'id'     => 'meta',
//				'type'   => 'text',
//				'title'  => __( 'Metafield')
//			),
//		)
//	);
//	$page_options[] = $metaSection;
        $home_page_options[] = array(

            'title'		 	=> __('home page sector', THEME_OPT ),
            'icon_class'    => 'icon-large',
            'icon' 			=> 'el-icon-website',
            'fields'		=> array(

                array(
                    'id' => 'section-start',
                    'type' => 'section',
                    'title' => __('Location Heading',  THEME_OPT),
                    'subtitle' => __('Place the text on the top of the main background',  THEME_OPT),
                    'indent' => true
                ),
                array(
                    'title' => __('Head text',  THEME_OPT),
                    'type' => 'editor',
                    'id' =>'location-head-text'
                ),
                array(
                    'title' => __('Location inner text',  THEME_OPT),
                    'type' => 'editor',
                    'id' =>'location-head-inner-text'
                ),
                array(
                    'title' => __('Phone number',  THEME_OPT),
                    'type' => 'editor',
                    'id' =>'location-phone-text'
                ),
                array(
                    'id'     => 'section-end',
                    'type'   => 'section',
                    'indent' => false,
                ),
                array(
                    'title' => __('Location text',  THEME_OPT),
                    'type' => 'editor',
                    'id' =>'location-general-text',

                ),
                array(
                    'title' => __('Location background',  THEME_OPT),
                    'type' => 'background',
                    'id' =>'location-background-img'
                ),

                array(
                    'title' =>__('Background Uploader image',  THEME_OPT),
                    'subtitle' => 'Upload your background',
                    'desc' => 'Background from head site Shop',
                    'type' => 'media',
                    'id' => 'background-homepage-img'
                ),
                array(
                    'title'=>__('Homepage images',  THEME_OPT ),
                    'id' => 'homepage-images',
                    'type' => 'slides',
                    'subtitle'    => __( 'Upload images with drag and drop sortings.', 'mytheme' ),
                    'desc'        => __( 'Add your image for use in homepage', THEME_OPT ),
                    'placeholder' => array(
                        'title'       => __( 'This is a title',  THEME_OPT),
                        'description' => __( 'Description Here',  THEME_OPT ),
                        'url'         => __( 'Give us a link!',  THEME_OPT ),
                    )
                )
            )

        );
        $gallery_page_options[] = array(

            'title'		 	=> __('Gallery page sector', THEME_OPT ),
            'icon_class'    => 'icon-large',
            'icon' 			=> 'el-icon-website',
            'fields'		=> array(

                array(
                    'title' => __('Head text',  THEME_OPT),
                    'type' => 'gallery',
                    'id' =>'gallery-id'
                )
            )
        );
        $calendar_posts_options[] = array(

            'title'		 	=> __('Post sector', THEME_OPT ),
            'icon_class'    => 'icon-large',
            'icon' 			=> 'el-icon-website',
            'fields'		=> array(

//                array(
//                    'title' => __('Location inner text',  THEME_OPT),
//                    'type' => 'editor',
//                    'id' =>'location-head-inner-text'
//                ),
                array(
                'title' =>__('Date of event in calendar',  THEME_OPT),
                'subtitle' => 'Choose your date',
                'type' => 'date',
                'id' => 'post_event_date',
                'placeholder' => 'date'
                )
            )
        );

	    $metaboxes[] = array(
		'id'            => 'page-options',
		'title'         => __( 'Page options', THEME_OPT ),
		'post_types'    => array( 'page' ),
		'page_template' => array('front-page.php'),
		'position'      => 'normal', // normal, advanced, side
		'priority'      => 'high', // high, core, default, low
		'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
		'sections'      => $home_page_options,
	);

        $metaboxes[] = array(
            'id'            => 'post-options',
            'title'         => __( 'Post options', THEME_OPT ),
            'post_types'    => array( 'post' ),
            //'page_template' => array('front-page.php'),
            'position'      => 'normal', // normal, advanced, side
            'priority'      => 'high', // high, core, default, low
            'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
            'sections'      => $calendar_posts_options,
        );
        $metaboxes[] = array(
        'id'            => 'gallery-options',
            'title'         => __( 'Page options', THEME_OPT ),
            'post_types'    => array( 'page' ),
            'page_template' => array('gallery-page.php'),
            'position'      => 'normal', // normal, advanced, side
            'priority'      => 'high', // high, core, default, low
            'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
            'sections'      => $gallery_page_options,
        );
	return $metaboxes;
  }
  add_action("redux/metaboxes/{$redux_opt_name}/boxes", 'redux_add_metaboxes');
endif;

