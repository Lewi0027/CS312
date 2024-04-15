let color = 0; //0 = yellow, 1 = pink, 2 = blue

$(document).ready(function(){
    if (color === 0) {
        $(".yellowButton").css("color", "black");
        $(".content").load("content/yellowContent.html");
        $(".pageColor").css("background-color", "#ffe135");
        $(".image").attr("src", "content/yellowCommuta.png");
        $("#cashTag").css("color", "green")
    }
    $(".yellowButton").click(function() {
        pagecolor = 0;
        $(".yellowButton").css("color", "black");
        $(".pinkButton, .blueButton").css("color", "");
        $(".content").load("content/yellowContent.html");
        $(".pageColor").css("background-color", "#ffe135");
        $(".image").attr("src", "content/yellowCommuta.png");
        $(".antique").css("color", "");
        $("#cashTag").css("color", "green");
    });
    $(".pinkButton").click(function() {
        pagecolor = 1;
        $(".pinkButton").css("color", "black");
        $(".yellowButton, .blueButton").css("color", "");
        $(".content").load("content/pinkContent.html");
        $(".pageColor").css("background-color", "#ff3399");
        $(".image").attr("src", "content/pinkCommuta.png");
        $(".antique").css("color", "#0066ff");
        $("#cashTag").css("color", "green");
    });
    $(".blueButton").click(function() {
        pagecolor = 1;
        $(".blueButton").css("color", "black");
        $(".yellowButton, .pinkButton").css("color", "");
        $(".content").load("content/blueContent.html");
        $(".pageColor").css("background-color", "#0066ff");
        $(".image").attr("src", "content/blueCommuta.png");
        $(".antique").css("color", "");
        $("#cashTag").css("color", "#00ff00");
    });
});