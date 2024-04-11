<?php

echo "Hi, Sessions!";

session_start();

$_SESSION["kakisavards"] = "Krigga";
$_SESSION["age"] = 34632526234;

?> 

</br> 

<?php
echo "Hi, " . $_SESSION["kakisavards"];
session_destroy();
?>