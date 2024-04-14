<!DOCTYPE html>
<?php
    $phpselfarray = explode("/",$_SERVER["PHP_SELF"]);
    $thispagelink = $phpselfarray[3];
?>
<html lang="en">
    <body>
        <nav class="navbar">
            <form method="POST" action=<?php echo ($thispagelink == 'index.php') ? 'index.php' : '../index.php'; ?>>
                <input type="hidden" name="direction" value="<?php echo $_COOKIE['otherDir']; ?>">
                <button type="submit"><?php echo ucfirst($_COOKIE['otherDir']);?></button>
            </form>
            <a href=<?php echo ($thispagelink == 'index.php') ? 'content/lorem.php' : 'lorem.php'; ?>>Lorem</a>
            <a href=<?php echo ($thispagelink == 'index.php') ? 'content/ipsum.php' : 'ipsum.php'; ?>>Ipsum</a>
        </nav>
    </body>
</html>