<?php
session_start();
$vname=$_SESSION["vname"];
$adhar=$_SESSION["adhar"];
$price=$_SESSION["price"]*$_POST['day'];
$con = mysql_connect("localhost","root","maahmad");
if(!$con)
{ die('Could not connect:' .mysql_error()); }
Mysql_select_db("bike",$con);
echo "<br>";
echo $adhar;
echo "<br>";
echo $_POST['name'];
echo "<br>";
echo $_POST['address'];
echo "<br>";
echo $_POST['date'];
echo "<br>";
echo $_POST['day'];
echo "<br>";
echo $vname;
echo "<br>";
echo $price;
echo "<br>";
//$SQL="INSERT INTO bill VALUES ('$adhar','$_POST[name]','$_POST[address]','$_POST[date]','$_POST[day]','$vname','$price')";

$SQL="INSERT INTO bill VALUES ('$adhar','$_POST[name]','$_POST[address]','$_POST[date]','$_POST[day]','$vname','$price')";
//$sql = "insert into bill values ('$adhar','$_POST[name]','$_POST[address]','$_POST[date]','$_POST[day]','$vname','$price')";
mysql_query($SQL,$con);
echo "YOUR BILL IS  ";
echo $price;
mysql_close($con);
?>