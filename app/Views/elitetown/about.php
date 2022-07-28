<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>who we are</title>
    <link rel="stylesheet" href="<?php echo base_url('elitetownCSS/stylee.css');?>"/> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
   
<section id="header">
        <a href="#"><img src="<?php echo base_url('images/img/logo4.png'); ?>" width="140px" height="40px" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a  href="<?php echo base_url('elitetowncon/home');?>">Home</a></li>
                <li><a  href="<?php echo base_url('elitetowncon/store');?>">Shop</a></li>
                <!-- <li><a  href="blog.php">Blog</a></li> -->
                <li><a class="active" href="<?php echo base_url('elitetowncon/apropos');?>">About</a></li>
                <li><a href="<?php echo base_url('elitetowncon/get_touch');?>">Contact</a></li>
                <li><a href="<?php echo base_url('elitetowncon/signin_signout');?>">Account</a></li>
                <li id="lg-bag"><a href="<?php echo base_url('elitetowncon/bag');?>"><i class="fal fa-shopping-bag"></i></a></li> 
                <a href="#" id="close"><i class="far fa-times"></i></a>    
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fal fa-shopping-bag"></i></a> 
            <i id="bar" class="fas fa-outdent" ></i>
           
        </div>
    </section>

    <section id="page-header" class="about-header">
        
        <h2>#KnowUs</h2>
        
        <p>Lorem Ipsum is simply dummy text of the printing!</p>
    </section>

    <section id="about-head" class="selection-p1">
        <img src="<?php echo base_url('images/img/about/a6.jpg'); ?>">
        <div>
            <h2>Who We Are?</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <abbr title="" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</abbr>
            </br></br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</marquee>
        </div>

    </section>

    <section id="about-app" class="selection-p1">
        <h1>Download Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="<?php echo base_url('images/img/about/1.mp4'); ?>"></video>
        </div>
    </section>

    <section id="feature" class="selection-p1">
        <div class="fe-box">
            <img src="<?php echo base_url('images/img/features/f1.png'); ?>"/>
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="<?php echo base_url('images/img/features/f2.png'); ?>"/>
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="<?php echo base_url('images/img/features/f3.png'); ?>"/>
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="<?php echo base_url('images/img/features/f4.png'); ?>"/>
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="<?php echo base_url('images/img/features/f5.png'); ?>"/>
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="<?php echo base_url('images/img/features/f6.png'); ?>"s/>
            <h6>F24/7 Support</h6>
        </div>
        

    </section>

    <section id="newslatter" class="selection-p1 selection-m1">
        <div class="newstext">
            <h4>Sign Up Foe Newslatter</h4>
            <p>Get E-mail updates about out latest shop and <span> Spicial offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your Email Address">
            <button class="normal">Sign Up</button>
        </div>
    </section>


    <footer class="selection-p1">
        <div class="col">
            <img class="logo" src="<?php echo base_url('images/img/logo4.png'); ?>"width="140px" height="40px" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 562 Wellington Road, Street 32, San Francisco</p>
            <p><strong>Phone:</strong> +8801786595441</p>
            <p><strong>Hours:</strong> 10:00am-10.00pm</p>
            

            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>      
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivary Information</a>
            <a href="#">Privacy Information</a>
            <a href="#">Terms & Condition</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Goolgle Play</p>
            <div class="row">
                <img src="<?php echo base_url('images/img/pay/app.jpg'); ?>" alt="">
                <img src="<?php echo base_url('images/img/pay/play.jpg'); ?>" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="<?php echo base_url('images/img/pay/pay.png'); ?>">
        </div>
        <div class="copyright">
            <p>© 2021, Tech2etc - HTML CSS Ecommerce Template</p>
        </div>
    </footer>

    <script src="home_script.js"></script>
</body>
</html>