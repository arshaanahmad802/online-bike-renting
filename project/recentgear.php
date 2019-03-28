<html>
<head>
<title>ONLINE BIKE RENTING SYSTEM</title>
<style type="text/css">
   body
    {
    background-image: url(first.jpg);
    background-repeat:no-repeat;
    background-size:cover;
    }
    .dd
    {
        width: 1352px;
        height: 50px;
        color: aqua;
        font-weight: bolder;
        position: absolute;
        top: 0%;
        left:0%;
        font-size: 40px;
        background-color: rgba(0,0,0,0.3);
        padding-left: 10px;
    }
    input[type="submit"]
    {
        height: 30px;
        width:100px;
        background-color: aqua;
        border-radius: 5px;
    }

    </style>
    </head>
    <body>
        <div class="dd">
       <img src="head2 (3).png" height="30px" width="30px">&nbsp&nbsp DeStInAtIoN
    </div>

 <?php
$con = mysql_connect("localhost","root","maahmad");
if(!$con)
{ die('Could not connect' .mysql_error());}
        $c=0;
echo "<br><br><br><br><br><br>";
mysql_select_db("bike",$con);
$result = mysql_query("Select * from gear",$con);
while($row = mysql_fetch_array($result))
{
    if($c<5){
    echo "<div style='background-color:rgba(0,0,0,0.4); width: 250px; height:350px;position:relative;float:left;color:wheat;'>
    <form action='order.php' method='post'>
       <center> <img src='".$row['name']."'width='200'
        height='220'></center>
    <center><h3>".$row['vname']."</h3></center>
     <center> <p>".$row['price']."/DAY</p></center>
    <center> <input type='submit' value='BOOK'></center><input type='hidden' name='vname' value='$row[vname]'>
            <input type='hidden' name='price' value='$row[price]'></form></div>";
    echo "&nbsp";
    $c++;
}
    if($c==5)
        {
            $c=0;
            echo "<br><br><br/>";
            echo "<div style='background-color:rgba(0,0,0,0.4); width: 250px; height:350px;position:relative;float:left;color:wheat;'>
    <form>
       <center> <img src='".$row['name']."'width='200'
        height='220'></center>
    <center><h3>".$row['vname']."</h3></center>
     <center> <p>".$row['price']."/DAY</p></center>
    <center> <input type='submit' value='BOOK'></center></form></div>";

        }
}
mysql_close($con);
?>

</body>
</html>