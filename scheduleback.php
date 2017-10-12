<html>
<head>
<title>SCHEDULE ADMIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<style>

/*---------------------------------------------------------------------------------------------*/
body
   {
    text-align: center;
    background-image: url("//back1.jpeg");
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

.containermain1 {
  width:15%;
  background-color: rgba(0,0,0,0.3);
  margin-left:100px
  margin-top:10px;
  margin-bottom: 10px;
  display:inline-block;
  overflow-y:auto;
}

.containermain2 {
  width:10%;
  background-color: rgba(0,0,0,0.3);
  margin-top:10px;
  margin-bottom: 10px;
  display:inline-block;
  overflow-y:auto;}

.containermain3 {
  width:38%;
  background-color: rgba(0,0,0,0.3);
  margin-top:10px;
  margin-bottom: 10px;
  display:inline-block;
  overflow-y:hidden; 
}

.containermain4 {
  width:20%;
  background-color: rgba(0,0,0,0.3);
  margin-top:10px;
  margin-bottom: 10px;
  display:inline-block;
  overflow-y:auto;}

.containermain5 {
  width:15%;
  background-color: rgba(0,0,0,0.3);
  margin-top:10px;
  margin-bottom: 10px;
  display:inline-block;
  overflow-y:auto;}

.containerrp1{
    
      width:100%;
      height:10%;
      background-color: rgba(0,0,0,0.7);

}
.containerrp2{
      width:100%;
      height:10%;
      background-color: rgba(0,0,0,0.4);
}



header{

    width:100%;
    height:50px;
    color: white;
    background-color: rgba(255,255,255,0.5);
    border-radius:10px;

}

.imagestyle1 {
    height : 50px; 
    width : 50px;  
    margin-top: 5px;
    margin-left:-50px; 
    border-radius:50%;
    position:relative;
    display: inline-block;
    

  }
  .imagestyle2 {
    height : 50px; 
    width : 50px;  
    margin-top: 5px;
    border-radius:50%;
    position:absolute;

  }
r1{

    font-size:16.5px;
    font-weight:300;
    color:white;
       
}
r2{
    font-size:30px;
    font-weight:500; 
    color:black; 


}

.textcontainer {
  


    width:40%;
    height:50%;
    background-color: rgba(0,0,0,0.0);

   font-size:18px;
   font-weight:50;
   color:white;
   
   text-align: center;
   display: inline-block;
   margin-top:-45px;
  position: relative;


}
input[type=submit]{
font-size: 16px;
background-color:#4c4cff;
color: white;
border: 1px solid #4c4cff  ;
font-weight: bold;
cursor: pointer;
width: 20%;
border-radius: 5px;
padding: 10px 0;
outline:none;
margin-bottom:-80px ; 
}

input[type=submit]:hover{
background-color: #004c00;
border: 1px solid:#004c00  ;
}


</style>
<body>

<?php include 'connect.php';?>

<?php

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
     if($venue=="AMD Arena")
      $city="Hanover";
    
    //header("Location:scheduleback.php");
    
    //echo "<h1>",$a," ",$venue," ",$date," ",$city," ",$time,"</h1>";

    $result=$conn->query("update Fixtures set Venue='$venue',Date='$date',Time='$time',City='$city' where Match_NO=$a;");
      
    // if($result)
     //{
    //    // echo "<br><h1>".$venue."updated</h1>";
    // }
    // else
    // {
    //     echo mysql_error();
    // } 
  ?>
 
<?php 
    
    $name1=$_GET['Team1'];
    $name2=$_GET['Team2'];
    $name3=$_GET['Team3'];
    $name4=$_GET['Team4'];
    $name5=$_GET['Team5'];
    $name6=$_GET['Team6'];
    $name7=$_GET['Team7'];
    $name8=$_GET['Team8'];
    
    $conid1=$conn->query("select Team_Id from Team where T_Name='$name1';");
    $cid1=$conid1->fetch_assoc();
  
    $conid2=$conn->query("select Team_Id from Team where T_Name='$name2';");
    $cid2=$conid2->fetch_assoc();

    $conid3=$conn->query("select Team_Id from Team where T_Name='$name3';");
    $cid3=$conid3->fetch_assoc();

    $conid4=$conn->query("select Team_Id from Team where T_Name='$name4';");
    $cid4=$conid4->fetch_assoc();

    $conid5=$conn->query("select Team_Id from Team where T_Name='$name5';");
    $cid5=$conid5->fetch_assoc();

    $conid6=$conn->query("select Team_Id from Team where T_Name='$name6';");
    $cid6=$conid6->fetch_assoc();

    $conid7=$conn->query("select Team_Id from Team where T_Name='$name7';");
    $cid7=$conid7->fetch_assoc();

    $conid8=$conn->query("select Team_Id from Team where T_Name='$name8';");
    $cid8=$conid8->fetch_assoc();
    
    $result1=$conn->query("update Group_A set Country='$cid1[Team_Id]' where Position=1;");
    $result2=$conn->query("update Group_A set Country='$cid2[Team_Id]' where Position=2;");
    $result3=$conn->query("update Group_A set Country='$cid3[Team_Id]' where Position=3;");
    $result4=$conn->query("update Group_A set Country='$cid4[Team_Id]' where Position=4;");

    $result5=$conn->query("update Group_B set Country='$cid5[Team_Id]' where Position=1;");
    $result6=$conn->query("update Group_B set Country='$cid6[Team_Id]' where Position=2;");
    $result7=$conn->query("update Group_B set Country='$cid7[Team_Id]' where Position=3;");
    $result8=$conn->query("update Group_B set Country='$cid8[Team_Id]' where Position=4;");
   

$ch=1;

$c=1;
for($i=1;$i<=4;$i++)
{
  for($j=$i+1;$j<=4;$j++)
  {
    
    if($i!=$j)
    {

      $team1=$conn->query("select Country from Group_A where Position=$i;");
      $team2=$conn->query("select Country from Group_A where Position=$j;");

      $t1=$team1->fetch_assoc();
      $t2=$team2->fetch_assoc();

      if($ch==1)
      {
        $a=$t1["Country"];
        $b=$t2["Country"];
      }
      else
      {
        $a=$t2["Country"];
        $b=$t1["Country"];
      }

      
      $sql = "update Draws set Team_1='$a',Team_2='$b',Win=NULL,Lost=NULL,Scoreline=NULL where Match_No=$c;";
      $c=$c+1;
      $conn->query($sql);
    
    }


    if($i!=$j)
    {

      $team1=$conn->query("select Country from Group_B where Position=$i;");
      $team2=$conn->query("select Country from Group_B where Position=$j;");

      $t1=$team1->fetch_assoc();
      $t2=$team2->fetch_assoc();

      if($ch==1)
      {
        $a=$t1["Country"];
        $b=$t2["Country"];
      }
      else
      {
        $a=$t2["Country"];
        $b=$t1["Country"];
      }
      

      $ch=0;
      
      $sql = "update Draws set Team_1='$a',Team_2='$b',Win=NULL,Lost=NULL,Scoreline=NULL where Match_No=$c;";
      $c=$c+1;
      $conn->query($sql);
    
    }
  }
}



$conn->query("update Draws set Team_1=NULL,Team_2=NULL,Win=NULL,Lost=NULL,Scoreline=NULL where Match_No=13;");
$conn->query("update Draws set Team_1=NULL,Team_2=NULL,Win=NULL,Lost=NULL,Scoreline=NULL where Match_No=14;");
$conn->query("update Draws set Team_1=NULL,Team_2=NULL,Win=NULL,Lost=NULL,Scoreline=NULL where Match_No=15;");
$conn->query("update Draws set Team_1=NULL,Team_2=NULL,Win=NULL,Lost=NULL,Scoreline=NULL where Match_No=16;");

$conn->query("update Group_A set Total=0,Win=0,Lost=0,Draw=0,Points=0;");
$conn->query("update Group_B set Total=0,Win=0,Lost=0,Draw=0,Points=0;");

//$conn->query("set @disable_triggers=1");

?>

 <h1>SCHEDULE</h1>
<br>

<form action="http://localhost/FIFA/home.html">

<div class="containermain1">
<header><r2>DATE</r2></header>
<?php
      $date1=$conn->query("select Date from Fixtures where Match_No='1';");
      $d1=$date1->fetch_assoc();

      $date2=$conn->query("select Date from Fixtures where Match_No='2';");
      $d2=$date2->fetch_assoc();

      $date3=$conn->query("select Date from Fixtures where Match_No='3';");
      $d3=$date3->fetch_assoc();      
      
      $date4=$conn->query("select Date from Fixtures where Match_No='4';");
      $d4=$date4->fetch_assoc();
       
      $date5=$conn->query("select Date from Fixtures where Match_No='5';");
      $d5=$date5->fetch_assoc();
      
      $date6=$conn->query("select Date from Fixtures where Match_No='6';");
      $d6=$date6->fetch_assoc();
      
      $date7=$conn->query("select Date from Fixtures where Match_No='7';");
      $d7=$date7->fetch_assoc();
      
      $date8=$conn->query("select Date from Fixtures where Match_No='8';");
      $d8=$date8->fetch_assoc();

      $date9=$conn->query("select Date from Fixtures where Match_No='9';");
      $d9=$date9->fetch_assoc();

      $date10=$conn->query("select Date from Fixtures where Match_No='10';");
      $d10=$date10->fetch_assoc();

      $date11=$conn->query("select Date from Fixtures where Match_No='11';");
      $d11=$date11->fetch_assoc();

      $date12=$conn->query("select Date from Fixtures where Match_No='12';");
      $d12=$date12->fetch_assoc();

      $date13=$conn->query("select Date from Fixtures where Match_No='13';");
      $d13=$date13->fetch_assoc();

      $date14=$conn->query("select Date from Fixtures where Match_No='14';");
      $d14=$date14->fetch_assoc();

      $date15=$conn->query("select Date from Fixtures where Match_No='15';");
      $d15=$date15->fetch_assoc();

      $date16=$conn->query("select Date from Fixtures where Match_No='16';");
      $d16=$date16->fetch_assoc();

?>

<div class="containerrp1"><r1><br><?php echo $d1["Date"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $d2["Date"] ?></r1></div> 
<div class="containerrp1"><r1><br><?php echo $d3["Date"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $d4["Date"] ?></r1></div>

<div class="containerrp1"><r1><br><?php echo $d5["Date"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $d6["Date"] ?></r1></div> 
<div class="containerrp1"><r1><br><?php echo $d7["Date"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $d8["Date"] ?></r1></div>

<div class="containerrp1"><r1><br><?php echo $d9["Date"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $d10["Date"] ?></r1></div> 
<div class="containerrp1"><r1><br><?php echo $d11["Date"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $d12["Date"] ?></r1></div>

<div class="containerrp1"><r1><br><?php echo $d13["Date"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $d14["Date"] ?></r1></div> 
<div class="containerrp1"><r1><br><?php echo $d15["Date"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $d16["Date"] ?></r1></div>


</div>

<div class="containermain2">
<header><r2>TIME</r2></header>

<?php

      $time1=$conn->query("select Time from Fixtures where Match_No='1';");
      $t1=$time1->fetch_assoc();

      $time2=$conn->query("select Time from Fixtures where Match_No='2';");
      $t2=$time2->fetch_assoc();

      $time3=$conn->query("select Time from Fixtures where Match_No='3';");
      $t3=$time3->fetch_assoc();      
      
      $time4=$conn->query("select Time from Fixtures where Match_No='4';");
      $t4=$time4->fetch_assoc();
       
      $time5=$conn->query("select Time from Fixtures where Match_No='5';");
      $t5=$time5->fetch_assoc();
      
      $time6=$conn->query("select Time from Fixtures where Match_No='6';");
      $t6=$time6->fetch_assoc();
      
      $time7=$conn->query("select Time from Fixtures where Match_No='7';");
      $t7=$time7->fetch_assoc();
      
      $time8=$conn->query("select Time from Fixtures where Match_No='8';");
      $t8=$time8->fetch_assoc();

      $time9=$conn->query("select Time from Fixtures where Match_No='9';");
      $t9=$time9->fetch_assoc();

      $time10=$conn->query("select Time from Fixtures where Match_No='10';");
      $t10=$time10->fetch_assoc();

      $time11=$conn->query("select Time from Fixtures where Match_No='11';");
      $t11=$time11->fetch_assoc();

      $time12=$conn->query("select Time from Fixtures where Match_No='12';");
      $t12=$time12->fetch_assoc();

      $time13=$conn->query("select Time from Fixtures where Match_No='13';");
      $t13=$time13->fetch_assoc();

      $time14=$conn->query("select Time from Fixtures where Match_No='14';");
      $t14=$time14->fetch_assoc();

      $time15=$conn->query("select Time from Fixtures where Match_No='15';");
      $t15=$time15->fetch_assoc();

      $time16=$conn->query("select Time from Fixtures where Match_No='16';");
      $t16=$time16->fetch_assoc();

?>

<div class="containerrp1"><r1><br><?php echo $t1["Time"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $t2["Time"] ?></r1></div>
<div class="containerrp1"><r1><br><?php echo $t3["Time"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $t4["Time"] ?></r1></div>

<div class="containerrp1"><r1><br><?php echo $t5["Time"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $t6["Time"] ?></r1></div>
<div class="containerrp1"><r1><br><?php echo $t7["Time"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $t8["Time"] ?></r1></div>

<div class="containerrp1"><r1><br><?php echo $t9["Time"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $t10["Time"] ?></r1></div>
<div class="containerrp1"><r1><br><?php echo $t11["Time"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $t12["Time"] ?></r1></div>

<div class="containerrp1"><r1><br><?php echo $t13["Time"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $t14["Time"] ?></r1></div>
<div class="containerrp1"><r1><br><?php echo $t15["Time"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $t16["Time"] ?></r1></div>

</div>

<?php
      $T_Image1=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=1;");
      $m11=$T_Image1->fetch_assoc();

      $T_Image2=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=1;");
      $m12=$T_Image2->fetch_assoc();

      $T_Image3=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=2;");
      $m21=$T_Image3->fetch_assoc();      
      
      $T_Image4=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=2;");
      $m22=$T_Image4->fetch_assoc();
       
      $T_Image5=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=3;");
      $m31=$T_Image5->fetch_assoc();
      
      $T_Image6=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=3;");
      $m32=$T_Image6->fetch_assoc();
      
      $T_Image7=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=4;");
      $m41=$T_Image7->fetch_assoc();
      
      $T_Image8=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=4;");
      $m42=$T_Image8->fetch_assoc();

      $T_Image9=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=5;");
      $m51=$T_Image9->fetch_assoc();
      
      $T_Image10=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=5;");
      $m52=$T_Image10->fetch_assoc();

      $T_Image11=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=6;");
      $m61=$T_Image11->fetch_assoc();
      
      $T_Image12=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=6;");
      $m62=$T_Image12->fetch_assoc();

      $T_Image13=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=7;");
      $m71=$T_Image13->fetch_assoc();
      
      $T_Image14=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=7;");
      $m72=$T_Image14->fetch_assoc();

      $T_Image15=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=8;");
      $m81=$T_Image15->fetch_assoc();
      
      $T_Image16=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=8;");
      $m82=$T_Image16->fetch_assoc();

      $T_Image17=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=9;");
      $m91=$T_Image17->fetch_assoc();
      
      $T_Image18=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=9;");
      $m92=$T_Image18->fetch_assoc();


      $T_Image19=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=10;");
      $m101=$T_Image19->fetch_assoc();
      
      $T_Image20=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=10;");
      $m102=$T_Image20->fetch_assoc();

      $T_Image21=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=11;");
      $m111=$T_Image21->fetch_assoc();
      
      $T_Image22=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=11;");
      $m112=$T_Image22->fetch_assoc();

      $T_Image23=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=12;");
      $m121=$T_Image23->fetch_assoc();
      
      $T_Image24=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=12;");
      $m122=$T_Image24->fetch_assoc();

      $T_Image25=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=13;");
      $m131=$T_Image25->fetch_assoc();
      
      $T_Image26=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=13;");
      $m132=$T_Image26->fetch_assoc();

      $T_Image27=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=14;");
      $m141=$T_Image27->fetch_assoc();
      
      $T_Image28=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=14;");
      $m142=$T_Image28->fetch_assoc();


      $T_Image29=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=15;");
      $m151=$T_Image29->fetch_assoc();
      
      $T_Image30=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=15;");
      $m152=$T_Image30->fetch_assoc();

      $T_Image31=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=16;");
      $m161=$T_Image31->fetch_assoc();
      
      $T_Image32=$conn->query("select T_Image,Team_Id from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=16;");
      $m162=$T_Image32->fetch_assoc();



?>
<div class="containermain3">
<header><r2>MATCH</r2></header>



<div class="containerrp1"><?php echo "<img src=",$m11["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=1&team1=<?php echo $m11["Team_Id"];?>&team2=<?php echo $m12["Team_Id"]?>"><?php echo $m11["Team_Id"];?>-<?php echo $m12["Team_Id"]?></a></div><?php echo "<img src=",$m12["T_Image"]," class='imagestyle2'>"?></div> 


<div class="containerrp1"><?php echo "<img src=",$m21["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=2&team1=<?php echo $m21["Team_Id"];?>&team2=<?php echo $m22["Team_Id"]?>"><?php echo $m21["Team_Id"]?>-<?php echo $m22["Team_Id"]?></a></div><?php echo "<img src=",$m22["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m31["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=3&team1=<?php echo $m31["Team_Id"];?>&team2=<?php echo $m32["Team_Id"]?>"><?php echo $m31["Team_Id"]?>-<?php echo $m32["Team_Id"]?></a></div><?php echo "<img src=",$m32["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m41["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=4&team1=<?php echo $m41["Team_Id"];?>&team2=<?php echo $m42["Team_Id"]?>"><?php echo $m41["Team_Id"]?>-<?php echo $m42["Team_Id"]?></a></div><?php echo "<img src=",$m42["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m51["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=5&team1=<?php echo $m51["Team_Id"];?>&team2=<?php echo $m52["Team_Id"]?>"><?php echo $m51["Team_Id"]?>-<?php echo $m52["Team_Id"]?></a></div><?php echo "<img src=",$m52["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m61["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=6&team1=<?php echo $m61["Team_Id"];?>&team2=<?php echo $m62["Team_Id"]?>"><?php echo $m61["Team_Id"]?>-<?php echo $m62["Team_Id"]?></a></div><?php echo "<img src=",$m62["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m71["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=7&team1=<?php echo $m71["Team_Id"];?>&team2=<?php echo $m72["Team_Id"]?>"><?php echo $m71["Team_Id"]?>-<?php echo $m72["Team_Id"]?></a></div><?php echo "<img src=",$m72["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m81["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=8&team1=<?php echo $m81["Team_Id"];?>&team2=<?php echo $m82["Team_Id"]?>"><?php echo $m81["Team_Id"]?>-<?php echo $m82["Team_Id"]?></a></div><?php echo "<img src=",$m82["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m91["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=9&team1=<?php echo $m91["Team_Id"];?>&team2=<?php echo $m92["Team_Id"]?>"><?php echo $m91["Team_Id"]?>-<?php echo $m92["Team_Id"]?></a></div><?php echo "<img src=",$m92["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m101["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=10&team1=<?php echo $m101["Team_Id"];?>&team2=<?php echo $m102["Team_Id"]?>"><?php echo $m101["Team_Id"]?>-<?php echo $m102["Team_Id"]?></a></div><?php echo "<img src=",$m102["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m111["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=11&team1=<?php echo $m111["Team_Id"];?>&team2=<?php echo $m112["Team_Id"]?>"><?php echo $m111["Team_Id"]?>-<?php echo $m112["Team_Id"]?></a></div><?php echo "<img src=",$m112["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m121["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=12&team1=<?php echo $m121["Team_Id"];?>&team2=<?php echo $m122["Team_Id"]?>"><?php echo $m121["Team_Id"]?>-<?php echo $m122["Team_Id"]?></a></div><?php echo "<img src=",$m122["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m131["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=13&team1=<?php echo $m131["Team_Id"];?>&team2=<?php echo $m132["Team_Id"]?>"><?php echo $m131["Team_Id"]?>-<?php echo $m132["Team_Id"]?></a></div><?php echo "<img src=",$m132["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m141["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=14&team1=<?php echo $m141["Team_Id"];?>&team2=<?php echo $m142["Team_Id"]?>"><?php echo $m141["Team_Id"]?>-<?php echo $m142["Team_Id"]?></a></div><?php echo "<img src=",$m142["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m151["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=15&team1=<?php echo $m151["Team_Id"];?>&team2=<?php echo $m152["Team_Id"]?>"><?php echo $m151["Team_Id"]?>-<?php echo $m152["Team_Id"]?></a></div><?php echo "<img src=",$m152["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m161["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href="teamsubmit.php?m=16&team1=<?php echo $m161["Team_Id"];?>&team2=<?php echo $m162["Team_Id"]?>"><?php echo $m161["Team_Id"]?>-<?php echo $m162["Team_Id"]?></a></div><?php echo "<img src=",$m162["T_Image"]," class='imagestyle2'>"?></div> 

</div>
</div>

<div class="containermain4">
<header><r2>VENUE</r2></header>


<?php
      $Venue1=$conn->query("select Venue from Fixtures where Match_No='1';");
      $v1=$Venue1->fetch_assoc();

      $Venue2=$conn->query("select Venue from Fixtures where Match_No='2';");
      $v2=$Venue2->fetch_assoc();

      $Venue3=$conn->query("select Venue from Fixtures where Match_No='3';");
      $v3=$Venue3->fetch_assoc();      
      
      $Venue4=$conn->query("select Venue from Fixtures where Match_No='4';");
      $v4=$Venue4->fetch_assoc();
       
      $Venue5=$conn->query("select Venue from Fixtures where Match_No='5';");
      $v5=$Venue5->fetch_assoc();
      
      $Venue6=$conn->query("select Venue from Fixtures where Match_No='6';");
      $v6=$Venue6->fetch_assoc();
      
      $Venue7=$conn->query("select Venue from Fixtures where Match_No='7';");
      $v7=$Venue7->fetch_assoc();
      
      $Venue8=$conn->query("select Venue from Fixtures where Match_No='8';");
      $v8=$Venue8->fetch_assoc();

      $Venue9=$conn->query("select Venue from Fixtures where Match_No='9';");
      $v9=$Venue9->fetch_assoc();

      $Venue10=$conn->query("select Venue from Fixtures where Match_No='10';");
      $v10=$Venue10->fetch_assoc();

      $Venue11=$conn->query("select Venue from Fixtures where Match_No='11';");
      $v11=$Venue11->fetch_assoc();

      $Venue12=$conn->query("select Venue from Fixtures where Match_No='12';");
      $v12=$Venue12->fetch_assoc();

      $Venue13=$conn->query("select Venue from Fixtures where Match_No='13';");
      $v13=$Venue13->fetch_assoc();

      $Venue14=$conn->query("select Venue from Fixtures where Match_No='14';");
      $v14=$Venue14->fetch_assoc();

      $Venue15=$conn->query("select Venue from Fixtures where Match_No='15';");
      $v15=$Venue15->fetch_assoc();

      $Venue16=$conn->query("select Venue from Fixtures where Match_No='16';");
      $v16=$Venue16->fetch_assoc();

?>


<div class="containerrp1"><r1><br><?php echo $v1["Venue"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $v2["Venue"] ?></r1></div>
<div class="containerrp1"><r1><br><?php echo $v3["Venue"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $v4["Venue"] ?></r1></div>

<div class="containerrp1"><r1><br><?php echo $v5["Venue"] ?></r1></div> 
<div class="containerrp2"><r1><br><?php echo $v6["Venue"] ?></r1></div>
<div class="containerrp1"><r1><br><?php echo $v7["Venue"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $v8["Venue"] ?></r1></div>

<div class="containerrp1"><r1><br><?php echo $v9["Venue"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $v10["Venue"] ?></r1></div>
<div class="containerrp1"><r1><br><?php echo $v11["Venue"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $v12["Venue"] ?></r1></div>

<div class="containerrp1"><r1><br><?php echo $v13["Venue"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $v14["Venue"] ?></r1></div>
<div class="containerrp1"><r1><br><?php echo $v15["Venue"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $v16["Venue"] ?></r1></div>

</div>



<div class="containermain5">
<header><r2>CITY</r2></header>

<?php
      $City1=$conn->query("select City from Fixtures where Match_No='1';");
      $c1=$City1->fetch_assoc();

      $City2=$conn->query("select City from Fixtures where Match_No='2';");
      $c2=$City2->fetch_assoc();

      $City3=$conn->query("select City from Fixtures where Match_No='3';");
      $c3=$City3->fetch_assoc();      
      
      $City4=$conn->query("select City from Fixtures where Match_No='4';");
      $c4=$City4->fetch_assoc();
       
      $City5=$conn->query("select City from Fixtures where Match_No='5';");
      $c5=$City5->fetch_assoc();
      
      $City6=$conn->query("select City from Fixtures where Match_No='6';");
      $c6=$City6->fetch_assoc();
      
      $City7=$conn->query("select City from Fixtures where Match_No='7';");
      $c7=$City7->fetch_assoc();
      
      $City8=$conn->query("select City from Fixtures where Match_No='8';");
      $c8=$City8->fetch_assoc();

      $City9=$conn->query("select City from Fixtures where Match_No='9';");
      $c9=$City9->fetch_assoc();

      $City10=$conn->query("select City from Fixtures where Match_No='10';");
      $c10=$City10->fetch_assoc();

      $City11=$conn->query("select City from Fixtures where Match_No='11';");
      $c11=$City11->fetch_assoc();

      $City12=$conn->query("select City from Fixtures where Match_No='12';");
      $c12=$City12->fetch_assoc();

      $City13=$conn->query("select City from Fixtures where Match_No='13';");
      $c13=$City13->fetch_assoc();

      $City14=$conn->query("select City from Fixtures where Match_No='14';");
      $c14=$City14->fetch_assoc();

      $City15=$conn->query("select City from Fixtures where Match_No='15';");
      $c15=$City15->fetch_assoc();

      $City16=$conn->query("select City from Fixtures where Match_No='16';");
      $c16=$City16->fetch_assoc();

?>


<div class="containerrp1"><r1><br><?php echo $c1["City"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $c2["City"] ?></r1></div>
<div class="containerrp1"><r1><br><?php echo $c3["City"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $c4["City"] ?></r1></div>

<div class="containerrp1"><r1><br><?php echo $c5["City"] ?></r1></div> 
<div class="containerrp2"><r1><br><?php echo $c6["City"] ?></r1></div>
<div class="containerrp1"><r1><br><?php echo $c7["City"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $c8["City"] ?></r1></div>

<div class="containerrp1"><r1><br><?php echo $c9["City"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $c10["City"] ?></r1></div>
<div class="containerrp1"><r1><br><?php echo $c11["City"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $c12["City"] ?></r1></div>

<div class="containerrp1"><r1><br><?php echo $c13["City"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $c14["City"] ?></r1></div>
<div class="containerrp1"><r1><br><?php echo $c15["City"] ?></r1></div>
<div class="containerrp2"><r1><br><?php echo $c16["City"] ?></r1></div>

</div>

<input type="submit" value="Logout" id="submit"/>
 
</body>
</html>
