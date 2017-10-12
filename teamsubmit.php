<!DOCTYPE html>
<html>
<head>
<style>
body
   {
    overflow-y:auto;
     overflow-x:hidden;
    background-image: url("backgnd5.jpg");
    background-size:cover;
    font-family: sans-serif;
    font-weight: 100;
    font-color:white;
    background-repeat: no-repeat;
    }



div.container1{
      
      width:30%;
      height: 200px;
      position: relative;
      top:185px;
      text-align: center;
      background-color:rgba(0,0,0,0.0);  
      
}


div.container2{
    
      width:30%;
     height: 200px;
      position: relative;
      left: 880px;
      top:-10px;
      display: inline-block;      
      text-align: center;
      background-color:rgba(0,0,0,0.0);
     
}

div.container3{
     
      width:30%;
      position: relative;
      left: 15px;
      top:-150px;
      display: inline-block;      
      text-align: center;
}

div.container4{
      
      width:30%;
      position: relative;
      left: 660px;
      top:-10px;
      text-align: center;
}

div.container5{
      
      width:30%;
      position: relative;
      left: 260px;
      bottom:120px;
      text-align: center;
      display: inline-block;
}

div.container6{
      
      width:30%;
      position: relative;
      left: 10px;
      bottom:350px;
      text-align: center;
      display: inline-block;
}

.containermain {
  width:1500px;
  height:400px;
  background-color: rgba(0,0,0,0.0);
  position: relative;
  top:50px;

  }

header{
    padding: 1em;
    color: white;
    background-color: rgba(0,0,0,1.0);
    clear: left;
    text-align: center;
}

.styled-select1 select {
   background: transparent;
  	margin-left: 40px;
   width: 170px;
   font-size: 25px;
  color:black;
   line-height: 5;
   border: 0;
   border-radius: 0;
   height: 34px;
   -webkit-appearance: none;
  }

.styled-select2 select {
   background: transparent;
  	margin-left: 40px;
   width: 170px;
   font-size: 25px;
  color:black;
   line-height: 5;
   border: 0;
   border-radius: 0;
   height: 34px;
   -webkit-appearance: none;
  }

.styled-select3 select {
   background: transparent;
  	margin-right: -90px;
   width: 268px;
   font-size: 25px;
  color:black;
   line-height: 5;
   border: 0;
   border-radius: 0;
   height: 34px;
   -webkit-appearance: none;
  }

.styled-select4 select {
   background: transparent;
  	margin-left: 0px;
   width: 70px;
   font-size: 25px;
  color:black;
   line-height: 5;
   border: 0;
   border-radius: 0;
   height: 34px;
   -webkit-appearance: none;
  }


.styled-select5 select {
   background: transparent;
  	margin-left: 10px;
   width: 130px;
   font-size: 25px;
  color:black;
   line-height: 5;
   border: 0;
   border-radius: 0;
   height: 34px;
   -webkit-appearance: none;
  }

.styled-select6 select {
   background: transparent;
    margin-left: 10px;
   width: 80px;
   font-size: 25px;
  color:black;
   line-height: 5;
   border: 0;
   border-radius: 0;
   height: 34px;
   -webkit-appearance: none;
    overflow: hidden;
    display:inline-block;
  }
  input[type=submit]{
font-size: 16px;
background-color: rgba(255,255,255,0.4);
border: 0.5px solid rgba(255,255,255,0.4)  ;
font-weight: bold;
cursor: pointer;
width: 15%;
padding: 10px 0;
outline:none;
margin-bottom:-80px ; 
}

input[type=submit]:hover{
background-color: rgba(250,250,250,0.4);
border: 1px solid:#004c00  ;
}

</style>
</head>

<body>
<form action="http://localhost/FIFA/scheduleback.php" method="get">

<?php include 'connect.php';

$t1=htmlspecialchars($_GET['team1']);
$t2=htmlspecialchars($_GET['team2']);
$match=htmlspecialchars($_GET['m']);


$tname1=$conn->query("select T_Name from Team where Team_Id='$t1';");
$tn1=$tname1->fetch_assoc();

$tname2=$conn->query("select T_Name from Team where Team_Id='$t2';");
$tn2=$tname2->fetch_assoc();

//echo "<h1>",$match,$t1," ",$t2,"</h1>";

?>


<div class="containermain">



<div class="container1">

<br>
<h1><?php echo $tn1["T_Name"];?></h1> 

</div>

<div class="container2">

<h1><?php echo $tn2["T_Name"];?></h1>

</div>

<div class="container3">
<h1>VENUE:</h1>
<div class="styled-select3">
<select name="venue">
  <option value="Allianz Arena">ALLIANZ ARENA</option>
  <option value="AOL Arena">AOL ARENA</option>
  <option value="Veltin Arena">VELTIN ARENA</option>
  <option value="Olympia Stadion">OLYMPIA STADION</option>
  <option value="Gottlieb-Dailmer Stadion">GOTTLIEB-DAIMLER STADION</option>
  <option value="Commerzbank Arena">COMMERZBANK ARENA</option>
  <option value="RheinEnergie Arena">RHEINENERGIE AREANA</option>
  <option value="AMD Arena">AMD ARENA</option>
  <option value="Zentral Stadion">ZENTRAL STADION</option>
  <option value="Veltin Arena">VELTIN ARENA</option>
  <option value="Signal Induna Park">SIGNAL INDUNA PARK</option>

</select></div>
</div>


<div class="container4">
<h1>TIME:</h1>
<div class="styled-select4">
<select name="time">
  <option value="2030 HRS">20:30</option>
  <option value="1600 HRS">16:00</option>
 </select>
</div>
</div>




<div class="container5">
<h1>DATE:</h1>
<div class="styled-select5">
<select name="date">
  <option value="14/09/2017">14/09/2017</option>
  <option value="15/09/2017">15/09/2017</option>
  <option value="16/09/2017">16/09/2017</option>
  <option value="17/09/2017">17/09/2017</option> 
  <option value="18/09/2017">18/09/2017</option> 
  <option value="19/09/2017">19/09/2017</option> 
 </select>

</div>
</div>

<div class="container6">
<h1>MATCH:</h1>
<div class="styled-select6">
<select name="match">
  <option value=<?php echo $match?>><?php echo $match?></option>
 </select>
</div>
</div>


<center>
<input type="submit" name="submit" value="Insert">
</center>

<?php include 'connect.php';


echo "<h1>",$a,"</h1>";

$a=1;

/*
if(isset($_GET['submit']))
{
    $venue=$_GET['venue'];
    $date=$_GET['date'];
    $time=$_GET['time'];
    $a=$_GET['match'];

    if($venue=="Allianz Arena")
      $city="Munich";
    if($venue=="AOL Arena")
      $city="Hamburg";
    if($venue=="Veltin Arena")
      $city="Gelsenkirchen";
    if($venue=="Gottlieb-Dailmer Stadion")
      $city="Stuttgart";
    if($venue=="Commerzbank Arena")
      $city="Frankfurt";
    if($venue=="RheinEnergie Arena")
      $city="Cologne";
    if($venue=="AWD Arena")
      $city="Hanover";
    if($venue=="Zentral Stadion")
      $city="Leipzig";
    if($venue=="Signal Induna Park")
      $city="Dortmund";
    if($venue=="AOL Arena")
      $city="Hamburg";
    if($venue=="Olympia Stadion")
      $city="Berlin";
    
    
    //header("Location:scheduleback.php");
    
  //  echo "<h1>",$a," ",$venue," ",$date," ",$city," ",$time,"</h1>";

    $result=$conn->query("update Fixtures set Venue='$venue',Date='$date',Time='$time',City='$city' where Match_NO=$a;");
      
    if($result)
    {
       // echo "<br><h1>".$venue."updated</h1>";
    }
    else
    {
        echo mysql_error();
    }
}
*/
?>
</form>

</div>
</body>
</html>