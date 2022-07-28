<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css');?>"/>
</head>
<body>
<section>
    <?php //session message
    if(session()->getFlashdata('status'))
    {
        echo"<h1>".session()->getFlashdata('status')."</h1>";
    }
    ?>
    <div class="container">
        <table class="table">
            <!-- Table heading -->
        <thead>
            <th>User</th>
            <th>Email</th>
            <th>Password</th>
            
        </thead>
        <tbody>
            <?php foreach ($user as $u){ ?>
                <tr>
                    <td><?= $u['uname'];?></td>
                    <td><?= $u['email'];?></td>
                    <td><?= $u['upass'];?></td>
                                    
                </tr>

            <?php } ?>
            </tbody>
        </table>
        
        
    </div>

</section>
    
    
</body>
</html>