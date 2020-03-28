			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="mobile-nav" class="mobile-nav d-flex d-lg-none d-md-none">

					<nav role="navigation">

						<ul class="mobile-nav-items row">

							<li class="col-4"><a href="#"><i class="fas fa-calendar-alt"></i><br><h6>FREE CONSULT</h6></a></li>

							<li class="col-4"><a href="#"><i class="fas fa-phone"></i><br><h6>TOLL FREE</h6></a></li>

							<li class="col-4"><a href="#"><i class="fas fa-bars js-menu-toggle"></i><br><h6>MENU</h6></a></li>

						</ul>

						<aside class="menu-nav-display">
							<div class="js-menu-toggle mobile-menu-close-btn-container"><a class="mobile-menu-close-btn">X</a></div>
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
							<?php wp_nav_menu(array(
							'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
							'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
							'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
							'menu_class' => 'nav footer-nav cf',            // adding custom nav class
							'theme_location' => 'footer-links',             // where it's located in the theme
							'before' => '<span></span<',                                 // before the menu
							'after' => '',                                  // after the menu
							'link_before' => '',                            // before each link
							'link_after' => '',                             // after each link
							'depth' => 1                                  // limit the depth of the nav
							));?>
						</aside>
					</nav>

					<p class="source-org copyright d-none d-md-block d-sm-none">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>




	</body>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"></script>

	<?php // all js scripts are loaded in library/bones.php ?>
	<?php wp_footer(); ?>

</html> <!-- end of site. what a ride! -->
