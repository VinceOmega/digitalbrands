<?php get_header(); ?>

<?php 

  	$pageInfo = get_page( get_the_ID() );

  	$file   = file_get_contents( get_template_directory()."/sections/config.json" );
  	$json   = json_decode( $file );

  	$pages = file_get_contents( get_template_directory()."/heros/config.json" );
  	$pagesJsonData = json_decode( $pages );

  	$sectionsArray = [];

  	if( !empty( $pagesJsonData->pages->{ $pageInfo->post_name } ) && !is_null(  $pagesJsonData->pages->{ $pageInfo->post_name }  ) ){

    	$pageName     = $pagesJsonData->pages->{ $pageInfo->post_name };
		$sectionsArray   = $json->sections->{ $pageName };
	
  	}
?>

	<!--- Header Section --->
	<?php include_once get_template_directory()."/sections/header/view.php"; ?>

	<?php foreach( $sectionsArray as $section ){ ?>

		<?php include_once get_template_directory()."/sections/".$section."/view.php" ; ?>


	<?php } ?>

		<!-- Black Bar -->
		<?php // include_once get_template_directory()."/sections/black-bar-icons/view.php" ;?>

		<!-- Packages -->
		<?php // include_once get_template_directory()."/sections/packages/view.php"; ?>

		<!-- Work -->
		<?php // include_once get_template_directory()."/sections/work/view.php";?>

		<!-- Testimonials -->
		<?php // include_once get_template_directory()."/sections/testimonials/view.php"; ?>
	
		<!-- Brands -->
		<?php // include_once get_template_directory()."/sections/brands/view.php"; ?>

		<!-- About Us -->
		<?php // include_once get_template_directory()."/sections/about-us/view.php"; ?>

<?php get_footer(); ?>
