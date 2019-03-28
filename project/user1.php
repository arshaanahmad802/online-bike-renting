  <?php
        SESSION_START();
        if(!$_SESSION["adhar"])
            {
                echo "please login first";
                 header('Location: renting.html');
                exit();
}
?>
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
   #h1{
        color: white;
        top: 50px;
       position: absolute;
       left: 550px;
    }
      #h11{
        color: white;
        top: 200px;
          left: 380px;
       position: absolute;
          font-size: 50px;
    }
     #h111{
        color: white;
        top: 280px;
       position: absolute;
       left: 500px;
    }
    .a{
        top:350px;
        left: 500px;
        background-color:wheat;
        padding-bottom: 10px;
        position: absolute;
        width: 200px;
        height: 40px;
    }
    
    .c{
         top:350px;
        left: 700px;
        background-color:rgba(0,0,0,0.6);
        padding-bottom: 10px;
        position: absolute;
        width: 200px;
        height: 40px; 
        color: aqua;
    }
    .b{
        top:410px;
        left: 500px;
        background-color:wheat;
        padding-bottom: 10px;
        position: absolute;
        width: 200px;
        height: 40px;
    }
    .d{
         top:410px;
        left: 700px;
        background-color:rgba(0,0,0,0.6);
        padding-bottom: 10px;
        position: absolute;
        width: 200px;
        height: 40px; 
        color: aqua;
    }
    .e{
        top:470px;
        left: 500px;
        background-color:wheat;
        padding-bottom: 10px;
        position: absolute;
        width: 200px;
        height: 40px;
    }
    .f{
         top:470px;
        left: 700px;
        background-color:rgba(0,0,0,0.6);
        padding-bottom: 10px;
        position: absolute;
        width: 200px;
        height: 40px; 
        color: aqua;
    }
    
    
    h2{
        text-align: center;
        
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
      
    <div class="dd">
        <img src="head2 (3).png" height="30px" width="30px">&nbsp&nbsp DeStInAtIoN <span style="left:1280px; position:absolute; font-size:15px; padding-top:25px;"><a href="logout.php">LOG OUT</a></span>
    </div>
    <h1 id="h1">WELCOME USER</h1>
    <h1 id="h11">SELF RIDE BIKE RENTALS</h1>
    <h1 id="h111">NOW STARTS @ 20/HOUR</h1>
    <div class="a"><h2>GEAR</h2></div>
    <div class="b"><h2>NON GEAR</h2></div>
    <div class="e"><h2>NEW ADDED</h2></div>
    <div class="c"><h2><a href="gear.html">RIDE NOW</a></h2></div>			
    <div class="d"><h2><a href="nongear.html">RIDE NOW</a></h2></div>
    <div class="f"><h2><a href="recentgear.php">RIDE NOW</a></h2></div>
</body>
</html>