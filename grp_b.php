<!DOCTYPE html>
<html>
<head>
<title>Group_B</title>

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
  color: black;
  font-size:45px;
  font-weight:500;
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

/*---------------------------------------------------------------------------------------------*/
body
   {
    text-align: center;
    background-image: url("back.png");
    background-size:cover;
    font-family: sans-serif;
    font-weight: 100;
    background-repeat: no-repeat;
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

p1
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

.containermain {
  width:48%;
  height:250px;
  background-color: rgba(0,0,0,0.5);
  margin-right: 10px;
  margin-left:10px
  margin-top:20px;
  margin-bottom: 10px;
  border-radius:10px;
  float:inline-start;
}

header{
    margin-top:5px;
    width:50%;
    height:50px;
    color: black;
    background-color: rgba(255,204,0,0.5);
    text-align: center;
    border-radius:10px;
display:inline-block;

}

.imagestyle {
    height : 180px; 
    width : 180px; 
    margin-bottom: 25px; 
    margin-top: 25px;
    margin-left: 50px;
    margin-right: 15px;
    border-radius:50%;
  }

r1{
    font-size:35px;
    font-weight:500;
}

pre
{
  font-size : 14.5px;
  text-align: left;
   color:white;
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

 <div class="f1">GROUP B </div>
<br>
<?php
  $country1=$conn->query("select Country from Group_B where Position=1;");
  $con1=$country1->fetch_assoc();
 
  $cname1=$conn->query("select T_Name from Team where Team_Id='$con1[Country]';");
  $cn1=$cname1->fetch_assoc();
  


  $country2=$conn->query("select Country from Group_B where Position=2;");
  $con2=$country2->fetch_assoc();

  $cname2=$conn->query("select T_Name from Team where Team_Id='$con2[Country]';");
  $cn2=$cname2->fetch_assoc();
 

  $country3=$conn->query("select Country from Group_B where Position=3;");
  $con3=$country3->fetch_assoc();

  $cname3=$conn->query("select T_Name from Team where Team_Id='$con3[Country]';");
  $cn3=$cname3->fetch_assoc();
 

  $country4=$conn->query("select Country from Group_B where Position=4;");
  $con4=$country4->fetch_assoc();

  $cname4=$conn->query("select T_Name from Team where Team_Id='$con4[Country]';");
  $cn4=$cname4->fetch_assoc();
 
?>

<div class="containermain">
<header><r1><?php echo $cn1["T_Name"] ;?></r1></header>

<?php
      $sql="select T_Image from Team where Team_Id='$con1[Country]';";
      $result=$conn->query($sql);
      $res=$result->fetch_assoc();
      echo "<img src=",$res["T_Image"]," class='imagestyle' align='left'>";

     $captain=$conn->query("select Captain from Team where Team_Id='$con1[Country]';");
     $cap=$captain->fetch_assoc();

     $manager=$conn->query("select Manager from Team where Team_Id='$con1[Country]';");
     $man=$manager->fetch_assoc();
    

     $website=$conn->query("select Website from Team where Team_Id='$con1[Country]';");
     $web=$website->fetch_assoc();
      

     $nickname=$conn->query("select Nickname from Team where Team_Id='$con1[Country]';");
     $nick=$nickname->fetch_assoc();
    
          echo "<br><br><br>";
          echo "<pre>     Captain  : <b>", $cap["Captain"] ,"</pre></b>";
          echo "<pre>     Manager  : <b>", $man["Manager"], "</pre></b>";
          echo "<pre>     Website  : <b>",$web["Website"],"</pre></b>";
          echo "<pre>     Nickname : <b>",$nick["Nickname"],"</pre></b>"; 

  ?>

</div>


<div class="containermain">
<header><r1><?php echo $cn2["T_Name"] ;?></r1></header>
<?php
      $sql="select T_Image from Team where Team_Id='$con2[Country]';";
      $result=$conn->query($sql);
      $res=$result->fetch_assoc();
      echo "<img src=",$res["T_Image"]," class='imagestyle' align='left'>";

     $captain=$conn->query("select Captain from Team where Team_Id='$con2[Country]';");
     $cap=$captain->fetch_assoc();

     $manager=$conn->query("select Manager from Team where Team_Id='$con2[Country]';");
     $man=$manager->fetch_assoc();
    

     $website=$conn->query("select Website from Team where Team_Id='$con2[Country]';");
     $web=$website->fetch_assoc();
      

     $nickname=$conn->query("select Nickname from Team where Team_Id='$con2[Country]';");
     $nick=$nickname->fetch_assoc();
    
          echo "<br><br><br>";
          echo "<pre>     Captain  : <b>", $cap["Captain"] ,"</pre></b>";
          echo "<pre>     Manager  : <b>", $man["Manager"], "</pre></b>";
          echo "<pre>     Website  : <b>",$web["Website"],"</pre></b>";
          echo "<pre>     Nickname : <b>",$nick["Nickname"],"</pre></b>"; 

  ?>

</div>


<div class="containermain">
<header><r1><?php echo $cn3["T_Name"] ;?></r1></header>
<?php
      $sql="select T_Image from Team where Team_Id='$con3[Country]';";
      $result=$conn->query($sql);
      $res=$result->fetch_assoc();
      echo "<img src=",$res["T_Image"]," class='imagestyle' align='left'>";

     $captain=$conn->query("select Captain from Team where Team_Id='$con3[Country]';");
     $cap=$captain->fetch_assoc();

     $manager=$conn->query("select Manager from Team where Team_Id='$con3[Country]';");
     $man=$manager->fetch_assoc();
    

     $website=$conn->query("select Website from Team where Team_Id='$con3[Country]';");
     $web=$website->fetch_assoc();
      

     $nickname=$conn->query("select Nickname from Team where Team_Id='$con3[Country]';");
     $nick=$nickname->fetch_assoc();
    
          echo "<br><br><br>";
          echo "<pre>     Captain  : <b>", $cap["Captain"] ,"</pre></b>";
          echo "<pre>     Manager  : <b>", $man["Manager"], "</pre></b>";
          echo "<pre>     Website  : <b>",$web["Website"],"</pre></b>";
          echo "<pre>     Nickname : <b>",$nick["Nickname"],"</pre></b>"; 

  ?>

</div>


<div class="containermain">
<header><r1><?php echo $cn4["T_Name"] ;?></r1></header>
<?php
      $sql="select T_Image from Team where Team_Id='$con4[Country]';";
      $result=$conn->query($sql);
      $res=$result->fetch_assoc();
      echo "<img src=",$res["T_Image"]," class='imagestyle' align='left'>";

     $captain=$conn->query("select Captain from Team where Team_Id='$con4[Country]';");
     $cap=$captain->fetch_assoc();

     $manager=$conn->query("select Manager from Team where Team_Id='$con4[Country]';");
     $man=$manager->fetch_assoc();
    

     $website=$conn->query("select Website from Team where Team_Id='$con4[Country]';");
     $web=$website->fetch_assoc();
      

     $nickname=$conn->query("select Nickname from Team where Team_Id='$con4[Country]';");
     $nick=$nickname->fetch_assoc();
    
          echo "<br><br><br>";
          echo "<pre>     Captain  : <b>", $cap["Captain"] ,"</pre></b>";
          echo "<pre>     Manager  : <b>", $man["Manager"], "</pre></b>";
          echo "<pre>     Website  : <b>",$web["Website"],"</pre></b>";
          echo "<pre>     Nickname : <b>",$nick["Nickname"],"</pre></b>"; 

  ?>

</div>

</body>
</html>
