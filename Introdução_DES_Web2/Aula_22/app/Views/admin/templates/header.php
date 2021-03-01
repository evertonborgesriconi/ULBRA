<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/styleadm.css')?>">
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
            <a href="<?=base_url('admin')?>">Home</a><br>
            <a href="<?=base_url('admin/clients')?>">Lista de Clientes</a><br>
            <a href="<?=base_url('admin/clients/insert')?>">Add Clientes</a>
            
        </nav>
        <article class="col-md-9">
