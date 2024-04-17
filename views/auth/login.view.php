<?php 
require "views/components/head.php";
require "views/components/navbar.php";
?>
    <h1> Log-in </h1>
    <h2> Logged in as <?= $_SESSION["email"] ?? "no one!"?> </h2>
    <form method="POST">

        <label>Email
            <input type="email" name="email" value="<?= $_POST["email"] ?? "" ?>"/>
        </label>
        </br>
        <label>Password
            <input type="password" name="password" value="<?= $_POST["password"] ?? "" ?>"/>
        </label>
        </br>
        <button>Submit</button>


        <?php if (isset($errors["email"])) { ?>
                <p class="invalid-data"> <?= $errors["email"] ?> </p>
        <?php } ?>
        <?php if (isset($errors["password"])) { ?>
                <p class="invalid-data"> <?= $errors["password"] ?> </p>
        <?php } ?>
    </form>
<?php
require "views/components/footer.php";  
?>