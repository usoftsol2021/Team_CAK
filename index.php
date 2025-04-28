<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CAK</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green - v4.9.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!--<script src="//code.jivosite.com/widget/4MaAOtePq3" async></script>-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
 function capsa()
{
	//alert("hi");
var oid=$("#name").val();
var cid=$("#phone").val();	
var psa=$("#email").val();
//alert(psa);
var mval="Message From "+oid;
var mss=$("#message").val();
if(oid=="" || cid=="" || psa=="" || mval=="" || mss=="")
{
$("#error-message").html("<font size=4 color=Red>All Field Mendetory</font>");
}
else
{
var dataString = 'oid='+oid+'&cid='+cid+'&psa='+psa+'&mval='+mval+'&mass='+mss;
//alert(dataString);	

 $.ajax({
    type: "POST",
            url: "sendmail.php",
            data: dataString,
           /* beforeSend: function () {
             alert("wait sending request");
            },*/
            success: function (result){
			//alert(result);	
            
            if (result == 1){
            //alert(msg.RESPONSE);
			$("#sent-message").html("<font size=4 color=green>Thanks for contact us and our Representative will contact you soon</font>");
			//$("#oncl").hide();   
			//$("#psa").hide();   
			//location.reload();
            }
            else
            {
			//alert(msg.RESPONSE);	
			$("#error-message").html("<font size=4 color=red>Message could not be sent</font>");
			 
			 
            }
            
            //alert(result);

            }
    });  //end of ajax





} 

}

</script> 
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center" style="background-color:#F76E11;color:white;font-size: 18px">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com" style="color:white;font-size: 18px">support@chalaakhrakhora.in</a>
       <i class="bi bi-phone-fill phone-icon"></i> +91 8002187655, 9304946611
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center" style="height:150px">
    <div class="container d-flex align-items-center" style="color:white;font-size: 18px;height:150px" >
    
    <a href="index.php" ><img src="images/nlck.jpg"  class="img-fluid" style="height:100px; width:200px"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar" style="color:white;font-size: 18px">
        <ul>
          <li ><a class="nav-link scrollto active" href="#hero" style="font-size: 22px">Home</a></li>
          <li ><a class="nav-link scrollto" href="#about" style="font-size: 22px">About</a></li>
          <li ><a class="nav-link scrollto" href="#services" style="font-size: 22px">Products</a></li>
       
          <!--<li><a class="nav-link scrollto" href="#team">Team</a></li>-->
          <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
          <li><a class="nav-link scrollto" href="#contact" style="font-size: 22px">Contact</a></li>
		     <li><a class="nav-link scrollto " href="admin/" style="font-size: 22px">Login</a></li>
		<li><a class="nav-link scrollto " href="os" style="font-size: 22px">Product</a></li>
          <li><a class="getstarted scrollto" href="#about" style="font-size: 22px">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" style="height:600px">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/ws1.webp)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Chala Akhara Khorha</span></h2>
              <p class="animate__animated animate__fadeInUp">Chala Akhara Khorha, also known as CAK.CAK was formed to create sustainable livelihood opportunities in the rural and urban areas based on Handloom, Handicraft and other allied activities.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/ws2.webp)">
          <div class="carousel-container">
            <div class="container">
             <!-- <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>-->
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(images/hm.jpg)">
          <div class="carousel-container">
            <div class="container">
              <!--<h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>-->
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
 <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
             <img src="images/hm3.jpg" style="height:250px;width:400px">
          </div>
		  </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
             <img src="images/hm2.jpg" style="height:250px;width:400px">
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
             <img src="images/hm.jpg" style="height:250px;width:400px">
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Services Section -->
   <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Products</h2>
          <p style="font-size: 18px;text-align:justify"></p>

        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <img src="images/p1.jpg" style="height:250px;width:400px">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
             <img src="images/p2.jpg" style="height:250px;width:400px">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
             <img src="images/p3.jpg" style="height:250px;width:400px">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
            <img src="images/p4.jpg" style="height:250px;width:400px">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
             <img src="images/p5.jpg" style="height:250px;width:400px">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
             <img src="images/p6.jpg" style="height:250px;width:400px">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p style="font-size: 20px;text-align:justify">Chala Akhara Khorha, also known as CAK.CAK was formed to create sustainable livelihood opportunities in the rural and urban areas based on Handloom, Handicraft and other allied activities.CAK was started as an organisation to create new opportunities in rural & Urban areas with an objective to change lives throughout the Country.It was formed to provide aggressive marketing to the merchandise made by the rural artists.</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="images/3.jpeg" style="height:300px;width:100%" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>WELCOME TO CHALA AKHARA KHORHA</h3>
            <p class="fst-italic" style="font-size: 18px;text-align:justify">
              We are an India based company. We are a group of people who have handy knowledge and experience in the alternative Craft industry having been in this sector since a handful number of years now and have managed to stick around because of our keen interest towards Crafts and its inexorable advantages over the society. We are looking for entrepreneurs who are willing to something innovative and something that is very fresh, new and important knowing how working with us will eventually lead you to an industry that is going to contribute towards the development of our country and hold a big role in changing the Indian economy as one of the biggest economies of the world. 
            </p>
          
          </div>
        </div>
         <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="images/2.jpeg" style="height:300px;width:100%" class="img-fluid" alt="">
			<img src="images/5.jpeg" style="height:300px;width:100%" class="img-fluid" alt="">
          </div>
		 
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>OUR VISION</h3>
            <p class="fst-italic" style="font-size: 18px;text-align:justify">
              With the mission of "Creating Business and Changing Lives of Pepole", CAK is viewed as the supporting unit to the country, contributing maximum to its social, economical, and cultural uplift, rise and growth.

<br><b>Our vision associated to the organisation focuses on the following :</b>
<br><br><b>1.EMPLOYMENT GENERATION </b>
<p class="fst-italic" style="font-size: 18px;text-align:justify"> Our vision expands towards fulfilling cumulative dreams through creation of sustainable livelihood models based on sericulture, handloom and handicrafts.

Through maximum utilisation of natural resources and labour power available in the rural areas of the state, CAK aims to provide each hand its value and add to employment and income generation.

CAK provides support to promote handicrafts, handloom, Woodcrafts, Bamboo-works, Dhokra-art, Terracotta products, Lac bangles, Cotton handloom, Applique work, Zardozi work and various other forms of human art.</p>
            
			<br><b>2.PEPOLE EMPOWERMENT </b>
<p class="fst-italic" style="font-size: 18px;text-align:justify"> Pepole have the power to give life and CAK believes that she is naturally empowered to change lives as well.

Through CAK each pepole earns around Rs. 10000/- to Rs. 50000/- per month which enables them to look well after their family, educate their children, and contribute to the betterment of the family and society..</p>
            
			</p>
          
          </div>
        </div>
		
      </div>
    </section><!-- End About Us Section -->

   

   

    <!-- ======= Cta Section ======= -->
    <!--<section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section>--><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <!--<section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!--<section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
         <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      -- </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets\img\team\t2.jpeg" alt="">
              <h4>Shailendra Singh</h4>
              <span>Chief Founder</span>
              <p>
                <!--Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p>--
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="" alt="">
              <h4>Prakhar Lal</h4>
              <span>CFO</span>
             <!-- <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>--
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="" alt="">
              <h4>Rakesh Kumar</h4>
              <span>Regional Director</span>
              <p>
                <!--Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>--
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
       --> </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Hehal Pawa Toli , Near HP Gas Godown Itki Road Ranchi, Pin No- 834006 (JHARKHAND)</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>support@chalaakhrakhora.in</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 8002187655, 9304946611 </p>
              </div>

              <iframe src="https://maps.google.com/maps?q=%20Hehal%20Pawa%20Toli%20,Ranchi%20-834006&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="#" method="post" role="form" class="php-email-form" id="contact-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Phone</label>
                <input type="number" class="form-control" id="phone" name="phone"  required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" id="message" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
               <!-- <div class="loading">Loading</div>-->
                <div id="error-message" ></div>
                <div id="sent-message" ></div>
              </div>
              <div class="text-center"><button type="submit"  onclick="javascript:capsa();">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <!--<h3>Green</h3>-->
      <!--<p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>-->
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>CHALA AKHARA KHORHA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      
        Designed by <a href="#">Chala Akhara Khorha</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>