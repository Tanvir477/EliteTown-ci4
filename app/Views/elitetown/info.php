<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('elitetownCSS/stylee.css');?>"/> 
</head>
<body>
<section>
    <?php //session message
    if(session()->getFlashdata('status'))
    {
        echo"<h1>".session()->getFlashdata('status')."</h1>";
    }
    ?>
    <h1 style="text-align: center;">Data inserted Successfully</h>
    <form action=<?=base_url()."/elitetowncon/signin_signout";?> method="post" class="sign-in-form">
    <input type="submit" value="sign in" class="btn2" />
    </form>
    
   
        
          
    

</section>
    
    
</body>
</html>