<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Henry's personal website</title>
        <link rel="icon" href="images/SMPTE.png" type="image/png">
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="author" content="Henry Lewis">
        <meta name="description" content="CS312 personal website">
        <meta name="keywords" content="CS312, 312, Henry Lewis, CS 312">
    </head>
    <body>
        <?php
            include("nav.html");
            //print_r($_SERVER);

            print_r("<br>"."<br>");
            $safe = explode("/",$_SERVER["PHP_SELF"]);
            $last_safe = end($safe);

            print_r($last_safe);
            print_r("<br>"."<br>");

            $example = "string/example/one";
            $example_explode = explode("/",trim($example));
            print_r($example_explode);

            print_r("<br>"."<br>");

            print_r($safe);

            print_r("<br>"."<br>");
            print_r("hello");
        ?>
    </body>
</html?
