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
                    <div class="inner-page-title">GST Registration</div>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">GST Registration</li>
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
        <h1>GST Registration</h1>
      </div>

      <!-- Intro Text -->
      <p>
        GST (Goods and Services Tax) is an indirect tax that has replaced many Central and State taxes in India. Every business or individual involved in the supply of goods or services with a turnover exceeding the threshold limit is required to register under GST.
      </p>

      <!-- Threshold -->
      <h2 class="_section-title"><i class="fas fa-chart-line"></i> Threshold Limit</h2>
      <ul class="_checklist">
        <li>₹40 lakhs for goods (₹20 lakhs in special category states)</li>
        <li>₹20 lakhs for services (₹10 lakhs in special category states)</li>
      </ul>

      <!-- Key Features -->
      <h2 class="_section-title"><i class="fas fa-star"></i> Key Features: </h2>
      <ul class="_checklist">
        <li>One Nation, One Tax</li>
        <li>Mandatory for e-commerce sellers and inter-state suppliers</li>
        <li>GSTIN – 15-digit unique number</li>
        <li>Enables collection and utilization of Input Tax Credit (ITC)</li>
        <li>Penalty for non-registration</li>
      </ul>

      <!-- Required Documents -->
      <h2 class="_section-title"><i class="fa-solid fa-file-circle-check"></i> Documents Required for GST Registration </h2>
      <div class="_card-list">

        <div class="_doc-card">
          <h3> Proprietorship:</h3>
          <ul class="_checklist">
            <li> PAN Card of proprietor</li>
            <li> Aadhar Card of proprietor</li>
            <li> Passport size photo</li>
            <li>Business address proof (Index copy, municipal Tax Bill, electricity bill/rent agreement)</li>
            <li> Bank account details (cancelled cheque/passbook copy)</li>
          </ul>
        </div>

        <div class="_doc-card">
          <h3>Partnership Firm:</h3>
          <ul class="_checklist">
            <li> PAN Card of firm</li>
            <li> Partnership deed</li>
            <li> PAN & Aadhar of partners</li>
            <li> Passport size photos</li>
            <li> Address proof of business (Index copy, municipal Tax Bill, electricity bill /rent agreement)</li>
           <li> Bank details</li>
            <li> Authorization letter</li>
          </ul>
        </div>

        <div class="_doc-card">
          <h3> Private Limited Company / LLP:</h3>
          <ul class="_checklist">
            <li> PAN of company</li>
            <li> Certificate of Incorporation</li>
            <li> Memorandum & Articles of Association (MOA & AOA)</li>
            <li> PAN & Aadhar of directors</li>
            <li> Passport size photos</li>
            <li> Board resolution or authorization letter</li>
            <li> Business address proof (Index copy, municipal Tax Bill, electricity bill , rent agreement)</li>
            <li> Bank account details</li>
          </ul>
        </div>

        <div class="_doc-card">
          <h3>Common for All</h3>
          <ul class="_checklist" >
            <li> Valid email ID & mobile number</li>
            <li> Digital Signature Certificate (DSC) for companies/LLPs</li>
            <li> Rent Agreement/NOC (if rented)</li>
          </ul>
        </div>

      </div>

      <!-- CTA Button -->
      <a href="contact_us.php" class="_button">Apply for GST Registration</a>

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