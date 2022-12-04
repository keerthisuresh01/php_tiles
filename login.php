<?php 

$host="localhost";
$user="root";
$password="";
$dbname="tiles";

// mysql_connect($host,$user,$password);
// mysql_select_db($dbname);
$conn = new mysqli ($host, $user, $password, $dbname);
if(!$conn){
    die('could connect' .mysql_error());
}

if(isset($_POST['uname1'])){
    $uname1=$_POST['uname1'];
    $upswd1=$_POST['upswd1'];
    
    $sql="select * from register where uname1='".$uname1."'AND upswd1='".$upswd1."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        //echo " You Have Successfully Logged in";
        header('location: index.html');
        exit();
    }
    else{
        //echo " You Have Entered Incorrect Password";
        header('location: login.html');
        exit();
    }
        
}
?>