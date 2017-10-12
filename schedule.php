<html>
<head>
<title>SCHEDULE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
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
  color:dark black;
  font-size:45px;
  font-weight:400;
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
    background-image: url("back1.jpeg");
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
border-radius:10px;
}

.containermain2 {
  width:10%;
  background-color: rgba(0,0,0,0.3);
  margin-top:10px;
  margin-bottom: 10px;
  display:inline-block;
  overflow-y:auto;
border-radius:10px;
}

.containermain3 {
  width:38%;
  background-color: rgba(0,0,0,0.3);
  margin-top:10px;
  margin-bottom: 10px;
  display:inline-block;
  overflow-y:hidden; 
border-radius:10px;
}

.containermain4 {
  width:20%;
  background-color: rgba(0,0,0,0.3);
  margin-top:10px;
  margin-bottom: 10px;
  display:inline-block;
  overflow-y:auto;
border-radius:10px;
}

.containermain5 {
  width:15%;
  background-color: rgba(0,0,0,0.3);
  margin-top:10px;
  margin-bottom: 10px;
  display:inline-block;
  overflow-y:auto;
  border-radius:10px;
}

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
    background-color: rgba(255,204,0,0.5);
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


</style>
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

 <div class="f1">SCHEDULE</div>
<br>

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


<?php

  $vald1=$conn->query("select Win,Scoreline from Draws where Match_No=1");
  $val1=$vald1->fetch_assoc();
  
  $vald2=$conn->query("select Win,Scoreline from Draws where Match_No=2");
  $val2=$vald2->fetch_assoc();
  
  $vald3=$conn->query("select Win,Scoreline from Draws where Match_No=3");
  $val3=$vald3->fetch_assoc();
  
  $vald4=$conn->query("select Win,Scoreline from Draws where Match_No=4");
  $val4=$vald4->fetch_assoc();
  
  $vald5=$conn->query("select Win,Scoreline from Draws where Match_No=5");
  $val5=$vald5->fetch_assoc();
  
  $vald6=$conn->query("select Win,Scoreline from Draws where Match_No=6");
  $val6=$vald6->fetch_assoc();
  
  $vald7=$conn->query("select Win,Scoreline from Draws where Match_No=7");
  $val7=$vald7->fetch_assoc();
  
  $vald8=$conn->query("select Win,Scoreline from Draws where Match_No=8");
  $val8=$vald8->fetch_assoc();
  
  $vald9=$conn->query("select Win,Scoreline from Draws where Match_No=9");
  $val9=$vald9->fetch_assoc();
  
  $vald10=$conn->query("select Win,Scoreline from Draws where Match_No=10");
  $val10=$vald10->fetch_assoc();
  
  $vald11=$conn->query("select Win,Scoreline from Draws where Match_No=11");
  $val11=$vald11->fetch_assoc();
  
  $vald12=$conn->query("select Win,Scoreline from Draws where Match_No=12");
  $val12=$vald12->fetch_assoc();
  
  $vald13=$conn->query("select Win,Scoreline from Draws where Match_No=13");
  $val13=$vald13->fetch_assoc();
  
  $vald14=$conn->query("select Win,Scoreline from Draws where Match_No=14");
  $val14=$vald14->fetch_assoc();
  
  $vald15=$conn->query("select Win,Scoreline from Draws where Match_No=15");
  $val15=$vald15->fetch_assoc();
  
  $vald16=$conn->query("select Win,Scoreline from Draws where Match_No=16");
  $val16=$vald16->fetch_assoc();
  


  if($val1["Win"]==NULL)
  {
    $link1="http://localhost/FIFA/livescore1.php?something=1";
    $scor11=$m11["Team_Id"];
    $scor12=$m12["Team_Id"];
  
  }
  else
  {
    $link1="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor1=$val1["Scoreline"];
    $scor11=$scor1[0];
    $scor12=$scor1[4];
  }

  if($val2["Win"]==NULL)
  {
    $link2="http://localhost/FIFA/livescore1.php?something=2";
    $scor21=$m21["Team_Id"];
    $scor22=$m22["Team_Id"];
  }
  else
  {
    $link2="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor2=$val2["Scoreline"];
    $scor21=$scor2[0];
    $scor22=$scor2[4];
  }

  if($val3["Win"]==NULL)
  {
    $link3="http://localhost/FIFA/livescore1.php?something=3";
    $scor31=$m31["Team_Id"];
    $scor32=$m32["Team_Id"];
  }
  else
  {
    $link3="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor3=$val3["Scoreline"];
    $scor31=$scor3[0];
    $scor32=$scor3[4];
  }

  if($val4["Win"]==NULL)
  {
    $link4="http://localhost/FIFA/livescore1.php?something=4";
    $scor41=$m41["Team_Id"];
    $scor42=$m42["Team_Id"];
  }
  else
  {
    $link4="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor4=$val4["Scoreline"];
    $scor41=$scor4[0];
    $scor42=$scor4[4];
  }

  if($val5["Win"]==NULL)
  {
    $link5="http://localhost/FIFA/livescore1.php?something=5";
    $scor51=$m51["Team_Id"];
    $scor52=$m52["Team_Id"];
  }
  else
  {
    $link5="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor5=$val5["Scoreline"];
    $scor51=$scor5[0];
    $scor52=$scor5[4];
  }

  if($val6["Win"]==NULL)
  {
    $link6="http://localhost/FIFA/livescore1.php?something=6";
    $scor61=$m61["Team_Id"];
    $scor62=$m62["Team_Id"];
  }
  else
  {
    $link6="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor6=$val6["Scoreline"];
    $scor61=$scor6[0];
    $scor62=$scor6[4];
  }

  if($val7["Win"]==NULL)
  {
    $link7="http://localhost/FIFA/livescore1.php?something=7";
    $scor71=$m71["Team_Id"];
    $scor72=$m72["Team_Id"];

  }
  else
  {
    $link7="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor7=$val7["Scoreline"];
    $scor71=$scor7[0];
    $scor72=$scor7[4];
  }

  if($val8["Win"]==NULL)
  {
    $link8="http://localhost/FIFA/livescore1.php?something=8";
    $scor81=$m81["Team_Id"];
    $scor82=$m82["Team_Id"];
  }
  else
  {
    $link8="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor8=$val8["Scoreline"];
    $scor81=$scor8[0];
    $scor82=$scor8[4];
  }

  if($val9["Win"]==NULL)
  {
    $link9="http://localhost/FIFA/livescore1.php?something=9";
    $scor91=$m91["Team_Id"];
    $scor92=$m92["Team_Id"];
  }
  else
  {
    $link9="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor9=$val9["Scoreline"];
    $scor91=$scor9[0];
    $scor92=$scor9[4];
  }

  if($val10["Win"]==NULL)
  {
    $link10="http://localhost/FIFA/livescore1.php?something=10";
    $scor101=$m101["Team_Id"];
    $scor102=$m102["Team_Id"];
  }
  else
  {
    $link10="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor10=$val10["Scoreline"];
    $scor101=$scor10[0];
    $scor102=$scor10[4];
  }

  if($val11["Win"]==NULL)
  {
    $link11="http://localhost/FIFA/livescore1.php?something=11";
    $scorb1=$m111["Team_Id"];
    $scorb2=$m112["Team_Id"];
  }
  else
  {
    $link11="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor1a1=$val11["Scoreline"];
    $scorb1=$scor1a1[0];
    $scorb2=$scor1a1[4];
  }

  if($val12["Win"]==NULL)
  {
    $link12="http://localhost/FIFA/livescore1.php?something=12&quer=call+qualify1();";
    $scorc1=$m121["Team_Id"];
    $scorc2=$m122["Team_Id"];
  }
  else
  {
    $link12="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor1b2=$val12["Scoreline"];
    $scorc1=$scor1b2[0];
    $scorc2=$scor1b2[4];
  }

  if($val13["Win"]==NULL)
  {
    $link13="http://localhost/FIFA/livescore1.php?something=13&quer=call+eliminator();";
    $scord1=$m131["Team_Id"];
    $scord2=$m132["Team_Id"];
  }
  else
  {
    $link13="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor1c3=$val13["Scoreline"];
    $scord1=$scor1c3[0];
    $scord2=$scor1c3[4];
  }

  if($val14["Win"]==NULL)
  {
    $link14="http://localhost/FIFA/livescore1.php?something=14&quer1=call+qualify2();";
    $scorE1=$m141["Team_Id"];
    $scorE2=$m142["Team_Id"];
  }
  else
  {
    $link14="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor1d4=$val14["Scoreline"];
    $scorE1=$scor1d4[0];
    $scorE2=$scor1d4[4];
  }

  if($val15["Win"]==NULL)
  {
    $link15="http://localhost/FIFA/livescore1.php?something=15&quer1=call+final();";
    $scorf1=$m151["Team_Id"];
    $scorf2=$m152["Team_Id"];
  }
  else
  {
    $link15="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor1e5=$val15["Scoreline"];
    $scorf1=$scor1e5[0];
    $scorf2=$scor1e5[4];
  }

  if($val16["Win"]==NULL)
  {
    $link16="http://localhost/FIFA/livescore1.php?something=16";
    $scorg1=$m161["Team_Id"];
    $scorg2=$m162["Team_Id"];
  }
  else
  {
    $link16="http://localhost/FIFA/livescore1.php?noplay=1";
    $scor1f6=$val16["Scoreline"];
    $scorg1=$scor1f6[0];
    $scorg2=$scor1f6[4];
  }


?>

<div class="containerrp1"><?php echo "<img src=",$m11["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link1;?>><?php echo $scor11;?> - <?php echo $scor12;?></a></div><?php echo "<img src=",$m12["T_Image"]," class='imagestyle2'>"?></div> 


<div class="containerrp1"><?php echo "<img src=",$m21["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link2;?>><?php echo $scor21;?> - <?php echo $scor22;?></a></div><?php echo "<img src=",$m22["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m31["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link3;?>><?php echo $scor31;?> - <?php echo $scor32;?></a></div><?php echo "<img src=",$m32["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m41["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link4;?>><?php echo $scor41;?> - <?php echo $scor42;?></a></div><?php echo "<img src=",$m42["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m51["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link5;?>><?php echo $scor51;?> - <?php echo $scor52;?></a></div><?php echo "<img src=",$m52["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m61["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link6;?>><?php echo $scor61;?> - <?php echo $scor62;?></a></div><?php echo "<img src=",$m62["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m71["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link7;?>><?php echo $scor71;?> - <?php echo $scor72;?></a></div><?php echo "<img src=",$m72["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m81["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link8;?>><?php echo $scor81;?> - <?php echo $scor82;?></a></div><?php echo "<img src=",$m82["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m91["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link9;?>><?php echo $scor91;?> - <?php echo $scor92;?></a></div><?php echo "<img src=",$m92["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m101["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link10;?>><?php echo $scor101;?> - <?php echo $scor102;?></a></div><?php echo "<img src=",$m102["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m111["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link11;?>><?php echo $scorb1;?> - <?php echo $scorb2;?></a></div><?php echo "<img src=",$m112["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m121["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link12;?>><?php echo $scorc1;?> - <?php echo $scorc2;?></a></div><?php echo "<img src=",$m122["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m131["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link13;?>><?php echo $scord1;?> - <?php echo $scord2;?></a></div><?php echo "<img src=",$m132["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m141["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link14;?>><?php echo $scorE1;?> - <?php echo $scorE2;?></a></div><?php echo "<img src=",$m142["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m151["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link15;?>><?php echo $scorf1;?> - <?php echo $scorf2;?></a></div><?php echo "<img src=",$m152["T_Image"]," class='imagestyle2'>"?></div> 

<div class="containerrp1"><?php echo "<img src=",$m161["T_Image"]," class='imagestyle1'>"?><div class="textcontainer"><a class="w3-button w3-round-large" href=<?php echo $link16;?>><?php echo $scorg1;?> - <?php echo $scorg2;?></a></div><?php echo "<img src=",$m162["T_Image"]," class='imagestyle2'>"?></div> 

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



</body>
</html>
