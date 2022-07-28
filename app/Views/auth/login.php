<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css');?>"/>
</head>
<body>
    
    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4">
                <h4>Sign In</h4><hr>
                <form action= <?=base_url()."/public/authentication/auth_process"; ?> method="post">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="uname" placeholder="enter your username">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="upass" placeholder="enter your password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>