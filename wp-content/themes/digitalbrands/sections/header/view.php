<?php $pageInfo = get_page( get_the_ID() ); ?>
		<?php  $options = array(
			'parent' => 0,
			'post_type' => 'page',
			'post_status' => 'publish'
		); ?>
		<?php function validatePage( $obj ){ return ( strToLower( $obj->post_name ) === strToLower( $GLOBALS[ 'pageInfo' ]->post_name ) ) ? true : false;  }?>
		<?php if ( array_map( 'validatePage', get_pages( $options ) ) ) {

				include_once get_template_directory()."/heros/".$pageInfo->post_name."/view.php"; 

			} else {

				include_once get_template_directory()."/heros/home/view.php"; 

			}
		?>