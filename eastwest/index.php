<!DOCTYPE html>
<?php
    include "content/correctCSS.php";
    include "content/navbar.php";
    
    $correctCSS = ('content/' .  $_COOKIE['CSS']);
    $otherDir = ($_COOKIE['otherDir']);
    $thisDir = ($_COOKIE['thisDir']);

    $pageTitle = ucfirst($_COOKIE['thisDir'] . " Index");
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pageTitle?></title>
        <link id="stylesheet" rel="stylesheet" href="<?php echo $correctCSS; ?>">
    </head>
    <body class="pagerules">
        <h1>My personal website</h1>
        <h3><?php echo ucfirst($thisDir) . " Home"; ?></h3>
        <p>Click East/West at top to change the layout using POST.<br>Click the "Press me!" button to change the layout using GET.<br><br></p>
    </body>
    <form method="GET">
        <input type="hidden" name="direction" value="<?php echo $otherDir; ?>">
        <button type = "submit">Press me!</button>
    </form>
    <body>
        <p><img src="../images/picofme.png"alt="picofme"></p>
        <p>by: Henry Lewis</p>
        <p>CS 312 SP2024</p>
    </body>
</html>