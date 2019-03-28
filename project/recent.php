<!doctype html>
<html>
<head>
<title> Welcome to Bike Renting.</title>
<style type="text/css">
  body
    {
    background-image: url(first.jpg);
    background-position:left top;
    background-repeat:repeat;
    background-size:cover;
		
    }

    .dd
    {
        width: 1350px;
        height: 50px;
        color: aqua;
        font-weight: bolder;
        position: absolute;
        top: 0px;
        left:0px;
        font-size: 40px;
        background-color: rgba(0,0,0,0.8);
        padding-left: 10px;
        
    }
    table{
        border 2px;
        background-color: rgba(0,0,0,0.1);
    }
   					
</style>
</head>
<body>
<br><br><br><br><br><br><br>
    <?php
$con = mysql_connect("localhost","root","maahmad");
if(!$con)
{ die('Could not connect' .mysql_error());}
mysql_select_db("bike",$con);
$result = mysql_query("Select * from bill",$con);
echo "<center><table border=10>";
echo "<tr><th style='color:aqua;'>ADHAR</th><th style='color:aqua;'>NAME</th><th style='color:aqua;'>ADDRESS</th><th style='color:aqua;'>DATE</th><th style='color:aqua;'>DAY</th><th style='color:aqua;'>VEHICLE</th><th style='color:aqua;'>PRICE</th></tr>";
while($row = mysql_fetch_array($result))
{
    echo "<tr><td style='color:white;font-weight: bolder;width:350px; '>";
    echo $row['adhar'];
    echo "</td><td style='color:white;'>";
     echo $row['name'];
         echo "</td><td style='color:white;'>";
    echo $row['address'];
    echo "</td><td style='color:white;'>";
     echo $row['date'];
         echo "</td><td style='color:white;'>";
    echo $row['days'];
    echo "</td><td style='color:white;'>";
     echo $row['vname'];
         echo "</td><td style='color:white;'>";
    echo $row['price'];
    echo "</td></tr>";
}
echo"</table></center>";

echo"<br/>";
mysql_close($con);
?>
   <div class="dd">
        <img src="head2 (3).png" height="30px" width="30px">&nbsp&nbsp DeStInAtIoN <span style="left:1280px; position:absolute; font-size:20px; padding-top:25px;">ADMIN</span>
    </div></body>
</html>