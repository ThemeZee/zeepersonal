<?php 
add_action('wp_head', 'themezee_css_colors');
function themezee_css_colors() {
	
	$options = get_option('themezee_options');
	
	if ( isset($options['themeZee_color_activate']) and $options['themeZee_color_activate'] == 'true' ) {
		
		echo '<style type="text/css">';
		echo '
			a, a:link, a:visited, .postmeta a:link, .postmeta a:visited, .postinfo a:link, .postinfo a:visited,
			#comments a:link, #comments a:visited, #respond a:link, #respond a:visited, #sidebar .widgettitle, 
			#bottombar widgettitle, .post-title, .post-title a:link, .post-title a:visited, #comments h3, 
			#respond h3, #sidebar a:link, #sidebar a:visited, #bottombar a:link, #bottombar a:visited {
				color: #'.esc_attr($options['themeZee_colors_full']).';
			}
			#sidebar .widgettitle, #bottombar .widgettitle,
			#commentform input, #commentform textarea {
				border-left: 3px solid #'.esc_attr($options['themeZee_colors_full']).';
			}
			.post-title, .page-title,
			#comments h3, #respond h3 {
				border-left: 5px solid #'.esc_attr($options['themeZee_colors_full']).';
			}
		';
		echo '</style>';
	}
}