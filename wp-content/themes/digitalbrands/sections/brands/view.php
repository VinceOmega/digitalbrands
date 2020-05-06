<section class="brands rounded-white">
		<div class="row">
			<div class="col-12 mx-auto">
			<h2 class="mb-4 capslock"><span class="highlight-blue">Clients</span> WE HAVE WORKED WITH</h2>
			</div>
			<div class="col-12">
				<?php $brands = json_decode( file_get_contents( dirname( __FILE__ )."/config.json" ) )->brands; ?>
					<?php foreach( $brands as $row => $brands ){ ?>
						<ul class="brands">
							<?php foreach( $brands as $entry => $img ){ ?>
								<li class="brands-items">
									<a href="##"><img src="<?php echo get_template_directory_uri().'/library/images/brands/'.$img; ?>"></a>
								</li>
							<?php }; ?>
						</ul>
					<?php }; ?>
			</div>
		</div>
	</section>