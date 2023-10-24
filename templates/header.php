<?php 

include_once 'helpers/url.php';
include_once 'data/posts.php';
include_once 'data/categorias.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
</head>
<body>

<header>
    <a href="<?= $BASE_URL?>" id="logo">
<img src="<?= $BASE_URL?>/img/logo.svg"" alt="Blog Codar"></a>
<nav>
    <ul id="navbar">
        <li><a  href="<?=$BASE_URL?>" class="nav-link" >Home</a></li>
        <li><a class="nav-link"href="#">Categorias</a></li>
        <li><a class="nav-link"href="#">Sobre</a></li>
        <li><a class="nav-link" href="<?=$BASE_URL?>/contato.php">Contact</a></li>
    </ul>
</nav>
</header>
    
</body>
</html>