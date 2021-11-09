<?php
    session_start();
    include('connection.php');
    $N=$_SESSION['name'];
    if(empty($N))
    {
        exit(header('location:login.php'));
    }
    $id=$_GET['id'];
    $check=mysqli_fetch_array(mysqli_query($conn,"select privilege from admin where name='$N'"));
    if($check['privilege']=='True')
    {
        $sql=mysqli_query($conn,"delete from registered where custid='$id'");
        if($sql)
        {
            echo "<script>alert('Customer Number :$id deleted Successfully');window.location.href='job.php';</script>";
            echo "<script>alert('Successfully added new admin!');</script>";
        }
    }
    else
    {
        echo"<script>alert('You dont have permission to delete this item ');window.location.href='job.php';</script>";
    }
?>