<!DOCTYPE html>
<html>
<head>
<title>Player Search</title>
<style> 

body {
    background-image: url("ALL-STARS.jpg");
    background-size: cover;
}

.searchbox {
    width: 600px;
    height: 200px;
    display: inline-block;
      
    margin-left: -20px;
    margin-top: 220px;
}

.division{
  width:100%;
  height:100px;
  color: black;
  text-align: center;
}

input[type=text] {
    width: 250px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: rgba(0,0,0,0.7);
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    color:white;
}

input[type=text]:focus {
    width: 70%;
}

h1{
    
    font-weight:500; 
    color:white; 


}

</style>

</head>

<body>


<?php include 'connect.php';?>



<div class="searchbox">
    <div id="firstDivision" class="division">
    <p><h1>Player Search</h1></p>
  
     <form method="get" id="search" action="http://localhost/FIFA/Player.php?something=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   
          <input type="text" name="name" placeholder="Enter Player Name" value="<?php echo $name;?>"  >
    <?php echo "<h1>",$name,"</h1>";?>
    </form>


</div>
</div>




</body>
</html>
