
<header id="header">
    
<a href="#"><img src="<?php echo base_url('images/img/logo4.png'); ?>" width="140px" height="40px" alt=""></a>

    
    <ul id="navbar">
    <li><a href="<?php echo base_url('elitetowncon/home');?>">Home</a></li>
                <li><a href="<?php echo base_url('elitetowncon/store');?>">Shop</a></li>
                <!-- <li><a  href="blog.php">Blog</a></li> -->
                <li><a href="<?php echo base_url('elitetowncon/apropos');?>">About</a></li>
                <li><a href="<?php echo base_url('elitetowncon/get_touch');?>">Contact</a></li>
                <li><a href="<?php echo base_url('elitetowncon/signin_signout');?>">Account</a></li>
        <li id="lg-bag"><a href="<?php echo base_url('elitetowncon/bag');?>" class="active"><i class="fal fa-shopping-bag"></i></a>
        <?php

if (isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
}else{
    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
}

 ?></li> 
          
    
    </ul>
  

    </nav>
    
</header>






