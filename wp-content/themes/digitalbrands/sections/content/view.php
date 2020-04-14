<?php

    $pageInfo = get_page( get_the_ID() );
    $heading = array(

        'app-development'           => "take your business or idea to the next level",
        'web-design-development'    => "technology aligned and beautifully designed",
        'turnkey-shopify'           => "our proven turnkey shopify packages focus on growth and sustainability",
        'marketing'                 => "build your brand"

    );

    $pages = file_get_contents( get_template_directory()."/heros/config.json" );
    $pagesJsonData = json_decode( $pages );
    if( !empty( $pagesJsonData->pages->{ $pageInfo->post_name } ) && !is_null(  $pagesJsonData->pages->{ $pageInfo->post_name }  ) ){

        $headingText = $header[ $pagesJsonData->pages->{ $pageInfo->post_name } ];

    }

?>

<h3 class="capslock"><?php echo $headingText ; ?></h3>
<?php the_content(); ?>
<a href="#" target="_blank" class="btn btn-gradient-blue-purple capslock">get your free consultation!</a>