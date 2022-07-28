<?php
$uname=$_POST['uname'];
$pass=$_POST['pass'];

if($uname=="Tanvir" && $pass=="tanvir123" || $uname=="Tanvir1" && $pass=="tanvir124"){
    echo "<h1>User Name:-  $uname<br></h1>";
    echo "<h1>Password:-  $pass</h1>:";

}
else{
    echo '<h1>Login fail</h1>';
}
?>