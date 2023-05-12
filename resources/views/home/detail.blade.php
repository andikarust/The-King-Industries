<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<title>The King Industries</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">

<!-- Favicons -->
<link href="img/crowne.png" rel="icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700,900"
    rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="/assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="/assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
<link href="/assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="/assets/css/styledetail.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>

</style>

</head>

<body>
    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container-fluid">

            <div id="logo" class="pull-left">
                <!-- <h1><img src="img/crowne.png" alt=""><a href="#intro" class="scrollto">THE KING INDUSTRIES</a></h2> -->

                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="#intro"><img src="/assets/img/crowne.png" alt="" title="" /></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="./#intro">Home</a></li>
                    <li><a href="./#about">About Us</a></li>
                    <li><a href="./#services">Services</a></li>
                    <li><a href="portfolio">Portfolio</a></li>
                    <li><a href="./#clients">Clients</a></li>
                    <li><a href="prices">Prices</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Detail Product
  ============================-->
    <section id="detail" class="container my-5 pt-5">
        <header class="section-header mt-2">
                <h3>Almamater 1</h3>
            </header>
        <div class="row mt-3">
            <div class="col-lg-6 col-md-12 col-12">
                <img class="img-fluid w-100 pb-3" src="/assets/img/bag.jpg" id="MainImg" alt="">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="/assets/img/bag.jpg" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="/assets/img/team2.jpg" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="/assets/img/team1.jpg" class="small-img" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-12">
                <center><h4>Project Details</h4></center>
                <hr>
                <span><strong>Client : HMTG GEA ITB </strong></span><br>
                <span><strong>Year : 2022 </strong></span><br>
                <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque aliquam voluptatum consectetur vitae nemo, velit expedita dolore, delectus dolorem numquam vel id, fugit dolorum consequuntur doloremque a. Quas, assumenda harum amet possimus deserunt perferendis doloremque repellat.</span>
            </div>
        </div>
    </section>


    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                2023 &copy; Copyright <strong>The King Industries</strong>. All Rights Reserved
            </div>
        </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="/assets/lib/jquery/jquery.min.js"></script>
    <script src="/assets/lib/jquery/jquery-migrate.min.js"></script>
    <script src="/assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/lib/easing/easing.min.js"></script>
    <script src="/assets/lib/superfish/hoverIntent.js"></script>
    <script src="/assets/lib/superfish/superfish.min.js"></script>
    <script src="/assets/lib/wow/wow.min.js"></script>
    <script src="/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets/lib/counterup/counterup.min.js"></script>
    <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/lib/lightbox/js/lightbox.min.js"></script>
    <script src="/assets/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- <script src="lib/aos/aos.js"></script> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Template Main Javascript File -->
    <script src="/assets/js/main.js"></script>

    <script>
        var MainImg = document.getElementById('MainImg');
        var smallimg = document.getElementsByClassName('small-img');

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
    </script>

</body>

</html>