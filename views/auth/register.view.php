<?php 
require "views/components/head.php";
require "views/components/navbar.php";
?>
    <h1> Register </h1>
    <form method="POST">
        <label>Email
            <input name="email" value="<?= $_POST["email"] ?? "" ?>"/>
        </label>
        <label>Password
            <input name="password" value="<?= $_POST["password"] ?? "" ?>"/>
        </label>
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