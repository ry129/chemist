<?php
//error_reporting(0);
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
$drugnum = $_POST['drugnum'];
//SELECT * FROM `stock maINTenance` WHERE `medicine` LIKE '%SEARCH%';
if ($drugnum == "1") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty1'  WHERE Medicine =  '$Drug1' ; ";
     $result = mysqli_query($conn, $sql); 
     $sql = "INSERT INTO `entries` ( `timestampp`, `opd`,  `drug1`, `qty1`) VALUES ( '$timestampp ', '$opd',  '$Drug1', '$Qty1'); ";
     $result = mysqli_query($conn, $sql); 
}
if ($drugnum == "2") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty1'  WHERE Medicine =  '$Drug1' ; ";
     $result = mysqli_query($conn, $sql); 
     $sql = "INSERT INTO `entries` ( `timestampp`, `opd`,  `drug2`, `qty2`) VALUES ( '$timestampp ', '$opd',  '$Drug1', '$Qty1'); ";
     $result = mysqli_query($conn, $sql); 
}
if ($drugnum == "3") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty1'  WHERE Medicine =  '$Drug1' ; ";
     $result = mysqli_query($conn, $sql); 
     $sql = "INSERT INTO `entries` ( `timestampp`, `opd`,  `drug3`, `qty3`) VALUES ( '$timestampp ', '$opd',  '$Drug1', '$Qty1'); ";
     $result = mysqli_query($conn, $sql); 
}
if ($drugnum == "4") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty1'  WHERE Medicine =  '$Drug1' ; ";
     $result = mysqli_query($conn, $sql); 
     $sql = "INSERT INTO `entries` ( `timestampp`, `opd`,  `drug4`, `qty4`) VALUES ( '$timestampp ', '$opd',  '$Drug1', '$Qty1'); ";
     $result = mysqli_query($conn, $sql); 
}
if ($drugnum == "5") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty1'  WHERE Medicine =  '$Drug1' ; ";
     $result = mysqli_query($conn, $sql); 
     $sql = "INSERT INTO `entries` ( `timestampp`, `opd`,  `drug5`, `qty5`) VALUES ( '$timestampp ', '$opd',  '$Drug1', '$Qty1'); ";
     $result = mysqli_query($conn, $sql); 
}
if ($drugnum == "6") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty1'  WHERE Medicine =  '$Drug1' ; ";
     $result = mysqli_query($conn, $sql); 
     $sql = "INSERT INTO `entries` ( `timestampp`, `opd`,  `drug6`, `qty6`) VALUES ( '$timestampp ', '$opd',  '$Drug1', '$Qty1'); ";
     $result = mysqli_query($conn, $sql); 
}
if ($drugnum == "7") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty1'  WHERE Medicine =  '$Drug1' ; ";
     $result = mysqli_query($conn, $sql); 
     $sql = "INSERT INTO `entries` ( `timestampp`, `opd`,  `drug7`, `qty7`) VALUES ( '$timestampp ', '$opd',  '$Drug1', '$Qty1'); ";
     $result = mysqli_query($conn, $sql); 
}
if ($drugnum == "8") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty1'  WHERE Medicine =  '$Drug1' ; ";
     $result = mysqli_query($conn, $sql); 
     $sql = "INSERT INTO `entries` ( `timestampp`, `opd`,  `drug8`, `qty8`) VALUES ( '$timestampp ', '$opd',  '$Drug1', '$Qty1'); ";
     $result = mysqli_query($conn, $sql); 
}
if ($drugnum == "9") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty1'  WHERE Medicine =  '$Drug1' ; ";
     $result = mysqli_query($conn, $sql); 
     $sql = "INSERT INTO `entries` ( `timestampp`, `opd`,  `drug9`, `qty9`) VALUES ( '$timestampp ', '$opd',  '$Drug1', '$Qty1'); ";
     $result = mysqli_query($conn, $sql); 
}
if ($drugnum == "10") {
$sql = "UPDATE `stock maintenance` SET Balance = Opening_stock - Used_in_this_month_till_now ,Used_in_this_month_till_now  = Used_in_this_month_till_now + '$Qty1'  WHERE Medicine =  '$Drug1' ; ";
     $result = mysqli_query($conn, $sql); 
     $sql = "INSERT INTO `entries` ( `timestampp`, `opd`,  `drug10`, `qty10`) VALUES ( '$timestampp ', '$opd',  '$Drug1', '$Qty1'); ";
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
    <h2>
      AMIT DISPENSARY DATABASE
    </h2><br>
<style type="text/css">
    body{
        color: white;
        background-color: black;
        font-size: 20px;
    }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 0.5px solid #dddddd;
  text-align: left;
  padding: 2px;
}
.sau 
{
padding: 12px;
}
</style>
<form method="post">
    <div>
<label>OPD</label>
<input class ="sau" type="text" name="OPD" placeholder="NUMBER" required autocomplete="off"> 
</div>
<br>
<input class = "sau"id = "dam" type="text" name="Drug1" placeholder="Select Medicine Name" onkeyup="showResult(this.value)"> 
<input class = "sau"type="text" name="Qty1" placeholder="Select Qty."  autocomplete="off">
<input class = "sau"type="text" name="drugnum" placeholder="drugnum"  autocomplete="off">
<div id="dam_return">
</div> <br><br>
<!--SELECT * FROM `entries` ORDER BY `entries`.`id` DESC-->
<input class = "sau" type="submit" name="submit" value="Submit">
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


<?php
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
$sql = "SELECT * FROM `entries` ORDER BY `entries`.`id` DESC LIMIT 8;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
    echo '<table  style="width:100% ">
  <tr>
    <th style="color:white;">timestamp</th>
       <th style="color:white;">opd</th>
        <th style="color:white;">drug1</th> 
           <th style="color:white;">drug2</th>   
            <th style="color:white;">drug3</th>  
              <th style="color:white;">drug4</th> 
                 <th style="color:white;">drug5</th>  
                   <th style="color:white;">drug6</th>
                       <th style="color:white;">drug7</th> 
                          <th style="color:white;">drug8</th>
                              <th style="color:white;">drug9</th>
                                  <th style="color:white;">drug10</th>
  </tr>
';
while($row = $result->fetch_assoc()) {
       echo '<tr><td>'.$row["timestampp"].'</td>'. '<td>'.$row["OPD"].'</td>'. '<td>'.$row["Drug1"].'</td>'. '<td>'.$row["Drug2"].'</td>'. '<td>'.$row["Drug3"].'</td>'. '<td>'.$row["Drug4"].'</td>'. '<td>'.$row["Drug5"].'</td>'. '<td>'.$row["Drug6"].'</td>'. '<td>'.$row["Drug7"].'</td>'. '<td>'.$row["Drug8"].'</td>'. '<td>'.$row["Drug9"].'</td>'. '<td>'.$row["Drug10"].'</td>'. "</tr><br>";
}
echo "</table>";
}
?>
</body>
</html>