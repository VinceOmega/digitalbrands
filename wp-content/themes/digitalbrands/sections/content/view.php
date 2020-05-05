<?php

    $pageInfo = get_page( get_the_ID() );

    $file   = file_get_contents( get_template_directory()."/sections/content/config.json" );
    $json   = json_decode( $file );

    $pages = file_get_contents( get_template_directory()."/heros/config.json" );
    $pagesJsonData = json_decode( $pages );

    if( !is_null(  $pagesJsonData->pages->{ $pageInfo->post_name } )  && !empty( $pagesJsonData->pages->{ $pageInfo->post_name } ) ){

        $headingText = $json->pages->{ $pageInfo->post_name };

    }

?>

<div class="content container-fluid <?php echo $pageInfo->post_name ?>">
    <h3 class="capslock content-header"><?php echo $headingText; ?></h3>
    <div class="content-text">
        <?php echo $pageInfo->post_content; ?>
    </div>
    <div class="content-cta">
        <a href="https://go.thryv.com/widgets/scheduler/a6h9sm0rzt5pclen?frontage_iframe=true" target="_blank" class="btn btn-gradient-blue-purple capslock">get your free consultation!</a>
    </div>
</div>