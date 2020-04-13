
<div class="container-fluid about-us">

    <h3 class="about-us-header">About Us</h3>

    <?php $page = get_page_by_path( 'home/about-us' ); ?>
    <?php echo $page->post_content; ?>


</div>