<?php

session_start();
include ('connection.php');
$N=$_SESSION['name'];
if(empty($N))
{
  exit(header('location:login.php'));
}
$key=$_POST['key'];
 $a=$_POST['jobnum'];    $b=$_POST['jobtype'];    $c=$_POST['jobname'];    $d=$_POST['povalue'];    $e=$_POST['podate'];    $f=$_POST['ponum'];
$g=$_POST['customer'];    $h=$_POST['salecons'];    $i=$_POST['prisale'];    $j=$_POST['jobloc'];    $k=$_POST['cdate'];    $l=$_POST['ivpv'];
$m=$_POST['profit'];    $n=$_POST['deldet'];    $o=$_POST['indet'];    $p=$_POST['payterms'];    $q=$_POST['isclosed'];    $r=$_POST['jccbc'];
$s=$_POST['prjinchr'];    $t=$_POST['adminchr'];    $u=$_POST['tdc'];    $v=$_POST['texp'];    $w=$_POST['tlc'];    $x=$_POST['tiv'];
$y=$_POST['trc'];    $z=$_POST['tls'];    $aa=$_POST['elc'];    $ab=$_POST['ep'];    $ac=$_POST['eoe'];    $ad=$_POST['rpv'];
$ae=$_POST['psdp'];    $af=$_POST['psda'];    $ag=$_POST['pcdp'];    $ah=$_POST['pcda'];    $ai=$_POST['arrn'];
      $res  = mysqli_query($conn,"update job set jobnumber='$a',jobtype='$b',jobname='$c',povalue='$d',podate='$e',ponumber='$f',customer='$g',saleconsultant='$h',primarysale='$i',joblocation='$j',creationdate='$k',invoicebasedonpv='$l',profit='$m',deliverydetail='$n',invoicedetail='$o',paymentterms='$p',isclosed='$q',jobcomcerbycust='$r',prjinchr='$s',adminchr='$t',totaldeliverycost='$u',totalexpense='$v',totallabourcost='$w',totalinvoice='$x',totalrunningcost='$y',totalLPOssent='$z',estlabourcost='$aa',estpurchase='$ab',estotherexpense='$ac',runningprofitval='$ad',prjstdateplan='$ae',prjstdateact='$af',prjcomdateplan='$ag',prjcomdateact='$ah',amcreqrennoti='$ai' where custid ='$key'");  
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv='refresh' content='2 url=edit.php'>
<style>
body {
    margin: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(to right, silver, purple);
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


