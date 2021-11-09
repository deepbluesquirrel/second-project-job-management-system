<?php
session_start();
include ('connection.php');
include ('time.php');
$N=$_SESSION['name'];
if(empty($N))
{
  exit(header('location:login.php'));
}
?>
<DOCTYPE HTML>
    <html>
        <head>
        <meta charset='utf-8' name='viewport' content="width=device-width, initial-scale=1.0" >
        <meta http-equiv="refresh" content="30">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Menu</title>
        <style>
            img{
                position: static;
                border-radius: 5px;
                margin: 30px 87px;
                display: inline-block;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            img.sep{
                border-radius: 5px;
                margin: 30px 87px;
                margin-left:310px;
                display: inline-block;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            img:hover {
                box-shadow: 0 0 50px 2px purple;
            }
             div.polaroid {
                width: 99%;
                box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 0.2), 0 20px 20px 0 rgba(0, 0, 0, 0.19);
                margin-bottom: 25px;
                margin-top: 10px;
                padding: 3px 10px;
                border-radius:10px;
                font-family:cursive;
                font-style:italic;
                color:white;                  
            }
            h1{ text-shadow:2px 2px 20px black;
                            }
            body{
                background: linear-gradient(to top, silver, #FFF8C7);
                background-image:url('image/home.png');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
                background-size: 100% 100%;
                opacity:5;
            }
            input[type=button],select {
                float:right;
                width: 10%;
                padding:5px;
                margin-top:-15px ;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            h3{float:right;
            margin-top:-35px;
            margin-right:140px;}
            
             .link{
                background-color:white;
                padding:5px;
                border:5px;
                border-radius:10px;
                color:black;
                float:right;
                margin-top:-35px;
                margin-right:30px;
             }
             .link:hover{box-shadow: 0 0 50px 2px red;}
            </style>
            </head>
<body>
    <div class='polaroid'>
            <h1>Menu<br></h1>
            <div>
              <a class='link'style="text-decoration:none;" href='logout.php'><i class="fa fa-sign-out" style="font-size:24px"></i>&#128994;<?php echo $N;?></a> 
        </div>     
    </div>
        
        <a href='view.php'><img src='image/view.png' width=20%></a>
        <a href='edit.php'><img src='image/edit.png' width=20%></a>       
        <a href='admin.php'><img class='sep' src='image/admin.png' width=20%></a>
        <a href='destruct.php'><img  src='image/destruct.png' width=20%></a>
        
</body>
        </html>