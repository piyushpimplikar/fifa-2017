<!DOCTYPE html>
<!-- saved from url=(0057)file:///C:/Users/Rajat/Desktop/FIFA%20PROJECT/groups.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Groups</title>



<style>
body
   {
    overflow-y:auto; 
    background-image: url("images1.jpg");
    background-size:cover;  
    font-family: sans-serif;
    font-weight: 100;
    background-repeat: no-repeat;
    }



.card {
    box-shadow: 8px 8px 8px 8px rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 20%;

    background-color: rgba(255,255,255,0.4);
    position: relative;
    left:125px;
    top:50px;
    display: inline-block;
  }

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,1.0);
}


.card1 {
    box-shadow: 8px 8px 8px 8px rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 20%;
    height:70px;
    background-color: rgba(255,255,255,0.4);
    position: relative;
    left:530px;
    top:90px;
    margin-right: 20px;
    display: inline-block;
    text-align: 50px 50px;

  }

.card1:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,1.0);
}

.container {
    padding: 2px 16px;
}

text-des{
  font-color= black;
  margin-left: 60px;
}
div.clickable { /* Containing div must have a position value */
    position:relative;
}
div.clickable a {
    position:absolute;
    width:100%;
    height:100%;
    top:0;
    left:0;
    text-decoration:none; 
    z-index:10; 
    background-color:white; 
    opacity: 0; 
    filter: alpha(opacity=1);
}

select option {
    margin: 40px;
    background: rgba(0, 0,0,1.0);
    color: rgb(255,255,255);
    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
    font-size: 20px;
    font-family: sans-serif;
  }

.styled-select1 { display:inline-block;                  
                     overflow:hidden;  }
 

.styled-select1 select {
   background: transparent;
    width: 170px;
   font-size: 25px;
   font-weight: bold;
    color:black;
   line-height: 5;
   border: 0;
   border-radius: 0;
   height: 68px;
   -webkit-appearance: 1;
    padding:0px; 
    margin:-5px -20px -5px 35px;
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


<?php include 'connect.php';?>

<br>
<h1 style ="color:white; text-align:center;">MATCH SCHEDULER</h1>

<br><br><br><br><h2 style ="color:white; text-align:center;">GROUP-A</h2>

<div class="card">
<div class="clickable">
<div class="container">
<div class="styled-select1">

<form action="http://localhost/FIFA/scheduleback.php" method="get">

<select name="Team1">
  <option value="PORTUGAL">PORTUGAL</option>
  <option value="GERMANY">GERMANY</option>
  <option value="FRANCE">FRANCE</option>
  <option value="ITALY">ITALY</option>

  <option value="ENGLAND">ENGLAND</option>
  <option value="BRAZIL">BRAZIL</option>
  <option value="SPAIN">SPAIN</option>
  <option value="ARGENTINA">ARGENTINA</option>
</select>

</div>
</div>
</div>
</div>

<div class="card">
<div class="clickable">
<div class="container">
<div class="styled-select1">
<select name="Team2">
  <option value="PORTUGAL">PORTUGAL</option>
  <option value="GERMANY">GERMANY</option>
  <option value="FRANCE">FRANCE</option>
  <option value="ITALY">ITALY</option>

  <option value="ENGLAND">ENGLAND</option>
  <option value="BRAZIL">BRAZIL</option>
  <option value="SPAIN">SPAIN</option>
  <option value="ARGENTINA">ARGENTINA</option>
</select>
</div>

</div>
</div>
</div>

<div class="card">
<div class="clickable">
     <div class="container">
       <div class="styled-select1">
<select name="Team3">
  <option value="PORTUGAL">PORTUGAL</option>
  <option value="GERMANY">GERMANY</option>
  <option value="FRANCE">FRANCE</option>
  <option value="ITALY">ITALY</option>

  <option value="ENGLAND">ENGLAND</option>
  <option value="BRAZIL">BRAZIL</option>
  <option value="SPAIN">SPAIN</option>
  <option value="ARGENTINA">ARGENTINA</option>
</select>
</div>

      </div>
</div>
</div>

<div class="card">
<div class="clickable">
    
      <div class="container">
       <div class="styled-select1">
<select name="Team4">
  <option value="PORTUGAL">PORTUGAL</option>
  <option value="GERMANY">GERMANY</option>
  <option value="FRANCE">FRANCE</option>
  <option value="ITALY">ITALY</option>

  <option value="ENGLAND">ENGLAND</option>
  <option value="BRAZIL">BRAZIL</option>
  <option value="SPAIN">SPAIN</option>
  <option value="ARGENTINA">ARGENTINA</option>
</select>
</div>

</div>
</div>
</div>

<br><br><br><br><br><br>
<h2 style ="color:white; text-align:center;">GROUP-B</h2>
<div class="card">
<div class="clickable">
          <div class="container">
<div class="styled-select1">
<select name="Team5">
  <option value="PORTUGAL">PORTUGAL</option>
  <option value="GERMANY">GERMANY</option>
  <option value="FRANCE">FRANCE</option>
  <option value="ITALY">ITALY</option>

  <option value="ENGLAND">ENGLAND</option>
  <option value="BRAZIL">BRAZIL</option>
  <option value="SPAIN">SPAIN</option>
  <option value="ARGENTINA">ARGENTINA</option>
</select>
</div>

      </div>
</div>
</div>

<div class="card">
<div class="clickable">
    
      <div class="container">
       <div class="styled-select1">
<select name="Team6">
  <option value="PORTUGAL">PORTUGAL</option>
  <option value="GERMANY">GERMANY</option>
  <option value="FRANCE">FRANCE</option>
  <option value="ITALY">ITALY</option>

  <option value="ENGLAND">ENGLAND</option>
  <option value="BRAZIL">BRAZIL</option>
  <option value="SPAIN">SPAIN</option>
  <option value="ARGENTINA">ARGENTINA</option>
</select>
</div>

      </div>
</div>
</div>

<div class="card">
<div class="clickable">
    
      <div class="container">
       <div class="styled-select1">
<select name="Team7">
  <option value="PORTUGAL">PORTUGAL</option>
  <option value="GERMANY">GERMANY</option>
  <option value="FRANCE">FRANCE</option>
  <option value="ITALY">ITALY</option>

  <option value="ENGLAND">ENGLAND</option>
  <option value="BRAZIL">BRAZIL</option>
  <option value="SPAIN">SPAIN</option>
  <option value="ARGENTINA">ARGENTINA</option>
</select>

</div>

      </div>
</div>
</div>

<div class="card">
<div class="clickable">
<div class="container">
       <div class="styled-select1">
<select name="Team8">
  <option value="PORTUGAL">PORTUGAL</option>
  <option value="GERMANY">GERMANY</option>
  <option value="FRANCE">FRANCE</option>
  <option value="ITALY">ITALY</option>

  <option value="ENGLAND">ENGLAND</option>
  <option value="BRAZIL">BRAZIL</option>
  <option value="SPAIN">SPAIN</option>
  <option value="ARGENTINA">ARGENTINA</option>
</select>
</div>

</div>
</div>
</div>
<br><br><br><br><br><br><br><br>

<center><input type="submit" name="submit" value="Insert" ></center></form>
<br><br><br>

<p>GROUP-1_M10</p>



</form> 

<script>

 </script> 
<!-- 
<?php 
    /*
if(isset($_GET['submit']))
{
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


}

$conn->query("update Draws set Team_1=NULL,Team_2=NULL,Win=NULL,Lost=NULL,Scoreline=NULL where Match_No=13;");
$conn->query("update Draws set Team_1=NULL,Team_2=NULL,Win=NULL,Lost=NULL,Scoreline=NULL where Match_No=14;");
$conn->query("update Draws set Team_1=NULL,Team_2=NULL,Win=NULL,Lost=NULL,Scoreline=NULL where Match_No=15;");
$conn->query("update Draws set Team_1=NULL,Team_2=NULL,Win=NULL,Lost=NULL,Scoreline=NULL where Match_No=16;");

$conn->query("update Group_A set Total=0,Win=0,Lost=0,Draw=0,Points=0;");
$conn->query("update Group_B set Total=0,Win=0,Lost=0,Draw=0,Points=0;");

//$conn->query("set @disable_triggers=1");
*/
?>
 -->
 </body>
</html>