			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div class="row">

					<div class="footer-digital-brands col-lg-4 col-md-12 col-sm-12">

						<div class="footer-flavor-text">

							<h3 class="header-first-word">Digital<strong class="header-second-word">Brands</strong><span class="supascript">&copy;</span></h3>
							<p>We are a team of creative thinkers and problem solvers dedicated to expanding the limits of what is possible by helping brands achieve their goals. At Digital Brands, we utilize our breadth of experience working with major corporations to fuel creative innovation that delivers real results to companies large and small.</p>

							<!--
							<div class="col-md copy-right2 d-sm-block d-md-block d-lg-none" align="center">
								<a href="./terms-condition.php"> Terms Of Use </a> and <a href="./privacy-policy.php">Privacy Policy</a> Cookie Policy
								
							</div>

							<br><br>

							<div class="icon-footer d-sm-block d-md-block d-lg-none" align="center" style="padding-bottom: 100px;">

								<a href="mailto: hello@digitalbrandsinc.com">
								<i class="fa fa-envelope-o" style="font-size: 20px; margin-left: 10px;"></i></a>
								<a href="https://twitter.com/DigitalBrand4U" target="_blank">
								<i class="fa fa-twitter" style="font-size: 20px; margin-left: 10px;"></i></a>
								<a href="https://www.instagram.com/digitalbrandsinc/" target="_blank">
								<i class="fa fa-instagram" style="font-size: 20px; margin-left: 10px;"></i></a>
								<a href="https://www.facebook.com/digitalbrandsinc" target="_blank">
								<i class="fa fa-facebook" style="font-size: 20px; margin-left: 10px;"></i></a>
								<a href="tel:+1800-775-2049">
								<i class="fa fa-phone" style="font-size: 20px; margin-left: 10px;"></i></a>

								<br>

								<p>Copyright © 2020 DigitalBrandsInc.Com All rights reserved</p>

							</div>
							-->

						</div>

					</div>

					<div class="footer-social-media col-lg-4 col-md-12 col-sm-12">

						<div class="icon-footer" align="center">

							<a href="mailto: hello@digitalbrandsinc.com">
							<i class="fa fa-envelope-o" style="font-size: 20px; margin-left: 10px;"></i></a>
							<a href="https://twitter.com/DigitalBrand4U" target="_blank">
							<i class="fa fa-twitter" style="font-size: 20px; margin-left: 10px;"></i></a>
							<a href="https://www.instagram.com/digitalbrandsinc/" target="_blank">
							<i class="fa fa-instagram" style="font-size: 20px; margin-left: 10px;"></i></a>
							<a href="https://www.facebook.com/digitalbrandsinc" target="_blank">
							<i class="fa fa-facebook" style="font-size: 20px; margin-left: 10px;"></i></a>
							<a href="tel:+1800-775-2049">
							<i class="fa fa-phone" style="font-size: 20px; margin-left: 10px;"></i></a>

							<br>

							<p>Copyright © 2020 DigitalBrandsInc.Com All rights reserved</p>

						</div>

					</div>

					<div class="footer-terms-policy col-lg-4 col-md-12 col-sm-12">

						<div class="col-md copy-right2"  align="center">
							<p> <a href="./terms-condition.php"> Terms Of Use </a> and <a href="./privacy-policy.php">Privacy Policy</a> Cookie Policy</p>
						</div>
						
					</div>

				</div>

				<div id="mobile-nav" class="mobile-nav d-flex d-lg-none d-md-none">

					<nav role="navigation">

						<ul class="mobile-nav-items row">

							<li class="col-4 capslock"><a href="https://go.thryv.com/widgets/scheduler/a6h9sm0rzt5pclen?frontage_iframe=true" target="_blank"  ><i class="fas fa-calendar-alt"></i><br><h6>FREE CONSULT</h6></a></li>

							<li class="col-4 capslock"><a href="tel:1-800-775-2049"><i class="fas fa-phone"></i><br><h6>TOLL FREE</h6></a></li>

							<li class="col-4 capslock"><a href="#"><i class="fas fa-bars js-menu-toggle"></i><br><h6>MENU</h6></a></li>

						</ul>

						<aside class="menu-nav-display">

							<div class="js-menu-toggle mobile-menu-close-btn-container row"><a class="mobile-menu-close-btn">X</a></div>

							<p id="logo-mobile" class="h1" itemscope itemtype="http://schema.org/Organization">
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
							'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
							'container_class' => 'footer-links cf row',         // class of container (should you choose to use it)
							'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
							'menu_class' => 'nav footer-nav cf',            // adding custom nav class
							'theme_location' => 'footer-links',             // where it's located in the theme
							'before' => '<span></span<',                                 // before the menu
							'after' => '',                                  // after the menu
							'link_before' => '',                            // before each link
							'link_after' => '',                             // after each link
							'depth' => 1                                  // limit the depth of the nav
							));?>


							<a href="/" class="clk-rotate db-social-circle"><img src="<?php echo get_template_directory_uri(); ?>/library/images/site/DBCircle3D.png"></a>

						</aside>

					</nav>

					<p class="source-org copyright d-none d-md-block d-sm-none">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>


		</div>

	</body>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"></script>

	<?php // all js scripts are loaded in library/bones.php ?>
	<?php wp_footer(); ?>

</html> <!-- end of site. what a ride! -->
