<?php
$sectionTitle = "طیبه شادالو | درباره ما";
$navActive = "gallaries";
$bannerText = "گالری ها";
$breadCrumbsPath = "gallaries.php";
require_once('inc/main/config.php');
include(ROOT_PATH . 'inc/main/header.php');
include(ROOT_PATH . 'inc/partial/banner.php');
include(ROOT_PATH . 'inc/partial/mainBreadCrumbs.php');
?>

  <!-- Page Content -->
  <div class="container-fluid main-gallary-banner">
    <div class="container">
      <div class="row">  
        <?php include(ROOT_PATH . "inc/partial/gallary-nav.php"); ?>

        <!-- Main content -->
        <div class="col-md-9">
          <div class="owl-carousel">
            <div class="item"><img src="assets/owl1.jpg" alt="Owl Image"></div>
            <div class="item"><img src="assets/owl1.jpg" alt="Owl Image"></div>
            <div class="item"><img src="assets/owl1.jpg" alt="Owl Image"></div>
            <div class="item"><img src="assets/owl1.jpg" alt="Owl Image"></div>
            <div class="item"><img src="assets/owl1.jpg" alt="Owl Image"></div>
            <div class="item"><img src="assets/owl1.jpg" alt="Owl Image"></div>
            <div class="item"><img src="assets/owl1.jpg" alt="Owl Image"></div>
            <div class="item"><img src="assets/owl1.jpg" alt="Owl Image"></div>
          </div>
          <!-- /.owl-carousel -->
          
          <?php 
            include(ROOT_PATH . 'inc/partial/gallaries-interviews.php');
            foreach($gallariesInterviews as $gallariesInterview) { 
          ?>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 Preview">
            <div class="thumbnail gallary-item-shadow">
              <a href="gallaries.php">
                <img 
                class="img-responsive" 
                src="<?php echo $gallariesInterview["img"]; ?>" 
                alt="<?php echo $gallariesInterview["logo"]; ?>" />
              </a>
              <div class="caption">
                <h3 class="media-heading btitrbold"><?php echo $gallariesInterview["logo"]; ?></h3>
                <p class="yekan copyRight-line-height"><?php echo $gallariesInterview["text"]; ?></p>
              </div>
            </div>
          </div>
      
          <?php } ?>
          
          <div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-4 col-lg-offset-4 col-lg-4 Preview">
            <div class="thumbnail gallary-item-shadow">
              <a href="gallaries.php">
                <img 
                class="img-responsive" 
                src="img/gallaries-interviews/DesigningImages.jpg" 
                alt="هنرجویان" />
              </a>
              <div class="caption">
                <h3 class="media-heading btitrbold">هنرجویان</h3>
                <p class="yekan copyRight-line-height">در تعریف سوم علم به مثابه هر آنچه درست و نیکوست، هر آنچه خیر است و صحیح مطرح می شود </p>
              </div>
            </div>
          </div>
          
        </div>
        <!-- /.col-md-9 -->

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.container-fluid -->



  <?php include(ROOT_PATH . 'inc/main/footer.php'); ?>
