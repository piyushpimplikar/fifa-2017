<!DOCTYPE html>
<html>
<head>
<title>Points Table</title>

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
    font-weight: 500;
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
    background-image: url("white.jpeg");
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

/*-------------------tables----------------*/

h1{
  font-size: 30px;
  color: #ffffff;
 
  font-family: Hind Siliguri,Arial,Helvetica Neue,Helvetica,sans-serif;
  font-weight: 400;
  text-align: left;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
  
   border-radius:6px;
    -moz-border-radius:6px;
   box-sizing: border-box;
  font-size: 1.5rem;


  
}


.tbl-content{
  height:auto;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(0,0,0,0.3);
}
th{
  padding: 10px 15px;
  text-align: left;
  font-weight: 600;
  font-size: 16px;
  color:rgb(28, 40, 51)	;
  text-transform: uppercase;
  background-color: rgba(128,128,128,0.5);
  border-radius:6px;
}
td{
  font-family: Hind Siliguri,Arial,Helvetica Neue,Helvetica,sans-serif;
  padding:.8rem 1rem;
  text-align: left;
  background-color: rgba(255,255,255,0.6);
  vertical-align:middle;
  font-weight: 600;
  font-size: 18px;
  color: #3b4852;
  line-height: 1.2;
  border-bottom: solid 1px rgba(0,0,0,0.3);
  

}




section{
  margin: 2rem 0 4rem;;
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
 <a href="http://localhost/FIFA/schedule.php"> SCHEDULES</a>
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

<section>
  <!--for demo wrap-->
  <h1>Group A</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>POS</th>
          <th>COUNTRY</th>
	  <th>PLAYED</th>
          <th>WIN</th>
          <th>LOSS</th>
          <th>DRAW</th>
	  <th>POINTS</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>

          <td>1</td>
          
          <td>
            <?php 
              $result=$conn->query("select * from Group_A order by Points desc limit 1;");
              $res=$result->fetch_assoc();
              //$sql=
              //$image=$conn->query("");

              echo $res["Country"];

            ?>
              
          </td>
           <td>
            <?php 
              echo $res["Total"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Win"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Lost"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Draw"];
            ?>
              
          </td>

          <td>
            <?php 
              echo $res["Points"];
            ?>
              
          </td>

        </tr>

        <tr>

          <td>2</td>
          
          <td>
            <?php 
              $result=$conn->query("select * from Group_A order by Points desc limit 1 offset 1;");
              $res=$result->fetch_assoc();
              echo $res["Country"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Total"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Win"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Lost"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Draw"];
            ?>
              
          </td>

          <td>
            <?php 
              echo $res["Points"];
            ?>
              
          </td>

        </tr>
        
    <tr>

          <td>3</td>
          
          <td>
            <?php 
              $result=$conn->query("select * from Group_A order by Points desc limit 1 offset 2;");
              $res=$result->fetch_assoc();
              echo $res["Country"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Total"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Win"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Lost"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Draw"];
            ?>
              
          </td>

          <td>
            <?php 
              echo $res["Points"];
            ?>
              
          </td>

        </tr>
        
        <tr>

          <td>4</td>
          
          <td>
            <?php 
              $result=$conn->query("select * from Group_A order by Points desc limit 1 offset 3;");
              $res=$result->fetch_assoc();
              echo $res["Country"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Total"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Win"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Lost"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Draw"];
            ?>
              
          </td>

          <td>
            <?php 
              echo $res["Points"];
            ?>
              
          </td>

        </tr>
        
        
      </tbody>
    </table>
  </div>
</section>

<section>
  <!--for demo wrap-->
  <h1>Group B</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>POS</th>
          <th>COUNTRY</th>
	  <th>PLAYED</th>
          <th>WIN</th>
          <th>LOSS</th>
          <th>DRAW</th>
	  <th>POINTS</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>

          <td>1</td>
          
          <td>
            <?php 
              $result=$conn->query("select * from Group_B order by Points desc limit 1;");
              $res=$result->fetch_assoc();
              echo $res["Country"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Total"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Win"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Lost"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Draw"];
            ?>
              
          </td>

          <td>
            <?php 
              echo $res["Points"];
            ?>
              
          </td>

        </tr>

        <tr>

          <td>2</td>
          
          <td>
            <?php 
              $result=$conn->query("select * from Group_B order by Points desc limit 1 offset 1;");
              $res=$result->fetch_assoc();
              echo $res["Country"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Total"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Win"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Lost"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Draw"];
            ?>
              
          </td>

          <td>
            <?php 
              echo $res["Points"];
            ?>
              
          </td>

        </tr>
        
    <tr>

          <td>3</td>
          
          <td>
            <?php 
              $result=$conn->query("select * from Group_B order by Points desc limit 1 offset 2;");
              $res=$result->fetch_assoc();
              echo $res["Country"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Total"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Win"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Lost"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Draw"];
            ?>
              
          </td>

          <td>
            <?php 
              echo $res["Points"];
            ?>
              
          </td>

        </tr>
        
        <tr>

          <td>4</td>
          
          <td>
            <?php 
              $result=$conn->query("select * from Group_B order by Points desc limit 1 offset 3;");
              $res=$result->fetch_assoc();
              echo $res["Country"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Total"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Win"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Lost"];
            ?>
              
          </td>
          <td>
            <?php 
              echo $res["Draw"];
            ?>
              
          </td>

          <td>
            <?php 
              echo $res["Points"];
            ?>
              
          </td>

        </tr>
        
      </tbody>
    </table>
  </div>
</section>

</body>
</html>
