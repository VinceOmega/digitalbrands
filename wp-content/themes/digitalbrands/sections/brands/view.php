<section class="brands rounded-white">
		<div class="row">
			<div class="col-12 mx-auto">
			<h2 class="mb-4">Ready to get started? Sign up now!</h2>
			</div>
			<div class="col-12">
				<?php 
					$brands = [
						[ 'dell.png', 'verizon.png', 'lenovo.png', 'comcast.png', 'capital-one.png', 'discovery.png', 'lockheed-martin.png', 'chase.png' ],
						[ 'exxon.png', 'td-ameritrade.png', 'lowes.png', 'coca-cola.png', 'wawa.png', 'acme.png', 'giant.png', 'wegmans.png' ],
						[ '7-11.png', 'mcdonalds.png', 'burger-king.png', 'hh-gregg.png', 'whole-foods.png', 'jimmy-johns.png', 'dunkin.png', 'nestea.png' ],
						[ 'starbucks.png', 'toyota.png', 'bmw.png', 'benz.png', 'mazda.png', 'hyundai.png', 'nissan.png', 'michelin.png' ],
						[ 'qualcomm.png', 'gm.png', 'ibm.png', 'superphone.png', 'bpm-supreme.png', 'lola.png', 'dash.png', 'puma.png' ]
					];
				?>
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