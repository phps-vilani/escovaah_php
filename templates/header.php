<?php
    include_once('helpers/url.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Escova AH</title>
    <!-- FONTS DO PROJETO -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="" id="logo">
            <img src="<?= $BASE_URL ?>assets/logo.png" alt="logo">
        </a>
        <div id="socials">
            <p class="socials-p">Siga-nos nas redes sociais:</p>
            <a class="fa fa-facebook"href=""></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-youtube"></a>
        </div>
        <nav>
            <ul id="navbar">
                <li>
                    <a class="nav-link" href="<?= $BASE_URL ?>">Home</a>
                    <a class="nav-link" href="<?= $BASE_URL ?>produtos.php">Produtos</a>
                    <a class="nav-link" href="<?= $BASE_URL ?>manual.php">Manual</a>
                </li>
                <div>
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8 col-lg-6">
                                <div class="search-container position-relative">
                                    <form >
                                        <input class="form-control search-input ps-5" type="search"
                                            placeholder="Pesquisar produto" aria-label="Search">
                                        <button class="btn btn-search ms-2" type="submit">Pesquisar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div><i class="fa fa-user fa-2x"></i></div>  
                <div><i class="fa fa-shopping-cart fa-2x"></i></div>
            </ul>
        </nav>
    </header>