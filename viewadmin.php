<style>
    table{
        border-width:5px;
        border-color:#84E14C ;
        position: absolute; 
        top: 30%; 
        left: 50%; 
        transform: translate(-50%, -50%);
        width:100%;
        text-align:center;
    }
    tr:nth-child(even){background-color: #f2f2f2;}
    tr:nth-child(odd){background-color: #f2f2f2;}

    tr:hover {background-color: #FFFF48 ;}
    td{
        padding:10px;
        border: 1px solid #84E14C;
        
    }
    th{
        background-color:#84E14C ;
        color:white;
        text-align:center;                
        padding:10px;
        
    }
    body{background-image:url('image/viewtable');}

    </style>
<?php
session_start();
include('connection.php');
$N=$_SESSION['name'];
if(empty($N))
{
    exit(header('location:login.php'));
}
$row=mysqli_query($conn,'select*from admin');
echo"<table>
<th>Admin</th>
<th>Password</th>
";
while($sql=mysqli_fetch_array($row))
{
echo"
<tr><td>".$sql['name']."</td><td>".$sql['password']."</td></tr>";
}
?>
<html>
  <head><title>View Admin</title>
  <meta charset='utf-8' name='viewport' content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
      h1{
           text-shadow:2px 2px 20px black;
           color:white;
           margin-right:10px;
           font-family:cursive;
    }
  </style>
  <div>
    
      <h1><a href='admin.php' style='text-decoration:none;'><i class="fa fa-arrow-circle-left" style="font-size:36px;color:white;"></i></a>View Admin</h1></div>
</head>
<body>
</body>
  </html>
