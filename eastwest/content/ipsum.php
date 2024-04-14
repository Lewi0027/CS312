<!DOCTYPE html>
<?php 
    include "correctCSS.php";
    include "navbar.php";

    $correctCSS = ($_COOKIE['CSS']);
?>
<html>
    <head>
        <title>Ipsum</title>
        <link id="stylesheet" rel="stylesheet" href="<?php echo $correctCSS; ?>">
    </head>
    <body class="pagerules">
        <h1>Ipsum</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit, lorem vitae efficitur vulputate, leo felis varius metus, a auctor purus metus ut lacus. Duis vel nisi vitae arcu accumsan blandit sed id tortor. Proin mattis fermentum nulla. Sed luctus massa non scelerisque pretium. Curabitur ante diam, lacinia ut lorem vel, tempor pulvinar urna. Suspendisse viverra ipsum sit amet lacus convallis facilisis. Etiam quis imperdiet nibh, id vulputate nunc. Nam nulla ante, vestibulum quis imperdiet a, sodales vel mi. Aenean iaculis ligula mauris, at pharetra justo rutrum et. Nunc iaculis mi eu tincidunt vulputate. Ut commodo mi in nisi convallis sagittis. Ut eleifend purus a orci mattis vehicula. In hac habitasse platea dictumst.</p>
        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus sit amet ex id metus scelerisque mollis. Nulla hendrerit, neque eu semper pharetra, eros magna semper est, vel elementum elit ante at ante. Vivamus ut hendrerit lectus, nec placerat urna. Morbi purus odio, tincidunt in nisi eu, pulvinar pretium augue. Phasellus et posuere diam, sit amet facilisis nulla. Donec a viverra sem, sed vestibulum tellus.</p>
        <div class="table">
            <div class="row">
                <div class="cell">Numbers I like</div>
                <div class="cell">Food I like</div>
            </div>
            <div class="row">
                <div class="cell">
                    <div class="list-container">
                        <ul>
                            <li>7</li>
                            <li>9</li>
                            <li>13</li>
                            <li>91</li>
                        </ul>
                    </div>
                </div>
                <div class="cell">
                    <div class="list-container">
                        <ol>
                            <li>Mexican</li>
                            <li>Chinese</li>
                            <li>Italian</li>
                            <li>American</li>
                            <li>Japanese</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <p>Last updated: 3/17/24</p>
    </footer>
</html>
