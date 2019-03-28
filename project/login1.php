<?php
session_start();
$a="admin";
$u="user";
$c=0;
$con = mysql_connect("localhost","root","maahmad");
if(!$con)
{ die('Could not connect' .mysql_error());}
mysql_select_db("bike",$con);
$result = mysql_query("Select * from register",$con);
while($row = mysql_fetch_array($result)){
if($_POST['adhar']==$row['adhar'])
{
if($_POST['password']==$row['password'])
    {
     
if($a==$row['user'])
{
    $c=$c+1;
    $_SESSION["adhar"]=$row['adhar'];
    header('Location: admin.php');
    exit();
}
if($u==$row['user']){
    $c=$c+1;
    $_SESSION["adhar"]=$row['adhar'];
    header('Location: user1.php');
    exit();
}
}}}
if($c==0)
{echo "<b> Password or User name is incorrect<b>";}
mysql_close($con);
?>