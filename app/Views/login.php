<!DOCTYPE html>
<html lang="en">

<head>
    <title>Account</title>
    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css');?>"/>
     
</head>
<body>

    <div class="account-page">
        <div class="login-form">
            <div class="row">
                <div>

                </div>
               
                <div class="col-5">
                    <div class="form-container">
                        <div>
                            <h1>Welcome To Login System!! <br> Please Login</h1>  
                        </div>
                        <form method="post" action="login1" >
                            <p>Username</p><input type="text" name="uname" placeholder="Username"  required>
                        <br/>
                            <p>Password</p><input type="password" name="pass" placeholder="Password" required>
                         <br/>
                            <button type="submit" class="btn" >Log in</button>
                        <br/>
                            <a href="">Forgot password</a>
                        <br/>
                            <a href="registation.php"> Create a Account</a>
                         </form>
                    </div>

                </div>
                <div></div>
                    

            </div>
 
                    
               
         </div>
    

     </div>



</body>
</html>