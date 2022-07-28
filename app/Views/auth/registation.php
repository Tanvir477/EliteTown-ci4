
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registation</title>
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>"/>
    
</head>
<body>
    <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="img/logo2.png" width="100px">
            </div>
                <nav >
                    <ul>
                        <li><a href="login.php">Log in</a></li>
                    </ul>
                </nav>
                
        
        
        </div>
    </div>
    </div>
<!-- ---------------registation ---------------->
<div class="account-page">
<div class="login-form">
            <div class="row">
              
                <div class="col-5">
                    <div class="form-container">
                        <div>
                            <h1>Welcome To EliteTown!! <br> Please Registation</h1>  
                        </div>
                        <form method="post" action=<?=base_url()."/userinfo/user_save";?> >
                            <p>Email</p><input type="text" name='uid' placeholder="Username"required >
                        <br>
                            <p>Fastname</p><input type="text" name='fname' placeholder="Password"required>
                            <br>
                            <p>secondname</p><input type="text" name='lname' placeholder="Gender"required>
                            <br>
                            <p>dateofbirth</p><input type="date" name='dob'>
                         <br>
                         <p>sex</p><input type="text" name='gender' placeholder="Male/FEmale"required>
                            <br>
                            <button type="submit" class="btn" value="registation">Sign Up</button>
                      
                         </form>
                    </div>

                </div>
                    

            </div>

</div>

<!-- *********** Footer ********** -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Anfroid and ios Mobile phone</p>
                <div class="app-logo">
                    <img src="img/playstore.png">
                    <img src="img/app (2).png">

                </div>
            </div>
            <div class="footer-col-2">
                <img src="img/logo1.png">
                <p>Our Purpose Is to Sustainably Make the pleasure and Benefits of clogth accessible to the many</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Instagram</li>
                    <li>Twitter</li>
                    <li>Youtube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2020-EliteTown</p>
    </div>
</div>



</body>
</html>