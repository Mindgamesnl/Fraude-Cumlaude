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
            <h1 class="headerFont yellow">De Vliegende Hollander</h1>
            <h3>Wacht tijden</h3>

            <div style="display: block; text-align: -webkit-center;">

                <?php
                //efteling api
                include "includes/eftelingapi.php";
                ?>
                <h5>(Real time vanaf mijn public efteling API)</h5>
                <table>
                    <tr>
                        <th>Naam</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>Ride Opperatie</td>
                        <td><?php echo $rawData->rides->devliegendehollander->State; ?></td>
                    </tr>
                    <tr>
                        <td>Ride Gebied</td>
                        <td><?php echo $rawData->rides->devliegendehollander->area; ?></td>
                    </tr>
                    <tr>
                        <td>Ride Type</td>
                        <td><?php echo $rawData->rides->devliegendehollander->text_nl; ?></td>
                    </tr>
                    <tr>
                        <td>Hoofd wachtrij</td>
                        <td><?php echo $rawData->rides->devliegendehollander->waitingTime; ?> Min (<?php echo $rawData->rides->devliegendehollander->waitingPercentage; ?>% van max capiciteit)</td>
                    </tr>
                    <tr>
                        <td>Single Riders</td>
                        <td><el style="color: red;" class="headerFont">Niet Van Toepassing</el></td>
                    </tr>
                    <tr>
                        <td>Foto Punt</td>
                        <td><el style="color: lightgreen;" class="headerFont">Aanwezig</el></td>
                    </tr>
                </table>
            </div>

            <h3>Over</h3>
            <p>De Vliegende Hollander is een attractie in Ruigrijk die bestaat uit een combinatie van diverse attractietypes, waaronder een walkthrough, een darkride en een watercoaster. Het thema van de attractie is de gelijknamige sage over een spookschip uit de Gouden Eeuw.</p>
            <h4>Muziek</h4>
            <audio controls>
                <source src="http://craftmend.com/b.mp3" type="audio/mpeg">
                Oepsie woepsie muziek werkt niet
            </audio>
            <h4>Foto</h4>
            <img src="img/dvh.jpg" class="rideimg" />
        </section>

    </div>
</div>

<footer>
    Gebruikte software: <a href="https://github.com/Mindgamesnl/Efteling-API">Efteling Api</a>
</footer>

</body>
</html>