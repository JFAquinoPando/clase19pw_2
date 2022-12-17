<?php
    $conf = include("config.php");

    $mysqli = new mysqli(
        $conf["alojamiento"],
        $conf["user"],
        $conf["password"],
        $conf["basededatos"]
    );