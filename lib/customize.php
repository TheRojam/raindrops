<?php
if ( !defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! isset( $wp_customize ) ) {
	return;
}
/**
 * IDsraindrops_complementary_color_for_title_link
 *
 * raindrops_base_color
 * raindrops_default_fonts_color
 * raindrops_footer_color
 * raindrops_hyperlink_color
 * raindrops_footer_link_color
 * raindrops_style_type
 * raindrops_header_image
 * raindrops_footer_image
 * raindrops_page_width
 * raindrops_col_width
 * raindrops_show_right_sidebar
 * raindrops_right_sidebar_width_percent
 * raindrops_show_menu_primary
 * raindrops_accessibility_settings
 * raindrops_doc_type_settings
 * raindrops_basefont_settings
 * raindrops_fluid_max_width
 * raindrops_complementary_color_for_title_link
 * raindrops_disable_keyboard_focus
 * raindrops_sync_style_for_tinymce
 * raindrops_uninstall_option
 * raindrops_menu_primary_font_size
 * raindrops_menu_primary_min_width
 * raindrops_use_featured_image_emphasis
 * raindrops_featured_image_position
 * raindrops_featured_image_size
 * raindrops_featured_image_recent_post_count
 * raindrops_featured_image_singular
 * raindrops_entry_content_is_home
 * raindrops_entry_content_is_category
 * raindrops_entry_content_is_search
 * raindrops_allow_oembed_excerpt_view
 * raindrops_excerpt_enable
 * raindrops_read_more_after_excerpt
 * raindrops_plugin_presentation_bcn_nav_menu
 * raindrops_japanese_date
 * raindrops_place_of_site_title
 * raindrops_site_title_left_margin
 * raindrops_site_title_top_margin
 * raindrops_site_title_font_size
 * raindrops_site_title_css_class
 * raindrops_tagline_in_the_header_image
 * raindrops_col_setting_type
 * raindrops_sidebar_index
 * raindrops_sidebar_date
 * raindrops_sidebar_page
 * raindrops_sidebar_search
 * raindrops_sidebar_single
 * raindrops_sidebar_404
 * raindrops_sidebar_list_of_post
 */
/**
 * Sections
 *
 */



	if ( !isset( $raindrops_customize_args ) ) {
		$raindrops_theme_customize_sections = array(
		'raindrops_theme_settings'			 => array( 'title' => esc_html__( 'Color Scheme', 'raindrops' ), 'priority' => 26, ),
		'raindrops_theme_settings_featured'	 => array( 'title'			 => esc_html__( 'Featured Image', 'raindrops' ),
			'priority'		 => 40,
			'panel'			 => 'raindrops_theme_settings_presentation_panel',
			'theme_supports' => '',
			'title'			 => esc_html__( 'Featured Image Settings', 'raindrops' ),
			'description'	 => __( 'Emphasis of new content using the Featured Image', 'raindrops' ),
			),
		'raindrops_theme_settings_sidebar'	 => array(
			'title' => esc_html__( 'Layout and Sidebars', 'raindrops' ),
			'priority' => 27,
			'panel'			 => 'raindrops_theme_settings_presentation_panel',
			),
		'raindrops_theme_settings_fonts'	 => array(
			'title' => esc_html__( 'Fonts', 'raindrops' ),
			'priority' => 41,
			'panel'			 => 'raindrops_theme_settings_presentation_panel',
			),
		/*'raindrops_theme_page_width'	 => array(
			'title' => esc_html__( 'Page Width', 'raindrops' ),
			'priority' => 28,
			'panel'			 => 'raindrops_theme_settings_presentation_panel',
			),*/
		'raindrops_theme_settings_document'	 => array( 'title' => esc_html__( 'Advanced', 'raindrops' ), 'priority' => 24, ),
		'raindrops_theme_settings_content'	 => array( 'title' => esc_html__( 'Excerpt', 'raindrops' ), 'priority' => 29, ),
		'raindrops_theme_settings_plugins'	 => array( 'title' => esc_html__( 'Add-ons', 'raindrops' ), 'priority' => 30, ),
		'raindrops_theme_settings_uninstall' => array( 'title' => esc_html__( 'Uninstall Option', 'raindrops' ), 'priority' => 99, ),
		'raindrops_theme_settings_presentation' => array(
			'priority' => 25,
			'panel'			 => 'raindrops_theme_settings_presentation_panel',
			'theme_supports' => '',
			'title'			 => esc_html__( 'Color Scheme', 'raindrops' ),
			'description'	 => '',
			),
		'raindrops_theme_settings_post' => array(
			'title' => esc_html__( 'Post', 'raindrops' ),
			'priority' => 100,
			'panel'			 => 'raindrops_theme_settings_presentation_panel',
			'theme_supports' => '',
			'description'	 => esc_html__( 'The following changes are made using the CSS', 'raindrops' ),
			),
		'raindrops_theme_settings_archive' => array(
			'title' => esc_html__( 'Archive', 'raindrops' ),
			'priority' => 110,
			'panel'			 => 'raindrops_theme_settings_presentation_panel',
			'theme_supports' => '',
			'description'	 => esc_html__( 'The following changes are made using the CSS', 'raindrops' ),
			),
		'raindrops_theme_settings_menu_size' => array(
			'title' => esc_html__( 'Menu', 'raindrops' ),
			'priority' => 110,
			'panel'			 => 'raindrops_theme_settings_presentation_panel',
			'theme_supports' => '',
			'description'	 => esc_html__( 'Menu Size and Width', 'raindrops' ),
			),
	);
/**
 * Panels
 *
 */
	$raindrops_theme_customize_panels = array(
	/*	'raindrops_theme_settings_featured_panel' => array( 'priority'		 => 40,
			'capability'	 => $raindrops_customize_cap,
			'theme_supports' => '',
			'title'			 => __( 'Featured Image', 'raindrops' ),
			'description'	 => __( 'Emphasis of new content using the Featured Image', 'raindrops' ),
		),*/
		'raindrops_theme_settings_presentation_panel' => array( 'priority'		 => 25,
			'capability'	 => $raindrops_customize_cap,
			'theme_supports' => '',
			'title'			 => __( 'Presentation', 'raindrops' ),
			'description'	 => '',
		)
	);
	/**
	 * raindrops_featured_image_size
	 * choices
	 *
	 */
	$raindrops_featured_image_size_array	 = get_intermediate_image_sizes();
	$raindrops_featured_image_size_choices	 = array();

	foreach ( $raindrops_featured_image_size_array as $key => $val ) {

		$raindrops_featured_image_size_choices[ $val ] = ucfirst( $val );
	}
	/**
	 * raindrops_featured_image_recent_post_count
	 * description
	 */
	$raindrops_featured_image_post_max = get_option( 'posts_per_page' );

	$raindrops_font_max_size = 20;

	if ( isset( $raindrops_base_font_size ) ) {

		$raindrops_basefont_default_val = absint( $raindrops_base_font_size );

		$raindrops_basefont_size = array();

		for ( $i = $raindrops_basefont_default_val; $i < $raindrops_font_max_size + 1; $i++ ) {

			$font_size_key								 = "{$i}px";
			$raindrops_basefont_size[ $font_size_key ]	 = $i;
		}
	} else {

		$raindrops_basefont_default_val = raindrops_warehouse_clone( 'raindrops_basefont_settings' );

		$raindrops_basefont_size = array();

		for ( $i = 13; $i < $raindrops_font_max_size + 1; $i++ ) {

			$font_size_key								 = "{$i}px";
			$raindrops_basefont_size[ $font_size_key ]	 = $i;
		}
	}

	$raindrops_customize_color_ja		 = array_flip( $raindrops_color_ja );
	$raindrops_customize_color_en_140	 = array_flip( $raindrops_color_en_140 );
	$raindrops_customize_color_en		 = array_flip( $raindrops_color_en );
	$raindrops_customize_color_anime	 = array_flip( $raindrops_color_anime );

	$raindrops_style_type_chices = raindrops_register_styles( "w3standard" );
	$raindrops_get_permalink_structure = get_option( 'permalink_structure' );

	if( empty( $raindrops_get_permalink_structure ) ) {
		$raindrops_get_permalink_structure_message = '1';
	} else {
		$raindrops_get_permalink_structure_message = '0';
	}
	/*
	 * callback
	 */

	function raindrops_place_of_site_title_callback( $control ) {

		if ( $control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_place_of_site_title' ) )->value() == 'header_image' ) {
			return true;
		} else {
			return false;
		}
	}

	function raindrops_place_of_site_title_callback_b( $control ) {

		if ( $control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_site_title_left_margin_type' ) )->value() == 'manual' &&
			 $control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_place_of_site_title' ) )->value() == 'header_image'
		) {
			return true;
		} else {
			return false;
		}
	}
	function raindrops_show_right_sidebar_callback( $control ) {

		if ( $control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_show_right_sidebar' ) )->value() == 'show' ) {
			return true;
		} else {
			return false;
		}
	}

	function raindrops_post_content_type_callback( $control ) {

		if ( $control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_entry_content_is_home' ) )->value() == 'excerpt' ||
		$control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_entry_content_is_category' ) )->value() == 'excerpt' ||
		$control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_entry_content_is_search' ) )->value() == 'excerpt' ) {
			return true;
		} else {
			return false;
		}
	}

	function raindrops_use_featured_image_emphasis_callback( $control ) {

		if ( $control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_use_featured_image_emphasis' ) )->value() == 'yes' ) {
			return true;
		} else {
			return false;
		}
	}
	function raindrops_page_width_is_fluid( $control ) {

		if ( $control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_page_width' ) )->value() == 'doc3' ) {
			return true;
		} else {
			return false;
		}
	}
	function raindrops_col_setting_type_is_details( $control ) {

		if ( $control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_col_setting_type' ) )->value() == 'details' ) {

			return true;
		} else {
			return false;
		}
	}
	function raindrops_col_setting_type_is_simple( $control ) {

		if ( $control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_col_setting_type' ) )->value() == 'simple' ) {
			return true;
		} else {
			return false;
		}
	}

	function raindrops_hyperlink_color_is_chromatic(  $control ) {
		/* Not showing gray color was set */

		$d = '[a-fA-F0-9]{1,2}';

		if ( preg_match( "/^#($d)($d)($d)\$/",
		$control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_hyperlink_color' ) )->value(),
			$rgb ) ) {
			 if( $rgb[1] == $rgb[2] && $rgb[1] == $rgb[3] ) {
				 return false;
			 } else {
				 return true;
			 }
		}else{
			return false;
		}
	}
	function raindrops_fallback_image_for_entry_content_is_show( $control ) {
		global $raindrops_fallback_image_for_entry_content_enable;
		
		return $raindrops_fallback_image_for_entry_content_enable;
	}
	function raindrops_show_menu_primary_is_show( $control ) {
		if ( $control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_show_menu_primary' ) )->value() == 'show' ) {
			return true;
		} else {
			return false;
		}
	}
	function raindrops_page_width_is_full_size( $control ) {
		if ( $control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_page_width' ) )->value() == 'doc5' ) {
			return true;
		} else {
			return false;
		}
	}
	function raindrops_doc_type_settings_is_xhtml( $control ) {
		if ( $control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_doc_type_settings' ) )->value() == 'xhtml' ) {
			return true;
		} else {
			return false;
		}
	}
	function raindrops_parent_theme_mods_update( $control ) {
		if ( ! is_child_theme() ){
			return false;
		}
		if (   $control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_parent_theme_mods' ) )->value() == 'import' ) {
			raindrops_import_parent_theme_mods();
			return true;
		}
		return true;

	}
	function raindrops_enable_header_image_filter_is_enabel( $control ) {

		if (   $control->manager->get_setting( raindrops_data_store_relate_id( 'raindrops_enable_header_image_filter' ) )->value() == 'enable' ) {

			return true;
		}
		return false;

	}

	function raindrops_permalink_is_default( $control ) {

		$permalink_structure = get_option( 'permalink_structure' );
		if( !empty( $permalink_structure )){
			return true;
		} else {
			return false;
		}
	}

	$raindrops_customize_args = array(
		/* Pending
		  "raindrops_color_scheme"							 => array(
		  'default'	 => "raindrops_color_picker",
		  'autoload'		 => 'yes',
		  'label'			 => esc_html__( 'Color Selection Type', 'raindrops' ),
		  'excerpt1'		 => '',
		  'description'		 => esc_html__( 'Please choose the naming convention for the color list', 'raindrops' ),
		  'sanitize_callback'		 => 'raindrops_color_scheme_validate',
		  'type'						 => 'radio',
		  'choices'					 => array(
		  'raindrops_color_ja' => __( 'Japan Colors', 'raindrops' ),
		  'raindrops_color_en' => __( 'USA Colors', 'raindrops' ),
		  'raindrops_color_en_140' => __( 'WEB Colors', 'raindrops' ),
		  'raindrops_color_anime' => __( 'Animation Color', 'raindrops' ),
		  'raindrops_color_picker' => __( 'Color Picker' ),
		  ),
		  ), */
// Color Picker
		"raindrops_base_color"							 => array(
			'default'					 => raindrops_warehouse_clone( 'raindrops_base_color','option_value' ),
			'data_type'					 => $raindrops_setting_type,
			'autoload'					 => 'yes',
			'capability'				 => $raindrops_customize_cap,
			'label'						 => esc_html__( 'Base color', 'raindrops' ),
			'excerpt1'					 => '',
			'description'				 => esc_html__( 'Please specify your favorite color. and an automatic arrangement of color is designed.', 'raindrops' ),
			'sanitize_callback'			 => 'raindrops_base_color_validate',
			'extend_customize_control'	 => 'WP_Customize_Color_Control',
			'extend_customize_setting'	 => '',
			'section'					 => 'raindrops_theme_settings_presentation',
			'priority'					 => 9,
		),
		"raindrops_default_fonts_color"					 => array(
			'default'					 => raindrops_warehouse_clone( 'raindrops_default_fonts_color','option_value' ),
			'data_type'					 => $raindrops_setting_type,
			'autoload'					 => 'yes',
			'capability'				 => $raindrops_customize_cap,
			'label'						 => esc_html__( 'Font Color', 'raindrops' ),
			'excerpt1'					 => '',
			'description'				 => esc_html__( 'If you need to set contents Special font color.', 'raindrops' ),
			'sanitize_callback'			 => 'raindrops_default_fonts_color_validate',
			'extend_customize_control'	 => 'WP_Customize_Color_Control',
			'extend_customize_setting'	 => '',
			'section'					 => 'colors',
		),
		"raindrops_footer_color"						 => array(
			'default'					 => raindrops_warehouse_clone( 'raindrops_footer_color','option_value' ),
			'data_type'					 => $raindrops_setting_type,
			'autoload'					 => 'yes',
			'capability'				 => $raindrops_customize_cap,
			'label'						 => esc_html__( 'Footer Font Color', 'raindrops' ),
			'excerpt1'					 => '',
			'description'				 => esc_html__( 'If you need to set footer Special font color.', 'raindrops' ),
			'sanitize_callback'			 => 'raindrops_footer_color_validate',
			'extend_customize_control'	 => 'WP_Customize_Color_Control',
			'extend_customize_setting'	 => '',
			'section'					 => 'colors',
		),
		"raindrops_hyperlink_color"						 => array(
			'default'					 => raindrops_warehouse_clone( 'raindrops_hyperlink_color','option_value' ),
			'data_type'					 => $raindrops_setting_type,
			'autoload'					 => 'yes',
			'capability'				 => $raindrops_customize_cap,
			'label'						 => esc_html__( 'Link Color', 'raindrops' ),
			'excerpt1'					 => '',
			'description'				 => esc_html__( 'Hyper link color', 'raindrops' ),
			'sanitize_callback'			 => 'raindrops_hyperlink_color_validate',
			'extend_customize_control'	 => 'WP_Customize_Color_Control',
			'extend_customize_setting'	 => '',
			'section'					 => 'colors',
		),
		"raindrops_footer_link_color"					 => array(
			'default'					 => raindrops_warehouse_clone( 'raindrops_footer_link_color','option_value' ),
			'data_type'					 => $raindrops_setting_type,
			'autoload'					 => 'yes',
			'capability'				 => $raindrops_customize_cap,
			'label'						 => esc_html__( 'Footer Link Color', 'raindrops' ),
			'excerpt1'					 => '',
			'description'				 => esc_html__( 'If you need to set footer Special link color.hex color ex.#ff0000 or none', 'raindrops' ),
			'sanitize_callback'			 => 'raindrops_footer_link_color_validate',
			'extend_customize_control'	 => 'WP_Customize_Color_Control',
			'extend_customize_setting'	 => '',
			'priority'					=> 20,
			'section'					 => 'colors',
		),
// End Color Picker
		"raindrops_style_type"							 => array(
			'default'					 => raindrops_warehouse_clone( 'raindrops_style_type','option_value' ),
			'data_type'					 => $raindrops_setting_type,
			'autoload'					 => 'yes',
			'capability'				 => $raindrops_customize_cap,
			'label'						 => esc_html__( 'Color Type', 'raindrops' ),
			'excerpt1'					 => '',
			'description'				 => '',
			'sanitize_callback'			 => 'raindrops_style_type_validate',
			'type'						 => 'radio',
			'choices'					 => $raindrops_style_type_chices,
			'extend_customize_control'	 => '',
			'section'					 => 'raindrops_theme_settings_presentation',
		),
		"raindrops_header_image"						 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_header_image','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Header background image', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'The header image can be set by two methods.
One is a method of up-loading the image from the below up-loading form. Another is a method of filling in the filename from this textfield from Raindrops/images something image.', 'raindrops' ),
			'type'				 => 'text', //仮
			'sanitize_callback'	 => 'raindrops_header_image_validate',
		),
		"raindrops_footer_image"						 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_footer_image','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Footer background image', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'The footer image can be set by two methods.
One is a method of up-loading the image from the below up-loading form. Another is a method of filling in the filename from this textfield from Raindrops/images something image.', 'raindrops' ),
			'type'				 => 'text', // todo
			'sanitize_callback'	 => 'raindrops_footer_image_validate',
		),
		/**
		 * Pending
		 *
		 * "raindrops_heading_image"							 => array(
		  'default'	 => "none",
		  'autoload'		 => 'yes',
		  'label'			 => esc_html__( 'Widget Title Background Image', 'raindrops' ),
		  'excerpt1'		 => '',
		  'description'		 => esc_html__( 'The header image can be chosen from among three kinds [h2.png,h2b.png,h2c.png].', 'raindrops' ),
		  'sanitize_callback'		 => 'raindrops_heading_image_validate',
		  ),
		  "raindrops_heading_image_position"					 => array(
		  'default'	 => "0",
		  'autoload'		 => 'yes',
		  'label'			 => esc_html__( 'Widget Title Background Image Position', 'raindrops' ),
		  'excerpt1'		 => '',
		  'description'		 => esc_html__( 'The name of the picture file used for the h2 headding is set. Please set the integral value from 0 to 7. ', 'raindrops' ),
		  'sanitize_callback'		 => 'raindrops_heading_image_position_validate',
		  ), */
		"raindrops_page_width"							 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_page_width','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'label'				 => esc_html__( 'Document Width', 'raindrops' ),
			'capability'		 => $raindrops_customize_cap,
			'excerpt1'			 => '',
			'description'		 => '',
			'sanitize_callback'	 => 'raindrops_page_width_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'doc'	 =>  esc_html__( '750px centered', 'raindrops' ),
				'doc2'	 =>  esc_html__( '950px centered', 'raindrops' ),
				'doc4'	 =>  esc_html__( '974px', 'raindrops' ),
				'doc3'	 =>  esc_html__( 'Box Layout Responsive', 'raindrops' ),
				'doc5'   =>  esc_html__( 'Full Width Responsive', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_sidebar',
			'priority'			=> 8,
		),
		"raindrops_col_setting_type"							 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_col_setting_type','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Side bar setting method', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Please select Simple( All list pages same column ) or details ( It sets the column of the list page, such as archive and index individually )', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_col_setting_type_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'simple' =>  esc_html__( 'Simple', 'raindrops' ),
				'details' =>  esc_html__( 'Details', 'raindrops' ),

			),
			'section'			 => 'raindrops_theme_settings_sidebar',
		),
		"raindrops_col_width"							 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_col_width','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Column Width and Position', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Please specify the position and the width of Default Sidebar. Six kinds of sidebars of left 160px left 180px left 300px right 180px right 240px right 300px can be specified.', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_col_width_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				't1' =>  esc_html__( 'left 160px', 'raindrops' ),
				't2' =>  esc_html__( 'left 180px', 'raindrops' ),
				't3' =>  esc_html__( 'left 300px', 'raindrops' ),
				't4' =>  esc_html__( 'right 180px', 'raindrops' ),
				't5' =>  esc_html__( 'right 240px', 'raindrops' ),
				't6' =>  esc_html__( 'right 300px', 'raindrops' ),
			),
			'priority'			=> 22,
			'section'			 => 'raindrops_theme_settings_sidebar',
		),
		"raindrops_show_right_sidebar"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_show_right_sidebar','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Display Extra Sidebar', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Please specify show when you want to use three row layout. Please set Ratio to text when extra sidebar is displayed when you specify show', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_show_right_sidebar_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'show'	 =>  esc_html__( 'Show', 'raindrops' ),
				'hide'	 =>  esc_html__( 'Hide', 'raindrops' ),
			),
			'priority'			=> 23,
			'active_callback'   => 'raindrops_col_setting_type_is_simple',
			'section'			 => 'raindrops_theme_settings_sidebar',

		),
		"raindrops_right_sidebar_width_percent"			 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_right_sidebar_width_percent','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Extra Sidebar Width', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'When display extra sidebar is set to show', 'raindrops' ) .
			esc_html__( 'it is necessary to specify it.', 'raindrops' ) .
			esc_html__( 'It can decide to divide the width of which place of extra sidebar', 'raindrops' ) .
			esc_html__( 'and to give it. Please select it from among 25% 33% 50% 66% 75%. ', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_right_sidebar_width_percent_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'25' =>  esc_html__( '25%', 'raindrops' ),
				'33' =>  esc_html__( '33%', 'raindrops' ),
				'50' =>  esc_html__( '50%', 'raindrops' ),
				'66' =>  esc_html__( '66%', 'raindrops' ),
				'75' =>  esc_html__( '75%', 'raindrops' ),
			),
			'active_callback'	 => 'raindrops_show_right_sidebar_callback',
			'priority'			=> 24,
			'section'			 => 'raindrops_theme_settings_sidebar',
		),
		"raindrops_sidebar_index"			 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_sidebar_index','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Index Page columns', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'type'				 => 'radio',
			'choices'			 => array(
				1 =>  esc_html__( '1 column', 'raindrops' ),
				2 =>  esc_html__( '2 columns', 'raindrops' ),
				3 =>  esc_html__( '3 columns', 'raindrops' ),
			),
			'priority'			=> 11,
			'sanitize_callback'	 => 'raindrops_sidebar_index_validate',
			'active_callback'	 => 'raindrops_col_setting_type_is_details',
			'section'			 => 'raindrops_theme_settings_sidebar',
		),
		"raindrops_sidebar_date"			 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_sidebar_date','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Date Archive columns', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'type'				 => 'radio',
			'choices'			 => array(
				1 =>  esc_html__( '1 column', 'raindrops' ),
				2 =>  esc_html__( '2 columns', 'raindrops' ),
				3 =>  esc_html__( '3 columns', 'raindrops' ),
			),
			'priority'			=> 11,
			'sanitize_callback'	 => 'raindrops_sidebar_date_validate',
			'active_callback'	 => 'raindrops_col_setting_type_is_details',
			'section'			 => 'raindrops_theme_settings_sidebar',
		),
		"raindrops_sidebar_page"			 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_sidebar_page','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Static Page columns', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'type'				 => 'radio',
			'choices'			 => array(
				1 =>  esc_html__( '1 column', 'raindrops' ),
				2 =>  esc_html__( '2 columns', 'raindrops' ),
				3 =>  esc_html__( '3 columns', 'raindrops' ),
			),
			'priority'			=> 11,
			'sanitize_callback'	 => 'raindrops_sidebar_page_validate',
			'active_callback'	 => 'raindrops_col_setting_type_is_details',
			'section'			 => 'raindrops_theme_settings_sidebar',
		),
		"raindrops_sidebar_search"			 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_sidebar_search','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Search Result Page columns', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'type'				 => 'radio',
			'choices'			 => array(
				1 =>  esc_html__( '1 column', 'raindrops' ),
				2 =>  esc_html__( '2 columns', 'raindrops' ),
				3 =>  esc_html__( '3 columns', 'raindrops' ),
			),
			'priority'			=> 11,
			'sanitize_callback'	 => 'raindrops_sidebar_search_validate',
			'active_callback'	 => 'raindrops_col_setting_type_is_details',
			'section'			 => 'raindrops_theme_settings_sidebar',
		),

		"raindrops_sidebar_single"			 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_sidebar_single','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Single Post columns', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'type'				 => 'radio',
			'choices'			 => array(
				1 =>  esc_html__( '1 column', 'raindrops' ),
				2 =>  esc_html__( '2 columns', 'raindrops' ),
				3 =>  esc_html__( '3 columns', 'raindrops' ),
			),
			'priority'			=> 11,
			'sanitize_callback'	 => 'raindrops_sidebar_single_validate',
			'active_callback'	 => 'raindrops_col_setting_type_is_details',
			'section'			 => 'raindrops_theme_settings_sidebar',
		),

		"raindrops_sidebar_image_archive"			 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_sidebar_image_archive','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Image Archive columns', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'type'				 => 'radio',
			'choices'			 => array(
				1 =>  esc_html__( '1 column', 'raindrops' ),
				2 =>  esc_html__( '2 columns', 'raindrops' ),
				3 =>  esc_html__( '3 columns', 'raindrops' ),
			),
			'priority'			=> 11,
			'sanitize_callback'	 => 'raindrops_sidebar_image_archive_validate',
			'active_callback'	 => 'raindrops_col_setting_type_is_details',
			'section'			 => 'raindrops_theme_settings_sidebar',
		),
		"raindrops_sidebar_404"			 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_sidebar_404','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( '404 Page columns', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'type'				 => 'radio',
			'choices'			 => array(
				1 =>  esc_html__( '1 column', 'raindrops' ),
				2 =>  esc_html__( '2 columns', 'raindrops' ),
				3 =>  esc_html__( '3 columns', 'raindrops' ),
			),
			'priority'			=> 11,
			'sanitize_callback'	 => 'raindrops_sidebar_404_validate',
			'active_callback'	 => 'raindrops_col_setting_type_is_details',
			'section'			 => 'raindrops_theme_settings_sidebar',
		),
		"raindrops_sidebar_list_of_post"			 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_sidebar_list_of_post','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'List of Post Template columns', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'type'				 => 'radio',
			'choices'			 => array(
				1 =>  esc_html__( '1 column', 'raindrops' ),
				2 =>  esc_html__( '2 columns', 'raindrops' ),
				3 =>  esc_html__( '3 columns', 'raindrops' ),
			),
			'priority'			=> 12,
			'sanitize_callback'	 => 'raindrops_sidebar_list_of_post_validate',
			'active_callback'	 => 'raindrops_col_setting_type_is_details',
			'section'			 => 'raindrops_theme_settings_sidebar',
		),

		"raindrops_sidebar_category"			 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_sidebar_category','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Category Archive columns', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'type'				 => 'radio',
			'choices'			 => array(
				1 =>  esc_html__( '1 column', 'raindrops' ),
				2 =>  esc_html__( '2 columns', 'raindrops' ),
				3 =>  esc_html__( '3 columns', 'raindrops' ),
			),
			'priority'			=> 15,
			'sanitize_callback'	 => 'raindrops_sidebar_category_validate',
			'active_callback'	 => 'raindrops_col_setting_type_is_details',
			'section'			 => 'raindrops_theme_settings_sidebar',
		),
		"raindrops_sidebar_tag"			 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_sidebar_tag','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Tag Archive columns', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'type'				 => 'radio',
			'choices'			 => array(
				1 => esc_html__( '1 column', 'raindrops' ),
				2 => esc_html__( '2 columns', 'raindrops' ),
				3 => esc_html__( '3 columns', 'raindrops' ),
			),
			'priority'			=> 15,
			'sanitize_callback'	 => 'raindrops_sidebar_tag_validate',
			'active_callback'	 => 'raindrops_col_setting_type_is_details',
			'section'			 => 'raindrops_theme_settings_sidebar',
		),
		"raindrops_sidebar_author"			 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_sidebar_author','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Author Archives columns', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'type'				 => 'radio',
			'choices'			 => array(
				1 => esc_html__( '1 column', 'raindrops' ),
				2 => esc_html__( '2 columns', 'raindrops' ),
				3 => esc_html__( '3 columns', 'raindrops' ),
			),
			'priority'			=> 15,
			'sanitize_callback'	 => 'raindrops_sidebar_author_validate',
			'active_callback'	 => 'raindrops_col_setting_type_is_details',
			'section'			 => 'raindrops_theme_settings_sidebar',
		),
		"raindrops_show_menu_primary"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_show_menu_primary','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Display hide', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Display or not Menu Primary. default value is show. set hide when not display menu primary', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_show_menu_primary_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'show'	 => esc_html__( 'Show', 'raindrops' ),
				'hide'	 => esc_html__( 'Hide', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_menu_size',
		),

		"raindrops_accessibility_settings"				 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_accessibility_settings','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Force Unique Link Text', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Accessibility Settings is create a unique link text. set to yes or no.', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_accessibility_settings_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'yes'	 => esc_html__( 'Yes', 'raindrops' ),
				'no'	 => esc_html__( 'No', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_document',
		),
		"raindrops_doc_type_settings"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_doc_type_settings','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Document Type Definition', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( "Default Document type html5. Set to xhtml or html5.", 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_doc_type_settings_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'html5'	 => esc_html__( 'HTML5', 'raindrops' ),
				'xhtml'	 => esc_html__( 'XHTML1.0', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_document',
		),
		"raindrops_stylesheet_in_html"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_stylesheet_in_html','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 =>  esc_html__( 'Location of the style sheet', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Select link stylesheet to their source HTML or document with the LINK element', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_stylesheet_in_html_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'embed'		=> esc_html__( 'Stylesheet to their source HTML', 'raindrops' ),
				'external'	=> esc_html__( 'Stylesheet with the LINK element', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_document',
		),
		"raindrops_parent_theme_mods"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_parent_theme_mods','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 =>  esc_html__( 'Import Raindrops Theme Current Settings', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'In order to reflect the results, please reload the browser to save once', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_parent_theme_mods_validate',
			'active_callback'	=> 'raindrops_parent_theme_mods_update',
			'type'				 => 'radio',
			'choices'			 => array(
				'import'		=> esc_html__( 'Import Raindrops Theme Current Settings', 'raindrops' ),
				'no'			=> esc_html__( 'Do not import', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_document',
		),
		"raindrops_xhtml_media_type"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_xhtml_media_type','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'XHTML Media Type', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'value text/html or application/xhtml+xml, default text/html', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_xhtml_media_type_validate',
			'active_callback'    => 'raindrops_doc_type_settings_is_xhtml',
			'type'				 => 'radio',
			'choices'			 => array(
				'text/html'	 => esc_html__( 'text/html', 'raindrops' ),
				'application/xhtml+xml'	 => esc_html__( 'application/xhtml+xml', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_document',
		),

		"raindrops_actions_hook_message"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_actions_hook_message','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Developer Settings', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Show Insert Point hooks and auto load template name for Developer, default hide', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_actions_hook_message_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'show'	 => esc_html__( 'Show', 'raindrops' ),
				'hide'	 => esc_html__( 'Hide', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_document',
		),
		"raindrops_status_bar"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_status_bar','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Status Bar', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Show or Hide, Raindrops Status Bar at Page bottom, default show', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_status_bar_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'show'	 => esc_html__( 'Show', 'raindrops' ),
				'hide'	 => esc_html__( 'Hide', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_document',
		),

		"raindrops_display_sticky_post"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_display_sticky_post','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Sticky Post Show Single Post', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 =>  esc_html__( 'Sticky Post Show only Home Page or Always it displayed ( default Always it displayed )', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_display_sticky_post_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'anytime'	 => esc_html__( 'Always it displayed', 'raindrops' ),
				'only_home'	 => esc_html__( 'Show only Home Page', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_document',
		),
		
		"raindrops_fluid_max_width"						 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_fluid_max_width','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Fluid  Max Width (px)', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( "Default 1280 (px size)", 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_fluid_max_width_validate',
			'active_callback'	=> 'raindrops_page_width_is_fluid',
			'type'				 => 'text',
			'priority'			=> 9,
			'section'			 => 'raindrops_theme_settings_sidebar',

		),
		"raindrops_full_width_max_width"						 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_full_width_max_width','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Content Container Width (px)', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( "Default 1280 (px size)", 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_full_width_max_width_validate',
			'active_callback'	=> 'raindrops_page_width_is_full_size',
			'type'				 => 'text',
			'priority'			=> 9,
			'section'			 => 'raindrops_theme_settings_sidebar',
		),
		"raindrops_full_width_limit_window_width"						 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_full_width_limit_window_width','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Support limit Browser Width', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( "In the case of specified size abnormalities of the browser window size, it will show in the box layout. set px value, Default 1920 (px size)", 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_full_width_limit_window_width_validate',
			'active_callback'	=> 'raindrops_page_width_is_full_size',
			'type'				 => 'text',
			'priority'			=> 9,
			'section'			 => 'raindrops_theme_settings_sidebar',
		),
		"raindrops_complementary_color_for_title_link"	 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_complementary_color_for_title_link','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Complementary Link Color For Entry Title', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'If you need to set complementary color for entry title.(There is a need to link color is set to chromatic) ', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_complementary_color_for_title_link_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'yes'	 =>  esc_html__( 'Yes', 'raindrops' ),
				'none'	 =>  esc_html__( 'No' , 'raindrops' ),
				),
			'priority'			=> 12,
			'active_callback'   => 'raindrops_hyperlink_color_is_chromatic',
			'section'			=> 'colors',
		),
		"raindrops_disable_keyboard_focus"				 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_disable_keyboard_focus','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Disable Keyboad Focus', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Fallback Setting when Nav Menu displayed improperly, value set enable( defalt ) or disable', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_disable_keyboard_focus_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'disable'	 => esc_html__( 'Disable', 'raindrops' ),
				'enable'	 => esc_html__( 'Enable', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_document',
		),
		"raindrops_sync_style_for_tinymce"				 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_sync_style_for_tinymce','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Synchronize Style for Visual Editor', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Reflect on Dynamically Editor Style Settings, value set yes ( default ) or none', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_sync_style_for_tinymce_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'yes'	 => esc_html__( 'Yes', 'raindrops' ),
				'none'	 => esc_html__( 'No', 'raindrops' ), ),
			'section'			 => 'raindrops_theme_settings_document',
		),
		"raindrops_fallback_image_for_entry_content"				 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_fallback_image_for_entry_content','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Fallback Image for Entry Content', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Image, to display an alternative image if that can not be displayed. Please input Image URI. When you return to the change after the default image, please enter default ', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_fallback_image_for_entry_content_validate',
			'active_callback'	=>  'raindrops_fallback_image_for_entry_content_is_show',
			'type'				 => 'text',
			'section'			 => 'raindrops_theme_settings_document',
		),

		"raindrops_sitewide_css"				 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_sitewide_css','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Site-wide CSS', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Style  It will be retained even if the theme is updated', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_sitewide_css_validate',
			'type'				 => 'textarea',
			'section'			 => 'raindrops_theme_settings_document',
		),
		/**
		 * Pending not work at customizer
		 * old theme page works
		 * "raindrops_uninstall_option"					 => array(

			'default'			 => raindrops_warehouse_clone( 'raindrops_uninstall_option' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Delete all Theme Settings when Switch Theme', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '<strong style="color:red">' . esc_html__( 'The deleted data can not be restored', 'raindrops' ) . '</strong>',
			'sanitize_callback'	 => 'raindrops_uninstall_option_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'keep'	 => 'Keep',
				'delete' => 'Delete All'
			),
			'priority'			=> 11,
			'section'			 => 'raindrops_theme_settings_document',
		),*/
		"raindrops_menu_primary_font_size"				 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_menu_primary_font_size','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Menu Primary Font Size', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '<p>' . esc_html__( 'Menu Primary Font Size. default value is 100( % ). set font size between 77 and 182', 'raindrops' ) . '</p>',
			'sanitize_callback'	 => 'raindrops_menu_primary_font_size_validate',
			'active_callback'	=> 'raindrops_show_menu_primary_is_show',
			'type'				 => 'range',
			'input_attrs'		 => array(
				'min'	 => 77,
				'max'	 => 182,
				'step'	 => 0.1,
				'class'	 => 'menu-primary-font-size raindrops',
				'style'	 => '',
			),
			'section'			 => 'raindrops_theme_settings_menu_size',
		),
		"raindrops_menu_primary_min_width"				 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_menu_primary_min_width','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Menu Primary Min Width', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '<p>' . esc_html__( 'Menu Primary Width. default value is 10 ( em ). set 1 between 95.999', 'raindrops' ) . '</p>',
			'sanitize_callback'	 => 'raindrops_menu_primary_min_width_validate',
			'active_callback'	=> 'raindrops_show_menu_primary_is_show',
			'type'				 => 'range',
			'input_attrs'		 => array(
				'min'	 => 1,
				'max'	 => 95.9,
				'step'	 => 0.1,
				'class'	 => 'menu-primary-min-width raindrops',
				'style'	 => '',
			),
			'section'			 => 'raindrops_theme_settings_menu_size',
		),
		"raindrops_use_featured_image_emphasis"			 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_use_featured_image_emphasis','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'USE or Not Emphasis of new content using the Featured Image', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'values yes or no default No', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_use_featured_image_emphasis_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				"yes"	 => esc_html__( "Yes", 'raindrops' ),
				"no"	 => esc_html__( "No", 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_featured',
		),
		
		"raindrops_featured_image_position"				 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_featured_image_position','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Featured Image Position', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Loop Pages Layout of Featured Image', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_featured_image_position_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				"front"	 => esc_html__( "In front of Title", 'raindrops' ),
				"left"	 => esc_html__( "Left of Article", 'raindrops' ),
			),
			'active_callback'	 => 'raindrops_use_featured_image_emphasis_callback',
			'section'			 => 'raindrops_theme_settings_featured',
		),
		"raindrops_featured_image_size"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_featured_image_size','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Featured Image Size', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'values thumbnail, medium, large, default', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_featured_image_size_validate',
			'type'				 => 'radio',
			'choices'			 => $raindrops_featured_image_size_choices,
			'active_callback'	 => 'raindrops_use_featured_image_emphasis_callback',
			'section'			 => 'raindrops_theme_settings_featured',
		),
		"raindrops_featured_image_recent_post_count"	 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_featured_image_recent_post_count','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Featured Image Special Layout Apply Post Count', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Input Possible values are 1 - ', 'raindrops' ) . $raindrops_featured_image_post_max . esc_html__( ' default value 3', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_featured_image_recent_post_count_validate',
			'type'				 => 'text',
			'active_callback'	 => 'raindrops_use_featured_image_emphasis_callback',
			'section'			 => 'raindrops_theme_settings_featured',
		),
		"raindrops_featured_image_singular"				 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_featured_image_singular','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Singular ( post, page )', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Featured Image Show, Hide or Lightbox on Singular Post,Page. default Show', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_featured_image_singular_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				"show"		 => esc_html__( "Show", 'raindrops' ),
				"hide"		 => esc_html__( "Hide", 'raindrops' ),
				"lightbox"	 => esc_html__( "Light Box", 'raindrops' ),
			),
			'active_callback'	 => '',
			'section'			 => 'raindrops_theme_settings_featured',
		),
		"raindrops_basefont_settings"					 => array(
			'default'			 => $raindrops_basefont_default_val,
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Base Font Size', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( "Base Font Size Value Recommend 13-20 (px size)", 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_basefont_settings_validate',
			'type'				 => 'radio',
			'choices'			 => array_flip( $raindrops_basefont_size ),
			'section'			 => 'raindrops_theme_settings_fonts',
		),
		"raindrops_article_title_css_class"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_article_title_css_class','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Entry Title CSS Class', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'default empty', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_article_title_css_class_validate',
			'type'				 => 'text',
			'section'			 => 'raindrops_theme_settings_post',
		),
		"raindrops_display_article_publish_date"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_display_article_publish_date','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Display Publish Date', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'default Show', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_display_article_publish_date_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'show'	 => esc_html__( 'Show', 'raindrops' ),
				'hide'	 => esc_html__( 'Hide', 'raindrops' ),
				'emoji'	 => esc_html__( 'Emoji', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_post',
		),
		"raindrops_display_article_author"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_display_article_author','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Display Author', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'default Avatar', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_display_article_author_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'show'	 => esc_html__( 'Show', 'raindrops' ),
				'hide'	 => esc_html__( 'Hide', 'raindrops' ),
				'avatar'	 => esc_html__( 'Avatar', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_post',
		),
		"raindrops_display_default_category"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_display_default_category','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Display Default Category', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => _nx(
									'Current permalink setting is the default. If permalink is the default, this feature does not work correctly.',
									'If permalink structure is special may not work',
									$raindrops_get_permalink_structure_message,
									'permalink setting related message',
									'raindrops') ,
			'sanitize_callback'	 => 'raindrops_display_default_category_validate',//_n() or _x() use $raindrops_get_permalink_structure_message
			'active_callback'	 => 'raindrops_permalink_is_default',
			'type'				 => 'radio',
			'choices'			 => array(
				'show'	 => esc_html__( 'Show', 'raindrops' ),
				'hide'	 => esc_html__( 'Hide', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_post',
		),

		"raindrops_posted_in_label"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_posted_in_label','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Posted in Labels', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Hide Posted in Labels ', 'raindrops' ) . esc_html__( 'This entry was posted in', 'raindrops' ) .' '. esc_html__( 'and tagged', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_posted_in_label_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'show'	 => esc_html__( 'Show', 'raindrops' ),
				'hide'	 => esc_html__( 'Hide', 'raindrops' ),
				'emoji'	 => esc_html__( 'emoji', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_post',
		),
		"raindrops_comments_are_closed"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_comments_are_closed','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 =>  esc_html__( 'Comments are closed Label', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Hide label ', 'raindrops' ) .esc_html__( 'Comments are closed.', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_comments_are_closed_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'show'	 => esc_html__( 'Show', 'raindrops' ),
				'hide'	 => esc_html__( 'Hide', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_post',
		),
		"raindrops_posted_on_position"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_posted_on_position','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Position of Posted on', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'default before contents', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_posted_on_position_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'before'	=> esc_html__( 'Before Contents', 'raindrops' ),
				'after'		=> esc_html__( 'After Contents', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_post',
		),
		"raindrops_posted_in_position"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_posted_in_position','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Position of Posted in', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'default after contents', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_posted_in_position_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'before'	=> esc_html__( 'Before Contents', 'raindrops' ),
				'after'		=> esc_html__( 'After Contents', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_post',
		),
		"raindrops_archive_title_label"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_archive_title_label','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Archives label', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Hide or Show label like Category Archives, Tag Archives', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_archive_title_label_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'show'	 => esc_html__( 'Show', 'raindrops' ),
				'hide'	 => esc_html__( 'Hide', 'raindrops' ),
				'emoji'	 => esc_html__( 'emoji', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_archive',
		),
		"raindrops_archive_nav_above"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_archive_nav_above','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Archive Page Top Navigation', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Hide or Show Blog Archives page top navigation', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_archive_nav_above_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'show'	 => esc_html__( 'Show', 'raindrops' ),
				'hide'	 => esc_html__( 'Hide', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_archive',
		),

		"raindrops_enable_header_image_filter"					 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_enable_header_image_filter','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Header Image Filter', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'sanitize_callback'	 => 'raindrops_enable_header_image_filter_validate',
			'active_callback'	 => '',
			'type'				 => 'radio',
			'choices'			 => array(
				'enable'	 => esc_html__( 'Enable', 'raindrops' ),
				'disable'	 => esc_html__( 'Disable', 'raindrops' ),
			),
			'section'			 => 'header_image',
			'priority'			 => 9,
		),
		"raindrops_header_image_filter_color"							 => array(
			'default'					 => raindrops_warehouse_clone( 'raindrops_header_image_filter_color','option_value' ),
			'data_type'					 => $raindrops_setting_type,
			'autoload'					 => 'yes',
			'capability'				 => $raindrops_customize_cap,
			'label'						 => esc_html__( 'Header Image Filter Color', 'raindrops' ),
			'excerpt1'					 => '',
			'description'				 => esc_html__( 'Set Header Image Filter Color', 'raindrops' ),
			'sanitize_callback'			 => 'raindrops_header_image_filter_color_validate',
			'active_callback'            => 'raindrops_enable_header_image_filter_is_enabel',
			'extend_customize_control'	 => 'WP_Customize_Color_Control',
			'extend_customize_setting'	 => '',
			'section'					 => 'header_image',
			'priority'					 => 9,
		),
		"raindrops_header_image_filter_apply_top"		 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_header_image_filter_apply_top','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Filter Image Top', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'sanitize_callback'	 => 'raindrops_header_image_filter_apply_top_validate',
			'active_callback'	 => 'raindrops_enable_header_image_filter_is_enabel',
			'type'				 => 'range',
			'input_attrs'		 => array(
				'min'	 => 0.05,
				'max'	 => 1,
				'step'	 => 0.05,
			),
			'section'			 => 'header_image',
			'priority'			 => 9,
		),
		"raindrops_header_image_filter_apply_bottom"		 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_header_image_filter_apply_bottom','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Filter Image Bottom', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'sanitize_callback'	 => 'raindrops_header_image_filter_apply_bottom_validate',
			'active_callback'	 => 'raindrops_enable_header_image_filter_is_enabel',
			'type'				 => 'range',
			'input_attrs'		 => array(
				'min'	 => 0.05,
				'max'	 => 1,
				'step'	 => 0.05,
			),
			'section'			 => 'header_image',
			'priority'			 => 9,
		),

	);

	/**
	 * Conditional args
	 */
	$raindrops_customize_args_conditional_1 = array(
		"raindrops_entry_content_is_home"		 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_entry_content_is_home','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Home Listed Entry Contents', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'sanitize_callback'	 => 'raindrops_entry_content_is_home_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'content'	 => esc_html__( 'Show Content', 'raindrops' ),
				'excerpt'	 => esc_html__( 'Show Excerpt', 'raindrops' ),
				'none'		 => esc_html__( 'Hide', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_content',
		),
		"raindrops_entry_content_is_category"	 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_entry_content_is_category','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Category Archives Entry Contents', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'sanitize_callback'	 => 'raindrops_entry_content_is_category_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'content'	 => esc_html__( 'Show Content', 'raindrops' ),
				'excerpt'	 => esc_html__( 'Show Excerpt', 'raindrops' ),
				'none'		 => esc_html__( 'Hide', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_content',
		),
		"raindrops_entry_content_is_search"		 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_entry_content_is_search','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Search Result Entry Contents', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'sanitize_callback'	 => 'raindrops_entry_content_is_tag_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'content'	 => esc_html__( 'Show Content', 'raindrops' ),
				'excerpt'	 => esc_html__( 'Show Excerpt', 'raindrops' ),
				'none'		 => esc_html__( 'Hide', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_content',
		),
		"raindrops_allow_oembed_excerpt_view"	 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_allow_oembed_excerpt_view','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Allow Oembed in Excerpt', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Overview display, if you set no, you can reduce the load time of the page. values yes or no default yes', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_allow_oembed_excerpt_view_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'no'	 => esc_html__( 'No', 'raindrops' ),
				'yes'	 => esc_html__( 'Yes', 'raindrops' ),
			),
			'active_callback'	 => 'raindrops_post_content_type_callback',
			'section'			 => 'raindrops_theme_settings_content',
		),
		"raindrops_excerpt_enable"				 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_excerpt_enable','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Excerpt Type', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Default WordPress Excerpt, HTML in Excerpt is Raindrops original excerpt', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_excerpt_enable_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'no'	 => esc_html__( 'WordPress Excerpt', 'raindrops' ),
				'yes'	 => esc_html__( 'HTML in Excerpt', 'raindrops' ),
			),
			'active_callback'	 => 'raindrops_post_content_type_callback',
			'section'			 => 'raindrops_theme_settings_content',
		),
		"raindrops_read_more_after_excerpt"		 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_read_more_after_excerpt','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Add More Link After Excerpt', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'sanitize_callback'	 => 'raindrops_read_more_after_excerpt_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'yes'	 => esc_html__( 'Yes', 'raindrops' ),
				'no'	 => esc_html__( 'No', 'raindrops' ),
			),
			'active_callback'	 => 'raindrops_post_content_type_callback',
			'section'			 => 'raindrops_theme_settings_content',
		),
		"raindrops_excerpt_length"		 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_excerpt_length','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Excerpt Length', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Value 20-400', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_excerpt_length_validate',
			'type'				 => 'range',
			'input_attrs'		 => array(
				'min'	 => 20,
				'max'	 => 400,
				'step'	 => 1,
			),
			'active_callback'	 => 'raindrops_post_content_type_callback',
			'section'			 => 'raindrops_theme_settings_content',
		),
	);

	$raindrops_customize_args_conditional_2 = array(
		"raindrops_plugin_presentation_bcn_nav_menu" => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_plugin_presentation_bcn_nav_menu','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Breadcrumbs', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Theme, will make a presentation of applying the plugin automatically, value set yes or none. using Breadcrumb NavXT', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_plugin_presentation_bcn_nav_menu_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'yes'	 => esc_html__( 'Yes', 'raindrops' ),
				'none'	 => esc_html__( 'No', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_plugins',
		),
	);

	$raindrops_customize_args_conditional_3 = array(
		"raindrops_plugin_presentation_wp_pagenav" => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_plugin_presentation_wp_pagenav','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Custom Page Navigation', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Theme, will make a presentation of applying the plugin automatically, value set yes or none. using WP PageNavi', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_plugin_presentation_wp_pagenav_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'yes'	 => esc_html__( 'Yes', 'raindrops' ),
				'none'	 => esc_html__( 'No', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_plugins',
		),
	);

	$raindrops_customize_args_conditional_4	 = array(
		"raindrops_plugin_presentation_meta_slider" => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_plugin_presentation_meta_slider','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Slider for HomePage', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Please Set Meta Slider ID or none. using Meta Slider', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_plugin_presentation_meta_slider_validate',
			'type'				 => 'select',
			'choices'			 => raindrops_get_ml_slider_ids(),
			'section'			 => 'raindrops_theme_settings_plugins',
		),
	);
	$raindrops_customize_args_conditional_5	 = array(
		"raindrops_plugin_presentation_the_events_calendar" => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_plugin_presentation_the_events_calendar','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'The Events Calendar Automatic Presentation', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'Theme, will make a presentation of applying the plugin automatically. using The Events Calendar Plugin', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_plugin_presentation_the_events_calendar_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'yes'	 => esc_html__( 'Yes', 'raindrops' ),
				'none'	 => esc_html__( 'No', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_plugins',
		),
	);
	$raindrops_customize_args_conditional_6	 = array(
		"raindrops_japanese_date" => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_japanese_date','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'USE or Not Japanese Date', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'sanitize_callback'	 => 'raindrops_japanese_date_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'yes'	 => esc_html__( 'Yes', 'raindrops' ),
				'no'	 => esc_html__( 'No', 'raindrops' ),
			),
			'section'			 => 'raindrops_theme_settings_plugins',
		),
	);

	$raindrops_customize_args_conditional_7 = array(
		"raindrops_place_of_site_title"		 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_place_of_site_title','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Place of the Title', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'sanitize_callback'	 => 'raindrops_place_of_site_title_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'above'			 => esc_html__( 'Above the header image', 'raindrops' ),
				'header_image'	 => esc_html__( 'In the header image', 'raindrops' ),
			),
			'section'			 => 'title_tagline',
		),
		"raindrops_site_title_font_size"	 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_site_title_font_size','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Font Size of Site Title', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '<p>' . esc_html__( 'default value none, or 1-10( percent of viewport width )', 'raindrops' ) . '</p>',
			'sanitize_callback'	 => 'raindrops_site_title_font_size_validate',
			'type'				 => 'range',
			'input_attrs'		 => array(
				'min'	 => 1,
				'max'	 => 10,
				'step'	 => 0.1,
				'class'	 => 'site-title-font-size test',
				'style'	 => '',
			),
			'active_callback'	 => 'raindrops_place_of_site_title_callback',
			'section'			 => 'title_tagline',
		),
		"raindrops_site_title_top_margin"	 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_site_title_top_margin','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Top Margin in the header image', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '<p>' . esc_html__( ' default value is 1 . set 0 between 100 ( percent )', 'raindrops' ) . '</p>',
			'sanitize_callback'	 => 'raindrops_site_title_top_margin_validate',
			'type'				 => 'range',
			'input_attrs'		 => array(
				'min'	 => 1,
				'max'	 => 100,
				'step'	 => 1,
				'class'	 => 'site-title-left_margin',
				'style'	 => 'color: #0a0',
			),
			'active_callback'	 => 'raindrops_place_of_site_title_callback',
			'section'			 => 'title_tagline',
		),

		"raindrops_site_title_left_margin_type"	 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_site_title_left_margin_type','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'The choice of left margin how to set', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '',
			'sanitize_callback'	 => 'raindrops_site_title_left_margin_type_validate',
			'type'				 => 'radio',
			'choices'		 => array(
				'default'	 => esc_html__('Default', 'raindrops' ),
				'centered'	 => esc_html__('Centered', 'raindrops' ),
				'manual'	 => esc_html__('Manual Settings', 'raindrops' ),
			),
			'active_callback'	 => 'raindrops_place_of_site_title_callback',
			'section'			 => 'title_tagline',
		),

		"raindrops_site_title_left_margin"	 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_site_title_left_margin','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Left Margin in the header image', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => '<p>' . esc_html__( ' default value is 1. set 0 between 100 ( percent )', 'raindrops' ) . '</p>',
			'sanitize_callback'	 => 'raindrops_site_title_left_margin_validate',
			'type'				 => 'range',
			'input_attrs'		 => array(
				'min'	 => 1,
				'max'	 => 100,
				'step'	 => 1,
				'class'	 => 'site_title_top_margin test',
				'style'	 => 'color: #0a0',
			),
			'active_callback'	 => 'raindrops_place_of_site_title_callback_b',
			'section'			 => 'title_tagline',
		),
		"raindrops_tagline_in_the_header_image"	 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_tagline_in_the_header_image','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'Place of the Tagline', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'tagline show or hide', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_tagline_in_the_header_image_validate',
			'type'				 => 'radio',
			'choices'			 => array(
				'show'	 => esc_html__( 'Show in the header image', 'raindrops' ),
				'above'	 => esc_html__( 'Show above the header image', 'raindrops' ),
				'hide'	 => esc_html__( 'Hide', 'raindrops' ),
			),
			'active_callback'	 => '',
			'section'			 => 'title_tagline',
		),
		"raindrops_site_title_css_class"		 => array(
			'default'			 => raindrops_warehouse_clone( 'raindrops_site_title_css_class','option_value' ),
			'data_type'			 => $raindrops_setting_type,
			'autoload'			 => 'yes',
			'capability'		 => $raindrops_customize_cap,
			'label'				 => esc_html__( 'CSS Class of Site Title', 'raindrops' ),
			'excerpt1'			 => '',
			'description'		 => esc_html__( 'for example google-font-lobster default value none', 'raindrops' ),
			'sanitize_callback'	 => 'raindrops_site_title_css_class_validate',
			'type'				 => 'text',
			'section'			 => 'title_tagline',
		),
		
	);

	if ( RAINDROPS_USE_LIST_EXCERPT !== false ) {
		$raindrops_customize_args = array_merge( $raindrops_customize_args, $raindrops_customize_args_conditional_1 );
	}


	if ( 'yes' == get_theme_mod( 'raindrops_breadcrumb_navxt_status' ) ) { //Check this when option
		$raindrops_customize_args = array_merge( $raindrops_customize_args, $raindrops_customize_args_conditional_2 );
	}

	if ( 'yes' == get_theme_mod( 'raindrops_wp_pagenavi_status' ) ) {

		$raindrops_customize_args = array_merge( $raindrops_customize_args, $raindrops_customize_args_conditional_3 );
	}

	if ( 'yes' == get_theme_mod( 'raindrops_ml_slider_status' ) ) {

		$raindrops_customize_args = array_merge( $raindrops_customize_args, $raindrops_customize_args_conditional_4 );
	}
	if ( 'yes' == get_theme_mod( 'raindrops_the_events_calendar_status' ) ) {

		$raindrops_customize_args = array_merge( $raindrops_customize_args, $raindrops_customize_args_conditional_5 );
	}
	if ( get_locale() == 'ja' ) {

		$raindrops_customize_args = array_merge( $raindrops_customize_args, $raindrops_customize_args_conditional_6 );
	}

	$place_of_site_title_setting = raindrops_warehouse_clone( 'raindrops_place_of_site_title' );

	if ( get_header_image() !== false || $place_of_site_title_setting == 'header_image' ) {

		$raindrops_customize_args = array_merge( $raindrops_customize_args, $raindrops_customize_args_conditional_7 );
	}
}

$raindrops_customize_args = raindrops_theme_mod_default_normalize( $raindrops_customize_args );

add_action( 'customize_register', 'raindrops_extend_customize_register' );

if ( !function_exists( 'raindrops_extend_customize_register' ) ) {

	function raindrops_extend_customize_register( $wp_customize ) {

		global $raindrops_theme_customize_sections, $raindrops_customize_args, $raindrops_theme_customize_panels;
		/**
		 * Create Section
		 */
		foreach ( $raindrops_theme_customize_sections as $raindrops_section_key => $raindrops_section_val ) {

			$wp_customize->add_section( $raindrops_section_key, $raindrops_section_val );
		}
		/**
		 * Create Panel
		 */
		foreach ( $raindrops_theme_customize_panels as $raindrops_panel_key => $raindrops_panel_val ) {

			$wp_customize->add_panel( $raindrops_panel_key, $raindrops_panel_val );
		}
		/**
		 * Create Default Controls
		 */
		foreach ( $raindrops_customize_args as $key => $raindrops_mod_val ) {

			if ( !isset( $raindrops_customize_args[ $key ][ 'extend_customize_setting' ] ) || empty( $raindrops_customize_args[ $key ][ 'extend_customize_setting' ] ) ) {

				$id = raindrops_data_store_relate_id( $key );

				$wp_customize->add_setting( $id, array(
					'default'				 => $raindrops_customize_args[ $key ][ 'default' ],
					'type'					 => $raindrops_customize_args[ $key ][ 'data_type' ],
					'capability'			 => $raindrops_customize_args[ $key ][ 'capability' ],
					'sanitize_callback'		 => $raindrops_customize_args[ $key ][ 'sanitize_callback' ],
					'sanitize_js_callback'	 => $raindrops_customize_args[ $key ][ 'sanitize_js_callback' ],
					'theme_supports'		 => $raindrops_customize_args[ $key ][ 'theme_supports' ],
					'transport'				 => $raindrops_customize_args[ $key ][ 'transport' ],
					'dirty'					 => $raindrops_customize_args[ $key ][ 'dirty' ],
				) );
			}

			if ( !isset( $raindrops_customize_args[ $key ][ 'extend_customize_control' ] ) || empty( $raindrops_customize_args[ $key ][ 'extend_customize_control' ] ) ) {
				$id = raindrops_data_store_relate_id( $key );
				$wp_customize->add_control( $id, array(
					'label'				 => $raindrops_customize_args[ $key ][ 'label' ],
					'section'			 => $raindrops_customize_args[ $key ][ 'section' ],
					'settings'			 => $id,
					'type'				 => $raindrops_customize_args[ $key ][ 'type' ],
					'choices'			 => $raindrops_customize_args[ $key ][ 'choices' ],
					'active_callback'	 => $raindrops_customize_args[ $key ][ 'active_callback' ],
					'priority'			 => $raindrops_customize_args[ $key ][ 'priority' ],
					'input_attrs'		 => $raindrops_customize_args[ $key ][ 'input_attrs' ],
					'description'		 => $raindrops_customize_args[ $key ][ 'description' ],
					'json'				 => $raindrops_customize_args[ $key ][ 'json' ],
				) );
			}
		}

		/**
		 * Create Custom Control
		 */
		// check
		$settings	 = 'raindrops_base_color';
		$key		 = raindrops_data_store_relate_id( $settings );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $key, array(
			'label'				 => raindrops_theme_mod( $settings, 'label' ),
			'section'			 => raindrops_theme_mod( $settings, 'section' ),
			'settings'			 => $key,
			'active_callback'	 => raindrops_theme_mod( $settings, 'active_callback' ),
			'priority'			 => raindrops_theme_mod( $settings, 'priority' ),
		) ) );
		// check
		$settings	 = 'raindrops_default_fonts_color';
		$key		 = raindrops_data_store_relate_id( $settings );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $key, array(
			'label'				 => raindrops_theme_mod( $settings, 'label' ),
			'section'			 => raindrops_theme_mod( $settings, 'section' ),
			'settings'			 => $key,
			'active_callback'	 => raindrops_theme_mod( $settings, 'active_callback' ),
			'priority'			 => raindrops_theme_mod( $settings, 'priority' ),
		) ) );
		$settings	 = 'raindrops_hyperlink_color';
		$key		 = raindrops_data_store_relate_id( $settings );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $key, array(
			'label'		 => raindrops_theme_mod( $settings, 'label' ),
			'section'	 => raindrops_theme_mod( $settings, 'section' ),
			'settings'	 => $key,
			'priority'	 => raindrops_theme_mod( $settings, 'priority' ),
		) ) );
		$settings	 = 'raindrops_footer_color';
		$key		 = raindrops_data_store_relate_id( $settings );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $key, array(
			'label'				 => raindrops_theme_mod( $settings, 'label' ),
			'section'			 => raindrops_theme_mod( $settings, 'section' ),
			'settings'			 => $key,
			'active_callback'	 => raindrops_theme_mod( $settings, 'active_callback' ),
			'priority'			 => raindrops_theme_mod( $settings, 'priority' ),
		) ) );

		$settings	 = 'raindrops_footer_link_color';
		$key		 = raindrops_data_store_relate_id( $settings );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $key, array(
			'label'				 => raindrops_theme_mod( $settings, 'label' ),
			'section'			 => raindrops_theme_mod( $settings, 'section' ),
			'settings'			 => $key,
			'active_callback'	 => raindrops_theme_mod( $settings, 'active_callback' ),
			'priority'			 => raindrops_theme_mod( $settings, 'priority' ),
		) ) );
		$settings	 = 'raindrops_header_image_filter_color';
		$key		 = raindrops_data_store_relate_id( $settings );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $key, array(
			'label'				 => raindrops_theme_mod( $settings, 'label' ),
			'section'			 => raindrops_theme_mod( $settings, 'section' ),
			'settings'			 => $key,
			'active_callback'	 => raindrops_theme_mod( $settings, 'active_callback' ),
			'priority'			 => raindrops_theme_mod( $settings, 'priority' ),
		) ) );
		/**
		 * Exstra Menu
		 */
		$wp_customize->add_setting( 'raindrops_changelog_setting', array(
			'default'			 => '',
			'type'				 => '',
			'capability'		 => 'edit_theme_options',
			'sanitize_callback'	 => 'esc_html',
		) );
		$wp_customize->add_control( new Raindrops_Customize_Changelog_Control( $wp_customize,  'raindrops_changelog_setting'  , array(
			'label'			 => esc_html__('Change Log','raindrops' ),
			'description'	 => esc_html__( 'Most Recent Changes', 'raindrops' ),
			'section'		 => 'raindrops_theme_settings_document',
			'settings'		 => 'raindrops_changelog_setting',
		) ) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_textcolor', array(
			'label'				=> __( 'Header Text Color' , 'raindrops' ),
			'section'			=> 'title_tagline',
			'priority'			=> 10 ) ) );
		
		$wp_customize->remove_control( 'display_header_text' );
		
	}

}
if ( class_exists( 'WP_Customize_Control' ) ) {

	if ( !class_exists( 'Raindrops_Customize_Changelog_Control' ) ) {

		class Raindrops_Customize_Changelog_Control extends WP_Customize_Control {

			public $type = 'changelog';

			public function render_content() {
				
				$changelog_url	= esc_url( get_template_directory_uri(). '/changelog.txt' );
				$part_data		= wp_remote_get(  $changelog_url );
				
					$html = '<div class="raindrops-changelog">
								<span class="raindrops-customize-content customize-control-title">%1$s</span>
								<span class="raindrops-description changelog">%4$s</span>
								<div class="raindrops-recent-changes raindrops-box">
								%2$s</div>
								<p><a href="%3$s" target="_blank">%1$s</a></p>
							</div>';
					$html_error = '<div class="raindrops-changelog can-not-read-file">
								<span class="raindrops-customize-content customize-control-title">%1$s</span>
								<span class="raindrops-description changelog">%2$s</span>								
							</div>';
				
				if( is_array( $part_data ) && isset( $part_data['body'] ) ) {

					$part_data = preg_match( '!Changelog(.+?)Files Modified!siu',$part_data['body'],$regs);
					$part_data = esc_html( $regs[1] );
					
					if( ! empty( $part_data ) ) {
						$part_data = wpautop( $part_data );
						printf( $html, esc_html( $this->label ), $part_data, esc_url( $changelog_url ),esc_html( $this->description ) );
					}
				} else {
					
					$part_data = esc_html__( 'Failed to read the changelog', 'raindrops' );
					printf( $html_error, esc_html( $this->label ), $part_data );
				}
			}
		}
	}
}


/**
 *  Sidebar CSS
 */
$color_patturn_array = raindrops_wp_admin_css_colors( 'name' );

add_action( 'customize_controls_enqueue_scripts', 'raindrops_customizer_style' );

function raindrops_customizer_style() {
	global $wp_version;

	$admin_color_relate_color = '#000';

	/**
	 * 4.3-alpha-33010
	 */
	$current_admin_color = get_user_option( 'admin_color' );

	$property = 'name';
	/* strange */
	$color_patturn_array = raindrops_wp_admin_css_colors( 'colors' );
		$admin_color1 = sanitize_hex_color( $color_patturn_array[0] );
		$admin_color2 = sanitize_hex_color( $color_patturn_array[1] );
		$admin_color3 = sanitize_hex_color( $color_patturn_array[2] );
		$admin_color4 = sanitize_hex_color( $color_patturn_array[3] );
	$color_patturn_array = raindrops_wp_admin_css_colors( 'name' );
		$admin_color_base = sanitize_hex_color( $color_patturn_array['base'] );
		$admin_color_focus = sanitize_hex_color( $color_patturn_array['focus'] );
		$admin_color_current = sanitize_hex_color( $color_patturn_array['current'] );
		


	if ( version_compare( $wp_version, '4.2.2', '>' ) ) {

		if( 'light' == $current_admin_color || 'fresh' == $current_admin_color ) {

			$admin_color_relate_color = '#000';
		} else {

			$admin_color_relate_color = '#fff';
		}
	}

	
	if ( version_compare( $wp_version, '4.3', '<' ) ) {
	/**
	 * Transitonal conditional current version WordPress 4.3 No need below
	 */
		$admin_color_relate_color = $admin_color2;
	}

	$css = <<<CUSTOMIZER_CSS
	

/* control area */
#customize-footer-actions .collapse-sidebar-label,
li.customize-control .customizer-section-intro,
li.customize-control .raindrops-description,
li.customize-control .raindrops-changelog a,
li.customize-control .inner span{
		color:$admin_color_base;
}
li.customize-control .widget-inside .widget-content,
.accordion-section-content	li.customize-control{
	border:1px solid rgba(52,52,52,.1);
	padding-bottom:1em;
	padding-left:5px;
	background:rgba(222,222,222,.3);
	background:$admin_color1;
}
	
/* title */
.menu-item-bar:hover .menu-item-handle .item-type,
.accordion-section-content	li.customize-control .customize-control-title{
	color:$admin_color_focus;
}
/* menu */
#menu-to-edit .customize-control-nav_menu_item {
	padding:5px 0 1em 5px;
}
.customize-control-nav_menu .reorder,
.menu-item-bar .menu-item-handle .item-type,
.menu-delete-item .menu-delete,
.submitbox .submitdelete{
		color:$admin_color_base;
}
#menu-to-edit .customize-control-nav_menu_item .menu-item-bar .menu-item-handle,
#menu-to-edit .customize-control-nav_menu_item .menu-item-bar,
#menu-to-edit .customize-control-nav_menu_item .menu-item-settings{
	background:transparent;
}
#menu-to-edit .customize-control-nav_menu_item .menu-item-bar .menu-item-handle,
#menu-to-edit .customize-control-nav_menu_item .menu-item-bar,
.menu-item-settings .original-link,
.menu-item-settings .link-to-original{
	color:$admin_color_current;
}
/* label */
li.customize-control .widget-content p,
li.customize-control .widget-inside .widget-content h4,
.accordion-section-content	li.customize-control label{
	color:$admin_color_current;
}
/* description */
#customize-controls .description{
	color:$admin_color_base;
	}
/*test*/
.customize-control-header .header-view{
	display:inline-block;
	max-width:285px;
	margin:3px;
	}
#raindrops-customizer-preview-menu {
	text-align: right;
	padding: 10px;
	display:block;
	height:46px;
	box-sizing:border-box;
}
#customize-header-actions{
		border-color:rgba(152,152,152,.9)!important;
	}

#customize-info .accordion-section-title{
		background:transparent;
		color:inherit
		border:none;
	}
#raindrops-customizer-preview-menu #raindrops-customizer-label,
#raindrops-customizer-preview-menu #range_val,
#raindrops-customizer-preview-menu #raindrops-customizer-width{
	display:inline-block;
	margin:0 1em;
}
#raindrops-customizer-preview-menu a{

}
#raindrops-customizer-preview-menu a:hover{
	color:orange;
}

#customize-theme-controls li[id^=customize-control-widget_raindrops_pinup_entry_widget] label{
	width:100%;
}
#customize-theme-controls .raindrops-pinup-entry-style{
	width:100%;
	max-width:100%;
	margin-bottom:2em;
}
.raindrops-box{
	padding:1em;
	box-sizing:border-box;
	margin:1em 0;
}
.raindrops-recent-changes{
	background:#efefef;
	color:#333;
}
.raindrops-changelog{
	word-break: break-all;
}
.can-not-read-file .changelog{
	color: #f55;
}
#customize-control-raindrops_theme_settings-raindrops_sitewide_css label{
	width:98%;
}
#customize-control-raindrops_theme_settings-raindrops_sitewide_css textarea{
	width:100%;
	font-family:"Lucida Console", Monaco, monospace;
	height:16em!important;

}

CUSTOMIZER_CSS;

		if ( version_compare( $wp_version, '4.3', '<' ) ) {
		/**
		 * Transitonal conditional current version WordPress 4.3 No need below
		 */
			$current_admin_color = get_user_option( 'admin_color' );

			if( 'fresh' == $current_admin_color ) {
				$css .= '#customize-info .accordion-section-title{ color:#333;}';
			}
		}

	wp_add_inline_style( 'customize-controls', $css );
}

add_action( 'customize_controls_print_scripts', 'raindrops_print_scripts' );

function raindrops_print_scripts() {
	global $raindrops_current_data_version, $raindrops_customizer_admin_color, $raindrops_setting_type;
	wp_enqueue_script( 'raindrops-customize', get_template_directory_uri() . '/lib/customize.js', array( 'jquery' ), $raindrops_current_data_version, true );
	wp_localize_script(
	'raindrops-customize', 'raindrops_customizer_script_vars', array(
		'preview_label'						 => __( 'Preview Width', 'raindrops' ),
		'basic_config_label'				 => __( '<span>Basic Config</span>', 'raindrops' ),
		'admin_color'						 => $raindrops_customizer_admin_color,
		'setting_field_type'				=> $raindrops_setting_type,
		'dark_footer_color_default'			 => raindrops_default_color_clone( 'raindrops_footer_color', 'dark' ),
		'dark_hyperlink_color_default'		 => raindrops_default_color_clone( 'raindrops_hyperlink_color', 'dark' ),
		'dark_fonts_color_default'			 => raindrops_default_color_clone( 'raindrops_default_fonts_color', 'dark' ),
		'dark_footer_link_color'			 => raindrops_default_color_clone( 'raindrops_footer_link_color', 'dark' ),
	'dark_header_textcolor'			 => raindrops_default_color_clone( 'header_textcolor', 'dark' ),		
		'w3standard_footer_color_default'	 => raindrops_default_color_clone( 'raindrops_footer_color', 'w3standard' ),
		'w3standard_hyperlink_color_default' => raindrops_default_color_clone( 'raindrops_hyperlink_color', 'w3standard' ),
		'w3standard_fonts_color_default'	 => raindrops_default_color_clone( 'raindrops_default_fonts_color', 'w3standard' ),
		'w3standard_footer_link_color'		 => raindrops_default_color_clone( 'raindrops_footer_link_color', 'w3standard' ),
	'w3standard_header_textcolor'		 => raindrops_default_color_clone( 'header_textcolor', 'w3standard' ),			
		'light_footer_color_default'		 => raindrops_default_color_clone( 'raindrops_footer_color', 'light' ),
		'light_hyperlink_color_default'		 => raindrops_default_color_clone( 'raindrops_hyperlink_color', 'light' ),
		'light_fonts_color_default'			 => raindrops_default_color_clone( 'raindrops_default_fonts_color', 'light' ),
		'light_footer_link_color'			 => raindrops_default_color_clone( 'raindrops_footer_link_color', 'light' ),
	'light_header_textcolor'			 => raindrops_default_color_clone( 'header_textcolor', 'light' ),		
		'minimal_footer_color_default'		 => raindrops_default_color_clone( 'raindrops_footer_color', 'minimal' ),
		'minimal_hyperlink_color_default'	 => raindrops_default_color_clone( 'raindrops_hyperlink_color', 'minimal' ),
		'minimal_fonts_color_default'		 => raindrops_default_color_clone( 'raindrops_default_fonts_color', 'minimal' ),
		'minimal_footer_link_color'			 => raindrops_default_color_clone( 'raindrops_footer_link_color', 'minimal' ),
	'minimal_header_textcolor'			 => raindrops_default_color_clone( 'header_textcolor', 'minimal' ),
		'fallback_footer_color_default'		 => apply_filters('raindrops_fallback_footer_color_default',raindrops_default_color_clone( 'raindrops_footer_color', 'fallback' ) ),
		'fallback_hyperlink_color_default'	 => apply_filters( 'raindrops_fallback_hyperlink_color_default', raindrops_default_color_clone( 'raindrops_hyperlink_color', 'fallback' ) ),
		'fallback_fonts_color_default'		 => apply_filters( 'raindrops_fallback_fonts_color_default', raindrops_default_color_clone( 'raindrops_default_fonts_color', 'fallback' ) ),
		'fallback_footer_link_color'		=> apply_filters( 'raindrops_fallback_footer_link_color', raindrops_default_color_clone( 'raindrops_footer_link_color', 'fallback' ) ),
	'fallback_header_textcolor'			 =>  apply_filters( 'raindrops_fallback_header_textcolor', raindrops_default_color_clone( 'header_textcolor', 'fallback' ) ),
	
	)
	);
}

?>