<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<title>livescore</title>

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

/*---------------------------------------------------------------------------------------------*/
body
   {
    text-align: center;
    background-image: url("livescoreback.jpg");
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


.teams {
  margin: 0 auto;
position: relative;
width: auto;
display: flex;
justify-content: center;
  
}
.team1 {
  float: right;
padding-right: 150px;
padding-top: 150px;
}
.team2 {
  float: left;
padding-top: 150px;
padding-left: 270px;
}
.score1,.score2,a{
    font-size: 5em;
	font-family: Open Sans,arial;
    font-weight: 700;
    line-height: 1.4;
	color: black  ;
	opacity:0.7;
}
b{
  font-family: sans-serif;
  
  font-size: 40px;
  color: rgb(  3, 32, 86  );
  text-shadow:2px 2px 5px rgba(255,255,255,.65);
}
img{
border-radius:45%;

}
/*-----------------------------*/

/* Font Awesome */
@import url(https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

/* Roboto Condensed */
@import url(https://fonts.googleapis.com/css?family=Roboto+Condensed:700);

.label
{
	display: inline;
}

.spec
{
	font-size: 20px;

}
.container {
	position: relative;
	margin: 0 auto;
	width: 200px;
	height: 200px;
	border-radius: 50%;
	background: rgba(59, 58, 63,0.5);
	font-family: 'Roboto', sans-serif;
	text-align: center;
}

.containery {
	position: relative;

	width: 200px;
	height: 200px;
	border-radius: 50%;
	background: rgba(59, 58, 63,0.5);
	font-family: 'Roboto', sans-serif;
	text-align: center;
}

.containerz {
	position: relative;
	margin-left: 500px;
	width: 200px;
	height: 200px;
	border-radius: 50%;
	background: rgba(59, 58, 63,0.5);
	font-family: 'Roboto', sans-serif;
	text-align: center;
}
.containerx {
	position: relative;
	margin: 0 auto;
	width: 700px;
	height: 200px;
	background: rgba(59, 58, 63,0.5);
	font-family: 'Roboto', sans-serif;
	text-align: center;
}
#progress {
	position: absolute;
	top: 0;
	left: 0;
	transition: all 1s ease-in-out;
}


#progress1 {
	position: absolute;
	top: 0;
	left: 0;
	transition: all 1s ease-in-out;
}

p {
	margin: 0;
	color: #AACCFF;
	font-weight: 700;
}

#result {
	padding: 60px 0 0;
	font-size: 80px;
	line-height: 60px;
	position: static;
}

#score1 {
	padding: 60px 0 0;
	font-size: 30px;
	line-height: 60px;
	position: static;
}

#score2 {
	padding: 00px 0 0;
	font-size: 30px;
	line-height: 0px;
	position: static;
}
#min {
	font-size: 28px;
	position: static;
}

#start, #stop {
	position: relative;
	width: 100px;
	height: 40px;
	outline: 0;
	border: 0;
	border-radius: 4px;
	color: #fff;
	cursor: pointer;
	font-weight: 700;
}

#start {
	background: #4897F0;
}

#start:hover {
	background: #4087d8;
}

#stop {
	background: #00CE9B;
}

#stop:hover {
	background: #00b98b;
}

#start:active, #stop:active {
	top: 1px;
}


.buttons {
  width: 300px;
  margin: 20px auto;
  text-align: center;
}


</style>
</head>
<body>

<?php include 'connect.php';?>

<div class="container1">
   <a href="home.html"> HOME</a>
   <a href="template.html#matches"> MATCHES</a>
   <a href="template.html#players"> PLAYERS</a>

  <div class="dropdown">
    <button class="dropbtn">TEAMS</button>
    <div class="dropdown-content">
      <a href="template.html#group_A">GROUP A</a>
      <a href="template.html#group_B">GROUP B</a>
     
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">SCORES AND SCHEDULES </button>
    <div class="dropdown-content">
      <a href="#live_scores">LIVE SCORES</a>
	  <a href="#schedules">SCHEDULES</a>
    </div>
  </div>
      <a href="template.html#awards"> AWARDS</a>
      <a href="template.html#venues"> VENUES</a>

</div>
<br>



<div class="container">
	
	<p id="result">90</p>
	<p id="min">min</p>
	<canvas id="progress" width="200" height="200"></canvas><!-- progress bar -->
</div>

<div class="buttons">
	<input id="start" value="Start" type="button">
	<input id="stop" value="Half Time" type="button">
</div>

<!-- <div class="container">  -->
	
	

		<?php
		//spain
			$player = $conn->query("select Name from Player,Draws where Position='FW' and Draws.Match_No=6 and Player.T_Id=Draws.Team_1 limit 1;");
       		$pla = $player->fetch_assoc();
       		
       		$player2 = $conn->query("select Name from Player,Draws where Position='FW' and Draws.Match_No=6 and Player.T_Id=Draws.Team_1 limit 1 offset 1;");
       		$pla2 = $player2->fetch_assoc();
       	
       		$player3 = $conn->query("select Name from Player,Draws where Position='MF' and Draws.Match_No=6 and Player.T_Id=Draws.Team_1 limit 1;");
       		$pla3 = $player3->fetch_assoc();

       	//brazil

       		$player4 = $conn->query("select Name from Player,Draws where Position='FW' and Draws.Match_No=6 and Player.T_Id=Draws.Team_2 limit 1 ;");
       		$pla4 = $player4->fetch_assoc();

       		$player5 = $conn->query("select Name from Player,Draws where Position='FW' and Draws.Match_No=6 and Player.T_Id=Draws.Team_2 limit 1 offset 1;");
       		$pla5 = $player5->fetch_assoc();

       		$player6 = $conn->query("select Name from Player,Draws where Position='MF' and Draws.Match_No=6 and Player.T_Id=Draws.Team_2 limit 1 ;");
       		$pla6 = $player6->fetch_assoc();
       	//scorline
			$score=$conn->query("select Scoreline from Draws where Match_No=6;");
	 		$sco=$score->fetch_assoc();
	 		$a=$sco["Scoreline"];	
	 	
       	
     	//echo $pla["Name"];?>
     	

   		
 	</div>

    <div class="team1" style="padding-right: 600px;padding-top: 30px;padding-left: 0px;">

   					 	<p id="player6" class="spec"></p>
 						<p id="player7" class="spec"></p>
 						<p id="player8" class="spec"></p>	
 						<p id="player9" class="spec"></p>
 						<p id="player10" class="spec"></p>
	 </div>
	 

	<div class="team2" style="padding-left: 80px;padding-top: 30px;">
	
    					
 						<p id="player1"></p>
          				<p id="player2"></p>
      				    <p id="player3"></p>
        			    <p id="player4"></p>
             			<p id="player5"></p>
	
   	</div>
   	<br><br><br><br><br><br><br><br><br><br><br>

           
<div class="teams">
    <div class="team1" style="padding-right: 80px;padding-top: 30px;padding-left: 0px;">

   	<?php
        $res = $conn->query("select T_Image from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=6 ;");
        $flag = $res->fetch_assoc();
        echo "<img src=", $flag["T_Image"], " width='250px' height='200px'>";
        ?>
     
	 <br>
	 <br>
	 <b><?php 
	 		$result=$conn->query("select T_Name from Team,Draws where Team.Team_Id=Draws.Team_1 and Draws.Match_No=6;");
	 		$res=$result->fetch_assoc();
	 		echo $res["T_Name"];?>
	 		</b>
	 </div>

<div class="score1" style="padding-top: 80px;">
		<?php 
	 		
	 		echo "<div id='sc2' class='label'>0 </div> - <div id='sc1' class='label'> 0 </div>	";

	 		?>
	 		
 </div>



    <div class="team2" style="padding-left: 80px;padding-top: 30px;">
	
    
   	<?php
        $res = $conn->query("select T_Image from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=6 ;");
        $flag = $res->fetch_assoc();
        echo "<img src=", $flag["T_Image"], " width='250px' height='200px'>";
        ?>
     
	<br>
	<br>
	<b><?php 
	 		$result=$conn->query("select T_Name from Team,Draws where Team.Team_Id=Draws.Team_2 and Draws.Match_No=6;");
	 		$res=$result->fetch_assoc();
	 		echo $res["T_Name"];?>
	 			
	 		</b>
	
    </div>
</div>


			
<script>
var timer, stopTimer,
	result = document.getElementById('result'),
	min    = document.getElementById('min'),
	start  = document.getElementById('start'),
	stop   = document.getElementById('stop'),
    n      = +result.innerHTML;
	
// events

start.addEventListener('click', function() {
	//startTimer1(n);
	startTimer(n);
}, false);


stop.addEventListener('click', function() {
	stopTimer();
}, false);




// functions
function startTimer(n) {
	var z = n-1; // fix 1 sec start delay
 //document.write(2);

	timer = setInterval( function() {
		result.innerHTML = z--;
		//score.innerHTML = i--;
		     
     stopTimer = function() {
       clearInterval(timer);
       result.innerHTML = z + 1;
     }
		
     
		
		
		function updateProgress() {
			var canvas = document.getElementById('progress');
			var context = canvas.getContext('2d');
			var centerX = canvas.width / 2;
			var centerY = canvas.height / 2;
			var radius = 80;
			var circ = Math.PI * 2; // 360deg
			var percent = z / n; // i%
			context.beginPath();
			context.arc(centerX, centerY, radius, ((circ) * percent), circ, false);
			context.lineWidth = 10;
			//document.write(2);
			if (z < 15) {
				context.strokeStyle = '#ED3E42';
			} else {
				context.strokeStyle = '#AACCFF';
			}
			context.stroke();
		} // progress
		
		if (z < 15) {
			result.style.color = '#ED3E42';
			min.style.color = '#ED3E42';
		
		} // hurry up!

		if (z < 0) 
		{ 
		  stopTimer(); 
		} // finish

		updateProgress();
    
	}, 250); // every sec

}

	var timer, stopTimer,
	
	score1   = document.getElementById('score1'),
	s  = +sc1.innerHTML;
	score2   = document.getElementById('score2'),
	s2  = +sc2.innerHTML;

	start.addEventListener('click', function() {
	//startTimer1(n);
	startTimer1(s);
}, false);

start.addEventListener('click', function() {
	//startTimer1(n);
	startTimer2(s2);
}, false);


var j=<?php echo $a[0]?>;
 	if(j==5)
 		var t =4000;
 	if(j==4)
 		var t =4000;
 	if(j==3)
 		var t =6000;
 	if(j==2)
 		var t =8000;
 	if(j==1)
 		var t =6000;
 	
function startTimer1(s) {
	var i = s+1; // fix 1 sec start delay
	
	var pl="<?php echo $pla["Name"]?>";
	var pl2="<?php echo $pla2["Name"]?>";
	var pl3="<?php echo $pla3["Name"]?>";


 //document.write(2);

 	
	timer = setInterval( function() {
		if(i<=j)
		{
			 document.getElementById("sc2").innerHTML=i++;
			//score1.innerHTML = i++;	
			if(i==2)
			{	
				document.getElementById("player1").innerHTML=pl;  
			}
			if(i==3)
			{
				document.getElementById("player2").innerHTML=pl2;
			}
			if(i==4)
			{  
				document.getElementById("player3").innerHTML=pl3;
			}
			if(i==5)
			{  
				document.getElementById("player4").innerHTML=pl2;
			}
			if(i==6)
			{
				document.getElementById("player5").innerHTML=pl;
			}

		}
		
		     
     stopTimer1 = function() {
       clearInterval(timer);
       s.innerHTML = i + 1;
     }
	
		if (i < 0) 
		{ 
		  stopTimer1(); 
		} // finish
		
	}, 	t); // every sec
}


	var timer, stopTimer,
	
	score1   = document.getElementById('score1'),
	s  = +score1.innerHTML;
	score2   = document.getElementById('score2'),
	s2  = +score2.innerHTML;


	start.addEventListener('click', function() {
	//startTimer1(n);
	startTimer1(s);
}, false);

start.addEventListener('click', function() {
	//startTimer1(n);
	startTimer2(s2);
}, false);

	
function startTimer2(s2) {
	var k = s2+1; // fix 1 sec start delay
	
	var pl4="<?php echo $pla4["Name"]?>";
	var pl5="<?php echo $pla5["Name"]?>";
	var pl6="<?php echo $pla6["Name"]?>";
	var l=<?php echo $a[4]?>;
 	if(l==5)
 		var t1 =4000;
 	if(l==4)
 		var t1 =3000;
 	if(l==3)
 		var t1 =5000;
 	if(l==2)
 		var t1 =8000;
 	if(l==1)
 		var t1 =6000;

 //document.write(2);

	
	timer = setInterval( function() {
		if(k<=l)
		{
			//score2.innerHTML = k++;	
			document.getElementById("sc1").innerHTML=k++;
			if(k==2)
			{	
				  
				document.getElementById("player6").innerHTML=pl4;  
			}
			if(k==3)
			{
				document.getElementById("player7").innerHTML=pl5;
			}
			if(k==4)
			{
				document.getElementById("player8").innerHTML=pl6;
			}
			if(k==5)
			{
				document.getElementById("player9").innerHTML=pl4;
			}
			if(k==6)
			{
				document.getElementById("player10").innerHTML=pl3;
			}
		}
		
		     
     stopTimer1 = function() {
       clearInterval(timer);
       s2.innerHTML = k + 1;
     }
	
		if (k < 0) 
		{ 
		  stopTimer1(); 
		} // finish
		
	}, t1); // every sec
}

</script>

</body></html>