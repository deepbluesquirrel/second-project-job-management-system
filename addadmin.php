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
			$u=$_POST['admin'];
			$p=$_POST['password'];
			$c=$_POST['cpassword'];
            $priv=$_POST['priv'];
            $check=mysqli_fetch_array(mysqli_query($conn,"select privilege from admin where name='$N'"));
            if($check['privilege']=='True')
            {
                echo '2';
                if($p==$c)
                {
                    if(strlen($p)<8)
                    {
                        echo"<script>alert('Must be 8 or more length');</script>" ;
                    }
                    else if(!preg_match("#[0-9]+#",$p))
                    {
                        echo"<script>alert('Must contain number');</script>" ;
                    }
                    else if(!preg_match("#[A-Z]+#",$p))
                    {
                        echo"<script>alert('Must contain Uppercase');</script>" ;
                    }
                    else if(!preg_match("/[\'^£$%&*()}{@#~?><>,|=_+¬-]/",$p))
                    {
                        echo"<script>alert('Must contain Special Character');</script>" ;
                    }
                    else if(!preg_match("#[a-z]+#",$p))
                    {
                        echo"<script>alert('Must contain lowercase');</script>" ;
                    }
                    else
                    {
                        $r0=mysqli_fetch_row(mysqli_query($conn,"select*from admin where name='$u'"));
                        if(empty($r0))
                        {
                            mysqli_query($conn,"insert into admin(name,password,privilege)values('$u','$p','$priv')");
                            echo "<script>alert('Successfully added new admin!');window.location.href='viewadmin.php';</script>";
                        }
                        else
                        {
                            echo "<script>alert('Username already exist please try another');window.location.href='viewadmin.php';</script>";
                        }
                    }
                    
                }
                else
                {
                echo "<script>alert('Password not matching');window.location.href='viewadmin.php';</script>";
                }
            }
            else{
                echo "<script>alert('You are not allowed to add New admin');</script>";
            }
			
}
?>
<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset='utf-8' name='viewport' content="width=device-width, initial-scale=1.0">
            <meta http-equiv="refresh" content="30">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
            <title>Admin Sign up</title>
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
                    background-image: url('');
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: 100% 100%;
                    background-size: ;
                    background: linear-gradient(to top, silver, black);
                }
                ::placeholder {
                color: red;
                opacity: 1; 
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
                </style>
            <body>
            <h1 style='color:white;font-family:cursive;'><a href='admin.php' style='text-decoration:none; width:';> <i class="fa fa-arrow-circle-left" style="font-size:36px;color:white;"></i> </a>&nbspAdmin Sign Up</h1></div>
            <form method='post' action='addadmin.php'>
            <div class="login-box">
            <div class='polaroid'>
            <img class='avatar'src="image\avatar.png" alt="Avatar" style="width:120px" >
                <div class="textbox"> 
                
		                <i class="fa fa-user" aria-hidden="true"></i> 
                        <input type="text" placeholder="Username" name="admin" autocomplete='off'> 
                </div> 
                <div class="textbox"> 
                        <i class="fa fa-lock" aria-hidden="true"></i> 
                        <input type="text" placeholder="Password" name="password" autocomplete='off'> 
            </div> 
            <div class="textbox"> 
                        <i class="fa fa-lock" aria-hidden="true"></i> 
                        <input type="password" placeholder="Confirm Password" name="cpassword"> 
            </div>
            <input type='hidden' value='False' name='priv'>  
            <input style='margin-left: 120px;' type="checkbox" value='True' name="priv"><label style='color:red; float:right;'>Privilege Account</label> 
            
  
            <input class="button" type="submit" name='submit' value="Sign up"> 
            </form>
        </div>
</div>
</body>
</head>
        </html>

