<?php 
require "views/components/head.php";
require "views/components/navbar.php";
?>
    <h1> Register 蠕变</h1>
    <form method="POST">

        <label>Email
            <input type="email" name="email" value="<?= $_POST["email"] ?? "" ?>"/>
        </label>
        </br>
        <label>Password
            <input type="password" name="password" value="<?= $_POST["password"] ?? "" ?>"/>
        </label>
        <span class="explanation"> (8 rakstzimes, 1 liels, 1 mazs, 1 ipas simbols un 1 skaitlis) </span>
        </br>
        <button>Submit</button>


        <?php if (isset($errors["email"])) { ?>
                <p class="invalid-data"> <?= $errors["email"] ?> </p>
        <?php } ?>
        <?php if (isset($errors["password"])) { ?>
                <p class="invalid-data"> <?= $errors["password"] ?> </p>
        <?php } ?>
    </form>
    </br>
    <a href="javascript:alert('I am Idris Elba');">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiHSKlmcp2gbMWKZM0PfERl9FNIM7VzkVletegaMNi&s">
    </a>
<?php
require "views/components/footer.php";  
?>