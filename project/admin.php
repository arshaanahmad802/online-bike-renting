<?php
session_start();
 if(!$_SESSION["adhar"])
            {
                echo "please login first";
                 header('Location: renting.html');
}?>
<html>
<head>
<title>ONLINE BIKE RENTING SYSTEM</title>
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
	.aa{
	left: 400px;
	width:450px;
	height: 1000px;
	background-color: rgba(0,0,0,0.4);
	padding-left: 20px;
	padding-top: 10px;
	border-radius: 15px;
	font-weight: bolder;
    margin-left: auto;
    color: white;
	position:absolute;
}
.aa input[type="text"]{
	width:400px;
	height:20px;
	border-radius:5px;
}																																						.aa input[type="number"]{
	width:400px;
	height:20px;
	border-radius:5px;
}																																								
.aa input[type="password"]{
	width:400px;
	height:20px;
	border-radius:5px;
}						
    .a{
        color: white;
        height: 410px;
        width: 250px;
        top: 100px;
        left: 0px;
        position: absolute;
        background-color: rgba(0,0,0,0.3);
        font-size: 20px;
        padding-left: 10px;
        padding-top: 10px;
        font-weight: bolder;
    }
    .b{
        color: white;
        height: 410px;
        width: 250px;
        top: 100px;
        left: 1080px;
        position: absolute;
        background-color: rgba(0,0,0,0.3);
        font-size: 20px;
        padding-left: 10px;
        padding-top: 10px;
        font-weight: bolder;
    }
    .c{
        color: black;
        height: 30px;
        width: 230px;
        top: 640px;
        left: 10px;
        position: absolute;
        background-color: white;
        font-size: 20px;
        padding-left: 10px;
        padding-top: 10px;
        font-weight: bolder;
 }
 
    .g{
        color: aqua;
        height: 30px;
        width: 100px;
        top: 640px;
        left: 250px;
        position: absolute;
         background-color: rgba(0,0,0,0.4);
        font-size: 20px;
        padding-left: 20px;
        padding-top: 10px;
        font-weight: bolder;
    }

    		
input[type="submit"]{
	width:100px;
	height:20;
	border-radius:5px;
	background-color:aqua;
	font-weight: bolder;
	color: white;
	}
		
a:link{
        color: wheat;
       text-decoration: none;
    }
     a:visited{
        color: wheat;
       text-decoration: none;
    }
      a:active{
        color: wheat;
       text-decoration: none;
    }
    a:hover{
        font-weight: bolder;
        color: red;
       text-decoration: none;
    }
    


</style>
</head>
<body>
    <br><br><br>
    <div class="dd">
        <img src="head2 (3).png" height="30px" width="30px">&nbsp&nbsp DeStInAtIoN <span style="left:1190px; position:absolute; font-size:20px; padding-top:25px;">ADMIN</span><span style="left:1275px; position:absolute;font-size:15px; padding-top:25px;"><a href="logout.php">LOG OUT</a></span>
    </div>
    <div class="a">
	<h1 style="color:aqua;">GEAR VEHICLE</h1>
	<br>
	 <form method="post" action="upload.php" enctype="multipart/form-data">
           PICTURE <input type="file" name="img1" required><br><br>
           PRICE PER DAY<input type="number" name="price" required><br><br>
			VEHICLE NAME <input type="text" name="vname" required><br><br>
			<span style="background-color:aqua"><input type="submit" value="ADD" name="submit"></span>
			
        </form>
		</div>
    <div class="b"><h1 style="color:aqua;">NON GEAR VEHICLE</h1>
	<br>
	 <form method="post" action="uploading1.php" enctype="multipart/form-data">
           PICTURE <input type="file" name="img1" required><br><br>
           PRICE PER DAY<input type="number" name="price" required><br><br>
			VEHICLE NAME <input type="text" name="vname" required><br><br>
         <span style="background-color:aqua"><input type="submit" value="ADD" name="submit"></span></form>
			
</div>
<div class="aa">
<h1 style="color:aqua;">ADD CO-ADMIN</h1>
<form method="post" action="register.php">
	ADHARCARD NUMBER : <input type="number" name="adhar" placeholder="enter your adhaarcard no.." required><br><br><br>
	FIRST NAME: <input type="text" name="firstname" placeholder="enter your first name.." required><br><br><br>
	LAST NAME: <input type="text" name="lastname" placeholder="enter your last name.." required><br><br><br>
    CITY:<br> <input type="text" name="city" placeholder="enter your city.." required><br><br><br>
	FATHER NAME: <input type="text" name="fathername" placeholder="enter your father name.." required><br><br><br>
	MOBILE NUMBER: <input type="number" name="mobilenumber" placeholder="enter your  mobile number registered.." required><br><br><br>
	CURRENT ADDRESS: <input type="text" name="currentaddress" placeholder="enter your current address.." required><br><br><br>
	PERMANENT ADDRESS: <input type="text" name="permanentaddress" placeholder="enter your permanent address." required><br><br><br>
    PASSWORD: <input type="password" name="password" placeholder="enter your password." required><br><br><br>
    RE-ENTER PASSWORD: <input type="password" name="password1" placeholder="enter your password." required><br><br><br>
	SEX: <br><input type="radio" name="sex" value="male">Male<br>
	<input type="radio" name="sex" value="female">Female<br><br>
    <input type="hidden" name="user" value="admin" >
	<input type="submit" value="SUBMIT">
</form>
</div>

    <div class="c">RENT HISTORY</div>
    <div class="g"><a href="recent.php">VIEW</a></div>
   

</body>
</html>