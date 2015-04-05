<?php
/**
 * Created by PhpStorm.
 * User: rb
 * Date: 24.03.15
 * Time: 16:06
 */
function enqueue_styles() {
    wp_enqueue_style( 'creative_studio-style', get_stylesheet_uri());
    wp_register_style('font-style', 'http://fonts.googleapis.com/css?family=Comfortaa');
    wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');
/**Menu***/
register_nav_menu('menu','Меню');
/**upload thumbnails***/
add_theme_support('post-thumbnails');
/*function enqueue_scripts () {
    wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');*/
/*function creative_studio_scripts() {
    // Add custom fonts, used in the main stylesheet.
    //wp_enqueue_style( 'twentyfifteen-fonts', twentyfifteen_fonts_url(), array(), null );

    // Add Genericons, used in the main stylesheet.
    //wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

    // Load our main stylesheet.
    wp_enqueue_style( 'creative_studio-style', get_stylesheet_uri() );

    // Load the Internet Explorer specific stylesheet.
    //wp_enqueue_style( 'twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010' );
    //wp_style_add_data( 'twentyfifteen-ie', 'conditional', 'lt IE 9' );

    // Load the Internet Explorer 7 specific stylesheet.
    //wp_enqueue_style( 'twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010' );
    //wp_style_add_data( 'twentyfifteen-ie7', 'conditional', 'lt IE 8' );

    //wp_enqueue_script( 'twentyfifteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

//    wp_enqueue_script( 'twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20141212', true );
  //  wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
    //    'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
      //  'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
    //) );
}
add_action( 'wp_enqueue_scripts', 'creative_studio_scripts' );*/

function kama_pagenavi( $before = '', $after = '', $echo = true ) {
	/* ================ Настройки ================ */
	$text_num_page = ''; // Текст перед пагинацией. {current} - текущая; {last} - последняя (пр. 'Страница {current} из {last}' получим: "Страница 4 из 60" )
	$num_pages = 10; // сколько ссылок показывать
	$stepLink = 10; // ссылки с шагом (значение - число, размер шага (пр. 1,2,3...10,20,30). Ставим 0, если такие ссылки не нужны.
	$dotright_text = '…'; // промежуточный текст "до".
	$dotright_text2 = '…'; // промежуточный текст "после".
	$backtext = '<'; // текст "перейти на предыдущую страницу". Ставим 0, если эта ссылка не нужна.
	$nexttext = '>'; // текст "перейти на следующую страницу". Ставим 0, если эта ссылка не нужна.
	$first_page_text = '« к началу'; // текст "к первой странице". Ставим 0, если вместо текста нужно показать номер страницы.
	$last_page_text = 'в конец »'; // текст "к последней странице". Ставим 0, если вместо текста нужно показать номер страницы.
	/* ================ Конец Настроек ================ */ 

	global $wp_query;
	echo "<pre>";
	print_r($wp_query);
	echo "</pre>";

	$posts_per_page = (int) $wp_query->query_vars['posts_per_page'];
	$paged = (int) $wp_query->query_vars['paged'];
	$max_page = $wp_query->max_num_pages;

	//проверка на надобность в навигации
	if( $max_page <= 1 )
		return false; 

	if( empty($paged) || $paged == 0 ) 
		$paged = 1;

	$pages_to_show = intval( $num_pages );
	$pages_to_show_minus_1 = $pages_to_show-1;

	$half_page_start = floor( $pages_to_show_minus_1/2 ); //сколько ссылок до текущей страницы
	$half_page_end = ceil( $pages_to_show_minus_1/2 ); //сколько ссылок после текущей страницы

	$start_page = $paged - $half_page_start; //первая страница
	$end_page = $paged + $half_page_end; //последняя страница (условно)

	if( $start_page <= 0 ) 
		$start_page = 1;
	if( ($end_page - $start_page) != $pages_to_show_minus_1 ) 
		$end_page = $start_page + $pages_to_show_minus_1;
	if( $end_page > $max_page ) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = (int) $max_page;
	}

	if( $start_page <= 0 ) 
		$start_page = 1;

	//выводим навигацию
	$out = '';

	// создаем базу чтобы вызвать get_pagenum_link один раз
	$link_base = get_pagenum_link( 99999999 ); // 99999999 будет заменено
	$link_base = str_replace( 99999999, '___', $link_base);
	$first_url = get_pagenum_link( 1 );
	$out .= $before . '<ul class="numeric">';

		// назад
		if ( $backtext && $paged != 1 ) 
			$out .= '<li><a class="prev" href="'. str_replace( '___', ($paged-1), $link_base ) .'">'. $backtext .'</a></li>';

		// пагинация
		for( $i = $start_page; $i <= $end_page; $i++ ) {
			if( $i == $paged )
				$out .= '<li class="num active"><a href="'. str_replace( '___', $i, $link_base ) .'">'. $i .'</a></li> ';
			elseif( $i == 1 )
				$out .= '<li class="num"><a href="'. $first_url .'">1</a></li>';
			else
				$out .= '<li class="num"><a href="'. str_replace( '___', $i, $link_base ) .'">'. $i .'</a></li>';
		}

		//ссылки с шагом
		$dd = 0;
		if ( $stepLink && $end_page < $max_page ){
			for( $i = $end_page+1; $i<=$max_page; $i++ ) {
				if( $i % $stepLink == 0 && $i !== $num_pages ) {
					if ( ++$dd == 1 ) 
						$out.= '<li>'. $dotright_text2 .'</li> ';
					$out.= '<li class="num"><a href="'. str_replace( '___', $i, $link_base ) .'">'. $i .'</a></li>';
				}
			}
		}
		// вперед
		if ( $nexttext && $paged != $end_page ) 
			$out.= '<li><a class="next" href="'. str_replace( '___', ($paged+1), $link_base ) .'">'. $nexttext .'</a></li>';

	$out .= "</ul>". $after ."\n";
	
	if ( ! $echo ) 
		return $out;
	echo $out;
}