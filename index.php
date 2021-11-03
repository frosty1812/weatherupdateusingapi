<?php
require_once("api.php");
?>

<!DOCTYPE html>
<html lang="en">
<script src="jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/dadd28db05.js" crossorigin="anonymous"></script>



<title> Weather API v1.0 </title>

<head>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-md navbar-light bg-faded" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item active text-end">
                    <a class="nav-link" href="#home">home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item text-end">
                    <a class="nav-link" href="#aboutme">about me</a>
                </li>
                <li class="nav-item text-end">
                    <a class="nav-link" href="#contact">contact</a>
                </li>
            </ul>
        </nav>

        <div class="mt-3" data-spy="scroll" data-target="#menu" data-offset="0" onload="startTime()">
            <div id="home" class="mx-auto">
                <h2 class="text-center">home</h2>
                <div id="main_forecast">
                    <p class="forecast">
                    <h4> Current time:<h4>
                            <p id="currentTime"></p>
                            <h3> The forecast for tommorow in <b><?php echo $city_name ?></b>:  </h3>
                            <h4>Temperature:</h4>
                            Minimum of: <b><?php echo $min_temp; ?></b>
                            <br>Maximum of: <b><?php echo $max_temp; ?></b>
                            </p>

                            <p class="rain">
                                <h4> Rain precipitation </h4>
                                <i class="fas fa-sun"></i> In the day, there will be <b><?php echo $day; ?></b> <br>
                                <i class="fas fa-moon"></i> In the night, it will be <b><?php echo $night; ?></b> <br>
                            </p>
                </div>
            </div>
            <div id="aboutme">
                <h2 class="text-center">about me</h2>
                <div id="aboutmyself">
                    <h3> My name is Tran Hoang Lam </h3>
                    <p> My speciality is not coding, everything that I do in this assignment <br>
                        is not from my knowledge
                        <br>
                        but rather from StackOverflow
                    </p>
                    <p><b>If my API timeout,</b> you can contact me in the links below</p>
                    <p><b> If you want to talk professionally,</b> please contact me through my e-mail <a href="mailto:hoanglamtran.work@gmail.com" style="color:black;">here</a></p>
                    <h3 id="thankyou"> Thank you for visiting my simple website! </h3>
                </div>
            </div>

        </div>
    </main>
    <footer class="footer">
        <div class id="contact">
            <h2 class="text-center">contact</h2>
            <a href="https://facebook.com/duckymomo1812" id="facebook"><i class="fab fa-facebook fa-3x"></i></a>
            <a href="https://instagram.com/frostytagram" id="instagram"><i class="fab fa-instagram fa-3x"></i></a>
        </div>
    </footer>



</body>

</html>