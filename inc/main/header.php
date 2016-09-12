<!DOCTYPE html>
<html lang="fa-IR">

<head>

  <!-- Main Meta Tags -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="X-UA-Campatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-space=1.0, maximum-scale=1.0, user-scalable=no" />
  <titl><?php echo $sectionTitle; ?></titl>
  <!-- SEO Meta Tags -->
  <meta name="language" content="farsi , persian" />
  <meta name="description" content="سایت رسمی طیبه شادالو , طیبه شادالو با تدریس تمام رشته های نقاشی از شما یک هنرمند خلاق میسازد" />
  <meta name="keywords" content="طیبه شادالو,نکارگری,نقاشی,طراحی,مدرن,هنرمندان,هنرجویان,تدریس,فرش,رنگ,روغن,تذهیب,نقاشی رو پارچه,پارچه, تصویرسازی" />
  <meta name="author" content="Blue Dova(Alisina Saemi)" />
  <meta name="contact" content="T.shadaloo@gmail.com" />

  <!-- Icon Navbar -->
  <link rel="icon" href="<?php echo BASE_URL; ?>img/icon/Big_T.png" />

  <!-- Yekan Font -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>font/style.css" />

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

  <!-- Bootstrap Link -->
  <!-- Main bootstrap Stylesheet for fixing rtl bugs -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/bootstrap.min.css" />
  <!-- rtl -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/bootstrap-rtl.min.css" />
  
  <!-- Owl Carousel Properties -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/owl.carousel.css">
  
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/owl.theme.default.css">

  <!-- Animation Properties -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/animate.css" />

  <!-- Hover Properties -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/hover.css" />

  <!-- My own Style Sheet -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css" />
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

  <!-- // Navigation // -->
  <nav class="navbar navbar-inverse navbar-fixed-top yekan">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle collpased" data-toggle="collapse" data-target="#main-navbar" aria-haspopup="false" aria-expanded="true">
          <span class="sr-only">Toggle Navigatin</span>
          <p>فهرست</p>
        </button>
        <a href="<?php echo BASE_URL; ?>index.php" class="navbar-brand">
        طیبه شادالو
        </a>
      </div>
      <div class="collapse navbar-collapse" id="main-navbar">
        <form class="navbar-form navbar-right" role="search">
          <div class="input-group add-on">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
            <input type="text" class="form-control" placeholder="جستجو کنید ..." name="srch-term" id="srch-term">
          </div>
        </form>
        <ul class="nav navbar-nav navbar-left">
          <li class="<?php if($navActive == "biography") { echo "active"; } ?>"><a href="<?php echo BASE_URL; ?>biography.php">بیوگرافی</a></li>
          <li class="<?php if($navActive == "gallaries") { echo "active"; } ?>"><a href="<?php echo BASE_URL; ?>gallaries.php">گالری ها</a></li>
          <li class="<?php if($navActive == "about") { echo "active"; } ?>"><a href="<?php echo BASE_URL; ?>about.php">درباره ما</a></li>
          <li class="<?php if($navActive == "contact") { echo "active"; } ?>"><a href="<?php echo BASE_URL; ?>contact.php">ارتباط با ما</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /.navbar -->
