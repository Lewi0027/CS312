<!DOCTYPE html>
<?php 
    include "correctCSS.php";
    include "navbar.php";

    $correctCSS = ($_COOKIE['CSS']);
?>
<html>
    <head>
        <title>Lorem</title>
        <link id="stylesheet" rel="stylesheet" href="<?php echo $correctCSS; ?>">
    </head>
    <body class ="pagerules">
        <h1>Lorem</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec est elit. Donec finibus felis ut fermentum maximus. Suspendisse ornare in urna eu tempus. Donec vitae lectus finibus, facilisis lorem quis, fermentum quam. Sed sit amet enim eu ante consequat luctus in vel sapien. Curabitur nunc nunc, maximus id porta in, dignissim vel sapien. Proin eu ligula eget est rhoncus finibus. Duis lacinia interdum erat et mattis. Duis pellentesque lectus id est dapibus, sed accumsan orci viverra. Suspendisse eget pellentesque massa. Sed sagittis nisi ante, eget pellentesque nibh tempus eget. Nam porttitor tincidunt est ac tristique. Aenean sollicitudin, sapien iaculis interdum interdum, diam orci vehicula risus, a blandit orci augue nec elit.</p>
        <p>Donec malesuada, nisl tincidunt sagittis ornare, sem massa semper nibh, at eleifend tellus nisl ac arcu. Suspendisse condimentum faucibus volutpat. Integer dictum, sapien in pharetra cursus, erat urna tristique urna, sit amet semper sem turpis vitae eros. Phasellus at purus ac risus pulvinar dignissim. Proin maximus, metus ullamcorper rhoncus aliquam, ligula eros egestas felis, id egestas ligula sapien in ante. Suspendisse ac odio iaculis, tincidunt ipsum ut, iaculis eros. Ut porta metus elementum nisl eleifend, sit amet pretium diam pulvinar. Ut viverra dolor mauris, vel condimentum mi ultricies quis. Suspendisse non enim sed nulla gravida ultrices sed et ante. Vestibulum in leo nibh.</p>
    </body>
    <footer>
        <p>Last updated: 3/17/24</p>
    </footer>
</html>
