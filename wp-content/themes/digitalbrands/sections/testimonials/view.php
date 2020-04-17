<?php

    $pageInfo = get_page( get_the_ID() );

    $file   = file_get_contents( get_template_directory()."/sections/testimonials/config.json" );
    $json   = json_decode( $file );

    $pages = file_get_contents( get_template_directory()."/heros/config.json" );
    $pagesJsonData = json_decode( $pages );

    if( !is_null(  $pagesJsonData->pages->{ $pageInfo->post_name } )  && !empty( $pagesJsonData->pages->{ $pageInfo->post_name } ) ){

        $template = $json->pages->{ $pageInfo->post_name };

    }

?>

<div class="container">

	<div class="row">

	<?php if( $_SERVER[ 'HTTP_HOST' ]  != 'dg.local'){ ?>

			<div class="col-12">
				<?php echo do_shortcode( '[testimonial_view id='.$template.']' ) ?>
			</div>

	<?php } else { ?>

		<div class="col-12">
				<?php echo do_shortcode( '[testimonial_view id="1"]' ) ?>
			</div>

	<?php } ?>

	</div>

</div>
