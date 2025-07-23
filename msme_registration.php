<!doctype html>
<html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/> -->
<title>SUJAKH</title>

<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
        
<!--MAIN-CSS-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/all.css" type="text/css">
<!--MAIN-CSS-->

<!--FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!--FONTS-->

<!--MAIN-JS-->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<!--MAIN-JS-->    

<!--BANNER--->
<link rel="stylesheet" href="css/slider.css" type="text/css">
<link rel="stylesheet" href="css/animate.css">
<!--BANNER--->
    
<!--HEADER-FIX-->
<script src="js/waypoints.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/scripts.js"></script>
<!--HEADER-FIX-->    

<!--MENU-->
<link rel="stylesheet" href="css/menu.css">
<script src="js/main.js"></script>
<!--MENU-->
    
<!--TEXT-ANIMATION-->
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<!--TEXT-ANIMATION-->
    
<!--LOADER FUNCTION--->
<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
<!--LOADER FUNCTION--->
    
<!--BANNER JS FUNCTION--->
<script type="text/javascript">

   wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
</script>
<!--BANNER JS FUNCTION--->
    
<!--CLIENTELE LOGO SLIDER CSS & JS-->
<link href="css/clientele_slider.css" rel="stylesheet" media="all">
<script src="js/slick.js"></script>
<!--CLIENTELE LOGO SLIDER CSS & JS-->    
  
<!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
respond.min.js"></script>
<![endif]-->

 <style type="text/css">
.carousel-item > div {
  float: left;
}
.carousel-by-item [class*="cloneditem-"] {
  display: none;
}
    </style>
</head>
<body>
<div class="se-pre-con"></div>

<?php include ("include/top.php");?>
    
<div class="nav-bar">
	<a href=""><i class="fas fa-bars"></i></i><span>Menu</span></a>
</div>

<div class="stickydiv"><!--stickydiv-->
    <div class="container1 bg3 clearfix">
        <div id="menucont" class="bodycontainer clearfix">
<header id="header-1">
	<div class="container">
    	<div class="row">
        
        	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            	
                <?php include ("include/logo.php");?>
                
                <?php include ("include/mobile_top.php");?>

                <nav>
                <ul>
					<li><a href="index.php">HOME</a></li> 
                    <li><a href="about_us.php">about us</a></li>
					<?php /*?><li class="sub-menu"><a href="#">about us<i class="fa-solid fa-angle-down faicon"></i></a>
						<ul class="children">
							<li><a href="#">about us</a></li>
							<li><a href="faq.php">FAQ</a></li>
							<li><a href="legal.php">legal</a></li>
							<li><a href="bank_details.php">bank details</a></li>
							<li><a href="gallery.php">gallery</a></li> 
							<li><a href="privacy_policy.php">Privacy Policy</a></li>
							<li><a href="terms_&_conditions.php">Terms & Conditions</a></li> 
						</ul>
					</li><?php */?>                          
					  
					<li><a href="service.php" class="active">Service</a></li>
                    <li><a href="gallery.php">gallery</a></li>
					<li><a href="contact_us.php">Contact Us</a></li>  
                    <a href="https://software.sujakh.com/auth/login"><button class="top-btn"><i class="fa-solid fa-user-lock"></i> login </button></a>
                    <a href="sujakh.apk" download><button class="top-btn" style="background:#009297;"><i class="fa-brands fa-google-play"></i> APK </button></a>
                </ul>
            </nav>
            	
            </div>
        </div>
    </div>
</header>
        </div>
    </div>
</div>
    
<div class="inner-page-hero-area ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-left">
                <div class="inner-page-hero-text">
                    <div class="inner-page-title">MSME Registration</div>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">MSME Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>    
    

  <div class="_wrapper">
    <div class="_gst-card">

      <!-- Page Header -->
      <div class="_gst-header">
        <i class="fas fa-file-invoice-dollar"></i>
        <h1>MSME Registration</h1>
      </div>

      <!-- Intro Text -->
      <p> MSME (Micro, Small, and Medium Enterprises) Registration, also known as Udyam Registration, is a government initiative to support small and growing businesses in India. It helps businesses avail benefits such as subsidies, low-interest loans, priority in government tenders, protection against delayed payments, and access to various schemes. Businesses are classified as Micro, Small, or Medium based on their investment in plant & machinery and annual turnover. The registration process is online, paperless, and based on Aadhaar and PAN verification. No government fee is charged for registration.
</P>

      <!-- Documents Required for MSME (Udyam) Registration -->
      <h2 class="_section-title"><i class="fa-solid fa-file-circle-check"></i> Documents Required for MSME (Udyam) Registration:</h2>
      <ul class="_checklist">
        <li><strong> Aadhaar Card </strong> of Proprietor / Partner / Director</li>
        <li><strong> PAN Card of </strong> Individual or Business</li>
        <li><strong> Business Address Proof </strong> (Electricity Bill / Rent Agreement, etc.)</li>
        <li><strong> Bank Account Details </strong> (Account Number, IFSC Code, Bank Name)</li>
        <li><strong> GST Number</strong> (if applicable)</li>
        <li><strong> Email ID and Mobile Number </strong> </li>
      </ul>

     

     

      <!-- CTA Button -->
      <a href="contact_us.php" class="_button">Apply for MSME Registration</a>

    </div>
  </div>


<?php include ("include/we_work.php");?>    
 
<?php include ("include/footer.php");?>
   
<!--TEXT-ANIMATION-->
<script type="text/javascript">
  // Counter 
            jQuery('.statistic-counter').counterUp({
                delay: 14,
                time: 1000
            });
</script>
<!--TEXT-ANIMATION-->
    
<!--CLIENTELE LOGO SLIDER JS FUNCTION-->
<script type="text/javascript">
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 970,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 479,
            settings: {
                slidesToShow: 2
            }
        }]
    });
});
</script>
<!--CLIENTELE LOGO SLIDER JS FUNCTION-->
    
<!--BACK TO TOP-->
<script type="text/javascript">
if ($('#back-to-top').length) {
var scrollTrigger = 100, // px
	backToTop = function () {
		var scrollTop = $(window).scrollTop();
		if (scrollTop > scrollTrigger) {
			$('#back-to-top').addClass('show');
		} else {
			$('#back-to-top').removeClass('show');
		}
	};
backToTop();
$(window).on('scroll', function () {
	backToTop();
});
$('#back-to-top').on('click', function (e) {
	e.preventDefault();
	$('html,body').animate({
		scrollTop: 0
	}, 1200);
});
}
</script>
<!--BACK TO TOP-->
	
</body>
</html>