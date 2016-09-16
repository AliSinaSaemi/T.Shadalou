<?php
$sectionTitle = "طیبه شادالو | صفحه اصلی";
require_once('inc/main/config.php');
include(ROOT_PATH . 'inc/main/header.php'); ?>

  <!-- // Banner // -->
  <div class="container-fluid banner-xs-margin" id="page-top">
    <div class="row">
      <div class="col-md-12 banner-image">
        <h1 class="banner-text text-center yekan">به سایت رسمی <small>طیبه شادالو</small> خوش آمدید</h1>
      </div>
    </div>
  </div>
  <!-- /.Banner  -->

  <!-- // Gallary Motion // -->
  <div class="carousel-top carousel slide hidden-xs" id="featured">
    <ol class="carousel-indicators">
      <li data-target="#featured" data-slide-to="0" class="active"></li>
      <li data-target="#featured" data-slide-to="1"></li>
      <li data-target="#featured" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/carousel-images/1_standard_03.jpg" alt="طیبه شادالو">
      </div>
      <div class="item">
        <img src="img/carousel-images/2_standard_03.jpg" alt="فرش و گل">
      </div>
      <div class="item">
        <img src="img/carousel-images/3_standard_03.jpg" alt="تخت جمشید">
      </div>
    </div>
    <!-- /.carousel-inner -->
    <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>

    <a class="right carousel-control" href="#featured" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
  <!-- /.carousel -->

  <!-- // Biography // -->
  <div class="container-fluid first-text">
    <div class="container">
      <h3 class="title">بیوگرافی</h3>
      <p class="title-text">در تعریف سوم علم به مثابه هر آنچه درست و نیکوست، هر آنچه خیر است و صحیح مطرح می شود. در نزد عامه هم این تعریف بسیار معمول است. بارها شنیده ام که حتی افراد دور از دانش نیز برای تایید پندارها و اعتقادات خودشان بر علمی بودن آنها تاکید می کنند و اصرار دارند که اخبار و گفته ها و محصولاتشان علمی است. آنها نمی خواهند گفته هایشان غیر علمی باشد چرا که در نظر عامه مردم واژه غیر علمی واژه نادرستی است. از همین رو که حتی فروشنده مهره مار یا فروشندگان سنگ ماه تولد هم اصرار دارند که محصولاتشان مورد تایید علم است. بیشتر مجریان برنامه های فریب عمومی این معنای ضمنی را در نظر دارند که وقتی می گویند فلان چیز علمی است، صرفا مرادشان اسن است که آن چیز خوبی است. بارها شنیده ام که کند.....</p>
      <button id="button-continue" class="hvr-rotate" role="button"><a href="biography.php">ادامه مطلب</a></button>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.container-fluid -->

  <!-- // Gallaries // -->
  <div class="container-fluid bg-img-gallary">
    <div class="row">
      <h2 class="text-center btitrbold title_2">گالری ها</h2>
      <hr class="hr-gallary">
      
      <?php 
        include(ROOT_PATH . 'inc/partial/index-interviews.php');
        foreach($indexInterviews as $indexInterview) { 
      ?>

      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 Preview">
        <div class="thumbnail gallary-item-shadow">
          <a href="gallaries.php">
            <img 
            class="img-responsive" 
            src="<?php echo $indexInterview["img"]; ?>" 
            alt="<?php echo $indexInterview["logo"]; ?>" />
          </a>
          <div class="caption">
            <h3 class="media-heading btitrbold"><?php echo $indexInterview["logo"]; ?></h3>
            <p class="yekan copyRight-line-height"><?php echo $indexInterview["text"]; ?></p>
          </div>
        </div>
      </div>
      
      <?php } ?>
      
      <!-- low more gallary awaits -->
      
      <div class="col-xs-2 col-sm-3"></div>
      <div class="col-xs-8 col-sm-6 hidden-md hidden-lg low-size-more-button">
        <a href="gallaries.php">        
          <button type="button" class="little-more-option text-center">
            <p class="text-center">در گالری ها بیشتر ببینید. <span class="glyphicon glyphicon-arrow-left animated infinite shake"></span></p>
          </button>
        </a>
      </div>
      <div class="col-xs-2 col-sm-3"></div>
      <!-- /.low-more -->
      
      <!-- more gallary awaits -->
      <div class="hidden-xs hidden-sm col-md-4 col-lg-4 more Preview">
        <a href="gallaries.php" data-toggle="tooltip" data-placement="bottom" title="در گالری ها بیشتر ببینید.">
          <button type="button" class="more-option center-block animated infinite tada">
            <span class="glyphicon glyphicon-plus"></span>
          </button>
        </a>
      </div>
      <!-- /.more -->
      
      <div class="hidden-xs hidden-sm col-md-4 col-lg-4 Preview">
        <div class="thumbnail gallary-item-shadow">
          <a href="gallaries.php">
            <img 
            class="img-responsive" 
            src="img/gallaries-interviews/DesigningImages.jpg" 
            alt="مدرن" />
          </a>
          <div class="caption">
            <h3 class="media-heading btitrbold">تصویر سازی</h3>
            <p class="yekan copyRight-line-height">در تعریف سوم علم به مثابه هر آنچه درست و نیکوست، هر آنچه خیر است و صحیح مطرح می شود. در نزد عامه هم این تعریف بسیار معمول است. </p>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->

  <!-- // About us // -->
  <div class="container-fluid second-text">
    <div class="container">
      <h3 class="title">درباره ما</h3>
      <p class="title-text">در تعریف سوم علم به مثابه هر آنچه درست و نیکوست، هر آنچه خیر است و صحیح مطرح می شود. در نزد عامه هم این تعریف بسیار معمول است. بارها شنیده ام که حتی افراد دور از دانش نیز برای تایید پندارها و اعتقادات خودشان بر علمی بودن آنها تاکید می کنند و اصرار دارند که اخبار و گفته ها و محصولاتشان علمی است. آنها نمی خواهند گفته هایشان غیر علمی باشد چرا که در نظر عامه مردم واژه غیر علمی واژه نادرستی است.</p>
      <hr class="hr-aboutUs">
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <h4 class="btitrbold">هدف ما چیست ؟</h4>
          <p class="title-text">در تعریف سوم علم به مثابه هر آنچه درست و نیکوست، هر آنچه خیر است و صحیح مطرح می شود. در نزد عامه هم این تعریف بسیار معمول است. بارها شنیده ام که حتی افراد دور از دانش نیز برای تایید پندارها و اعتقادات خودشان بر علمی بودن آنها تاکید می کنند و اصرار دارند که اخبار و گفته ها و محصولاتشان علمی است. آنها نمی خواهند گفته هایشان غیر علمی باشد چرا که در نظر عامه مردم واژه غیر علمی واژه نادرستی است.</p>
        </div>
        <div class="col-xs-12 col-md-6">
          <h4 class="btitrbold">هدف ما چیست ؟</h4>
          <p class="title-text">در تعریف سوم علم به مثابه هر آنچه درست و نیکوست، هر آنچه خیر است و صحیح مطرح می شود. در نزد عامه هم این تعریف بسیار معمول است. بارها شنیده ام که حتی افراد دور از دانش نیز برای تایید پندارها و اعتقادات خودشان بر علمی بودن آنها تاکید می کنند و اصرار دارند که اخبار و گفته ها و محصولاتشان علمی است. آنها نمی خواهند گفته هایشان غیر علمی باشد چرا که در نظر عامه مردم واژه غیر علمی واژه نادرستی است.</p>
        </div>
      </div>
      <button id="button-continue" class="hvr-rotate" role="button"><a href="about.php">ادامه مطلب</a></button>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.container-fluid -->

  <?php include(ROOT_PATH . 'inc/main/footer.php'); ?>
