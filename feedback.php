<?php
    $host="localhost";
    $username="root";
    $password ="";
    $db="tiles";

    $conn=new mysqli($host,$username,$password,$db);
    if(mysqli_connect_error()){
        die('Could not connect' .mysqli_connect_error());
    }
    else{
       
        $sql="insert into feedback (name,email,phone,state,city,feedback) values('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['state']."','".$_POST['city']."','".$_POST['feedback']."')";
        $stmt=mysqli_query($conn,$sql);
        $alert="<script>window.open('alert.html#popup1', 'ThanksTab')   
        </script>";
        echo $alert;
        }
        
    
