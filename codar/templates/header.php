<?php
    include_once("app/helpers/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">
        <title>Blog Codar</title>
    </head>
    <body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="/assets/img/logo.svg" alt="Blog Codar">
        </a>
        <nav>
            <ul class="navbar">
                <li><a class="navbar__link" href="<?= $BASE_URL ?>">Home</a></li>
                <li><a class="navbar__link" href="#">Categorias</a></li>
                <li><a class="navbar__link" href="#">Sobre</a></li>
                <li><a class="navbar__link" href="#">Contato</a></li>
            </ul>
        </nav>
    </header>