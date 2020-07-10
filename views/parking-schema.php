<?php

include '../views/menu.php';

if (!isLoggedInUser()) {
    header('Location:' . '../views/index.php');
} elseif(isLoggedInAdmin()){
    header('Location:' . '../views/main.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../styles/fmi-parking-style.css">
    <link rel="stylesheet" type="text/css" href="../styles/parking-schema.css">
    <script src="../js/parking.js"></script>
    <title>FMI Parking Schema</title>
</head>

<body onload="setAvailableZones();">

    <a href="parking.html"><img id="su-logo" src="../assets/img/su-logo.png"></a>
    <a href="parking.html"><img src="../assets/img/fmi-logo.png"></a>

    <h1 id="title">Please choose a parking zone:</h1>
    <div id="availablityInfo">
        Available parking spots:
        <ul>Zone А: <span id="availableSpotsZoneA"></span> <input id="submitBtn" type="button" value="Choose spot" onClick="location.href = 'zoneA.php';" />
        </ul>
        <ul>Zone B: <span id="availableSpotsZoneB"></span><input id="submitBtn" type="button" value="Choose spot" onClick="location.href = 'zoneB.php';" />
        </ul>
        <ul>Zone C: <span id="availableSpotsZoneC"></span> <input id="submitBtn" type="button" value="Choose spot" onClick="location.href = 'zoneC.php';" />
        </ul>
    </div>

    <!-- Image Map Generated by http://www.image-map.net/ -->
    <img id="image" src="../assets/img/fmi_zones.jpg" usemap="#image-map">

    <map name="image-map">
        <area target="" alt="zone A" title="zone A" href="./zoneA.php" coords="289,447,321,509,636,354,602,287" shape="poly">
        <area target="" alt="zone B" title="zone B" href="./zoneB.php" coords="884,399,897,430,987,388,975,357" shape="poly">
        <area target="" alt="zone C" title="zone C" href="./zoneC.php" coords="595,214,619,197,501,104,392,95,311,91,226,166,459,132,501,153,560,193,488,153,588,206,316,92,225,168,159,386,237,357,393,183,255,336,563,196,474,151,556,170" shape="poly">
    </map>
</body>

</html>