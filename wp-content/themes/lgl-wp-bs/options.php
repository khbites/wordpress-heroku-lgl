<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

/* Template Dir mainly for themes subfunction of the options-framework/wp-bootstrap which I don't use anyways */
define("OPTIONS_FRAMEWORK_DIRECTORY", get_template_directory());


function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	if ( function_exists( 'wp_get_theme' ) ) {
                $the_theme = wp_get_theme(  get_template_directory() . '/style.css' );
        // WordPress 3.3
        } else {
                $the_theme = get_theme_data(  get_template_directory() . '/style.css' );
        }
        $themename = $the_theme['Title'];
        
	$themename = preg_replace("/\W/", "", strtolower($themename) );
	
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
	
	// echo $themename;
}

/* Google Fonts stuff based on http://wptheming.com/2012/06/loading-google-fonts-from-theme-options/
                                                                                                 
		        GGGGGGGGGGGGG                                                     lllllll                     
		     GGG::::::::::::G                                                     l:::::l                     
		   GG:::::::::::::::G                                                     l:::::l                     
		  G:::::GGGGGGGG::::G                                                     l:::::l                     
		 G:::::G       GGGGGG   ooooooooooo      ooooooooooo      ggggggggg   gggggl::::l     eeeeeeeeeeee    
		G:::::G               oo:::::::::::oo  oo:::::::::::oo   g:::::::::ggg::::gl::::l   ee::::::::::::ee  
		G:::::G              o:::::::::::::::oo:::::::::::::::o g:::::::::::::::::gl::::l  e::::::eeeee:::::ee
		G:::::G    GGGGGGGGGGo:::::ooooo:::::oo:::::ooooo:::::og::::::ggggg::::::ggl::::l e::::::e     e:::::e
		G:::::G    G::::::::Go::::o     o::::oo::::o     o::::og:::::g     g:::::g l::::l e:::::::eeeee::::::e
		G:::::G    GGGGG::::Go::::o     o::::oo::::o     o::::og:::::g     g:::::g l::::l e:::::::::::::::::e 
		G:::::G        G::::Go::::o     o::::oo::::o     o::::og:::::g     g:::::g l::::l e::::::eeeeeeeeeee  
		 G:::::G       G::::Go::::o     o::::oo::::o     o::::og::::::g    g:::::g l::::l e:::::::e           
		  G:::::GGGGGGGG::::Go:::::ooooo:::::oo:::::ooooo:::::og:::::::ggggg:::::gl::::::le::::::::e          
		   GG:::::::::::::::Go:::::::::::::::oo:::::::::::::::o g::::::::::::::::gl::::::l e::::::::eeeeeeee  
		     GGG::::::GGG:::G oo:::::::::::oo  oo:::::::::::oo   gg::::::::::::::gl::::::l  ee:::::::::::::e  
		        GGGGGG   GGGG   ooooooooooo      ooooooooooo       gggggggg::::::gllllllll    eeeeeeeeeeeeee  
		                                                                   g:::::g                            
		                                                       gggggg      g:::::g                            
		                                                       g:::::gg   gg:::::g                            
		                                                        g::::::ggg:::::::g                            
		                                                         gg:::::::::::::g                             
		                                                           ggg::::::ggg                               
		                                                              gggggg                                  
				                                                                                              
				                                                                                              
				FFFFFFFFFFFFFFFFFFFFFF                                         tttt                           
				F::::::::::::::::::::F                                      ttt:::t                           
				F::::::::::::::::::::F                                      t:::::t                           
				FF::::::FFFFFFFFF::::F                                      t:::::t                           
				  F:::::F       FFFFFFooooooooooo   nnnn  nnnnnnnn    ttttttt:::::ttttttt        ssssssssss   
				  F:::::F           oo:::::::::::oo n:::nn::::::::nn  t:::::::::::::::::t      ss::::::::::s  
				  F::::::FFFFFFFFFFo:::::::::::::::on::::::::::::::nn t:::::::::::::::::t    ss:::::::::::::s 
				  F:::::::::::::::Fo:::::ooooo:::::onn:::::::::::::::ntttttt:::::::tttttt    s::::::ssss:::::s
				  F:::::::::::::::Fo::::o     o::::o  n:::::nnnn:::::n      t:::::t           s:::::s  ssssss 
				  F::::::FFFFFFFFFFo::::o     o::::o  n::::n    n::::n      t:::::t             s::::::s      
				  F:::::F          o::::o     o::::o  n::::n    n::::n      t:::::t                s::::::s   
				  F:::::F          o::::o     o::::o  n::::n    n::::n      t:::::t    ttttttssssss   s:::::s 
				FF:::::::FF        o:::::ooooo:::::o  n::::n    n::::n      t::::::tttt:::::ts:::::ssss::::::s
				F::::::::FF        o:::::::::::::::o  n::::n    n::::n      tt::::::::::::::ts::::::::::::::s 
				F::::::::FF         oo:::::::::::oo   n::::n    n::::n        tt:::::::::::tt s:::::::::::ss  
				FFFFFFFFFFF           ooooooooooo     nnnnnn    nnnnnn          ttttttttttt    sssssssssss    
*/
/**
 * Returns an array of system fonts
 * Feel free to edit this, update the font fallbacks, etc.
 */

function options_typography_get_os_fonts() {
	// OS Font Defaults
	$os_faces = array(
		'Arial, sans-serif' => 'Arial',
		'"Avant Garde", sans-serif' => 'Avant Garde',
		'Cambria, Georgia, serif' => 'Cambria',
		'Copse, sans-serif' => 'Copse',
		'Garamond, "Hoefler Text", Times New Roman, Times, serif' => 'Garamond',
		'Georgia, serif' => 'Georgia',
		'"Helvetica Neue", Helvetica, sans-serif' => 'Helvetica Neue',
		'Tahoma, Geneva, sans-serif' => 'Tahoma'
	);
	return $os_faces;
}

/**
 * Returns a select list of Google fonts
 * Feel free to edit this, update the fallbacks, etc.
 */

function options_typography_get_google_fonts() {
	// Google Font Defaults
	$google_faces = array(
		'Arvo, serif' => 'Arvo',
		'Copse, sans-serif' => 'Copse',
		'Droid Sans, sans-serif' => 'Droid Sans',
		'Droid Serif, serif' => 'Droid Serif',
		'Lobster, cursive' => 'Lobster',
		'Nobile, sans-serif' => 'Nobile',
		'Open Sans, sans-serif' => 'Open Sans',
		'Oswald, sans-serif' => 'Oswald',
		'Pacifico, cursive' => 'Pacifico',
		'Rokkitt, serif' => 'Rokkit',
		'Raleway, sans-serif' => 'Raleway',
		'PT Sans, sans-serif' => 'PT Sans',
		'Quattrocento, serif' => 'Quattrocento',
		'Raleway, cursive' => 'Raleway',
		'Ubuntu, sans-serif' => 'Ubuntu',
		'Yanone Kaffeesatz, sans-serif' => 'Yanone Kaffeesatz'
	);
	return $google_faces;
}


/**
 * Checks font options to see if a Google font is selected.
 * If so, options_typography_enqueue_google_font is called to enqueue the font.
 * Ensures that each Google font is only enqueued once.
 */
 
if ( !function_exists( 'options_typography_google_fonts' ) ) {
	function options_typography_google_fonts() {
		$all_google_fonts = array_keys( options_typography_get_google_fonts() );
		// Define all the options that possibly have a unique Google font
		$google_font = of_get_option('google_font', 'Rokkitt, serif');
		$google_mixed = of_get_option('google_mixed', false);
		$google_mixed_2 = of_get_option('google_mixed_2', 'Arvo, serif');
		// Get the font face for each option and put it in an array
		$selected_fonts = array(
			$google_font['face'],
			$google_mixed['face'],
			$google_mixed_2['face'] );
		// Remove any duplicates in the list
		$selected_fonts = array_unique($selected_fonts);
		// Check each of the unique fonts against the defined Google fonts
		// If it is a Google font, go ahead and call the function to enqueue it
		foreach ( $selected_fonts as $font ) {
			if ( in_array( $font, $all_google_fonts ) ) {
				options_typography_enqueue_google_font($font);
			}
		}
	}
}

add_action( 'wp_enqueue_scripts', 'options_typography_google_fonts' );


/**
 * Enqueues the Google $font that is passed
 */
 
function options_typography_enqueue_google_font($font) {
	$font = explode(',', $font);
	$font = $font[0];
	// Certain Google fonts need slight tweaks in order to load properly
	// Like our friend "Raleway"
	if ( $font == 'Raleway' )
		$font = 'Raleway:100';
	$font = str_replace(" ", "+", $font);
	wp_enqueue_style( "options_typography_$font", "http://fonts.googleapis.com/css?family=$font", false, null, 'all' );
}

/* 
 * Outputs the selected option panel styles inline into the <head>
 */
 
function options_typography_styles() {
     $output = '';
     $input = '';

     if ( of_get_option( 'google_font' ) ) {
          $input = of_get_option( 'google_font' );
	  $output .= options_typography_font_styles( of_get_option( 'google_font' ) , '.google-font');
     }

     if ( $output != '' ) {
	$output = "\n<style>\n" . $output . "</style>\n";
	echo $output;
     }
}
add_action('wp_head', 'options_typography_styles');
/* GOOGLE FONTS END */


/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

function optionsframework_options() {

	$themesPath = dirname(__FILE__) . '/admin/themes';
	
	// Insert default option
	$theList['default'] = OPTIONS_FRAMEWORK_DIRECTORY . '/themes/default-thumbnail-100x60.png';
	
	if ($handle = opendir( $themesPath )) {
	    while (false !== ($file = readdir($handle)))
	    {
	        if ($file != "." && $file != ".." && strtolower(substr($file, strrpos($file, '.') + 1)) == 'css')
	        {
	        	$name = substr($file, 0, strlen($file) - 4);
				$thumb = OPTIONS_FRAMEWORK_DIRECTORY . '/themes/' . $name . '-thumbnail-100x60.png';
				$theList[$name] = $thumb;
	        }
	    }
	    closedir($handle);
	}
	
	//print_r($theList);
	
	// fixed or scroll position
	$fixed_scroll = array("fixed" => "Fixed","scroll" => "Scroll");
	
	// Multicheck Defaults
	$multicheck_defaults = array("one" => "1","five" => "1");
	
	// Background Defaults
	$background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat','position' => 'top center','attachment'=>'scroll');
	
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
		
	// If using image radio buttons, define a directory path
	$imagepath =  get_bloginfo('stylesheet_directory') . '/images/';
		
	$options = array();
		
	$options[] = array( "name" => "Typography",
						"type" => "heading");
			
	/* $options[] = array( "name" => "Headings",
						"desc" => "Used in H1, H2, H3, H4, H5 & H6 tags.",
						"id" => "heading_typography",
						"std" => "",
						"type" => "typography"); 
						
	$options[] = array( 'name' => 'Selected Google Fonts',
		'desc' => 'Fifteen of the top google fonts.',
		'id' => 'google_font',
		'std' => array( 'size' => '36px', 'face' => 'Rokkitt, serif', 'color' => '#00bc96'),
		'type' => 'typography',
		'options' => array(
			'faces' => options_typography_get_google_fonts(),
			'styles' => false )
		);*/

	$typography_mixed_fonts = array_merge( options_typography_get_os_fonts() , options_typography_get_google_fonts() );
asort($typography_mixed_fonts);

	$options[] = array( 'name' => 'Headings',
		'desc' => 'Used in H1, H2, H3, H4, H5 & H6 tags. (google fonts)',
		'id' => 'heading_typography',
		'std' => "",
		'type' => 'typography',
		'options' => array(
			'faces' => typography_mixed_fonts,
			'styles' => true ) 
		);
					
						
	$options[] = array( "name" => "Main Body Text",
						"desc" => "Used in P tags.",
						"id" => "main_body_typography",
						"std" => "",
						"type" => "typography");
						
	$options[] = array( "name" => "Link Color",
						"desc" => "Default used if no color is selected.",
						"id" => "link_color",
						"std" => "",
						"type" => "color");
					
	$options[] = array( "name" => "Link:hover Color",
						"desc" => "Default used if no color is selected.",
						"id" => "link_hover_color",
						"std" => "",
						"type" => "color");
						
	$options[] = array( "name" => "Link:active Color",
						"desc" => "Default used if no color is selected.",
						"id" => "link_active_color",
						"std" => "",
						"type" => "color");
						
	$options[] = array( "name" => "Top Nav",
						"type" => "heading");
						
	$options[] = array( "name" => "Position",
						"desc" => "Fixed to the top of the window or scroll with content.",
						"id" => "nav_position",
						"std" => "",
						"type" => "select",
						"class" => "mini", //mini, tiny, small
						"options" => $fixed_scroll);
						
	$options[] = array( "name" => "Top nav background color",
						"desc" => "Default used if no color is selected.",
						"id" => "top_nav_bg_color",
						"std" => "",
						"type" => "color");
						
	$options[] = array( "name" => "Check to use a gradient for top nav background",
						"desc" => "Use gradient",
						"id" => "showhidden_gradient",
						"std" => "",
						"type" => "checkbox");
	
	$options[] = array( "name" => "Bottom gradient color",
						"desc" => "Top nav background color used as top gradient color.",
						"id" => "top_nav_bottom_gradient_color",
						"std" => "",
						"class" => "hidden",
						"type" => "color");
						
	$options[] = array( "name" => "Top nav item color",
						"desc" => "Link color.",
						"id" => "top_nav_link_color",
						"std" => "",
						"type" => "color");
						
	$options[] = array( "name" => "Top nav item hover color",
						"desc" => "Link hover color.",
						"id" => "top_nav_link_hover_color",
						"std" => "",
						"type" => "color");
						
	$options[] = array( "name" => "Top nav dropdown item color",
						"desc" => "Dropdown item color.",
						"id" => "top_nav_dropdown_item",
						"std" => "",
						"type" => "color");
						
	$options[] = array( "name" => "Top nav dropdown item hover bg color",
						"desc" => "Background of dropdown item hover color.",
						"id" => "top_nav_dropdown_hover_bg",
						"std" => "",
						"type" => "color");
	
	$options[] = array( "name" => "Search bar",
						"desc" => "Show search bar in top nav",
						"id" => "search_bar",
						"std" => "",
						"type" => "checkbox");

	$options[] = array( "name" => "Branding Logo",
						"desc" => "Select an image to use for site branding",
						"id" => "branding_logo",
						"std" => "",
						"type" => "upload");

	$options[] = array( "name" => "Site name",
						"desc" => "Check to show the site name in the navbar",
						"id" => "site_name",
						"std" => "1",
						"type" => "checkbox");
						
	$options[] = array( "name" => "Theme",
						"type" => "heading");
						
	$options[] = array( "name" => "Bootswatch.com Themes",
						"desc" => "Use theme from bootswatch.com. Note: This may override other styles set in the theme options panel.",
						"id" => "showhidden_themes",
						"std" => "0",
						"type" => "checkbox");
						
	$options[] = array( "name" => "Select a theme",
						"id" => "wpbs_theme",
						"std" => "default",
						"class" => "hidden",
						"type" => "images",
						"options" => $theList
						);
						
	$options[] = array( "name" => "Refresh themes from Bootswatch",
						"type" => "themecheck",
						"id" => "themecheck"
						);
						
	$options[] = array( "name" => "Other Settings",
						"type" => "heading");

	$options[] = array( "name" => "Slider carousel on homepage",
						"desc" => "Display the bootstrap slider carousel on homepage page template. This uses the wordpress featured images.",
						"id" => "showhidden_slideroptions",
						"std" => "0",
						"type" => "checkbox");

	$options[] = array( "name" => "Slider options",
						"desc" => "Number of posts to show.",
						"id" => "slider_options",
						"class" => "mini hidden",
						"std" => "5",
						"type" => "text");
						
	$options[] = array( "name" => "Homepage page template hero-unit background color",
						"desc" => "Default used if no color is selected.",
						"id" => "hero_unit_bg_color",
						"std" => "",
						"type" => "color");
						
	$options[] = array( "name" => "'Comments are closed' message on pages",
						"desc" => "Suppress 'Comments are closed' message",
						"id" => "suppress_comments_message",
						"std" => "1",
						"type" => "checkbox");
						
	$options[] = array( "name" => "Blog page 'hero' unit",
						"desc" => "Display blog page hero unit",
						"id" => "blog_hero",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Custom favicon",
						"desc" => "URL for a valid .ico favicon",
						"id" => "favicon_url",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "CSS",
						"desc" => "Additional CSS",
						"id" => "wpbs_css",
						"std" => "",
						"type" => "textarea");

/*
		
	$options[] = array( 'name' => 'System Fonts and Google Fonts Mixed',
		'desc' => 'Google fonts mixed with system fonts.',
		'id' => 'google_mixed',
		'std' => array( 'size' => '32px', 'face' => 'Georgia, serif', 'color' => '#f15081'),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts,
			'styles' => false )
		);
		
	$options[] = array( 'name' => 'System Fonts and Google Fonts Mixed (2)',
		'desc' => 'Google fonts mixed with system fonts.',
		'id' => 'google_mixed_2',
		'std' => array( 'size' => '28px', 'face' => 'Arvo, serif', 'color' => '#ee9f23'),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts,
			'styles' => false )
		); */

															
	return $options;
}





add_action('admin_head', 'wpbs_javascript');

function wpbs_javascript() {
?>
<script type="text/javascript" >
jQuery(document).ready(function($) {

	var data = {
		action: 'wpbs_theme_check',
	};

	// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
	jQuery('#check-bootswatch').click( function(){ 
		jQuery.post(ajaxurl, data, function(response) {
			alert(response);
		});
	});
});
</script>
<?php
}

add_action('wp_ajax_wpbs_theme_check', 'wpbs_refresh_themes');

function wpbs_refresh_themes() {
    
    //Bootswatch API Method
    $BS_url = 'http://api.bootswatch.com';
    $content = file_get_contents($BS_url);
    $json = json_decode($content, true);
    
    
    foreach ($json['themes'] as $item)
    {
		
		$url = $item['css-min'];
		$title = strtolower($item['name']);
		$desc = $item['description'];
		
		
		// retrieve the contents of the css file
		$css_url = $url;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $css_url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$css_contents = curl_exec($ch);
		curl_close($ch);
		
		//retreive thumbnail
		$thumb_url = $item['thumbnail'];
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $thumb_url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$thumb_contents = curl_exec($ch);
		curl_close($ch);
		
		// create the file using the title of the item and then close it
		$template_path = get_template_directory();
		$filenameCSS = $template_path . '/admin/themes/' . $title . '.css';
		$filehandle = fopen($filenameCSS, 'w') or die("can't open file - " . $filenameCSS);
		fwrite($filehandle, $css_contents);
		fclose($filehandle);
		
		$filenameThumb = $template_path . '/admin/themes/' .$title . '-thumbnail.png';
		$filehandle = fopen($filenameThumb, 'w') or die("can't open file - " . $filenameThumb);
		fwrite($filehandle, $thumb_contents);
		fclose($filehandle);
		// resize thumb
		$destDirectory = substr( $filenameThumb, 0, strlen( $filenameThumb-14 ) );
		image_resize( $filenameThumb, 100, 60, true, '', $destDirectory, 100 );
		
    }
    
	echo "Themes refreshed.";

	die(); // this is required to return a proper result
}



?>
