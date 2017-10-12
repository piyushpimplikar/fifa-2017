<!DOCTYPE html>
<html>
<head>


<title>Player</title>


<style>

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



body {
    background-image: url("backgnd.jpg");
    background-size: cover;
}



div.container {
      border: 1px solid gray;
}

header{
    margin-top:5px;
    padding: 0.1%;
    color: white;
    background-color: rgba(0,0,0,0.8);
    text-align: center;
    border-radius:10px;
}

r1{
    font-size:50px;
}


footer {
    padding: 1em;
    color: white;
    background-color: black;
    text-align: center;
    background: transparent;
}

.article {
    border-left: 1px solid gray;
    padding: 1%;
    overflow: hidden;
    float:left;
}
.data
{
  display: inline;  
  float:left;
}
.graph {
    width: 400px;
    height: 380px;
    border: 2px solid black;
    display: float;  
    background-color: rgba(0,0,0,0.7);
    margin-left: 920px;
    margin-top: 10px;
    float:right;
    position: absolute;
}
.bar {
    width: 25px;
    margin: 15px;
    display: inline-block;
    position: relative;
    background-color: white;
    vertical-align: baseline;
}

.containermain {
  width:100%;
  height:400px;
  background-color: rgba(0,0,0,0.7);
  margin-right: 25px;
  margin-left:25px
  margin-top:25px;
  margin-bottom: 25px;
}

p
{
	font-size:20px; 
	font-style: italic;
	font-family: Monoline;
	font-variant: normal;
	font-weight: 500;
	line-height: 20px;
        color:ivory;
	position: relative;
     	left: 250px;
}


.p1
{
	font-size:20px; 
	font-style: italic;
	font-family: Monoline;
	text-align: center;
	font-variant: normal;
	font-weight: 500;
	line-height: 20px;
        color:black;

}

pre
{
  font-size : 16px;
  text-align: left;
   color:white;
}



</style>
</head>

  

<body>
<?php include 'connect.php';?>

<img src="emblem3.png" align="left" style="width:60px;height:100px;">
<img src="fifalogo3.png" align="left" style="width:300px;height:100px;">
<br><br><br><br><br><br><br>
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
<div class="container">

  <header>
  <?php
    //$result=$conn->query("select Name from Player where Player_Id=1;");
    //$res=$result->fetch_assoc();
    $mno=htmlspecialchars($_GET['name']);
    echo "<r1>", $mno ,"</r1>";
    ?>

  </header>
  

<div class="containermain">
  <div class="article">
      
        <?php

            $sql="select P_Image from Player where Name='$mno';";
            $result=$conn->query($sql);
            $res=$result->fetch_assoc();
            echo "<img src='", $res["P_Image"], "'alt='Player 1' width='300' height='325' style='margin-left:25px'>";

        $res = $conn->query("select T_Image from Team,Player where Team.Team_Id=Player.T_Id and Player.Name='$mno' ;");
          $flag = $res->fetch_assoc();
        $player = $conn->query("select Name from Player where Name='$mno';"); 
          $p_name = $player->fetch_assoc();

        $country = $conn->query("select T_Name from Team,Player where Team.Team_Id=Player.T_Id and Player.Name='$mno' ;");
        $age = $conn->query("select Age from Player where Name='$mno';"); 
        $height = $conn->query("select Height from Player where Name='$mno';"); 
        $weight = $conn->query("select Weight from Player where Name='$mno';"); 
        $position = $conn->query("select Position from Player where Name='$mno';"); 
        $jersey = $conn->query("select J_No,Player_Id from Player where Name='$mno';");

        

        $c1=$country->fetch_assoc();
        $a1=$age->fetch_assoc();
        $h1=$height->fetch_assoc();
        $w1=$weight->fetch_assoc();
        $p1=$position->fetch_assoc();
        $j1=$jersey->fetch_assoc();
        //goals
        $goals = $conn->query("select Goals from Skills where P_Id=$j1[Player_Id];");
        $goa=$goals->fetch_assoc();
        //skills
        $skills=$conn->query("select Pace,Dribbling,Shot_Power,Defence,Passes,Phy_Stength from Skills,Player where Skills.P_Id=Player_Id and Player.Name='$mno';");
        $s=$skills->fetch_assoc();

          $avg=($s["Pace"]+$s["Dribbling"]+$s["Shot_Power"]+$s["Defence"]+$s["Passes"]+$s["Phy_Stength"])/6;
          
          
        ?>
  </div>
        
        <div class="data">
        <?php

          echo "<pre>     <img src =", $flag["T_Image"], " width='70' height='50'><b><font size='6'>   ",$p_name["Name"],"</font><font size='7'>    ",intval($avg),"</b></font>  ",$p1["Position"],"</pre>";
          echo "<pre>     Country : <b>", $c1["T_Name"],"</pre></b>";
          echo "<pre>     Age : <b>", $a1["Age"], "</pre></b>";
          echo "<pre>     Height : <b>",$h1["Height"]," meter</pre></b>";
          echo "<pre>     Weight : <b>",$w1["Weight"]," kilos</pre></b>";
          echo "<pre>     Position : <b>",$p1["Position"],"</pre></b>";
          echo "<pre>     Jersey No : <b>",$j1["J_No"],"</pre></b>";
          echo "<pre>     No. of Goals : <b>",$goa["Goals"],"</pre></b>";
        ?>
       
        </div>

<div class="graph">

        
              <div style="height:<?php echo $s["Pace"]*3 ?>px;" class="bar"></div><!--
              --><div style="height:<?php echo $s["Dribbling"]*3 ?>px;" class="bar"></div><!--
              --><div style="height: <?php echo $s["Shot_Power"]*3 ?>px;" class="bar"></div><!--
              --><div style="height: <?php echo $s["Defence"]*3 ?>px;" class="bar"></div><!--
              --><div style="height: <?php echo $s["Passes"]*3 ?>px;" class="bar"></div><!--
            --><div style="height: <?php echo $s["Phy_Stength"]*3 ?>px;" class="bar"></div>
            <br><pre>  PAC  DRI  SHO   DEF   PAS  PHY</pre>
            </div>

      </div>




  
</div>
  



</body>
</html>

