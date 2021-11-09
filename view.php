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
<?php
session_start();
include('connection.php');
$N=$_SESSION['name'];
if(empty($N))
{
    exit(header('location:login.php'));
}
$sql=mysqli_query($conn,"select*from job");
echo "<table border>
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
    . $row['prjstdateact'] . "</td><td>". $row['prjcomdateplan'] . "</td><td>". $row['prjcomdateact'] . "</td><td>". $row['amcreqrennoti'] . "</td><td><a href='edit.php?id=$row[jobnumber]'><img src='image/pen.png' style='width:40px;float: right;padding-right:30px; border-radius:50px';><br></td><td><a href='delete.php?del=$row[jobnumber]'><img src='image/bin.png' style='width:40px;padding-left:30px; border-radius:50px';><br></td></tr>";
};?>
<html>
  <head><title>View</title>
  <meta charset='utf-8' name='viewport' content="width=device-width, initial-scale=1.0" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
      h1{
           text-shadow:2px 2px 20px black;
           color:white;
           margin-right:10px;
           font-family:cursive;
    }
      
      body{background-image:url('image/viewtable');}
  </style>
  <div>
    
      <h1><a href='home.php' style='text-decoration:none;'><i class="fa fa-arrow-circle-left" style="font-size:36px;color:white;"></i></a> View</h1></div>
</head>
<body>
</body>
  </html>
