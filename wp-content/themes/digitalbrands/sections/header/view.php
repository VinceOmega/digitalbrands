<?php 

    $pageInfo = get_page( get_the_ID() );
    $options = array(
        'parent' => 0,
        'post_type' => 'page',
        'post_status' => 'publish'
    );
    $pages = file_get_contents( get_template_directory()."/heros/config.json" );
    $pagesJsonData = json_decode( $pages );

?>
<?php 

    function validatePage( $obj ){ 
        return ( strToLower( $obj->post_name ) === strToLower( $GLOBALS[ 'pageInfo' ]->post_name ) ) ? true : false;  
    }

?>
<?php 

    if ( array_map( 'validatePage', get_pages( $options ) ) ) {

            if( !empty( $pagesJsonData->pages->{ $pageInfo->post_name } ) && !is_null(  $pagesJsonData->pages->{ $pageInfo->post_name }  ) ){
                include_once get_template_directory()."/heros/".$pagesJsonData->pages->{ $pageInfo->post_name }."/view.php"; 
            } else {
                include_once get_template_directory()."/heros/home/view.php"; 
            }

        } else {

            include_once get_template_directory()."/heros/home/view.php"; 

        }
?>