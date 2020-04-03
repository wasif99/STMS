<?php 
session_start();

include('connection_db.php');
if(isset($_GET["notf"]))
{
	$n_id = $_GET["notf"];
	$connection->query("update notification set notify='0' where id='$n_id'");
	header("Location:show_notification.php");
}
$data = $connection->query("select * from notification");
$new_data = $connection->query("select * from notification where notify='1'");
$count =  mysqli_num_rows($new_data);



?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>STMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"/>
    <meta name="keywords" content="Fashion Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
        <link href="Style/css/Stylenav.css" rel="stylesheet" type="text/css" media="all" />
     <!--Custom Theme files -->
    <link href="Style/css/faq.css" rel="stylesheet" type="text/css" media="all" />
    <link href="Style/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- shop css -->
    <link href="Style/css/shop.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="Style/css/owl.carousel.min.css">
    <!-- Owl-Carousel-CSS -->
    <link href="Style/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="Style/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="Style/css/checkout.css" type="text/css" rel="stylesheet" media="all"> 
    <link rel="stylesheet" href="Style/css/easy-responsive-tabs.css" type="text/css" media="all" />

    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body class="container">
    <!-- header -->
    <header>
        
            <!-- top nav -->
            <nav class="top_nav d-flex pt-3 pb-1">
                <!-- logo -->
                <h1 style="font-weight:bolder">
                    <a class="navbar-brand" href="Index.php">Smart <span style="color:#000">T</span>raffic <span style="color:#000">M</span>anagement <span style="color:#000">S</span>ystem</a>
                </h1>
                <!-- //logo -->
                <div class="w3ls_right_nav ml-auto d-flex">
                    <div class="nav-icon d-flex">
                     
                     <?php 
					 	if(isset($_SESSION["fn"]))
						{
							?>
                            <a class="text-dark login_btn align-self-center mx-3" href="Logout.php" title="Please LogOut">
                            <i class="fa fa-sign-out-alt"><?php echo $_SESSION["fn"].'&nbsp;'.$_SESSION["ln"]?></i>
                        </a>
                            <?php
						}
					 
					 ?>
                     
                     <?php 
					 	if(!isset($_SESSION["fn"]))
						{
							?>
                            <a class="text-dark login_btn align-self-center mx-3" href="Login.php" title="Please LogIn">
                            <i class="far fa fa-user"> LogIn</i>
                        </a>
                            <?php
						}
					 
					 ?>
                    </div>
                </div>
            </nav>
            <!-- //top nav -->
            <!-- bottom nav -->
            <nav class="navbar navbar-expand-lg navbar-light justify-content-center fill">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-center">
                        
                        <li class="nav-item">
                            <a href="Index.php">Home</a>
                        </li>
                        
                        <?php 
					 	if(isset($_SESSION["fn"]))
						{
							?>
                            
                        <li class="nav-item">
                            <a href="complain.php">Complaint</a>
                        </li>
                        <li class="nav-item">
                            <a href="emergency_help.php">Emergency Help</a>
                        </li>
                        <li class="nav-item">
                            <a href="feedback.php">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a href="show_notification.php" >Notification  <span style="color:crimson"><?php 
  if($count > 0){echo "(".$count.")";}?></span></a>
                        </li>

                            <?php
						}
					 
					 ?>

						
						<?php 
					 	if(!isset($_SESSION["fn"]))
						{
							?>
                           
                        <li class="nav-item">
                            <a href="Login.php?page=<?php echo 'complain.php'?>">Complaint</a>
                        </li>
                        <li class="nav-item">
                            <a href="Login.php?page=<?php echo 'emergency_help.php'?>">Emergency Help</a>
                        </li>
                        <li class="nav-item">
                            <a href="Login.php?page=<?php echo 'feedback.php'?>">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a href="Login.php?page=<?php echo 'show_notification.php'?>">Notification <span><?php 
  if($count > 0){echo "(".$count.")";}?></span></span></a>
                        </li>

                            <?php
						}
					 
					 ?>
                    </ul>
                </div>
            </nav>
            <!-- //bottom nav -->
       
        <!-- //header container -->
    </header>
    <!-- //header -->
    <!-- about -->
    <div class="row no-gutters pb-5">
        <div class="col-sm-4">
            <div class="hovereffect">
                <img class="img-fluid" src="images/a1." alt="">
                <div class="overlay">
                    <h5>women's fashion</h5>
                    <a class="info" href="women.html">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="hovereffect">
                <img class="img-fluid" src="images/a2.jpg" alt="">
                <div class="overlay">
                    <h5>men's fashion</h5>
                    <a class="info" href="men.html">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="hovereffect">
                <img class="img-fluid" src="images/a3.jpg" alt="">
                <div class="overlay">
                    <h5>kid's fashion</h5>
                    <a class="info" href="girls.html">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //about -->
    
    
   
    
    <!-- js -->
    <script src="Style/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for show signin and signup modal -->
    <script>
        $(document).ready(function () {
            $("#myModal_btn").modal();
        });
    </script>
    <!-- //script for show signin and signup modal -->
    <!-- smooth dropdown -->
    <script>
        $(document).ready(function () {
            $('ul li.dropdown').hover(function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
            }, function () {
                $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
            });
        });
    </script>
    <!-- //smooth dropdown -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- Banner Responsiveslides -->
    <script src="Style/js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: false,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- // Banner Responsiveslides -->
    <!-- Product slider Owl-Carousel-JavaScript -->
    <script src="Style/js/owl.carousel.js"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: false,
            margin: 10,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            responsive: {
                320: {
                    items: 1,
                },
                568: {
                    items: 2,
                },
                991: {
                    items: 3,
                },
                1050: {
                    items: 4
                }
            }
        });
    </script>
    <!-- //Product slider Owl-Carousel-JavaScript -->
    <!-- cart-js -->
    <script src="Style/js/minicart.js">
    </script>
    <script>
        hub.render();

        hub.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- start-smooth-scrolling -->
    <script src="Style/js/move-top.js"></script>
    <script src="Style/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="Style/js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Style/js/bootstrap.js"></script>
</body>

</html>