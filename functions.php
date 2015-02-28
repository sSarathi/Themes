<?php 



	function load_my_StyleAndScript(){

		
		wp_enqueue_style(
			'main-css',
			get_template_directory_uri().'/style.css'
		);

		//load script 


		wp_enqueue_script(
			'angular-core',
			'https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js'
		
		);

	}

	add_action('wp_enqueue_scripts','load_my_StyleAndScript');


	register_nav_menus(array(
		'Primary' => __('Primary Menu'),
		'Footer'=>__('Footer Menu'),

	 ) );



 	function amar_bap_dada(){
 		global $post;

 		if($post->post_parent){
 			$baps=array_reverse(get_post_ancestors($post->ID));
 			//var_dump($baps);
 			return $baps[0];
 		}
 		return $post->ID;

 	}


 	function ourWidgets(){

 		   /**
 			* Creates a sidebar
 			* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
 			*/
 			$args = array(
 				'name'          => 'Sidebar',
 				'id'            => 'sidebar1',
 				
 			);
 		
 			register_sidebar( $args );

 	}
 	add_action('widgets_init','ourWidgets');