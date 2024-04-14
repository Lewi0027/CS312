<!DOCTYPE html>
<html>
  <head>
    <title>Henry's PHP Practice site</title>
    <link rel="icon" href="images/SMPTE.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <form method='POST'>
      <h2>Please input your name:</h2>
      <input type="text" name="name">
      <input type="submit" value="Submit Name">
    </form>
    <?php
      $submittedName = $_POST['name'];
      $hPlanet = "Earth";
      $jplanet = "Mars";
      if ($submittedName == "Henry") {
        echo "Hello $hPlanet";
      }
      elseif ($submittedName == "Jake") {
        echo "Hello $jplanet";
      }
    ?>
    <?php
      $myfile = fopen("music.txt", "r");
      $myfilestring = fread($myfile, fileSize("music.txt"));
      echo nl2br($myfilestring);
      $myfilearray = explode(" |\n|/r",$myfilestring);
      foreach ($myfilearray as $index => $value) {
        echo "Index: " . $index . ", Value: " . $value . "<br>";
      }
    ?>
  </body>
</html>
