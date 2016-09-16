<?php 
$sectionTitle = " طیبه شادالو | گالری ها - مدرن";
$navActive = "gallaries";
$bannerText = "مدرن";
$breadCrumbsPath = "gallary.php";
require_once("../../inc/main/config.php");
include(ROOT_PATH . "inc/main/header.php"); 
include(ROOT_PATH . 'inc/partial/banner.php'); 
include(ROOT_PATH . 'inc/partial/gallariesBreadCrumbs.php');
?>

    <hr class="active_panigation">
    <!-- // Images of Gallary (Tazhib) // -->
    <div class="container-fluid main-gallary-banner">
      <div class='row'>
        <ul class="panigation panigationTop">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">2</a></li>
          <li><a class="active" href="modern_01.php">1</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
      <!-- /.row -->
      <div class="container">
        <div class="row">
          <?php include(ROOT_PATH . "inc/partial/gallary-nav.php"); ?>

          <div class="col-md-9 gallaries-topBottom">
          <?php 
              include(ROOT_PATH . 'inc/partial/gallaries-imgs/gallary-modern/modern-01-imgs.php');
              $counter = 0;
              foreach($products as $product) { 
              $counter++;
            ?>

            <img class="unthumbnailing thumbnail hvr-pulse-shrink col-xs-12 col-sm-6 col-md-4 col-lg-4" src="<?php echo $product["img"]; ?>" data-toggle="modal" data-target="#gallary-<?php echo $counter;?>" alt="<?php echo $product["text"]; ?>">

            <div class="modal fade" id="gallary-<?php echo $counter;?>" tabindex="-1" role="dialog" aria-labelledby="modellabel">

              <div class="modal-dialog modal-lg modal-xs" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <!-- /.modal-header -->
                  <div class="model-body modalPadding">

                    <img src="<?php echo $product["img"]; ?>" class="gallary-imgs" alt="<?php echo $product["text"]; ?>">

                  </div>
                  <!-- modal-body -->
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- modal-dialog -->
            </div>
            <!-- /.modal -->
            <?php } ?>
          </div>
          <!-- /.col-md-9 -->
       
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->

      <div class='row'>
        <ul class="panigation panigationBottom">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">2</a></li>
          <li><a class="active" href="modern_01.php">1</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container-fluid -->
    <hr class="active_panigation">

    <?php include(ROOT_PATH . 'inc/main/footer.php'); ?>
