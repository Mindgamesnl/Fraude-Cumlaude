<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eind opdracht, kijk eens wat cool</title>

    <!--[if lt IE 9]>
        <script src="https://html5shiv.googlecode.com/svn/trunk.js"></script>
    <![endif]-->

    <!-- common includes -->
    <link rel="stylesheet" href="css/main.css" />
    <script src="javascript/navbar.js"></script>

</head>
<body>

<div class="content">
    <div class="box">

        <?php

        include "includes/navbar.php";

        ?>

        <section class="inner">
            <h1 class="headerFont yellow">Over</h1>
            <p>Text dus, dit is mijn eind opdracht!</p>
            <p>Een pagina, gethemed naar de kleuren van de achtbaan <code>Baron 1898</code> met up to date wacht tijden! hun api is nog al slecht beveiligd en heb er op craftmend.com een wrapper voor gemaakt.</p>
            <p>De date en informatie kan je vinden op de volgende pagina's</p>
            <p>Met wonderlijke groeten, <el class="headerFont">Mats Moolhuizen</el></p>

            <h1 id="timer">Timer</h1>

            <script>
            var t = 0;
            setInterval(function(){
              t++;
              document.getElementById("timer").innerHTML = "Je bent hier al " + t+ " seconden";
            }, 1000)
            </script>
        </section>

    </div>
</div>

<footer>
    Gebruikte software: <a href="https://github.com/Mindgamesnl/Efteling-API">Efteling Api</a>
</footer>

</body>
</html>
