<?php
session_start();
include("connection.php");
$N=$_SESSION['name'];
if(empty($N))
{
  exit(header('location:login.php'));
}
if(isset($_POST['submit']))
{
			$u=$_POST['admin1'];
			$p=$_POST['admin2'];
			$c=$_POST['password'];
            $check=mysqli_fetch_array(mysqli_query($conn,"select privilege from admin where name ='$N'"));
            if($check['privilege']=='True')
            {
                $sql=mysqli_query($conn,"select*from admin where name='$p' and password= '$c'");
                $row=mysqli_fetch_row($sql);
                if($row)
                    {
                        mysqli_query($conn,"delete from admin where name='$u'");
                        echo"<script>alert('Admin $u deleted!');</script>";    
                    }
                else{
                    echo"<script>alert('You are not permitted for the operation :(');</script>";
                }
            }
            else{
                echo "<script>alert('You dont have permission to do this operation');window.location.href='admin.php';</script>";
            }
        }
?>
<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset='utf-8' name='viewport' content="width=device-width, initial-scale=1.0">
            <meta http-equiv="refresh" content="30">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
            <title>Admin Delete</title>
            <style>
                 .login-box { 
                    width: 280px; 
                    position: absolute; 
                    top: 50%; 
                    left: 50%; 
                    transform: translate(-50%, -50%);
                                } 
            
                .login-box h1 { 
                    float: left; 
                    font-size: 40px;
                    border-bottom: 4px solid #191970; 
                    margin-bottom: 50px; 
                    padding: 13px; 
                        } 
            
                .textbox { 
                    width: 100%; 
                    overflow: hidden; 
                    font-size: 20px; 
                    padding: 8px 0; 
                    margin: 8px 0;
                    border-bottom: 1px solid #191970; 
                } 
                .textbox input { 
                    border: none; 
                    outline: none; 
                    background: none; 
                    font-size: 18px; 
                    float: left; 
                    margin: 0 10px; 
                    color:white;
                } 
            
                .fa { 
                        width: px; 
                        float: left; 
                        text-align: center; 
                }
                .button { 
                    width: 100%; 
                    padding: 8px; 
                    color: #ffffff; 
                    background: none #191970; 
                    border: none; 
                    border-radius: 6px; 
                    font-size: 18px; 
                    cursor: pointer; 
                    margin: 12px 0; 
                } 
                body{
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: 100% 100%;
                    background: linear-gradient(to top, silver, black);
                }
                img {
                      border-radius: 50%;
                }
                .avatar {
                    vertical-align: middle;
                    width: 50px;
                    height: 115px;
                    border-radius: 50%;
                }
                
            div.polaroid {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                margin-bottom: 35px;
                margin-top: 25px;
                padding: 35px 10px;
                border-radius:10px;
            }
            ::placeholder {
                color: red;
                opacity: 1; 
                }
                </style>
                </head>
                <h1 style='color:white;font-family:cursive;'> <a href='admin.php' style='text-decoration:none; width:';> <i class="fa fa-arrow-circle-left" style="font-size:36px;color:white;"> </i> </a>&nbspDelete Admin</h1>
            <body>
            
            <form method='post' action='deleteadmin.php'>
            <div class="login-box">
            <div class='polaroid'>
            <img class='avatar'src="image\avatar.png" alt="Avatar" style="width:120px" >
                <div class="textbox"> 
                
		                <i class="fa fa-user" aria-hidden="true"></i> 
                        <input type="text" placeholder="Remove Admin(Username)" name="admin1" autocomplete='off'> 
                </div> 
                <div class="textbox"> 
                        <i class="fa fa-lock" aria-hidden="true"></i> 
                        <input type="text" value='<?php echo $N; ?>' name="admin2"> 
            </div> 
            <div class="textbox"> 
                        <i class="fa fa-lock" aria-hidden="true"></i> 
                        <input type="password" placeholder="Password" name="password"> 
            </div> 
  
            <input class="button" type="submit" name='submit' value="Delete"> 
            </form>
        </div>
</div>
</body>
        </html>

