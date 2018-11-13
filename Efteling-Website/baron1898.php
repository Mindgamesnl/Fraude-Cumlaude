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
            <h1 class="headerFont yellow">Baron 1898</h1>
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
                        <td><?php echo $rawData->rides->baron1898->State; ?></td>
                    </tr>
                    <tr>
                        <td>Ride Gebied</td>
                        <td><?php echo $rawData->rides->baron1898->area; ?></td>
                    </tr>
                    <tr>
                        <td>Ride Type</td>
                        <td><?php echo $rawData->rides->baron1898->text_nl; ?></td>
                    </tr>
                    <tr>
                        <td>Hoofd wachtrij</td>
                        <td><?php echo $rawData->rides->baron1898->waitingTime; ?> Min (<?php echo $rawData->rides->baron1898->waitingPercentage; ?>% van max capiciteit)</td>
                    </tr>
                    <tr>
                        <td>Single Riders</td>
                        <td><?php echo $rawData->rides->baron1898singlerider->waitingTime; ?> Min</td>
                    </tr>
                    <tr>
                        <td>Foto Punt</td>
                        <td><el style="color: lightgreen;" class="headerFont">Aanwezig</el></td>
                    </tr>
                </table>
            </div>

            <h3>Over</h3>
            <p>Baron 1898 is een dive coaster (duikachtbaan) waarin bezoekers een loodrechte vrije val maken, een type coaster van de Zwitserse achtbaanbouwer Bolliger & Mabillard. De attractie is gethematiseerd als een eind-negentiende eeuwse goudmijn en is gelegen aan de rand van het Ruigrijk, aan de oever van de Gondoletta.</p>
            <h4>Muziek</h4>
            <audio controls>
                <source src="http://craftmend.com/a.mp3" type="audio/mpeg">
                Oepsie woepsie muziek werkt niet
            </audio>
            <h4>Onride Video</h4>
            <p>Met tumbnail</p>
            <video controls poster="/img/baron.jpg">
                <source src="vid/onride.mp4" type="video/mp4">
                Geen video
            </video>
        </div>

    </div>
</div>

<footer>
    Gebruikte software: <a href="https://github.com/Mindgamesnl/Efteling-API">Efteling Api</a>
</footer>

</body>
</html>