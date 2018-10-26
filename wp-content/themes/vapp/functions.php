<?php 
	define('IMG', get_template_directory_uri().'/assets/img');
	define('CSS', get_template_directory_uri().'/assets/css');
	define('FONTS', get_template_directory_uri().'/assets/fonts');
	define('LIB', get_template_directory_uri().'/assets/lib');
	define('JS', get_template_directory_uri().'/assets/js');


	function load_scripts()
	{

		$versao = '0.0.1';

		/* Registering style */
		wp_register_style('google-fontscss', '//fonts.googleapis.com/css?family=Montserrat%3A100%2C100i%2C200%2C200i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i%26subset%3Dlatin%2Clatin-ext', array(), $versao, false );
		wp_register_style('elementor-animationscss', CSS . '/animations.min.css', array(), $versao, false );
		wp_register_style('appcss', CSS . '/app.min.css', array(), $versao, false );
		wp_register_style('css-gridscss', CSS . '/css-grids.min.css', array(), $versao, false );
		wp_register_style('elementor-iconscss', CSS . '/elementor-icons.min.css', array(), $versao, false );
		wp_register_style('font-awesomecss', CSS . '/font-awesome.min.css', array(), $versao, false );
		wp_register_style('fontellocss', CSS . '/fontello.css', array(), $versao, false );
		wp_register_style('elementor-frontendcss', CSS . '/frontend.min.css', array(), $versao, false );
		wp_register_style('maincss', CSS . '/main.css', array(), $versao, false );
		wp_register_style('switcher-mincss', CSS . '/switcher.min.css', array(), $versao, false );		
		wp_register_style('theme-colorscss', CSS . '/theme-colors.min.css', array(), $versao, false );
		wp_register_style('SFProDisplaycss', FONTS . '/SFProDisplay.css', array(), $versao, false );
		wp_register_style('woocss', CSS . '/vapp-woo.css', array(), $versao, false );
		wp_register_style('responsivecss', CSS . '/responsive.css?ver=4.9.8', array(), $versao, false );
		wp_register_style('theme-custom-stylecss', CSS . '/theme_options_style.css?ver=4.9.8', array(), $versao, false );
		wp_register_style('vapp-iconscss', CSS . '/nucleo-font.css', array(), $versao, false );
		wp_register_style('710css', CSS . '/post-710.css', array(), $versao, false );


		// wp_register_script('jqueryjs', JS . 'vapp/wp-includes/js/jquery/jquery.js', array('jquery'), $versao);
		// wp_register_script('jquery-migrate-minjs', JS . 'vapp/wp-includes/js/jquery/jquery-migrate.min.js', array(''), $versao);
		wp_register_script('picturefill-minjs', JS . '/picturefill.min.js', array('jquery'), $versao);
		wp_register_script('bootstrap-minjs', JS . '/bootstrap.min.js', array(), $versao);
		wp_register_script('db-navjs', JS . '/db-nav.js', array(), $versao);
		wp_register_script('html5lightboxjs', JS . '/html5lightbox.js', array(), $versao);
		wp_register_script('popper-minjs', JS . '/popper.min.js', array(), $versao);
		wp_register_script('scrollreveal-minjs', JS . '/scrollreveal.min.js', array(), $versao);
		wp_register_script('slick.minjs', JS . '/slick.min.js', array(), $versao);
		wp_register_script('themesjs', JS . '/themes.js', array(), $versao);
		wp_register_script('sticky-minjs', JS . '/sticky.min.js', array(), $versao);
		wp_register_script('svg-handlerjs', JS . '/svg-handler.js', array(), $versao);
		wp_register_script('appjs', JS . '/app.js', array(), $versao);
		wp_register_script('swiper-jquery-minjs', JS . '/swiper.jquery.min.js', array(), $versao);
		wp_register_script('waypoints-minjs', JS . '/waypoints.min.js', array(), $versao);
		wp_register_script('frontend-minjs', JS . '/frontend.min.js', array(), $versao);
		wp_register_script('dialog-minjs',  JS .'/dialog.min.js', array(), $versao);
		/*wp_register_script('wp-embed-minjs', JS . 'vapp/wp-includes/js/wp-embed.min.js', array(''), $versao);
		wp_register_script('mc-validatejs', JS . 's3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js', array(''), $versao);
		wp_register_script('position-minjs', JS . '/vapp/wp-includes/js/jquery/ui/position.min.js', array(''), $versao);*/

		

		wp_enqueue_style('google-fontscss');
		wp_enqueue_style('elementor-animationscss');
		wp_enqueue_style('appcss');
		wp_enqueue_style('css-gridscss');
		wp_enqueue_style('elementor-iconscss');
		wp_enqueue_style('font-awesomecss');
		wp_enqueue_style('fontellocss');
		wp_enqueue_style('elementor-frontendcss');
		wp_enqueue_style('maincss');
		wp_enqueue_style('switcher-mincss');
		wp_enqueue_style('theme-colorscss');
		wp_enqueue_style('SFProDisplaycss');
		wp_enqueue_style('woocss');
		wp_enqueue_style('responsivecss');
		wp_enqueue_style('theme-custom-stylecss');
		wp_enqueue_style('vapp-iconscss');
		wp_enqueue_style('710css');
		

		/*wp_enqueue_script('jqueryjs');
		wp_enqueue_script('jquery-migrate-minjs');*/
		wp_enqueue_script('picturefill-minjs');
		wp_enqueue_script('bootstrap-minjs');
		wp_enqueue_script('db-navjs');
		wp_enqueue_script('html5lightboxjs');
		wp_enqueue_script('popper-minjs');
		wp_enqueue_script('scrollreveal-minjs');
		wp_enqueue_script('slick.minjs');
		wp_enqueue_script('themesjs');
		wp_enqueue_script('sticky-minjs');
		wp_enqueue_script('svg-handlerjs');
		wp_enqueue_script('appjs');
		wp_enqueue_script('waypoints-minjs');
		wp_enqueue_script('swiper-jquery-minjs');
		wp_enqueue_script('dialog-minjs');
		wp_enqueue_script('frontend-minjs');
		/*wp_enqueue_script('wp-embed-minjs');
		wp_enqueue_script('mc-validatejs');
		wp_enqueue_script('position-minjs');*/
		
		
		
	}
	add_action('wp_enqueue_scripts', 'load_scripts');

	