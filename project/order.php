<?php
session_start();
 if(!$_SESSION["adhar"])
            {
                echo "please login first";
                 header('Location: renting.html');
}
$vname=$_POST['vname'];
$price=$_POST['price'];
$_SESSION["vname"]=$vname;
$_SESSION["price"]=$price;
?>
<!doctype html>
<html>
<head>
<title>ONLINE BIKE RENTING SYSTEM</title>
<style type="text/css">
   body
    {
    background-image: url(first.jpg);
    background-position:left top;
    background-repeat:no-repeat;
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
    .aa{
        background-color: white;
        opacity: 0.8;
        width:200px;
        height:300px;
        left: 40%;
        top:42%;
        position: fixed;
        font-weight: bolder;
        padding-top: 20px;
        padding-left: 20px;
        border-radius: 20px;
    }
    .aa input[type="submit"]{
        background-color: cyan;
    }
</style>
</head>
<body>
<script>
function verify()
{
    if(!date())
    {
        return false;
    }
   else if(!day())
    {
        return false;
    }
   
    else
    {
        return true;
    }
    
}
function date()
{
    var currentdate=new Date();
    var d=document.getElementById("date").value;
    var date=new Date(d);
    var diff = date-currentdate;
    if(d=="")
        {
              alert("invalid date..!!");
        document.getElementById("date").focus();
        return false;
            
        }
    if(date<currentdate)
    {
        alert("invalid date..!!");
        document.getElementById("date").focus();
        return false;
    }
return true;
}
    function day()
    {
        var day = document.getElementById("day").value;
        alert(day);
        if((day<1)||(day>10))
            {
                alert("enter days less than 10");
                document.getElementById("day").focus();
                return false;
            }
        return true;
    }
       
</script>

    <div class="dd">
        <img src="head2 (3).png" height="30px" width="30px">&nbsp&nbsp DeStInAtIoN
    </div>
    <div class="aa">
    <form action="testing1.php" method="post" onSubmit="return verify()">
    Name<br><input type="text" name="name" required><br><br>
    Address<br><input type="text" name="address" required><br><br>
    Begining<br><input type="date" name="date" id="date" required><br><br>
    Days<br><input type="number" name="day" id="day" required><br><br>
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" value="RIDE"></form>
          </div>
</body>
</html>