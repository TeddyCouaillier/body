

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Corps</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
</head>

<body>





<!--
    <img src="corps.png" class="mx-auto my-auto">
    <div id="cheville" class="circle_black"></div>
-->
<div class="container text-center">
    <div class="main_picture_article" style="height: 500px;">
                <img src="corps.png" class="img-fluid">
                <div class="bottom-left mx-auto bulle" id="cheville"></div>
                <div class="bottom-left mx-auto bulle" id="genoux"></div>
                <div class="bottom-left mx-auto bulle" id="main"></div>
                <div class="bottom-left mx-auto bulle" id="bras"></div>
                <div class="bottom-left mx-auto bulle" id="epaule"></div>
                <div class="bottom-left mx-auto bulle" id="hanche"></div>
            </div>
</div>

<div class="container text-center">
<div class="infobulle" id="infobulle_cheville"><h2>Info cheville</h2><br>Lorem ipsum</div>
<div class="infobulle" id="infobulle_genoux"><h2>Info genoux</h2><br>Lorem ipsum</div>
<div class="infobulle" id="infobulle_main"><h2>Info main</h2><br>Lorem ipsum</div>
<div class="infobulle" id="infobulle_bras"><h2>Info bras</h2><br>Lorem ipsum</div>
<div class="infobulle" id="infobulle_epaule"><h2>Info epaule</h2><br>Lorem ipsum</div>
<div class="infobulle" id="infobulle_hanche"><h2>Info hanche</h2><br>Lorem ipsum</div>
</div>






<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script src="js/script.js"></script>
    <script>

 $(function() {
    $('.bulle').hover(function() { 
    var test = $(this).attr("id");
    $(`#infobulle_${test}`).fadeIn(); 
    }, function() { 
        var test = $(this).attr("id");
    $(`#infobulle_${test}`).fadeOut(); 
    });
});


        </script>
</body>

</html>