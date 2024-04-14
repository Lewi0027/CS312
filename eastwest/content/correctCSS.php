<!DOCTYPE html>
<?php
if (!isset($_COOKIE['CSS'])) {
    $cssFile = 'east.css';
    $thisDir = 'east';
    $otherDir = 'west';
    echo "not set";
}

if (isset($_GET['direction'])) {
    $newDir = $_GET['direction'];

    $cssFile = '';
    $thisDir = '';
    $otherDir = '';

    if ($newDir == 'west') {
        $cssFile = 'west.css';
        $thisDir = 'west';
        $otherDir = 'east';
    }
    else {
        $cssFile = 'east.css';
        $thisDir = 'east';
        $otherDir = 'west';
    }

    setcookie('CSS', $cssFile, 0, '/');
    setcookie('thisDir', $thisDir, 0, '/');
    setcookie('otherDir', $otherDir, 0, '/');

    // header("Location: $_SERVER[PHP_SELF]");
    // exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newDir = $_POST['direction'];

    $cssFile = '';
    $thisDir = '';
    $otherDir = '';

    if ($newDir == 'west') {
        $cssFile = 'west.css';
        $thisDir = 'west';
        $otherDir = 'east';

        setcookie('CSS', $cssFile, 0, '/');
        setcookie('thisDir', $thisDir, 0, '/');
        setcookie('otherDir', $otherDir, 0, '/');
    }
    else {
        $cssFile = 'east.css';
        $thisDir = 'east';
        $otherDir = 'west';

        setcookie('CSS', $cssFile, 0, '/');
        setcookie('thisDir', $thisDir, 0, '/');
        setcookie('otherDir', $otherDir, 0, '/');
    }
    
    header("Location: ../eastwest/index.php");
    exit;
}
?>