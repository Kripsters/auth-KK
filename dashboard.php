<?php
session_start();

echo "Dashboard </br>";

echo "Hi, " . ($_SESSION["kakisavards"] ?? "guest");