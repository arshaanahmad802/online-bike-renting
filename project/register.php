<?php
$con = MYSQL_connect("localhost","root","maahmad");
if(!$con)
{ die('Could not connect:' .mysql_error()); }
Mysql_select_db("bike",$con);
$SQL="INSERT INTO register VALUES ('$_POST[adhar]','$_POST[firstname]','$_POST[lastname]','$_POST[city]','$_POST[fathername]','$_POST[mobilenumber]','$_POST[currentaddress]','$_POST[permanentaddress]','$_POST[password]','$_POST[password1]','$_POST[sex]','$_POST[user]')";
//$SQL="INSERT INTO register VALUES ('123','arsh','ahmad','alld','fathername','123','123 a','123 a','password','password1','sex','user')";
MYSQL_query($SQL,$con);
echo "1 record added";
Mysql_close($con);
?>