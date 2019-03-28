<?php
$u;
$p;
$t;
$con = mysql_connect("localhost","root","maahmad");
if(!$con)
{ die('Could not connect' .mysql_error());}
mysql_select_db("bike",$con);
$result =mysql_query("SELECT* FROM register WHERE user='$_POST[adhar]' & password='$_POST[password]'",$con);
while($row = mysql_fetch_array($result)){
$u =$row['user'];
$p = $row['password'];
$t = $row['user'];
if($t=='admin')
{
HEADER("c:\wamp\www\project\admin.html");
}
if($t=='user')
{
HEADER("c:\wamp\www\project\user1.html");
}
}?>