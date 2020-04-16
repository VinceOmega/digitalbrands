<?php

  $pageInfo = get_page( get_the_ID() );

  $file   = file_get_contents( get_template_directory()."/sections/packages/config.json" );
  $json   = json_decode( $file );

  $pages = file_get_contents( get_template_directory()."/heros/config.json" );
  $pagesJsonData = json_decode( $pages );

  $packagesArray = [];

  if( !empty( $pagesJsonData->pages->{ $pageInfo->post_name } ) && !is_null(  $pagesJsonData->pages->{ $pageInfo->post_name }  ) ){

    $pageName     	= $pagesJsonData->pages->{ $pageInfo->post_name };
    $packagesArray  = $json->pages->{ $pageName };

  }

?>


<section class="showcase rounded-white">

    <div class="container-fluid p-0 bg-gray">

        <div class="row">
            <h3 class="capslock showcase-header-main"><?php echo $json->intro->{ $pageName }->{ 'header-main' } ; ?></h3></br>
            <?php if( $json->intro->{ $pageName }->{ 'header-sub' } ){ ?><h5 class="capslock showcase-header-sub"><?php echo $json->intro->{ $pageName }->{ 'header-sub' }; ?></h5></br> <?php } ?>
            <p class="showcase-header-text"><?php echo $json->intro->{ $pageName }->{ 'header-text' };?></p>
        </div>

        <div class="row no-gutters">

            <div class="col-lg-12 my-auto showcase-text">
                <div class="row">
                    
                    <?php foreach( $packagesArray as $package ){ ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="w3-card">
                                
                                <div class="w3-panel">
                                    <div class="w3-overlay"></div>
                                    <h4 style="margin-bottom: 0px;"><span class="eve capslock"><?php echo $json->packages->{ $package }->heading; ?></span></h4>
                                    <span class="eve3a capslock"><?php echo $json->packages->{ $package }->subheading; ?></span>
                                    <ul class="list list-partial">
                                        <?php foreach( $json->packages->{ $package }->features->lists as $list ) {  ?>
                                            <?php if( !is_null( $list->heading ) && !empty( $list->heading ) ){ ?>
                                                <li><h5 class="capslock"><?php echo $list->heading; ?></h5></li>
                                            <?php } ?>
                                            <?php foreach( $list->list as $listItem ){ ?>
                                                <li><?php echo $listItem; ?></li>
                                            <?php } ?>
                                        <?php } ?>
                                    </ul>
                                </div>

                                <div class="right-btn">
                                    <a href="https://go.thryv.com/widgets/scheduler/a6h9sm0rzt5pclen?frontage_iframe=true" target="_blank" class="btn btn-primary btn-lead">Free Consultation</a>
                                    <button id="" class="btn btn-primary btn-toggle">+</button>
                                </div>			

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
                
        </div>

    </div>

</section>