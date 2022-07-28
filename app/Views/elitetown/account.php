<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.5.0/css/glide.theme.css">
    <!-- style sheet -->
    <link rel="stylesheet" href="<?php echo base_url('elitetownCSS/stylee.css');?>"/> 
    <!-- <link rel="stylesheet" href="slider.css"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
  <section id="header">
        <a href="#"><img src="<?php echo base_url('images/img/logo4.png'); ?>" width="140px" height="40px" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="<?php echo base_url('elitetowncon/home');?>">Home</a></li>
                <li><a  href="<?php echo base_url('elitetowncon/store');?>">Shop</a></li>
                <!-- <li><a  href="blog.php">Blog</a></li> -->
                <li><a href="<?php echo base_url('elitetowncon/apropos');?>">About</a></li>
                <li><a href="<?php echo base_url('elitetowncon/get_touch');?>">Contact</a></li>
                <li><a class="active" href="<?php echo base_url('elitetowncon/signin_signout');?>">Account</a></li>
                <li id="lg-bag"><a href="<?php echo base_url('elitetowncon/bag');?>"><i class="fal fa-shopping-bag"></i></a></li> 
                <a href="#" id="close"><i class="far fa-times"></i></a>    
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fal fa-shopping-bag"></i></a> 
            <i id="bar" class="fas fa-outdent" ></i>
           
        </div>
    </section>

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action=<?=base_url()."/elitetowncon/login_check";?> method="post" class="sign-in-form">
            <h2 class="title" >Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="upass" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn2 solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="<?=base_url()."/elitetowncon/user_save";?>" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="uname" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="upass"  placeholder="Password" />
            </div>
            <input type="submit" class="btn2" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn2 transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="<?php echo base_url('images/log.svg'); ?>" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn2 transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="<?php echo base_url('images/register.svg'); ?>" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="<?php echo base_url('elitetownJS/app.js');?>"></script>
  </body>
</html>
