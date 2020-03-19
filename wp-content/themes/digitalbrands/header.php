<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
        <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
		<!-- Google Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
		<!-- Material Design Bootstrap -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css" rel="stylesheet">
		<!--- Digital Brands CSS --->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/main.css">


		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

	  <!-- Navigation -->
	<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="navbar static-top">

		<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
			<a href="<?php echo home_url(); ?>" rel="nofollow">
				<?php 
					$cnt = 0;
					$numToWordsArray = [
						"first", "second", "third", "fourth", "fifth", "sixth", "seventh", "eighth", "nineth", "tenth"
					];
					$strArray = explode( " ", get_bloginfo('name') );
					foreach( $strArray as $key => $value ){

						echo "<span class='h1___".$numToWordsArray[$cnt]."' >".$value."</span>";
						$cnt++;

					}
				?>	
				<span class="supascript">&copy;</span>
			</a>
		</p>

		<?php wp_nav_menu(array(
					'container' => false,                           
					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
					'menu' => 'navigation',  // nav name
					'menu_class' => 'nav top-nav cf',               // adding custom nav class
					'theme_location' => 'main-nav',                 // where it's located in the theme
					'before' => '',                                 // before the menu
					'after' => '',                                  // after the menu
					'link_before' => '',                            // before each link
					'link_after' => '',                             // after each link
					'depth' => 1,                                   // limit the depth of the nav
					'fallback_cb' => '',                             // fallback function (if there is one)
					'items_wrap'  => '<ul id="navigation" class="navigation">%3$s</ul>',
					'echo' => true
		)); wp_nav_menu();
		?>
	</nav>
