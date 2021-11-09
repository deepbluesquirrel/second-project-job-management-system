<?php
session_start();
include ('connection.php');
$N=$_SESSION['name'];
if(empty($N))
{
  exit(header('location:login.php'));
}

   $del=$_GET['del'];
   $id=$_GET['id'];
    if($del)
    {
        mysqli_query($conn,"DELETE FROM job WHERE jobnumber='$del'");
             
 }  
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv='refresh' content='1 url=customer.php?id=<?php echo  $id ?>'>
<style>
body {
    margin: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(to right, silver, red);
}

.loader {
    width: 16em;
    height: 8em;
    position: relative;
    overflow: hidden ;
}

.loader::before,
.loader::after {
    content: '';
    position: absolute;
    bottom: 0;
}

.loader::before {
    width: inherit;
    height: 0.2em;
    background-color: hsla(0, 0%, 85%);
}

.loader::after {
    box-sizing: border-box;
    width: 50%;
    height: inherit;
    border: 0.2em solid hsla(0, 0%, 85%);
    border-radius: 50%;
    left: 25%;
}

.loader span {
    position: absolute;
    width: 5%;
    height: 10%;
    background-color: white;
    background-text: white;
    border-radius: 50%;
    bottom: 0.2em;
    left: -5%;
    animation: 2s linear infinite;
    transform-origin: 50% -3em;
    animation-name: run, rotating;
}

.loader span:nth-child(2) {animation-delay: 0.075s;}
.loader span:nth-child(3) {animation-delay: 0.15s;}

@keyframes run {
    0% {left: -5%;}
    10%, 60% {left: calc((100% - 5%) / 2);}
    70%, 100% {left: 100%;}
}

@keyframes rotating {
    0%, 10% {transform: rotate(0deg);}
    60%, 100% {transform: rotate(-1turn);}
}

</style>
</head>
<body>

<div class="loader">
  <span></span>
  <span></span>
  <span></span>
</div>

</body>
</html>
