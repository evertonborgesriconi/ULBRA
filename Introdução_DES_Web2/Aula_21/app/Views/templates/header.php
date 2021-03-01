<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <div class="jumbotron">
            <h1>Home Galary</h1>
        </div>
    </header>
    <section class="row">
        <nav class="col-md-3">
            <h2>Menu</h2>
            <ul class="list-unstyled">
                <li>
                  <a href="<?=base_url('home')?>">Home</a>
                </li>
                <li>
                  <a href="<?=base_url('about')?>">Sobre</a>
                </li>
                <li>
                  <a href="<?=base_url('products')?>">Produtos e Serviços</a>
                </li>
                <li>
                  <a href="<?=base_url('contact')?>">Formulário de contato</a>
                </li>
                <br>
                <h2>Clientes<h2>
                <li>
                <a style="font-size:18px;"href="<?=base_url('')?>">Registro<a>
                </li>
                <li>
                <a style="font-size:18px;" href="<?=base_url('clients')?>">Lista de Clientes</a>
                </li>
              </ul>    
        </nav>
        <article class="col-md-9">