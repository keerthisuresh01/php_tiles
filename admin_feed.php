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
       
        $sql="select * from feedback";
        $result=$conn->query($sql) ;
        echo "<!doctype html>
        <html lang='en'>
        
        <head>
            <title>Index</title>
            <!-- Required meta tags -->
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
            <script src='./script.js'></script>
            <link rel='stylesheet' href='admin_feed.css'>
            
        
        </head>
        
        <body>
            <div class='header'>
                <link rel='stylesheet' href='./style.css'>
        
                <div class='row '>
                    <div class=" bg-dark col-md-4 text-white pt-2">
                        <a style="text-decoration: none;color: aliceblue;font-weight: bold;padding-left:100px;" class="h-90" href=" mailto:connect@srrgranite@yahoo.com "><span class="contact ">srrgranite@yahoo.com </span></a
              ></div>
                <div class="bg-dark col-md-6 ">
                    <p class="text-white mt-2 ">
                        <b</b></p>
                </div>
                <div class="bg-dark col-md-2 ">
        
                    <p class="text-light mt-2 ml-5 "><span class="border border-left-0 border-top-0 border-bottom-0 border-secondary h-90 mr-4 "></span><b>CONTACT US</b></p>
        
                </div>
            </div>
            <div class="row ">
                <div class="col-md-2 ml-5 mt-2">
                    <img src="./image/leaf.jpg" alt="" width="60px">
                </div>
                <div class="col-md-9 mt-3">
                    <nav class="navbar navbar-expand-lg navbar-light ">
        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto" id="a1">
                                <li class="nav-item active mr-4">
                                    <a class="nav-link  " href="./index.html"><b>HOME</b> </a>
                        </li>
                        <!-- <li class="nav-item active">
                                    <a class="nav-link " href="#"><b></b><span class="border border-left-0 border-top-0 border-bottom-0 border-secondary h-90 ml-3"></span> </a>
                                </li> -->
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle mr-4 " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
                                <b>FLOOR TILES</b>
                            </a>
                            
                        </li>
        
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle mr-3 " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
                                <b>WALL TILES</b>
                            </a>
                            
                        </li>
                        <!-- <li class="nav-item active ">
                        <a class="nav-link " href="# "><b>BUSINESS</b> <span class="border border-left-0 border-top-0 border-bottom-0 border-secondary h-90 ml-3 "></span></a>
                      </li> -->
                        <li class="nav-item active ml-3 ">
                            <a class="nav-link " href="./granites.html"><b>GRANITES</b> </a>
                        </li>
                        <li class="nav-item active ml-3 ">
                            <a class="nav-link " href="./wheretobuy.html "><b>WHERE TO BUY</b> </a>
                        </li>
                        <li class="nav-item active ml-4 ">
                            <a class="nav-link " href="./contact.html"><b>CONTACT</b> </a>
                        </li>
                        <a class="btn btn-large btn-success ml-2" href="index1.html">Login</a>
                        </ul>
        
                    </div>
                    </nav>
                </div>
            </div>
            <div class='progress-container'>
                <div class='progress-bar' id='myBar'></div>
            </div>
            </div>
            <br><br> <br><br> <br><br>";
        
        if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
            
            echo "<div style='margin-left:70px ;margin-right:70px; margin:30px;'> <div style='border-style:outset;border-radius: 20px;'>
            <p style='border-left: 6px solid rgb(3, 16, 2);color:rgb(6, 148, 27);font-size: 30px;padding-left:20px'>$row[name]</p>
            <p style='font-size: 20px;color:rgb(169, 171, 166);padding-left:20px'>$row[email]</p>            
            <p style='color:black;font-size: 20px;padding-left:40px'><img src='./image4/phone.png' style='width: 2rem;padding-right:20px' >$row[phone]</p>
            <p style='color:black;font-size: 20px;padding-left:40px'><img src='./image4/location.jpg' style='width: 2rem;padding-right:20px' >$row[city], $row[state]</p>
            <p style='font-size: 20px;padding-left:40px'><span style='color:brown;'>Feedback</span>  : $row[feedback]</p>
            
           
            <input type='button' style='color:white;border-radius:10px;background-color:rgb(39, 184, 220);margin-left:40px;margin-bottom:30px;padding:10px;font-size: 20px;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);'value='Reply'  onClick='reply.html#call')' >
            </div></div>";
            

        }
    }
    }
    
        
       
    
