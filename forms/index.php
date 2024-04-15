<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Practice</title>
    <!--<link rel="stylesheet" href="style.css">-->
</head>
<header>
    <h1> Form Practice </h1>
</header>
<main>
    <?php
        if (isset($_POST["name"])) {
            $name = $_POST["name"];
            echo("Welcome $name!<br><br>");
        }
        if (isset($_POST["password"])) {
            $password = $_POST["password"];
            echo("Wow what a nerd, look at this person's password! \"$password\"<br><br>");
        }
    ?>
    <form method="POST" action="index.php">
        <label>User Name:&nbsp;</label>
        <input type="text" name="name"></input><br>
        <label>Password:&nbsp;</label>
        <input type="password" name="password"></input><br>
        <input type="submit" value="Submit"></input>
    </form>
    <br><br><div>
        <?php 
            if (isset($_GET["CS"])) {
                echo "You are a CS student!";
            }
            if ($_SERVER["REQUEST_METHOD"] === "GET") {
                if (!isset($_GET["CS"]) || $_GET["CS"] == 'off') {
                    echo "You are not a CS student!";
                }
            }
            if (isset($_GET["favorite"]) && $_GET["favorite"] != "") {
                echo "<br>Your favorite class is " . $_GET["favorite"];
            }
        ?>
    </div>
    <form method="GET" action="index.php">
        <label>Are you a CS Student?&nbsp;</label>
        <input type="checkbox" name="CS"></input><br>
        <label>What is your favorite course?&nbsp;</label>
        <input type="text" name="favorite"></input><br>
        <input type="submit" value="Submit"></input>
    </form>
</main>
</html>