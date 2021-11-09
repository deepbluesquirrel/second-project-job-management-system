<?php
session_start();
include ('connection.php');
$N=$_SESSION['name'];
if(empty($N))
{
  exit(header('location:login.php'));
}
echo "<link rel='stylesheet' href='css/add.css'> 
<h1 style='text-align:left;text-shadow:2px 2px 20px black;color:white;margin-right:10px;font-family:cursive;'><a href='home.php' style='text-decoration:none;'><i class='fa fa-arrow-circle-left' style='font-size:36px;color:white;'></i></a> Edit</h1></div>
<form style='border-radius:10px;' method='post' action='edit.php' >
<label>Search :</label>
     <input type='text' name='value' placeholder='Job Number' autofocus >
     <input type='submit' class='button' name='search' value='search'><br><br><br><br></form>";
$row1=null; 
$id=null;
if(isset($_POST['search']) OR isset($_GET['id']))
{
    if(isset($_POST['search']))
    {$val=$_POST['value'];$id=null;}
    else{$id=$_GET['id']; $val=null;}
    $ret=mysqli_query($conn,"select*from job where jobnumber='$val' or jobnumber='$id'");
    $row=mysqli_fetch_row($ret);
    if(!empty($row))
    {
    echo "<link rel='stylesheet' href='css/add.css'> 
    <form method='post' action='mainedit.php'>
            <h1>Application</h1>
              <input type='hidden' name='key' value=' $row[0] ' readonly ><br>
              <label>Job Number :</label>
              <input type='text' name='jobnum' placeholder='Job Number' required tabIndex='1' value=' $row[1] ' autofocus ><br>
              <label>Job Type :</label>
              <input type='text' name='jobtype' placeholder='Job Type' value=' $row[2] ' required tabIndex='2'><br>
              <label>Job Name :</label>
              <input type='text' name='jobname' placeholder='Job Name' value=' $row[3] ' required tabIndex='3'><br>
              <label>PO Value :</label>
              <input type='text' name='povalue' placeholder='PO Value' value=' $row[4] 'required tabIndex='4'><br>
              <label>PO Date :</label>
              <input type='text' name='podate' placeholder='PO Date' value=' $row[5] 'required tabIndex='5'><br>
              <label>PO Number :</label>
              <input type='text' name='ponum' placeholder='PO Number' value='$row[6] ' required tabIndex='6'><br>
              <label>Customer :</label>
              <input type='text' name='customer' placeholder='Customer' value=' $row[7]' required tabIndex='7'><br>
              <label>Sale Consultant :</label>
              <input type='text' name='salecons' placeholder='Sale Consultant' value=' $row[8] ' required tabIndex='8'><br>
              <label>Primary Sale :</label>
              <input type='text' name='prisale' placeholder='Primary Sale' value='$row[9] ' required tabIndex='9'><br>
              <label>Job Location :</label>
              <input type='text' name='jobloc' placeholder='Job Location' value=' $row[10] ' required tabIndex='10'><br>
              <label>Creation Date :</label>
              <input type='text' name='cdate' placeholder='Creation Date' value=' $row[11] ' required tabIndex='11'><br>
              <label>In Voice Based On Po Value :</label>
              <input type='text'  name='ivpv' value='$row[12]' ><br>      
              <label>Profit :</label>
              <input type='text' name='profit' placeholder='Profit' value=' $row[13] 'required tabIndex='12'><br>
              <label>Delivary Details :</label>
              <input type='text' name='deldet' placeholder='Delivary Detail' value=' $row[14] ' required tabIndex='13'><br>
              <label>Invoice Detail :</label>
              <input type='text' name='indet' placeholder='Invoice Detail' value=' $row[15] ' required tabIndex='14'><br>
              <label>Payment Terms :</label>
              <input type='text' name='payterms' placeholder='Payment Terms' value=' $row[16] ' required tabIndex='15'><br>
              <label>Is Closed :</label>
              <input type='text'  name='isclosed' value='$row[17]'> <br>
              <label>Job Completion Certified By Customer :</label>
              <input type='text'  name='jccbc' value='$row[18]'> <br>
              <label>Project In Charge :</label>
              <input type='text' name='prjinchr' placeholder='Project In Charge' value='$row[19] ' required tabIndex='16'><br>
              <label>Admin In Charge :</label>
              <input type='text' name='adminchr' placeholder='Admin In Charge' value=' $row[20]' required tabIndex='17'><br>
              <label>Total Delivary Cost :</label>
              <input type='text' name='tdc' placeholder='Total Delivary Cost' value='$row[21] ' required tabIndex='18'><br>
              <label>Total Expenses :</label>
              <input type='text' name='texp' placeholder='Total Expenses' value=' $row[22] ' required tabIndex='19'><br>
              <label>Total Labour Cost :</label>
              <input type='text' name='tlc' placeholder='Total Labour Cost' value=' $row[23] ' required tabIndex='20'><br>
              <label>Total Invoiced :</label>
              <input type='text' name='tiv' placeholder='Total Invoiced' value='$row[24] ' required tabIndex='21'><br>
              <label>Total Running Cost :</label>
              <input type='text' name='trc' placeholder='Total Running Cost' value='$row[25] ' required tabIndex='22'><br>
              <label>Total LPOs Sent :</label>
              <input type='text' name='tls' placeholder='Total LPOs Sent' value=' $row[26] ' required tabIndex='23'><br>
              <label>Estimated Labour Cost :</label>
              <input type='text' name='elc' placeholder='Estimated Labour Cost'value=' $row[27] ' required tabIndex='24'><br>
              <label>Estimated Purchase :</label>
              <input type='text' name='ep' placeholder='Estimated Purchase'value=' $row[28] ' required tabIndex='25'><br>
              <label>Estimated Other Expenses :</label>
              <input type='text' name='eoe' placeholder='Estimated Other Expenses'value='$row[29] ' required tabIndex='26'><br>
              <label>Running Profit Value :</label>
              <input type='text' name='rpv' placeholder='Running Profit Value'value=' $row[30] ' required tabIndex='27'><br>
              <label>Project Start Date Planned :</label>
              <input type='text' name='psdp' placeholder='Project Start Date Planned'value=' $row[31] ' required tabIndex='28'><br>
              <label>Project Start Date Actual :</label>
              <input type='text' name='psda' placeholder='Project Start Date Actual'value=' $row[32] ' required tabIndex='29'><br>
              <label>Project Complition Date Planned :</label>
              <input type='text' name='pcdp'  required tabIndex='30' value=' $row[33]' ><br>
              <label>Project Complition Date Actual :</label>
              <input type='text' name='pcda' placeholder='Project Complition Date Actual'value='$row[34] ' required tabIndex='31'><br>              
              <label>AMC_Required Renewal Notification :</label>
              <input type='text'  name='arrn' value='$row[35]'><br>
              <input type='submit' class='button' value='Submit' onclick='location.href='mainedit.php'><br><br><br>";
      }
      else{        
        echo"<img src='image/notfound.gif' style='width:500px;padding-left:27%;opacity:0.6;'>
        <meta http-equiv='refresh' content='4'>";

    }
    }

?>
<html>
  <head><title>Edit</title>
  <meta charset='utf-8' name='viewport' content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
    body{background-image:url('image/page.jpg');}
       form{
            background-color: #fff;
            background-image:url('image/page.jpg');
            background-size: 100% 5.2em;}
       }
      
    </style>
</head>
<body>
  <body>
  </html>

