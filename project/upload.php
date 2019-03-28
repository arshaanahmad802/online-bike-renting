
<?php
if(isset($_POST['submit']))
{
    $imgname = $_FILES['img1']['name'];//storing file name
    $temp = $_FILES['img1']['tmp_name'];//storing image temporary name
    $con = mysql_connect("localhost","root","maahmad");
    if(!$con)
        { die('Could not connect' .mysql_error());}
        mysql_select_db("bike",$con);
    $sql="INSERT INTO gear VALUES ('$imgname','$_POST[price]','$_POST[vname]')";
  $result =  mysql_query($sql,$con);
    if($result)
    {
    echo "1 record added";
     move_uploaded_file($temp,"$imgname");
    }

Mysql_close($con);

}
?>