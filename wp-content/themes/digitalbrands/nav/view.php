	<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="navbar navbar-desktop static-top d-flex d-lg-flex d-md-none d-sm-none">

		<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
			<a href="tel:+18007752049" class="logo-telephone">1 (800) 775-2049</a>
			<a href="<?php echo home_url(); ?>" rel="nofollow" class="logo-dg">
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

	<aside role="menu" class="menu-tablet static-top d-flex d-md-flex d-sm-none menu-nav-display">
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

		<a href="/" class="clk-rotate db-social-circle"><img src="<?php echo get_template_directory_uri(); ?>/library/images/site/DBCircle3D.png"></a>

	</aside>

	<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="navbar navbar-tablet static-top d-flex d-md-flex d-sm-none">

		<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
			<a href="tel:+18007752049" class="logo-telephone">1 (800) 775-2049</a>
			<a href="<?php echo home_url(); ?>" rel="nofollow" class="logo-dg">
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

		<div class="menu-dropdown"><a href="javascript:void(0)" class="js-menu-toggle"><img src="<?php echo get_template_directory_uri(); ?>/library/images/site/bars.png"></img></a></div>

	</nav>


	<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="navbar navbar-mobile static-top d-flex d-lg-none d-md-none d-sm-flex">

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
					'container_class' => 'menu menu-mobile cf',                 // class of container (should you choose to use it)
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
