<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css');?>"/>
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
            <th>User ID</th>
            <th>First Name</th><th>Last Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
        </thead>
        <tbody>
            <?php foreach ($user as $u){ ?>
                <tr>
                    <td><?= $u['uid'];?></td>
                    <td><?= $u['fname'];?></td>
                    <td><?= $u['lname'];?></td>
                    <td><?= $u['dob'];?></td>
                    <td><?= $u['gender'];?></td>                   
                </tr>

            <?php } ?>
            </tbody>
        </table>
        
        
    </div>

</section>
    
    
</body>
</html>