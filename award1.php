<!DOCTYPE html>
<html>
<head>
<title>Awards</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:rgba(6,115,246,0.8);
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

.container {
    width: 1028px;
}
.container {
    width: 1028px;
}
.container {
    width: 960px;
}
.container {
    width: 740px;
}
.container {
    margin-right: auto;
    margin-left: auto;
    padding-left: 10px;
    padding-right: 10px;
}
p {
    border-bottom: 4px solid red;
    background-color:Linen;
    letter-spacing: 2px;
    font-family: 'Open Sans',sans-serif;
    font-size: 20px;
    line-height: 4.54;
    color: #666;
}

p1 {
     font-family:'Open Sans',sans-serif;
     font-size: 30px;
     color: #700;
   }

pre{
    font-family: 'Open Sans',sans-serif;
}


/*-----------------------------------------------------------------------*/
.container1 {
    overflow: hidden;
     background-color:rgba(2, 72, 5,0.8);
    
}

.container1 a {
     
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.f1 {
	text-align: center;
	color: white;
     }

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
   
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.container1 a:hover, .dropdown:hover .dropbtn {
    background-color: #111;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: ivory;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
	
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}


</style>
</head>
<body>

<?php include 'connect.php';?>

<img src="emblem3.png" align="left" style="width:60px;height:100px;">
<img src="fifalogo3.png" align="left" style="width:300px;height:100px;">
<br><br><br><br><br><br>
<div class="container1">
 <a href="home.html"> HOME</a>
 <a href="http://localhost/FIFA/schedule.php#matches"> SCHEDULES</a>
 <a href="http://localhost/FIFA/search1.php#players"> PLAYERS</a>

  <div class="dropdown">
    <button class="dropbtn">TEAMS</button>
    <div class="dropdown-content">
      <a href="http://localhost/FIFA/grp_a.php#group_A">GROUP A</a>
	  <a href="http://localhost/FIFA/grp_b.php#group_B">GROUP B</a>
     
    </div>
  </div> 

  
 <a href="http://localhost/FIFA/pt.php#schedules">STANDINGS</a>

 <a href="http://localhost/FIFA/award1.php#awards"> AWARDS</a>
 <a href="venue.html#venues"> VENUES</a>

</div>
<br>

<br><p1>AWARDS</p1><br>

<p>Adidas Golden Ball</p>


<?php 

$result=$conn->query("select Name from Player where Player_Id=55;");
$res = $conn->query("select T_Name from Team,Player where Team.Team_Id=Player.T_Id and Player.Player_Id = 55 ;");
$img = $conn->query("select T_Image from Team where Team_Id = 'ARG';");
$awa = $conn->query("select A_Image from Awards where Player_Id=55;");
    

    $aw = $awa->fetch_assoc();
    echo "<img src =", $aw["A_Image"] ," width='652' height='366' align='left'>";   
    

    $row = $result->fetch_assoc();
     echo "<h2><pre>   ",$row["Name"],"</pre></h2>";  

      

        $im = $img->fetch_assoc();  
        $r1 = $res->fetch_assoc();
        echo "<pre>     <img src =", $im["T_Image"] , " width='70' height='40'>    " , $r1["T_Name"],"<br><br></pre>";   


    echo "<pre>     The adidas golden ball was awarded to Argentina captian <br>	  	", $row["Name"]," for his outstanding displays at Germany 2017.<br><br>";
    echo "<img src='ball.png' align='padding-right'>";

?>

<p>Adidas Golden Boot</p>

<?php 

$result=$conn->query("select Name from Player where Player_Id=16;");
$res = $conn->query("select T_Name from Team,Player where Team.Team_Id=Player.T_Id and Player.Player_Id = 16 ;");
$img = $conn->query("select T_Image from Team where Team_Id = 'POR';");
$awa = $conn->query("select A_Image from Awards where Player_Id=16;");
    

    $aw = $awa->fetch_assoc();
    echo "<img src =", $aw["A_Image"] ," width='652' heigh='366' align='left'> ";   

    $row = $result->fetch_assoc();
    echo "<h2><pre>   ",$row["Name"],"</pre></h2>";

        $im = $img->fetch_assoc();      
        $r1 = $res->fetch_assoc();

        echo "<pre>     <img src =", $im["T_Image"] , " width='70' height='40'>    ",$r1["T_Name"], "<br><br></pre>";

    
    echo "<pre>     The adidas Golden Boot award goes to the top goalscorer <br>     of the FIFA World Cup who at Germany 2017 was Portugal's ",$row["Name"],"</pre><br><br>";
     echo "<img src='boot.png' align='padding-right'>";
?>

<p>Adidas Golden Glove</p>


<?php 

$result=$conn->query("select Name from Player where Player_Id=17;");
$res = $conn->query("select T_Name from Team,Player where Team.Team_Id=Player.T_Id and Player.Player_Id = 17; ");
$img = $conn->query("select T_Image from Team where Team_Id = 'POR';;");
$awa = $conn->query("select A_Image from Awards where Player_Id=17;");
    

    $aw = $awa->fetch_assoc();
    echo "<img src =", $aw["A_Image"] ," width='652' heigh='366' align='left'>";   

    $row = $result->fetch_assoc();
    echo "<h2><pre>   ",$row["Name"],"</h2></pre>";
        
        $im = $img->fetch_assoc();      
        $r1 = $res->fetch_assoc();

        echo "<pre>     <img src =", $im["T_Image"] , " width='70' height='40'>    " ,$r1["T_Name"],"<br><br></pre>";


    echo "<pre>     The adidas Golden Glove award goes to the tournament's most <br>   outstanding goalkeeper who at Germany 2017 was deemed 
     to be Portugal's ",$row["Name"],'<br><br></pre>';
     echo "<img src='glove.png' align='padding-right'>";
    
?>

<p>Hyundai Fair Play Award</p>

<?php 

$result=$conn->query("select Name from Player where Player_Id=14;");
$res = $conn->query("select T_Name from Team,Player where Team.Team_Id=Player.T_Id and Player.Player_Id = 14 ;");
$img = $conn->query("select T_Image from Team where Team_Id = 'SPA';");
$awa = $conn->query("select A_Image from Awards where Player_Id=14;");
    

    $aw = $awa->fetch_assoc();
    echo "<img src =", $aw["A_Image"] ," width='652' heigh='366' align='left'>";   
    
    $row = $result->fetch_assoc();
    echo "<h2><pre>   ",$row["Name"],"</h2></pre>";
        
        $im = $img->fetch_assoc();      
        $r1 = $res->fetch_assoc();

        echo "<pre>     <img src =", $im["T_Image"] , " width='70' height='40'>    " ,$r1["T_Name"],"<br><br>";
        

    echo "     The Hyundai Young Player award was awarded to Spain's ",$row["Name"]," <br>   for his excellent displays at Germany 2017<br><br><br></pre>";
     echo "<img src='youngplayer.png' align='padding-right'>";
    
?>

</body>
</html>

