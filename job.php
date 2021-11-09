<?php 
session_start();
include('connection.php');
$N=$_SESSION['name'];
if(empty($N))
{
    exit(header('location:login.php'));
}
?>
<DOCTYPE html>
    <html lang='en'>
        <head>
            <title>Job Management</title>
            <meta charset='utf-8' name='viewport' content="width=device-width initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <meta  http-equiv="refresh" content='30'>
            <style>
                </style>
             <h1 style='font-family:cursive;'><a href='home.php' style='text-decoration:none;'><i class="fa fa-arrow-circle-left" style="font-size:36px;color:black;"></i></a> Job Management</h1></div>    
<style>
    .button{
        position:absolute;
        right:10px;
        background-color:#A7F00D ;
        width:250px;
        padding:5px;
        border-radius:5px;
        text-align:center;
        text-decoration:none;
        color:white;
        font-weight:bold;
        font-size:20px;
        align:center;
        

    }
    .button:hover{
        box-shadow: 0 0 50px 2px green;
    }
    .name:hover{
        box-shadow: 0 0 50px 2px red;
    }
    .name{
        background-color: #CDC6C5;
        color: white;
        padding: 14px 25px;
        margin-bottom:7px;
        position:relative;
        left:100px;
        text-decoration: none;
        display: inline-block;
        width:70%;
        border-radius:10px;
        text-align:left;
        color:white;
        opacity:0.8;
        font-weight:bold;
        font-size:30px;
       
    }
    </style>
            </head>
<body>
    <a class='button' href='newjob.php' style='float:right;'><i class="fa fa-plus" style='font-size:20px;' aria-hidden="true"></i> New Registration</a><br><br><br><br>
    
</body>
</html>
<?php
$sql=mysqli_query($conn,'select*from registered');
while($row=mysqli_fetch_array($sql))
{
    echo"<a  class='name' href='customer.php?id=$row[custid]'>$row[custid] : $row[custname]</a><br>";
};?> 