<?php
error_reporting(0);
date_default_timezone_set("Asia/Calcutta");
if(isset($_POST['submit'])){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "chemist";
    $conn = mysqli_connect($servername,
        $username, $password, $database);
    if($conn) {
    }
    else {
        die("Error". mysqli_connect_error());
}
$timestampp = date("dmyhis");
$opd = $_POST['OPD'];
$Drug1 = $_POST['Drug1'];
$Qty1 = $_POST['Qty1'];
$Drug2 = $_POST['Drug2'];
$Qty2 = $_POST['Qty2'];
$Drug3 = $_POST['Drug3'];
$Qty3 = $_POST['Qty3'];
$Drug4 = $_POST['Drug4'];
$Qty4 = $_POST['Qty4'];
$Drug5 = $_POST['Drug5'];
$Qty5 = $_POST['Qty5'];
$Drug6 = $_POST['Drug6'];
$Qty6 = $_POST['Qty6'];
$Drug7 = $_POST['Drug7'];
$Qty7 = $_POST['Qty7'];
$Drug8 = $_POST['Drug8'];
$Qty8 = $_POST['Qty8'];
$Drug9 = $_POST['Drug9'];
$Qty9 = $_POST['Qty9'];
$Drug10 = $_POST['Drug10'];
$Qty10 = $_POST['Qty10'];
$drugnum = $_POST['drugnum'];
//SELECT * FROM `stock maINTenance` WHERE `medicine` LIKE '%SEARCH%';
$sql = "INSERT INTO `entries` ( `timestampp`, `opd`,  `drug1`, `qty1`, `drug2`, `qty2`, `drug3`, `qty3`, `drug4`, `qty4`, `drug5`, `qty5`, `drug6`, `qty6`, `drug7`, `qty7`, `drug8`, `qty8`, `drug9`, `qty9`, `drug10`, `qty10`) VALUES ( '$timestampp ', '$opd',  '$Drug1', '$Qty1', '$Drug2', '$Qty2', '$Drug3', '$Qty3', '$Drug4', '$Qty4', '$Drug5', '$Qty5', '$Drug6', '$Qty6', '$Drug7', '$Qty7', '$Drug8', '$Qty8', '$Drug9', '$Qty9', '$Drug10', '$Qty10'); ";
     $result = mysqli_query($conn, $sql); 
if ($Qty1!=""&& $drugnum === "1") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty1'  WHERE Medicine =  '$Drug1' ; ";
     $result = mysqli_query($conn, $sql); 
}
if ($Qty2!=""&& $drugnum === "2") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty2'  WHERE Medicine =  '$Drug2' ; ";
     $result = mysqli_query($conn, $sql); 
}
if ($Qty3!=""&& $drugnum === "3") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty3'  WHERE Medicine =  '$Drug3' ; ";
     $result = mysqli_query($conn, $sql); 
}
if ($Qty4!=""&& $drugnum === "4") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty4'  WHERE Medicine =  '$Drug4' ; ";
     $result = mysqli_query($conn, $sql); 
}
if ($Qty5!=""&& $drugnum === "5") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty5'  WHERE Medicine =  '$Drug5' ; ";
     $result = mysqli_query($conn, $sql); 
}
if ($Qty6!=""&& $drugnum === "6") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty6'  WHERE Medicine =  '$Drug6' ; ";
     $result = mysqli_query($conn, $sql); 
}
if ($Qty7!=""&& $drugnum === "7") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty7'  WHERE Medicine =  '$Drug7' ; ";
     $result = mysqli_query($conn, $sql); 
}
if ($Qty8!=""&& $drugnum === "8") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty8'  WHERE Medicine =  '$Drug8' ; ";
     $result = mysqli_query($conn, $sql); 
}
if ($Qty9!=""&& $drugnum === "9") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty9'  WHERE Medicine =  '$Drug9' ; ";
     $result = mysqli_query($conn, $sql); 
}
if ($Qty10!=""&& $drugnum === "10") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty10'  WHERE Medicine =  '$Drug10' ; ";
     $result = mysqli_query($conn, $sql); 
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DATABASE</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
  <div>
    <div>
      AMIT DISPENSARY DATABASE
    </div><br>
<style type="text/css">
    body{
        color: white;
        background-color: black;
        font-size: 25px;
    }
</style>
<form method="post">
    <div>
<label>OPD</label>
<input type="text" name="OPD" placeholder="NUMBER" required autocomplete="off"> 
</div>
<br>
<input id = "dam" type="text" name="Drug1" placeholder="Select Medicine Name" onkeyup="showResult(this.value)"> 
<input type="text" name="Qty1" placeholder="Select Qty."  autocomplete="off">
<input type="text" name="drugnum" placeholder="drugnum"  autocomplete="off">
<div id="dam_return">
</div><!--
<input type="text" name="Drug2" placeholder="Select Medicine Name (2)" onkeyup="showResult(this.value)"> 
<input type="text" name="Qty2" placeholder="Select Qty."  autocomplete="off"> <br><br>
<input type="text" name="Drug3" placeholder="Select Medicine Name (3)" onkeyup="showResult(this.value)"> 
<input type="text" name="Qty3" placeholder="Select Qty."  autocomplete="off">
<input type="text" name="Drug4" placeholder="Select Medicine Name (4)" onkeyup="showResult(this.value)"> 
<input type="text" name="Qty4" placeholder="Select Qty."  autocomplete="off"> <br><br>
<input type="text" name="Drug5" placeholder="Select Medicine Name (5)" onkeyup="showResult(this.value)"> 
<input type="text" name="Qty5" placeholder="Select Qty."  autocomplete="off">
<input type="text" name="Drug6" placeholder="Select Medicine Name (6)" onkeyup="showResult(this.value)"> 
<input type="text" name="Qty6" placeholder="Select Qty."  autocomplete="off"> <br><br>
<input type="text" name="Drug7" placeholder="Select Medicine Name (7)" onkeyup="showResult(this.value)"> 
<input type="text" name="Qty7" placeholder="Select Qty."  autocomplete="off">
<input type="text" name="Drug8" placeholder="Select Medicine Name (8)" onkeyup="showResult(this.value)"> 
<input type="text" name="Qty8" placeholder="Select Qty."  autocomplete="off"> <br><br>
<input type="text" name="Drug9" placeholder="Select Medicine Name (9)" onkeyup="showResult(this.value)"> 
<input type="text" name="Qty9" placeholder="Select Qty."  autocomplete="off"> 
<input id = "dam" type="text" name="Drug10" onkeyup="showResult(this.value)"> 
<input type="text" name="Qty10" placeholder="Select Qty." >--> <br><br>
<!--SELECT * FROM `entries` ORDER BY `entries`.`id` DESC-->
<input type="submit" name="submit" value="Submit">
    </form>
  </div><br>
  <a href="./index.php">REFRESH</a>
<br>
<br>
<!--SEARCH-->
<script>
        $(document).ready(function(){
    $("#dam_return a").click(function(){
        var value = $(this).html();
        var input = $('#dam');
        input.val(value);
    });
});

function showResult(str) {
  if (str.length==0) {
    document.getElementById("dam_return").innerHTML="";
    document.getElementById("dam_return").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("dam_return").innerHTML=this.responseText;
      document.getElementById("dam_return").style.border="1px solid #A523B2";
    }
  }
  xmlhttp.open("GET","search.php?q="+str,true);
  xmlhttp.send();
}
</script>
</body>
</html>
