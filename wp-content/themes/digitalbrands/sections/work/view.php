<?php
	
	$pageInfo = get_page( get_the_ID() );
	$item = 1;

  	$file   = file_get_contents( get_template_directory()."/sections/work/config.json" );
  	$json   = json_decode( $file );

  	$pages = file_get_contents( get_template_directory()."/heros/config.json" );
  	$pagesJsonData = json_decode( $pages );

  	$packagesArray = [];

  	if( !empty( $pagesJsonData->pages->{ $pageInfo->post_name } ) && !is_null(  $pagesJsonData->pages->{ $pageInfo->post_name }  ) ){

    	$pageName     		= $pagesJsonData->pages->{ $pageInfo->post_name };
    	$workArray  		= $json->pages->{ $pageName };
    	$workCollection 	= $json->work;

  	}

?>

<section class="showcase rounded-black">

	<div class="container">

		<h2 class="mb-5">
			<div class="hero-header-first">WORK THAT MAKES US</div> 
			<div class="hero-header-second"><span class="highlight-blue">HAPPY</span> AND <span class="highlight-blue">PROUD:</span></div>
		</h2>

		<section class="work-desktop d-grid d-lg-grid d-md-grid">
			<?php foreach( $workArray as $row ){ ?>

				<div class="row">

					<?php foreach( $row as $item ){ ?>

						<div class="showcase-item item-<?php echo $item; ?>">

							<?php if( count( $item ) > 1 ) { ?>

								<?php if( count( $item ) > 1 && count( $item[0] ) > 1 ) { ?>

									<section class="col-3 column <?php echo $workCollection->{ $entries[0] }->class; ?>">

								<?php } else { ?>

									<section class="col-9 column <?php echo $workCollection->{ $entries[0] }->class; ?>">

								<?php } ?>

								<?php foreach( $item as $entries ) { ?>

									<?php //var_dump( $workCollection->{ $entries[0] }->{ $entries[1]->{ $entries[0] } } ); die(); ?>

									<a target="_blank" href="<?php echo $workCollection->{ $entries[0] }->href; ?>" class="<?php echo $workCollection->{ $entries[0] }->class; ?>"><img class="<?php echo $workCollection->{ $entries[0] }->class; ?>" src="<?php echo get_template_directory_uri();?>/library/images/work/<?php echo $workCollection->{ $entries[0] }->{ $entries[1]->{ $entries[0] } } ;?>"></a>

								<?php } ?>

								</section>
							
							<?php } else { ?>

								<?php foreach( $item as $entries ) { ?>

									<section class="col-lg-6 col-sm-12 column">

										<a target="_blank" href="<?php echo $workCollection->{ $entries[0] }->href; ?>" class="<?php echo $workCollection->{ $entries[0] }->class; ?>"><img class="<?php echo $workCollection->{ $entries[0] }->class; ?>" src="<?php echo get_template_directory_uri();?>/library/images/work/<?php echo $workCollection->{ $entries[0] }->{ $entries[1]->{ $entries[0] } } ;?>"></a>

									</section>

								<?php } ?>


							<?php } ?>

						</div>

						<?php $item++; ?>

					<?php } ?>

				</div>

			<?php } ?>
		</section>

		<section class="work-mobile d-grid d-lg-none d-md-none d-sm-grid">
			<?php foreach( $workArray as $row ){ ?>

				<div class="row">

					<?php foreach( $row as $item ){ ?>

						<div class="showcase-item">

							<?php if( count( $item ) > 1 ) { ?>

								<?php if( count( $item ) > 1 && count( $item[0] ) > 1 ) { ?>

									<section class="col-3 column">

								<?php } else { ?>

									<section class="col-9 column">

								<?php } ?>

								<?php foreach( $item as $entries ) { ?>

									<?php //var_dump( $workCollection->{ $entries[0] }->{ $entries[1]->{ $entries[0] } } ); die(); ?>

									<a target="_blank" href="<?php echo $workCollection->{ $entries[0] }->href; ?>" class="<?php echo $workCollection->{ $entries[0] }->class; ?>"><img class="<?php echo $workCollection->{ $entries[0] }->class; ?>" src="<?php echo get_template_directory_uri();?>/library/images/work/<?php echo $workCollection->{ $entries[0] }->{ $entries[1]->{ $entries[0] } } ;?>"></a>

								<?php } ?>

								</section>
							
							<?php } else { ?>

								<?php foreach( $item as $entries ) { ?>

									<section class="col-lg-6 col-sm-12 column">

										<a target="_blank" href="<?php echo $workCollection->{ $entries[0] }->href; ?>" class="<?php echo $workCollection->{ $entries[0] }->class; ?>"><img class="<?php echo $workCollection->{ $entries[0] }->class; ?>" src="<?php echo get_template_directory_uri();?>/library/images/work/<?php echo $workCollection->{ $entries[0] }->{ $entries[1]->{ $entries[0] } } ;?>"></a>

									</section>

								<?php } ?>


							<?php } ?>

						</div>

					<?php } ?>

				</div>

			<?php } ?>
		</section>

</section>
