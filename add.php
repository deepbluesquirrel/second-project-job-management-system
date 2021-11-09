<?php
session_start();
include ('connection.php');
$N=$_SESSION['name'];
if(empty($N))
{
  exit(header('location:login.php'));
}
if(!empty($_GET['id']))
{
    $id=$_GET['id'];
}

if(isset($_POST['submit']))
{
    $id=$_POST['custid'];$a=$_POST['jobnum'];    $b=$_POST['jobtype'];    $c=$_POST['jobname'];    $d=$_POST['povalue'];    $e=$_POST['podate'];    $f=$_POST['ponum'];
    $g=$_POST['customer'];    $h=$_POST['salecons'];    $i=$_POST['prisale'];    $j=$_POST['jobloc'];    $k=$_POST['cdate'];    $l=$_POST['ivpv'];
    $m=$_POST['profit'];    $n=$_POST['deldet'];    $o=$_POST['indet'];    $p=$_POST['payterms'];    $q=$_POST['isclosed'];    $r=$_POST['jccbc'];
    $s=$_POST['prjinchr'];    $t=$_POST['adminchr'];    $u=$_POST['tdc'];    $v=$_POST['texp'];    $w=$_POST['tlc'];    $x=$_POST['tiv'];
    $y=$_POST['trc'];    $z=$_POST['tls'];    $aa=$_POST['elc'];    $ab=$_POST['ep'];    $ac=$_POST['eoe'];    $ad=$_POST['rpv'];
    $ae=$_POST['psdp'];    $af=$_POST['psda'];    $ag=$_POST['pcdp'];    $ah=$_POST['pcda'];    $ai=$_POST['arrn'];
    if(empty($a))
    {
        echo '<script>alert("Enter Job Number !")</script>';
    }
    else
    {
        $sql=mysqli_query($conn,"insert into job (custid,jobnumber, jobtype,jobname, povalue, podate, ponumber, customer, saleconsultant, primarysale, joblocation, creationdate, invoicebasedonpv,profit, deliverydetail, invoicedetail,paymentterms, isclosed, jobcomcerbycust, prjinchr, adminchr, totaldeliverycost, totalexpense, totallabourcost, totalinvoice, totalrunningcost, totalLPOssent, estlabourcost, estpurchase, estotherexpense, runningprofitval, prjstdateplan, prjstdateact, prjcomdateplan, prjcomdateact, amcreqrennoti)values('$id',$a,'$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$aa','$ab','$ac','$ad','$ae','$af','$ag','$ah','$ai')");
        if($sql)
        {
            echo'<script>alert("Successful")</script>';
            
        }
        else{
            echo'<script>alert("Failed")</script>';
        }
    }
}
$row=mysqli_fetch_array(mysqli_query($conn,"select*from registered where custid=$id"));
?>
<DOCTYPE html>
    <html>
        <head>
        <meta charset='utf-8' name='viewport' content="width=device-width, initial-scale=1.0" >
        <title>Add Job</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/add.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
            body{background: linear-gradient(to left, silver, black);}
            .bckclr{background-color: #fff;
            background-image:url('image/page.jpg');
            background-size: 100% 5.2em;}
            .a{
           text-shadow:2px 2px 20px black;
           color:white;
           margin-right:10px;
           font-family:cursive;
    }
    </style>  
    </head>
         <body>
         <h1 class='a' style=' float:left;color:white;font-size:36px;font-weight:bold;'><a href='customer.php?id=<?php echo $id?>' style='text-decoration:none; '><i class="fa fa-arrow-circle-left" style="font-size:36px;color:white; "></i></a> Add Job</h1><br><br><br>
          <form method='post' action='add.php' class='bckclr'>
            <h1>Application</h1>
            <input type='hidden' name='id' value='lo'>
            <label>Customer ID :</label>
              <input type='text' name='custid'   tabIndex="0" value='<?php echo $id?>' readonly ><br>
              <label>Job Number :</label>
              <input type='text' name='jobnum' placeholder='Job Number'  tabIndex="1" autofocus autocomplete='off' ><br>
              <label>Job Type :</label>
              <input type='text' name='jobtype' placeholder='Job Type'  tabIndex='2' autocomplete='off'><br>
              <label>Job Name :</label>
              <input type='text' name='jobname' placeholder='Job Name'  tabIndex='3' autocomplete='off'><br>
              <label>PO Value :</label>
              <input type='text' name='povalue' placeholder='PO Value'  tabIndex='4' autocomplete='off'><br>
              <label>PO Date :</label>
              <input type='date' name='podate' placeholder='PO Date'  tabIndex='5' autocomplete='off'><br>
              <label>PO Number :</label>
              <input type='text' name='ponum' placeholder='PO Number'  tabIndex='6' autocomplete='off'><br>
              <label>Customer :</label>
              <input type='text' name='customer' value='<?php echo $row['custname']; ?>'  readonly><br>
              <label>Sale Consultant :</label>
              <input type='text' name='salecons' placeholder='Sale Consultant'  tabIndex='7' autocomplete='off'><br>
              <label>Primary Sale :</label>
              <input type='text' name='prisale' placeholder='Primary Sale' tabIndex='8' autocomplete='off'><br>
              <label>Job Location :</label>
              <input type='text' name='jobloc' placeholder='Job Location' value='<?php echo $row['loca'];  ?>' tabIndex='9' autocomplete='off'><br>
              <label>Creation Date :</label>
              <input type='date' name='cdate' placeholder='Creation Date'  tabIndex='10' autocomplete='off'><br>
              <label>In Voice Based On Po Value :</label>
              <label '>True</label>
              <input type="radio" class="option-input radio" name="ivpv" value='True' checked >
              <label '>False</label>
              <input type="radio" id='cross' class="option-input radio" name="ivpv" value='False'> <br>        
              <label>Profit :</label>
              <input type='text' name='profit' placeholder='Profit'  tabIndex='11' autocomplete='off'><br>
              <label>Delivery Details :</label>
              <input type='text' name='deldet' placeholder='Delivery Detail'  tabIndex='12' autocomplete='off'><br>
              <label>Invoice Detail :</label>
              <input type='text' name='indet' placeholder='Invoice Detail'  tabIndex='13' autocomplete='off'><br>
              <label>Payment Terms :</label>
              <input type='text' name='payterms' placeholder='Payment Terms'  tabIndex='14' autocomplete='off'><br>
              <label>Is Closed :</label>
              <label '>True</label>
              <input type="radio" class="option-input radio" name="isclosed" value='True' checked >
              <label '>False</label>
              <input type="radio" id='cross' class="option-input radio" name="isclosed" value='False'> <br>
              <label>Job Completion Certified By Customer :</label>
              <label '>True</label>
              <input type="radio" class="option-input radio" name="jccbc" value='True' checked >
              <label '>False</label>
              <input type="radio" id='cross' class="option-input radio" name="jccbc" value='False'> <br>
              <label>Project In Charge :</label>
              <input type='text' name='prjinchr' placeholder='Project In Charge'  tabIndex='15' autocomplete='off'><br>
              <label>Admin In Charge :</label>
              <input type='text' name='adminchr' placeholder='Admin In Charge'  tabIndex='16' autocomplete='off'><br>
              <label>Total Delivery Cost :</label>
              <input type='text' name='tdc' placeholder='Total Delivery Cost'  tabIndex='17' autocomplete='off'><br>
              <label>Total Expenses :</label>
              <input type='text' name='texp' placeholder='Total Expenses'  tabIndex='18' autocomplete='off'><br>
              <label>Total Labour Cost :</label>
              <input type='text' name='tlc' placeholder='Total Labour Cost'  tabIndex='19' autocomplete='off'><br>
              <label>Total Invoiced :</label>
              <input type='text' name='tiv' placeholder='Total Invoiced'  tabIndex='20' autocomplete='off'><br>
              <label>Total Running Cost :</label>
              <input type='text' name='trc' placeholder='Total Running Cost'  tabIndex='21' autocomplete='off'><br>
              <label>Total LPOs Sent :</label>
              <input type='text' name='tls' placeholder='Total LPOs Sent'  tabIndex='22' autocomplete='off'><br>
              <label>Estimated Labour Cost :</label>
              <input type='text' name='elc' placeholder='Estimated Labour Cost'  tabIndex='23' autocomplete='off'><br>
              <label>Estimated Purchase :</label>
              <input type='text' name='ep' placeholder='Estimated Purchase'  tabIndex='24' autocomplete='off'><br>
              <label>Estimated Other Expenses :</label>
              <input type='text' name='eoe' placeholder='Estimated Other Expenses'  tabIndex='25' autocomplete='off'><br>
              <label>Running Profit Value :</label>
              <input type='text' name='rpv' placeholder='Running Profit Value'  tabIndex='26' autocomplete='off'><br>
              <label>Project Start Date Planned :</label>
              <input type='date' name='psdp' placeholder='Project Start Date Planned'  tabIndex='27' autocomplete='off'><br>
              <label>Project Start Date Actual :</label>
              <input type='date' name='psda' placeholder='Project Start Date Actual'  tabIndex='28' autocomplete='off'><br>
              <label>Project Complition Date Planned :</label>
              <input type='date' name='pcdp'   tabIndex='29' autocomplete='off'><br>
              <label>Project Complition Date Actual :</label>
              <input type='date' name='pcda' placeholder='Project Complition Date Actual'  tabIndex='30' autocomplete='off'><br>              
              <label>AMC_ Renewal Notification :</label><label '>True</label>
              <input type="radio" class="option-input radio" name="arrn" value='True' checked >
              <label '>False</label>
              <input type="radio" id='cross' class="option-input radio" name="arrn" value='False'> <br><br>
              <input type='submit' class='button' name='submit' value='Submit'><br> <br>  <br>      
</form>
<script type="text/javascript">
$(document).on('keypress', 'input,select', function (e) {
    if (e.which == 13) {
        e.preventDefault();
        var $next = $('[tabIndex=' + (+this.tabIndex + 1) + ']');
        console.log($next.length);
        $next.focus() .click();
    }
   });
</script>
        </html>