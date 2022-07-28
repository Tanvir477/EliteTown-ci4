<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EliteTown-Home</title>
    <!-- glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/css/glide.theme.css">
    <!-- style sheet -->
    <link rel="stylesheet" href="<?php echo base_url('elitetownCSS/stylee.css');?>"/> 
    <!-- <link rel="stylesheet" href="slider.css"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
   
    <section id="header">
        <a href="#"><img src="<?php echo base_url('images/img/logo4.png'); ?>" width="140px" height="40px" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="<?php echo base_url('elitetowncon/home');?>">Home</a></li>
                <li><a  href="<?php echo base_url('elitetowncon/store');?>">Shop</a></li>
                <!-- <li><a  href="blog.php">Blog</a></li> -->
                <li><a href="<?php echo base_url('elitetowncon/apropos');?>">About</a></li>
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

    <section class="hero1">
            
                <div class="glide" id="glide_1">
                  <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                      <li class="glide__slide">
                        <div class="center">
                          <div class="left">
                            <h4>Trade-in-offer</h4>
                            <h2>Super value deals</h2>
                            <h1>On all products</h1>
                            <p>Save more with coupons & up to 70% off!</p>
                            <button href="#" class="hero-btn1">SHOP NOW</button>
                          </div>
                          <div class="right">
                              <img class="img1" src="<?php echo base_url('images/img/banner/hero-3.png'); ?>" alt="">
                          </div>
                        </div>
                      </li>
                      <li class="glide__slide">
                        <div class="center">
                          <div class="left">
                            <h4>New Arrival</h4>
                            <h2>Winter Collection</h2>
                            <h1>New Morden Design</h1>
                            <p>Save more with coupons & up to 70% off!</p>
                            <button href="#" class="hero-btn2">SHOP NOW</button>
                          </div>
                          <div class="right">
                            <img class="img2" src="<?php echo base_url('images/img/banner/hero-4.png'); ?>" alt="">
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
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

    <section id="product1" class="selection-p1">
        <h2>Featured Products</h2>
        <P>Summer Collection New Morden Design</P>
        <div class="pro-container">
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/f1.png'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/2.png'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/3.png'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/4.jpg'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/5.jpeg'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/6.jpeg'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/7.jpeg'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/8.jpeg'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>

    <section id="banner"  class="selection-m1">
        <h4>Repair Service</h4>
        <h2>Up to <span>70% off</span> - All t-shirt & Accessories</h2>
        <button class="normal">Expore More</button>
    </section>

    <section id="product1" class="selection-p1">
        <h2>New Arrival</h2>
        <P>Summer Collection New Morden Design</P>
        <div class="pro-container">
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/n1.jpg'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/n2.jpg'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/n3.jpg'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/n4.jpg'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/n5.jpg'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/n6.jpg'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/n7.jpg'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="<?php echo base_url('images/img/products/n8.jpg'); ?>">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>

    <section id="sm-banner" class="selection-p1">
        <div class="banner-box">
      <h4>crazy deals</h4>
      <h2>buy 1 get 1 free</h2>
      <span>The best classic dress is on sale at cara</span>
      <button class="white">Learn More</button>
        </div>  
        <div class="banner-box banner-box2">
      <h4>spring/summer</h4>
      <h2>upcoming season</h2>
      <span>The best classic dress is on sale at cara</span>
      <button class="white">Collection</button>
        </div>  
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASON SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring/Summer 2022</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRT</h2>
            <h3>New Trendy Prints</h3>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/glide.js"></script>
    <script src="<?php echo base_url('elitetownJS/script.js');?>"></script>
    <script src="<?php echo base_url('elitetownJS/slider.js');?>"></script>
    
</body>
</html>