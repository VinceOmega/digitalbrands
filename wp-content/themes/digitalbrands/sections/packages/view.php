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
                                    <button data-href="https://go.thryv.com/widgets/scheduler/a6h9sm0rzt5pclen?frontage_iframe=true" class="btn btn-primary btn-lead">Free Consultation</button>
                                    <button id="" class="btn btn-primary btn-toggle">+</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <!--
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="w3-card">
                                <div class="w3-panel">
                                    <div class="w3-overlay"></div>
                                    <h4 style="margin-bottom: 0px;"><span class="eve">WEB DESIGN + DEVELOPMENT</span></h4>
                                    <span class="eve3a">STARTING AT $1000</span>
                                    <ul class="list list-partial">
                                        <li>1-20 Unique Pages of Web Design</li>
                                        <li>Custom Made, Interactive, Dynamic &amp; High-End Design</li>
                                        <li>Customized WordPress &amp; PHP Development</li>
                                        <li>Interactive Sliding Banners</li>
                                        <li>Up to 15 Custom Made Banner Designs</li>
                                        <li>Stock Images</li>
                                        <li>Unlimited Revisions</li>
                                        <li>Special Hover Effects</li> 
                                        <li>Content Management System</li>
                                        <li>Online Appointment + Booking + Scheduling + Online Ordering Integration</li>
                                        <li>Online Payment Integration</li>
                                        <li>Multi Lingual</li>
                                        <li>Custom Dynamic Forms</li>
                                        <li>Signup Area (For Newsletters, Offers etc.)</li>
                                        <li>Search Bar</li>
                                        <li>Live Feeds of Social Networks Integration</li>
                                        <li>Mobile Responsive</li>
                                        <li>Up to 15 Professional Email ID’s</li>
                                        <li>Google Friendly Sitemap</li>
                                        <li>Search Engine Submission</li>
                                        <li>Complete W3C Certified HTML</li>
                                        <li>Industry specified Team of Award Winning Designers and Developers</li>
                                        <li>Complete Deployment</li>
                                        <li>Complete Source Files</li>
                                        <li>Ownership Rights</li>
                                        <li>Satisfaction Guarantee</li>
                                    </ul>					
                                </div>
                                <div class="right-btn">
                                    <button data-href="https://go.thryv.com/widgets/scheduler/a6h9sm0rzt5pclen?frontage_iframe=true" class="btn btn-primary btn-lead">Free Consultation</button>
                                    <button id="" class="btn btn-primary btn-toggle">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="w3-card">
                                <div class="w3-panel">
                                    <div class="w3-overlay"></div>
                                    <h4 style="margin-bottom: 0px;"><span class="eve">MARKETING</span></h4>
                                    <span class="eve3a">STARTING AT $500</span>
                                    <ul class="list list-partial">
                                        <li>Copywriting &amp; Visual designs</li>
                                        <li>Business Page Optimization</li>
                                        <li>Ad Campaign Management</li>
                                        <li>Spam monitoring</li>
                                        <li>Multiple postings per week Facebook + Twitter + Instagram + LinkedIn</li>
                                        <li>Reputation Management</li> 
                                        <li>Social Account Setup</li>
                                        <li>Content Creation</li>
                                        <li>Social Media Hearing</li>
                                        <li>Query and comments reply</li>
                                        <li>Keywords</li>
                                        <li>On-page Optimization</li>
                                        <li>Meta Title Optimization</li>
                                        <li>Meta Description Optimization</li>
                                        <li>Image alt text</li>
                                        <li>Robots.txt Creation</li>
                                        <li>Sitemap.xml Creation</li>
                                        <li>Google Webmaster Code Creation</li>
                                        <li>Google Analytics Code Creation</li>
                                        <li>Keywords Research and Analysis</li>
                                        <li>Important HTML Tags (H1, H2 , H3 )</li>
                                        <li>Off-Page Optimization</li>
                                        <li>Business Listings</li>
                                        <li>Social Media Profile Creation</li>
                                        <li>Social Bookmarks</li>
                                        <li>Forum Postings</li>
                                        <li>Blog Commenting</li>
                                        <li>Infographics Submission</li>
                                        <li>Image Submission</li>
                                        <li>Slide Share Submission</li>
                                        <li>Important HTML Tags (H1, H2 , H3 )</li>
                                        <li>Content</li>
                                        <li>Press Releases</li>
                                        <li>Articles Writing/Submission</li>
                                        <li>Blogs Posts Writing and Submission</li>
                                        <li>Satisfaction Guarantee</li>
                                    </ul>
                                </div>
                                <div class="right-btn">
                                    <button data-href="https://go.thryv.com/widgets/scheduler/a6h9sm0rzt5pclen?frontage_iframe=true" class="btn btn-primary btn-lead">Free Consultation</button>
                                    <button id="" class="btn btn-primary btn-toggle">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="w3-card">
                                <div class="w3-panel">
                                    <div class="w3-overlay"></div>
                                    <h4 style="margin-bottom: 0px;"><span class="eve">ECOMMERCE</span></h4>
                                    <span class="eve3a">STARTING AT $1000</span>
                                    <ul class="list list-partial">
                                        <li>1 to 15 Pages of Custom Website Design</li>
                                        <li>Complete Development &amp; Deployment</li>
                                        <li>Unlimited Revisions</li>
                                        <li>Interactive Sliding Banners</li>
                                        <li>Custom, Interactive &amp; Dynamic Design</li>
                                        <li>Customized WordPress &amp; PHP Development</li>
                                        <li>Interactive Sliding Banners</li>
                                        <li>Up to 5 Banner Designs</li> 
                                        <li>Unlimited Products</li>
                                        <li>15 Stock Images</li>
                                        <li>Unlimited Revisions</li>
                                        <li>Special Hover Effects</li>
                                        <li>Content Management System</li>
                                        <li>Online Appointment/Booking/Scheduling/Online Ordering Integration</li>
                                        <li>Online Payment Integration</li>
                                        <li>Multi Lingual</li>
                                        <li>Custom Dynamic Forms</li>
                                        <li>Signup Area (For Newsletters, Offers etc.)</li>
                                        <li>Search Bar</li>
                                        <li>Live Feeds of Social Networks integration</li>
                                        <li>Free Domain Integration</li>
                                        <li>Google Friendly Sitemap</li>
                                        <li>Search Engine Submission</li>
                                        <li>Complete W3C Certified HTML</li>
                                        <li>Award Winning Designers &amp; Developers</li>								
                                    </ul>
                                </div>
                                <div class="right-btn">
                                    <button data-href="https://go.thryv.com/widgets/scheduler/a6h9sm0rzt5pclen?frontage_iframe=true" class="btn btn-primary btn-lead">Free Consultation</button>
                                    <button id="" class="btn btn-primary btn-toggle">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class=" w3-card">
                                <div class="w3-panel">
                                    <div class="w3-overlay"></div>
                                    <h4 style="margin-bottom: 0px;"><span class="eve">APP DEVELOPMENT</span></h4>
                                    <span class="eve3a">STARTING AT $2000</span>
                                    <ul class="list list-partial">
                                        <h6>Platform Expertise:</h6>
                                        <li>iOS</li>
                                        <li>Carplay</li>
                                        <li>iPad</li>
                                        <li>Apple TV</li>
                                        <li>Android</li>
                                        <li>Android Auto</li>
                                        <li>Chromecast</li>
                                        <li>Google Home</li> 
                                        <li>Amazon Fire Phone</li>
                                        <li>Amazon Fire Stick/TV</li>
                                        <li>Bosch MySPIN iOS &amp; Android</li>
                                        <li>GM Dashboard Integration for Cars</li>
                                        <li>Ford Sync Applink</li>
                                        <li>Sonos</li>
                                        <li>Alexa</li>
                                        <li>Xbox</li>
                                        <li>Mirror Link (Rock Scout)</li>
                                        <h5>Development Expertise:</h5>
                                        <li>Assembler </li>
                                        <li>C</li>
                                        <li>C++</li>
                                        <li>Objective-C</li>
                                        <li>Java</li>
                                        <li>Node.JS</li>
                                        <li>Javascript</li>
                                        <li>Typescript </li>
                                        <li>Python</li>
                                        <li>C#/VB.Net</li>
                                        <li>PHP</li>
                                        <li>react native</li>
                                        <li>swift</li>
                                    </ul>
                                </div>
                                <div class="right-btn">
                                    <button data-href="https://go.thryv.com/widgets/scheduler/a6h9sm0rzt5pclen?frontage_iframe=true" class="btn btn-primary btn-lead">Free Consultation</button>
                                    <button id="" class="btn btn-primary btn-toggle">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="w3-card">
                                <div class="w3-panel">
                                    <div class="w3-overlay"></div>
                                    <h4 style="margin-bottom: 0px;"><span class="eve">BRAND GROWTH</span></h4>
                                    <span class="eve3a">STARTING AT $2000</span>
                                    <ul class="list list-partial">
                                        <li>Storyboard Creation</li>
                                        <li>Digital Commercial Creation</li>
                                        <li>TalentModel Hiring</li>
                                        <li>Drip Sequence</li>
                                        <li>Blogs</li>
                                        <li>Website Redesign</li>
                                        <li>Content Strategy</li>
                                        <li>Press Releases</li> 
                                        <li>Viral Engagement</li>
                                        <li>Packaging</li>
                                        <li>Promotional Materials</li>
                                        <li>Seasonal Planning</li>
                                    </ul>
                                </div>
                                <div class="right-btn">
                                    <button data-href="https://go.thryv.com/widgets/scheduler/a6h9sm0rzt5pclen?frontage_iframe=true" class="btn btn-primary btn-lead">Free Consultation</button>
                                    <button id="" class="btn btn-primary btn-toggle">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="w3-card">
                                <div class="w3-panel">
                                    <div class="w3-overlay"></div>
                                    <h4 style="margin-bottom: 0px;"><span class="eve">CONSULTING</span></h4>
                                    <span class="eve3a">STARTING AT $200</span>
                                    <ul class="list list-partial">
                                        <li>Selling Partner Strategy</li>
                                        <li>Scalability</li>	
                                        <li>Growth Hacking</li>								
                                        <li>Amazon FBA</li>
                                        <li>Social Media Strategy</li>
                                        <li>Click Funnels</li>
                                        <li>AB Testing</li>
                                    </ul>
                                </div>
                                <div class="right-btn">
                                    <button data-href="https://go.thryv.com/widgets/scheduler/a6h9sm0rzt5pclen?frontage_iframe=true" class="btn btn-primary btn-lead">Free Consultation</button>
                                    <button id="" class="btn btn-primary btn-toggle">+</button>
                                </div>
                            </div>
                        </div>
                    -->
                </div>
            </div>
                
        </div>

    </div>

</section>