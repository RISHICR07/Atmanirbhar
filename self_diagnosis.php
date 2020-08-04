<?php
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

  
    <meta charset="utf-8">
    <title>Self Diagnosis</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="self_diagnosis.css">
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <h1>Here are few basic questions which will help in self diagnosis</h1><br><br>
      </div>
      <form action="staysafestayhome.php" method="get">
        <p>1. Have you travelled to any other country in the last 28-60 days?</p>
         Yes<input type="radio" name="travel" value="y1" required>
         No:<input type="radio" name="travel" value="n1">
        <br><br>
        <p>2. Have you come in contact with someone who has international travel history in the last 28-60 days?</p>
         Yes<input type="radio" name="otherstravel" value="y2" required>
         No:<input type="radio" name="otherstravel" value="n2">
        <br><br>
        <p>3. Are suffering from cough, cold or breathing problem?</p>
         Yes<input type="radio" name="feel" value="y3">
         No:<input type="radio" name="feel" value="n3">
        <br><br>
        <p>4. Are you a patient of diabestes, lung disease, heart problem?</p>
         Yes<input type="radio" name="condition" value="y4" required>
         No:<input type="radio" name="condition" value="n4">
        <p></p>
        <textarea id="texta" name="textarea" rows="8" cols="80" placeholder="Please provide the details about your above mentioned condition. If any :"></textarea>
        <p></p>
        <input type="submit" name="" value="CHECK"><br><br><br><br>
		<button type="button"><a href="Atmanirbhar.html" style="color:black">Back</a></button>

      </form>
    </div>
	<br>
	
  </body>
</html>
