<?php 
require "views/components/head.php";
require "views/components/navbar.php";
?>
<h1> ??? kas notiek </h1>
<h2> Logged in as <?= $_SESSION["email"] ?? "no one!"?> </h2>

<form action="/logout" method="POST">
    <button>Logout</button>
</form>
<?php
require "views/components/footer.php";  
?>