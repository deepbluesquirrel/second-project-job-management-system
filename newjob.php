<?php
session_start();
include('connection.php');
$N=$_SESSION['name'];
if(empty($N))
{
    exit(header('location:login.php'));
}
$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
if(isset($_POST['submit']))
{
    $doreg=$_POST['doreg'];
    $custname=$_POST['custname'];
    $loc=$_POST['loc'];
    $lic=$_FILES['tlic']['name'];
    $tlic=$_FILES['tlic']['tmp_name'];
    $cer=$_FILES['tcer']['name'];
    $tcer=$_FILES['tcer']['tmp_name'];
    $cnum=$_POST['cnum'];
    $cemail=$_POST['cemail'];
    $cperson=$_POST['cperson'];
    $cpmobile=$_POST['cpmobile'];
    $cpemail=$_POST['cpemail'];
    $nda=$_FILES['nda']['name'];
    $tnda=$_FILES['nda']['tmp_name'];
    $pterm=$_POST['pterm'];
    $upload1='tradelic/'.$lic;
    move_uploaded_file($tlic,$upload1);
    $upload2='cer/'.$cer;
    move_uploaded_file($tcer,$upload2);
    $upload3='nda/'.$nda;
    move_uploaded_file($tnda,$upload3);
    if($_FILES['tlic']['size']==0 )
    {
        echo "<script>alert('Trade License must be < 2 MB');</script>";
    }
    else if($_FILES['tcer']['size']==0 )
    {
        echo "<script>alert('TRN certificate must be < 2 MB');</script>";
    }
    else if ($_FILES['nda']['size']>2097152 )
    {
        echo "<script>alert('NDA must be < 2 MB');</script>";
    }
    else
    {
        $row=mysqli_fetch_row(mysqli_query($conn,"select*from registered where custname='$custname'"));
        if(empty($row))
        {
            $done=mysqli_query($conn,"INSERT INTO registered (doreg,custname,loca,tradelic,trncert,contactno,cemail,cperson,cpmobile,cpemail,nda,paymentterm) VALUES ('$doreg','$custname','$loc','$upload1','$upload2','$cnum','$cemail','$cperson','$cpmobile','$cpemail','$upload3','$pterm')");
            if($done)
            {
                $custid=mysqli_fetch_array(mysqli_query($conn,"select * from registered where custname='$custname'"));
                echo "<script>alert('Registration Successful Customer id= $custid[custid]');</script>";   
            }
        }
        else
        {
            echo "<script>alert('Entry already exist');</script>";
        }
    }
}
?>
<DOCTYPE html>
    <html lang='en'>
        <head>
        <link rel="stylesheet" href="css/add.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <meta charset='utf-8' name='viewport' content='width=device-width, initial-scale=1'>
            <script>
            function datemax(){
                var date=new Date();
                var dd=date.getDays();
                var mm=date.getMonths()+1;
                var yy=date.getFullYear();
                if(dd<10)
                {
                    dd='0'+dd;
                }
                if(mm<10)
                {
                    mm='0'+mm;
                }
                date=yy+'-'+mm+'-'+dd;
                echo date;
                document.getElementById('date').setAttribute('max','date');}                
           </script>
        <h1 class='a' style='float:left; font-family:cursive;font-weight:bold;'><a href='job.php' style='text-decoration:none;'><i class="fa fa-arrow-circle-left" style="font-size:36px;color:black; "></i></a> New Registration</h1><br><br><br>   
     <title>New Registration</title>   
    </head>         
         <body>
             <form method='post' action='newjob.php' enctype="multipart/form-data">
             <br><h1>Application</h1>
            <label>Date of Registration:</label>
             <input type='date' id='date' name='doreg' min='2005-01-01' max='<?php echo $today ?>'><br><br>
             <label>Customer Name:</label>
             <input type='text' name='custname' required><br><br>
             <label>Location/Emirate:</label>
             <select name='loc'>
                 <option>Abu Dhabi</option>
                 <option>Dubai</option>
                 <option>Sharjah</option>
                 <option>Ajman</option>
                 <option>Ras Al Khaima</option>
                 <option>Fujairah</option>
                 <option>Umm Al Quiwan</option>
                 <option>Al Ain</option>
                 <option>Western Region</option>
             </select><br><br>
             <label>Trade License</label>
             <input type='file' name='tlic' required><br><br>
             <label>TRN Certificate:</label>
             <input type='file' name='tcer' required><br><br>
             <label>Contact Number:</label>
             <input type='contact' name='cnum' required><br><br>
             <label>Contact Email:</label>
             <input type='email' name='cemail' required><br><br>
             <label>Contact Person:</label>
             <input type='text' name='cperson' required><br><br>
             <label>Contact Person Mobile No:</label>
             <input type='contact' name='cpmobile' required><br><br>
             <label>Contact Person Email:</label>
             <input type='email' name='cpemail' required><br><br>
             <label>NDA</label>
             <input type='file' name='nda'><br><br>
             <label>Payment Term:</label>
             <input type='text' name='pterm' required>  <br><br>
             <input class='button' type='submit' name='submit' value='submit'> <br><br><br>       
</form>
</body>
</html>