<?php
session_start();
include('connection.php');
$N=$_SESSION['name'];
if(empty($N))
{
    exit(header('location:login.php'));
}
$id=$_GET['id'];
$sql=mysqli_query($conn,"select*from registered where custid='$id'");
while($row1=mysqli_fetch_array($sql))
{
    $id=$row1['custid'];
    echo"<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <style>
        .button{
            background-color:green;
            text-align:center;
            padding:5px;
            color:white;
            text-decoration:none;
            border-radius:5px;
        }
        .button:hover{
            box-shadow:0 0 50px 10px green;
        }
        #reg:hover{
            box-shadow:0 0 50px 10px navy;
        }
    </style>
    <h1 class='a' style=' float:left;margin-top:5px;position:fixed;color:black;font-size:36px;font-weight:bold;'><a href='job.php' style='text-decoration:none; color:black;'><i class='fa fa-arrow-circle-left' aria-hidden='true'></i></a> Add Job  <a style='float:right; margin-left:1100px;' href='custtermination.php?id=$id'><img src='image/bin.png' style='width:40px; border-radius:50px';></a></h1><br><br><br> 
    <form style='padding:5px;border: 6px solid black;position: fixed;top: 8%;width: 98%;background-color:white;'>   
    <h3 style='float:right;margin-top:px;'>Date of Registration: $row1[doreg]</h3><br>
     <h1>Customer ID:$row1[custid]</h1>
     <h3>Customer Name: $row1[custname]</h3>
     <h3>Location/Emirate:$row1[loca]</h3>
     <div style='position:absolute;right:10px;top:35px;'>
     <h2>Contact Details</h2>
     <h3>Contact Number: $row1[contactno]</h3>
     <h3>Contact email: $row1[cemail]</h3>
     <h3>Contact Person: $row1[cperson]</h3>
     <h3>Contact Person Number: $row1[cpmobile]</h3>
     <h3>Contact Person email: $row1[cpemail]</h3>
     </div>
     <h3>Payment Term: $row1[paymentterm]</h3>     
     <a class='button' style='padding-right:15px;' href='$row1[tradelic]'>Trade License</a>
     <a class='button' style='padding-right:15px;' href='$row1[trncert]'>TRN Certificate</a>
     <a class='button' style='padding-right:15px;' href='$row1[nda]'>NDA</a><br>
     <br><a id='reg' style='background-color:navy; padding:5px;color:white;text-decoration:none;border-radius:8px;font-weight:bold;' href='add.php?id=$id'>+ New Job</a><br><br>
     </form>";
}
$sql=mysqli_query($conn,"select*from job where custid='$id'");
echo "<table border style='position:absolute;top: 360px;z-index:2;background-color:white;'>
<th>Customer ID</th>
<th>Job Number</th>
<th>Job Type</th>
<th>Job Name </th>
<th>PO Value </th>
<th>PO Date </th>
<th>PO Number</th>
<th>Customer</th>
<th>Sale Consultant</th>
<th>Primary Sale </th>
<th>Job Location</th>
<th>Creation Date</th>
<th>In Voice Based On Po Value</th>
<th>Profit </th>
<th>Delivery Detail</th>
<th>Invoice Detail</th>
<th>Payment Terms</th>
<th>Is Closed </th>
<th>Job Completion Certified By Customer</th>
<th>Project In Charge</th>
<th>Admin In Charge</th>
<th>Total Delivary Cost</th>
<th>Total Expenses</th>
<th>Total Labour Cost</th>
<th>Total Invoiced</th>
<th>Total Running Cost</th>
<th>Total LPOs Sent</th>
<th>Estimated Labour Cost</th>
<th>Estimated Purchase </th>
<th>Estimated Other Expenses </th>
<th>Running Profit Value</th>
<th>Project Start Date Planned </th>
<th>Project Start Date Actual</th>
<th>Project Complition Date Actual</th>
<th>Project Complition Date Planned</th>
<th>AMC_Required Renewal Notification</th>
<th>Edit</th>
<th>Remove</th>";
while($row=mysqli_fetch_array($sql))
{
    echo"</tr><td>" 
    . $row['custid'] . "</td><td>". $row['jobnumber'] . "</td><td>". $row['jobtype'] . "</td><td>". $row['jobname'] . "</td><td>". $row['povalue'] . "</td><td>". $row['podate'] . "</td><td>"
    . $row['ponumber'] . "</td><td>". $row['customer'] . "</td><td>". $row['saleconsultant'] . "</td><td>". $row['primarysale'] . "</td><td>". $row['joblocation'] . "</td><td>"
    . $row['creationdate'] . "</td><td>". $row['invoicebasedonpv'] . "</td><td>". $row['profit'] . "</td><td>". $row['deliverydetail'] . "</td><td>". $row['invoicedetail'] . "</td><td>". $row['prjcomdateact'] . "</td><td>"
    . $row['isclosed'] . "</td><td>". $row['jobcomcerbycust'] . "</td><td>". $row['prjinchr'] . "</td><td>". $row['adminchr'] . "</td><td>". $row['totaldeliverycost'] . "</td><td>"
    . $row['totalexpense'] . "</td><td>". $row['totallabourcost'] . "</td><td>". $row['totalinvoice'] . "</td><td>". $row['totalrunningcost'] . "</td><td>". $row['totalLPOssent'] . "</td><td>"
    . $row['estlabourcost'] . "</td><td>". $row['estpurchase'] . "</td><td>". $row['estotherexpense'] . "</td><td>". $row['runningprofitval'] . "</td><td>". $row['prjstdateplan'] . "</td><td>"
    . $row['prjstdateact'] . "</td><td>". $row['prjcomdateplan'] . "</td><td>". $row['prjcomdateact'] . "</td><td>". $row['amcreqrennoti'] . "</td><td><a href='edit.php?id=$row[jobnumber]'><img src='image/pen.png' style='width:40px;float: right;padding-right:30px; border-radius:50px';><br></td><td><a href='deletecust.php?del=$row[jobnumber]&&id=$row[custid]'><img src='image/bin.png' style='width:40px;padding-left:30px; border-radius:50px';><br></td></tr>";
};
?>
<html>
    <head>
        <title>Customer Details</title>
        <style>
    table{
        border-width:5px;
        border-color:#84E14C ;
    }
    tr:nth-child(even){background-color: #f2f2f2;}
    tr:nth-child(odd){background-color: white ;}

    tr:hover {background-color: #FFFF48 ;}
    td{
        padding:10px;
        border: 1px solid #84E14C;
        font-weight:bold;

    }
    th{
        background-color:#84E14C ;
        color:white;
        text-align:center;                
        padding-left:50px;       
        padding-right:50px;        
        padding-bottom:1px;
        padding-top:1px;
    }
   
    

            </style>
</head>
</html>