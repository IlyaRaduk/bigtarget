<?php 


add_action('wp_enqueue_scripts', function() {
    // Зарегистрировать jQuery
    // wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.4.min.js', array(), null, false);
    // Подключить стили и скрипты
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.min.js', array('slick'), null, true);
});


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support( 'menus' );

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );



# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}


// if (function_exists("acf_add_options_page")) {
//     acf_add_options_page(array(
//         "page_title" => "Настройки сайта",
//         "menu_title" => "Настройки сайта",
//         "menu_slug"  => "theme_settings",
//     ));
// }


?>