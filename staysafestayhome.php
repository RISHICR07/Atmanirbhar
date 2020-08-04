

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>StaySafe_StayHome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="staysafestayhome.css">
  </head>
  <body background="./backgd.jpg">
   
	<div class="container">
      <div>
       <font size=7 color= white><p align=center> The following is your evaluation,</font>
      </div>
    </div>
	<br>
	<br>
      <div class="jumbotron">
          
			<?php
            $ptrav_his = $_GET['travel'];
            $otrav_his = $_GET['otherstravel'];
            $disease_his = $_GET['feel'];
            $cond_his = $_GET['condition'];

            if ($ptrav_his =="y1" && $otrav_his == "y2" && $disease_his == "y3" && $cond_his == "y4" ) {
            echo "<p align=center>You Have a high Chance of Getting Covid-19 Disease!<br>Please contact medical support";
            } elseif ($ptrav_his =="n1" && $otrav_his == "n2" && $disease_his == "n3" && $cond_his == "n4" ) {
            echo "<p align=center>You Have a very Low Chance of Getting Covid-19 Disease!";
            } else {
            echo "<p align=center>You need to be careful. Stay Home Stay Safe. <br>Please stay at home.";
            }
			?>
			<br><br><br>
			<button type="button"><a href="Atmanirbhar.html" style="color:black">Home</a></button>
      </div>
	  
  </body>
</html>
