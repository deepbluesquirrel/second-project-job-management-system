<html>
    <head>
        <title>Admin Setting</title>
        
        <meta http-equiv='refresh' content='30' url='admin.php'>
        <meta charset='utf-8' name='viewport' content="width=device-width, initial-scale=1.0" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <style>           
        h1{
           text-shadow:2px 2px 20px black;
           color:white;
           margin-right:10px;
           font-family:cursive;
    }
            body{
                background-image:url('image/adminwall.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
                /background-size: auto;
            }
            .ab{
                background-color: #CDC6C5;
                color: white;
                padding: 14px 25px;
                margin:10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                width:60%;
                border-radius:10px;
                text-align:left;
                color:black;
                opacity:0.8;
            }
            a:hover{
                box-shadow: 0 0 50px 2px white;
            }
            .ab{
                
            }
            div{
                position: relative; 
                    top: 20%;                     
                    left: 15%; 
            }
</style>
<h1><a href='home.php' style='text-decoration:none; width:';><i class="fa fa-arrow-circle-left" style="font-size:36px;color:white;"></i></a> Admin Edit</h1></div>
    </head>
    <body>
        <div>
        <a class ='ab' href='addadmin.php'><i class="fa fa-plus" style="font-size:20px;"></i>   ADD ADMIN</a><br>
        <a class ='ab' href='viewadmin.php'><i class="fa fa-eye" style="font-size:20px;"></i>   VIEW ADMIN</a><br>
        <a class ='ab' href='deleteadmin.php'><i class="fa fa-trash-o" style="font-size:20px;"></i>   DELETE ADMIN</a><br>
        </div>
        <body>
</html>