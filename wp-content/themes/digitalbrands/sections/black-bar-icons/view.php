<?php 

  $pageInfo = get_page( get_the_ID() );

  $file   = file_get_contents( get_template_directory()."/sections/black-bar-icons/config.json" );
  $json   = json_decode( $file );

  $pages = file_get_contents( get_template_directory()."/heros/config.json" );
  $pagesJsonData = json_decode( $pages );

  $iconsArray = [];

  if( !empty( $pagesJsonData->pages->{ $pageInfo->post_name } ) && !is_null(  $pagesJsonData->pages->{ $pageInfo->post_name }  ) ){

    $pageName     = $pagesJsonData->pages->{ $pageInfo->post_name };
    $iconsArray   = $json->pages->{ $pageName };

  }


?>

<section class="features-icons text-center rounded-black">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="features-icons-item">
            <div class="features-icons-icon">
              <ul>
                  <?php foreach( $iconsArray as $icon ){ ?>

                    <li><img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/<?php echo $json->icons->{ $icon }->filename;?>.<?php echo $json->icons->{ $icon }->filetype;?>" class="<?php echo $json->icons->{ $icon }->class ?>"></li>

                  <?php }; ?>

              </ul>
            </div>
          </div>
        </div>
    </div>
  </section>