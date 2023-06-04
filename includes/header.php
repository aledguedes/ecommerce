<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS  -->
    <link rel="stylesheet" href="src/style.css">
    <!-- ICONS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>e-commerce - loja virtual</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-item-center py-3 gap-md-0 gap-3">
                <a href="/home.php" class="col-6"><img src="img/logo_dhemes.png" alt="Logo da Dhemes" width="200px"></a>
                <div class="col-12 col-md-4 col-xl-3">
                    <form class="search-area rounded-3 p-3 d-flex flex-nowrap">
                        <i class="bi bi-search me-2"></i>
                        <input type="text" placeholder="Pesquisar produtos...">
                    </form>
                </div>
            </div>
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container px-0">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link px-0" aria-current="page" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-0 mx-md-3" href="loja.php">Loja</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-0" href="produto-detalhe.php">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-0 mx-md-3" href="carrinho.php">Carrinho</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-0" href="recebido.php">Encomenda recebida</a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center nav-shop">
                        <i class="bi bi-currency-dollar"></i>  0,00
                        <p class="mb-0 mx-3">0 itens</p>
                        <a href="carrinho.php"><i class="bi bi-basket3"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>