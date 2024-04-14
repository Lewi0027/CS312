<!DOCTYPE html>
<?php
    //print_r($_SERVER);
    $phpselfarray = explode("/",$_SERVER["PHP_SELF"]);
    $thispagelink = $phpselfarray[2] . "/index.php";
    $otherpagelink = ($phpselfarray[2] == "east") ? 'west/index.php' : 'east/index.php';
    $otherpagestring = ($phpselfarray[2] == "east") ? 'West' : 'East';
?>
<html lang="en">
    <nav class="navbar">
        <h3><a href="<?php echo '../' . $thispagelink;?>"><?php echo ucfirst($phpselfarray[2]);?></a></h3>
        <h3><a href="<?php echo '../' . $otherpagelink;?>"><?php echo $otherpagestring;?></a></h3>
        <h3><a href="lorem.php">Lorem</a></h3>
        <h3><a href="ipsum.php">Ipsum</a></h3>
    </nav>
</html>