<?php

require "./Database.php";
require "Validator.php";
$config = require("./config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if(!Validator::string($_POST["username"], min:1, max:255)) {
        $errors["username"] = "invalid username";
    }
    
    if(!Validator::string($_POST["password"], min:1, max:255)) {
        $errors["password"] = "invalid password";
    }
    if (empty($errors)) {
        $query = "SELECT * FROM users";
        $params = [];
        $db = new Database($config);
        $posts = $db
            ->execute($query, $params)
            ->fetchAll();
        foreach($posts as $post) {
            if ($_POST["username"] == $post["username"] && $_POST["password"] == $post["password"]) {
                $_SESSION["User"] = $post["username"];
            }
        }
    }
}

$title = "Log in";
require "./views/auth/login.view.php";
?>