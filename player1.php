<html>
<head>
<style>

.headerdiv {
		height: 400px; 
		max-width: 400px; 
		background-color:#004080; 
		border-top-left-radius: 20px;
		border-top-right-radius: 20px; 
	    	border-bottom-left-radius: 20px;
		border-bottom-right-radius: 20px;
		margin-left: 50px;
                
	}

.imagestyle {
		height : 350px; 
		width : 300px; 
		margin-bottom: 25px; 
		margin-top: 25px;
		margin-left: 50px;
		margin-right: 50px;
	}
.containerdiv {
		height: 400px; 
		width: 1100px;
		background-color:#1ab2ff;
		margin-top : 75px;
		margin-bottom :50px;
		margin-left : 50px;
	}

pre{
    font-family: 'Open Sans',sans-serif;
}

img{
	margin-left: 30px;
}

body
{
	background-image: url("a.jpg");
}

</style>
</head>
<body>  

<?php include 'connect.php';?>




<div class="containerdiv">
<div class="headerdiv">
<!--h1><font color="#ffffff">Player</font></h1-->



<?php

$img = $conn->query("select P_Image from Player where Player_Id = 1;");
$im = $img->fetch_assoc(); 
	echo "<br><br>";
	echo "<img src =", $im["P_Image"] ," align ='left' height='325' width='330' >"; 

$res = $conn->query("select T_Image from Team,Player where Team.Team_Id=Player.T_Id and Player.Player_Id = 1 ;");
	$flag = $res->fetch_assoc();

$player = $conn->query("select Name from Player where Player_Id=1;"); 
	$p_name = $player->fetch_assoc();

$country = $conn->query("select T_Name from Team,Player where Team.Team_Id=Player.T_Id and Player.Player_Id = 1 ;");
$age = $conn->query("select Age from Player where Player_Id=1;"); 
$height = $conn->query("select Height from Player where Player_Id=1;"); 
$weight = $conn->query("select Weight from Player where Player_Id=1;"); 
$position = $conn->query("select Position from Player where Player_Id=1;"); 
$jersey = $conn->query("select J_No from Player where Player_Id=1;");

$c1=$country->fetch_assoc();
$a1=$age->fetch_assoc();
$h1=$height->fetch_assoc();
$w1=$weight->fetch_assoc();
$p1=$position->fetch_assoc();
$j1=$jersey->fetch_assoc();

	
	echo "<pre>			<img src =", $flag["T_Image"], "><b>	 ",$p_name["Name"],"</pre></b><br>";

	echo "<pre>			Country : <b>", $c1["T_Name"] ,"</pre></b>";
	echo "<pre>			Age : <b>", $a1["Age"], "</pre></b>";
	echo "<pre>			Height : <b>",$h1["Height"]," meter</pre></b>";
	echo "<pre>			Weight : <b>",$w1["Weight"]," kilos</pre></b>";
	echo "<pre>			Position : <b>",$p1["Position"],"</pre></b>";
	echo "<pre>			Jersey No : <b>",$j1["J_No"],"</pre></b>";


?>

</div>

</form>
</div>

<div class="containerdiv">
<div class="headerdiv">
<!--h1><font color="#ffffff">Player</font></h1-->



<!--code with container-->
<?php

$img = $conn->query("select P_Image from Player where Player_Id = 2;");
$im = $img->fetch_assoc(); 
	echo "<br><br>";
	echo "<img src =", $im["P_Image"] ," align ='left' height='325' width='330' >"; 

$res = $conn->query("select T_Image from Team,Player where Team.Team_Id=Player.T_Id and Player.Player_Id = 2 ;");
	$flag = $res->fetch_assoc();

$player = $conn->query("select Name from Player where Player_Id=2;"); 
	$p_name = $player->fetch_assoc();

$country = $conn->query("select T_Name from Team,Player where Team.Team_Id=Player.T_Id and Player.Player_Id = 2 ;");
$age = $conn->query("select Age from Player where Player_Id=2;"); 
$height = $conn->query("select Height from Player where Player_Id=2;"); 
$weight = $conn->query("select Weight from Player where Player_Id=2;"); 
$position = $conn->query("select Position from Player where Player_Id=2;"); 
$jersey = $conn->query("select J_No from Player where Player_Id=2;");

$c1=$country->fetch_assoc();
$a1=$age->fetch_assoc();
$h1=$height->fetch_assoc();
$w1=$weight->fetch_assoc();
$p1=$position->fetch_assoc();
$j1=$jersey->fetch_assoc();

	
	echo "<pre>			<img src =", $flag["T_Image"], "><b>	 ",$p_name["Name"],"</pre></b><br>";

	echo "<pre>			Country : <b>", $c1["T_Name"] ,"</pre></b>";
	echo "<pre>			Age : <b>", $a1["Age"], "</pre></b>";
	echo "<pre>			Height : <b>",$h1["Height"]," meter</pre></b>";
	echo "<pre>			Weight : <b>",$w1["Weight"]," kilos</pre></b>";
	echo "<pre>			Position : <b>",$p1["Position"],"</pre></b>";
	echo "<pre>			Jersey No : <b>",$j1["J_No"],"</pre></b>";
?>
</div>

</form>
</div>


<div class="containerdiv">
<div class="headerdiv">
<!--h1><font color="#ffffff">Player</font></h1-->



<?php

$img = $conn->query("select P_Image from Player where Player_Id = 3;");
$im = $img->fetch_assoc(); 
	echo "<br><br>";
	echo "<img src =", $im["P_Image"] ," align ='left' height='325' width='330' >"; 

$res = $conn->query("select T_Image from Team,Player where Team.Team_Id=Player.T_Id and Player.Player_Id = 3 ;");
	$flag = $res->fetch_assoc();

$player = $conn->query("select Name from Player where Player_Id=3;"); 
	$p_name = $player->fetch_assoc();

$country = $conn->query("select T_Name from Team,Player where Team.Team_Id=Player.T_Id and Player.Player_Id = 3 ;");
$age = $conn->query("select Age from Player where Player_Id=3;"); 
$height = $conn->query("select Height from Player where Player_Id=3;"); 
$weight = $conn->query("select Weight from Player where Player_Id=3;"); 
$position = $conn->query("select Position from Player where Player_Id=3;"); 
$jersey = $conn->query("select J_No from Player where Player_Id=3;");

$c1=$country->fetch_assoc();
$a1=$age->fetch_assoc();
$h1=$height->fetch_assoc();
$w1=$weight->fetch_assoc();
$p1=$position->fetch_assoc();
$j1=$jersey->fetch_assoc();

	
	echo "<pre>			<img src =", $flag["T_Image"], "><b>	 ",$p_name["Name"],"</pre></b><br>";

	echo "<pre>			Country : <b>", $c1["T_Name"] ,"</pre></b>";
	echo "<pre>			Age : <b>", $a1["Age"], "</pre></b>";
	echo "<pre>			Height : <b>",$h1["Height"]," meter</pre></b>";
	echo "<pre>			Weight : <b>",$w1["Weight"]," kilos</pre></b>";
	echo "<pre>			Position : <b>",$p1["Position"],"</pre></b>";
	echo "<pre>			Jersey No : <b>",$j1["J_No"],"</pre></b>";
?>

</div>

</form>
</div>

</body>
</html>
