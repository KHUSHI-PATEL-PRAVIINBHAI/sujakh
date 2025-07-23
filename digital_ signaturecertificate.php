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
                    <div class="inner-page-title">Digital Signature Certificate (DSC) </div>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Digital Signature Certificate (DSC) </li>
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
        <i class="fa-solid fa-file-signature"></i>
        <h1>Digital Signature Certificate (DSC) </h1>
      </div>

      <!-- Intro Text -->
 
<p> A <strong> Digital Signature Certificate (DSC) </strong> is an electronic form of a signature that is used to sign documents digitally. It is issued by <strong>certifying authorities</strong> and is legally valid under the <strong> Information Technology Act, 2000.</strong> DSC ensures the <strong> authenticity, integrity, and security </strong> of digital documents and transactions. </P>
     

      <!--Uses of DSC:  -->
      <h2 class="_section-title"><i class="fas fa-file-signature"></i> Uses of DSC: </h2>
      <ul class="_checklist">
        <li>Filing Income Tax Returns (ITR) </li>
        <li>Filing GST Returns</li>
        <li>Company and LLP ROC filings (MCA)</li>
        <li>E-Tendering and E-Procurement</li>
        <li>Signing PDF documents and contracts online</li>
      </ul>


      <!-- Types of DSC:  -->
      <h2 class="_section-title"><i class="fa-solid fa-folder-tree"></i> Types of DSC: </h2>
      <ul class="_checklist">
        <li>Class 3 DSC  Used for e-tenders, MCA, GST, and high-security transactions </li>
        <li>Valid for 1 to 3 years</li>
    
      </ul>


       <!--Documents Required:  -->
      <h2 class="_section-title"><i class="fa-solid fa-file-circle-check"></i> Documents Required: </h2>
      <ul class="_checklist">
        <li>PAN Card </li>
        <li>Aadhaar Card</li>
        <li>Passport-size photo</li>
        <li>Email ID & Mobile number</li>
        <li>Video & OTP verification (as per provider)</li>
      </ul>
     

      <!-- CTA Button -->
      <a href="contact_us.php" class="_button">Apply for Digital Signature Certificate</a> 

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