<?php 
//Incluindo o arquivo TGM

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

//Requerendo o arquivo customizer
require get_template_directory(). '/inc/customizer.php';

// Carregando scripts e as folhas de estilos
function load_scripts(){
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), '4.0.0', true );

	wp_enqueue_style( 'bootstrap-css','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '1.0', 'all' );

	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '4.0.0', 'all' );

	wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/js/fitvids.js', array( 'jquery' ), null , true );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Registrando o menu
register_nav_menus(
	array(
		'my_main_menu' => 'Main Menu',
		 'footer_menu' => 'Footer Menu'
	)
);

// Função de Configuração do Tema
function sppatrimonio_config(){
	// Registrando nossos menus
	register_nav_menus(
		array(
			'my_main_menu' => 'Main Menu',
			'footer_menu' => 'Footer Menu'
		)
	);	
//Adicionando suporte ao tema
	$args = array(
		'height'	=> 225,
		'width'		=> 1920
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image' ) );
	add_theme_support( 'title-tag');
	add_theme_support( 'custom-logo',array( 'height' => 110, 'width' => 200) );
//Habilitando suporte á tradução
	$textdomain = 'wpcurso';
	load_theme_textdomain( $textdomain, get_template_directory() . '/languages/');

// Suporte ao Gutenberg
add_theme_support( 'align-wide' );
add_theme_support( 'editor-color-palette', array(
		array(
			'name' => __( 'Blood Red' , 'wpcurso' ),
			'slug' => 'blood-red',
			'color' => '#b9121b'
		),
		array(
			'name' => __( 'White' , 'wpcurso' ),
			'slug' => 'white',
			'color' => '#ffffff'
		)		
	) );
	add_theme_support( 'disable-custom-colors' );
	add_theme_support( 'editor-styles' );
	add_editor_style( '/css/style-editor.css' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'dark-editor-style' );
}

add_action( 'after_setup_theme', 'sppatrimonio_config', 0 );

//Area dos Widgets
add_action('widgets_init', 'curso_sidebar');
function curso_sidebar(){
	register_sidebar(
		array(
		'name' => __('Home Page Sidebar', 'wpcurso'),
		'id'  => 'sidebar-1',
		'description' => __('Sidebar to be used on Home Page', 'wpcurso') ,
		'before_widget' => '<div class="widget-wrapper">',
		'after_widgets' => '</div>',
		'before_title' => '<h2 class="widgwt-title">',
		'after_title' => '</h2>',
	    )
	);
		register_sidebar(
		array(
		'name' => __('Blog Sidebar', 'wpcurso' ),
		'id'  => 'sidebar-2',
		'description' => __('Sidebar to be used on Home Page', 'wpcurso' ),
		'before_widget' => '<div class="widget-wrapper">',
		'after_widgets' => '</div>',
		'before_title' => '<h2 class="widgwt-title">',
		'after_title' => '</h2>',
	    )
	);
		register_sidebar(
		array(
			'name' => __('Services 1', 'wpcurso' ),
			'id' => 'services-1',
			'description' => __('First Services Area.', 'wpcurso' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' =>  __('Services 2', 'wpcurso' ),
			'id' => 'services-2',
			'description' => __('Second Services Area.', 'wpcurso' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => __('Services 3', 'wpcurso'),
			'id' => 'services-3',
			'description' => __('Third Services Area.', 'wpcurso' ),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
		register_sidebar(
		array(
			'name' => __('Social Icons', 'wpcurso' ),
			'id' => 'social-media',
			'description' => __('Third Services Area.', 'wpcurso'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);				
}
