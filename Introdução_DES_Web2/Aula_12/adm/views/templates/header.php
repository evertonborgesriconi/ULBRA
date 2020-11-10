<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
            <h1>Area Admistrativa</h1>  
    </header>
    <section class="row">
        <nav class="col-md-3">
            <h2>Menu</h2>
            <a href="?controller=main&action=index">Home</a><br>
            <a href="?controller=clients&action=listClients">Lista de Clientes</a><br>
            <a href="?controller=clients&action=insertClient">Add Clientes</a>
            
        </nav>
        <article class="col-md-9">