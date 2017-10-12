<!DOCTYPE html>
<html>
<head>
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
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
{
    padding: 0 20px;
    background-color: #fff;
    min-height: 600px;
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

pre{
    font-family: 'Open Sans',sans-serif;
}


</style>
</head>
<body>
<h2>FIFA 2017</h2>


<ul>
<button class="dropbtn">=</button>
  <li><a href="#matches">MATCHES</a></li>
  <li><a href="#teams">TEAMS</a></li>
  <li><a href="#groups">GROUPS</a></li>
  <li><a href="#statistics">STATISTICS</a></li>
</ul>

<h2>AWARDS</h2>


<p>Adidas Golden Ball</p>

<?php include 'connect.php';

$result=$conn->query("select Name from Player where Player_Id=55;");
$res = $conn->query("select T_Name from Team,Player where Team.Team_Id=Player.T_Id and Player.Player_Id = 55 ;");
$img = $conn->query("select T_Image from Team where Team_Id = 'ARG';");
$awa = $conn->query("select A_Image from Awards where Player_Id=55;");
    

    $aw = $awa->fetch_assoc();
    echo "<img src =", $aw["A_Image"] ," width='652' heigh='366' align='left'>";   
    

    $row = $result->fetch_assoc();
     echo "<h2><pre>   ",$row["Name"],"</pre></h2>";  

      

        $im = $img->fetch_assoc();  
        $r1 = $res->fetch_assoc();
        echo "<pre>     <img src =", $im["T_Image"] , ">    " , $r1["T_Name"],"<br><br></pre>";   


    echo "<pre>     The adidas golden ball was awarded to Argentina captian ", $row["Name"]," for his outstanding displays at Germany 2017.<br><br>";
    echo "<img src='ball.png' align='padding-right'>";

?>

<p>Adidas Golden Boot</p>

<?php include 'connect.php';

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

        echo "<pre>     <img src =", $im["T_Image"] , ">    ",$r1["T_Name"], "<br><br></pre>";

    
    echo "<pre>     The adidas Golden Boot award goes to the top goalscorer of the FIFA World Cup who at Germany 2017 was Portugal's ",$row["Name"],"</pre><br><br>";
     echo "<img src='boot.png' align='padding-right'>";
?>

<p>Adidas Golden Glove</p>

<?php include 'connect.php';

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

        echo "<pre>     <img src =", $im["T_Image"] , ">    " ,$r1["T_Name"],"<br><br></pre>";


    echo "<pre>     The adidas Golden Glove award goes to the tournament's most outstanding goalkeeper who at Germany 2017 was deemed 
     to be Portugal's ",$row["Name"],'<br><br></pre>';
     echo "<img src='glove.png' align='padding-right'>";
    
?>

<p>Hyundai Young Player Award</p>

<?php include 'connect.php';

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

        echo "<pre>     <img src =", $im["T_Image"] , ">    " ,$r1["T_Name"],"<br><br>";
        

    echo "     The Hyundai Young Player award was awarded to Spain's ",$row["Name"]," for his excellent displays at Germany 2017<br><br><br></pre>";
     echo "<img src='youngplayer.png' align='padding-right'>";
    
?>


<p>Final Tournament Standings</p>
<div class="dropdown">
  
  <div class="dropdown-content">
    <a href="#">HOME</a>
    <a href="#">NEWS</a>
    <a href="#">ABOUT</a>
    <a href="#">CONTACT</a>
  </div>

</body>
</html>
