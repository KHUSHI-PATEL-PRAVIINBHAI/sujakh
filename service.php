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
                    <div class="inner-page-title">service</div>
                    <ul class="breadcrumb">
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>    
    
<div class="container">
		<div class="row justify-content-center">
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="gst_registration.php"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_1.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>GST Registration</h5>
                    <p>GST (Goods and Services Tax) is an indirect tax that has replaced many Central and State taxes in India. Every business or individual involved in the supply of goods or services with a turnover exceeding the threshold limit is required to register under GST.</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="gst_filing.php"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_2.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>GST Filing</h5>
                    <p>GST filing is a mandatory process for every GST-registered business in India. It involves submitting regular returns to the government that show details of sales, purchases, tax collected, and input tax credit claimed. Key returns include GSTR-1 (due on the 11th of the next month) for outward supplies and GSTR-3B (due on the 20th of the next month or as per the turnover-based schedule) for monthly tax summary. The annual return GSTR-9 is due by 31st December of the following financial year. Timely and accurate filing helps avoid penalties, ensures compliance, and allows businesses to claim input tax credit properly. Late filing attracts interest and late fees. Proper GST filing is essential for smooth business operations and maintaining trust with tax authorities.</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="income_tax return.php"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_3.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>Income Tax Return</h5>
                    <p>Income Tax Return (ITR) is a form filed by individuals, firms, or companies to report their income, deductions, and tax payments to the Income Tax Department of India. It shows how much income you earned and how much tax you paid or need to pay during a financial year (1st April to 31st March).</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="msme_registration"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_4.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>MSME Registration</h5>
                    <p>MSME (Micro, Small, and Medium Enterprises) Registration, also known as Udyam Registration, is a government initiative to support small and growing businesses in India. It helps businesses avail benefits such as subsidies, low-interest loans, priority in government tenders, protection against delayed payments, and access to various schemes. Businesses are classified as Micro, Small, or Medium based on their investment in plant & machinery and annual turnover. The registration process is online, paperless, and based on Aadhaar and PAN verification. No government fee is charged for registration.</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="company_registration.php"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_5.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>Company Registration</h5>
                    <p>Company Registration is the legal process of incorporating a business as a separate legal entity under the Companies Act, 2013 in India. It gives the business a separate identity from its owners and offers various benefits like limited liability, legal recognition, and ease of raising capital.</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="bookkeeping_outsourcing.php"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_6.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>Book Keeping & Outsourcing</h5>
                    <p>Bookkeeping is the process of systematically recording, organizing, and maintaining financial transactions of a business. It is the foundation of accounting and essential for tracking income, expenses, assets, and liabilities.</p>
                    <p>Outsourcing bookkeeping means hiring external professionals or firms to handle these financial records instead of doing it in-house. It helps businesses save time, reduce costs, and ensure accuracy and compliance.</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>

            
            
            <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="service.php"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_7.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>Company Registration / LLP</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div> -->
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="trademark_registration"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_8.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>Trademark Registration</h5>
                    <p>Trademark registration is a legal process that protects a business’s brand name, logo, slogan, or symbol from being copied or misused by others. It helps in establishing a unique identity for products or services in the market and builds trust among customers. Once registered, the trademark owner gets exclusive rights to use the mark and can take legal action against anyone who uses it without permission. A registered trademark is valid for 10 years and can be renewed indefinitely. To register a trademark, documents like PAN, Aadhaar, logo, and business proof are required.</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="digital_ signaturecertificate.php"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_9.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>Digital Signature Certificates</h5>
                    <p>A Digital Signature Certificate (DSC) is an electronic form of a signature that is used to sign documents digitally. It is issued by certifying authorities and is legally valid under the Information Technology Act, 2000. DSC ensures the authenticity, integrity, and security of digital documents and transactions.</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="import_exportcode.php"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_10.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>Import Export Code</h5>
                    <p>The Import Export Code (IEC) is a 10-digit unique registration number issued by the Director General of Foreign Trade (DGFT). It is mandatory for any business or individual planning to start import or export in India.</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="tds_return.php"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_11.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>TDS Return</h5>
                    <p>TDS Return is a quarterly statement filed by individuals or entities who deduct tax at source while making specific payments like salary, rent, commission, interest, or professional fees. It is a mandatory compliance under the Income Tax Act, 1961 for all deductors having a valid TAN (Tax Deduction and Collection Account Number). The return contains details of the deductor, deductees, amount paid, TDS deducted, and deposited with the government. Timely filing of TDS returns ensures that the deducted tax is correctly reflected in the deductee's Form 26AS, allowing them to claim credit while filing their income tax return. The due dates are 31st July, 31st October, 31st January, and 31st May for each respective quarter of the financial year.</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="project_reportcmadata.php"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_12.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>Project Report / CMA Data</h5>
                    <p>A Project Report is a formal document that outlines a business's goals, operational plans, financial forecasts, and market strategy. It is commonly used for applying for bank loans, government schemes, or presenting a new business idea to investors.
</p> <p>CMA Data (Credit Monitoring Arrangement) is a detailed financial report required by banks and financial institutions to assess the creditworthiness of a business. It includes past financial performance, future projections, and fund requirements to evaluate the company’s ability to repay loans.
</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="pan_card.php"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_13.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>PAN Card</h5>
                    <p>PAN (Permanent Account Number) is a 10-character alphanumeric code issued by the Income Tax Department of India to individuals, companies, and other entities. It is used to uniquely identify taxpayers and track all financial transactions that may attract tax.</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="tan_no.php"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_14.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>TAN No</h5>
                    <p>TAN (Tax Deduction and Collection Account Number) is a 10-digit alphanumeric number issued by the Income Tax Department of India. It is mandatory for all persons or entities who are required to deduct or collect tax at source (TDS/TCS) under the Income Tax Act, 1961.</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="partnership_deed.php"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_15.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>PARTNERSHIP DEED</h5>
                    <p>A Partnership Deed is a written agreement between two or more individuals who agree to carry on a business together and share profits and losses as per the agreed ratio. It defines the roles, rights, duties, and responsibilities of each partner and serves as a legal foundation for the partnership firm. Though registration of the partnership is optional, it is highly recommended for legal protection and smooth functioning.</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="huf_deed.php"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_16.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>HUF DEED</h5>
                    <p>An HUF (Hindu Undivided Family) Deed is a legal document that formally declares the existence of a Hindu Undivided Family under Hindu law. It is created mainly for the purpose of claiming separate income tax benefits and managing ancestral or joint family property. The Karta (usually the eldest male member) manages the HUF, and income earned by the HUF is assessed separately under the Income Tax Act, 1961. Forming an HUF is useful for tax planning, asset management, and preserving family wealth.</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-left">
                <a href="finalization_booksaccounts.php"><div class="services-box">
                  
                    <ul>
                    <li>
                    <div class="services-box-icon"><img src="images/icon_17.png" class="img-fluid"></div>
                    <div class="services-box-info">
                    <h5>Finalization Of Books Of Accounts</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                    <button class="services-btn">read more <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    </li>     
                    </ul>                     
                  
               </div></a>
            </div>

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