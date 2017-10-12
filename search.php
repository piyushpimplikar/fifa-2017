<!DOCTYPE html>
<html>
<head>
<title>Search</title>
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
</style>
<script type="text/javascript">
// Using jQuery.



$("input").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        $("form").submit();
    }
});


</script>
</head>
<body>


<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
}
  


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<?php include 'connect.php';?>

<?php
session_start();
$_SESSION['myValue']=$name; // You can set the value however you like.

?>


<div class="searchbox">
    <div id="firstDivision" class="division">
    <p><h1>Player Search</h1></p>
    

    <form method="post" id="search" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">     
    <input type="text" name="name" placeholder="Enter Player Name" value="<?php echo $name;?>">
    </form>
    <form method="get" action="http://localhost/FIFA/Player.php">
    <input type="submit" value="submit">
    </form>
</div>
</div>


<a href="http://localhost/FIFA/Player.php">


<?php 
echo "<h1>", $name ,"</h1>";
?>




</body>
</html>
