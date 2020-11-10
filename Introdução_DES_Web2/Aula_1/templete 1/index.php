<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
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
                  <a href="?modulo=home">Home</a>
                </li>
                <li>
                  <a href="?modulo=sobre">Sobre</a>
                </li>
                <li>
                  <a href="#!">Produtos e Serviços</a>
                </li>
                <li>
                  <a href="#!">Formulário de contato</a>
                </li>
              </ul>
        </nav>
        <article class="col-md-9">
           <?php
              if(!isset($_GET['modulo'])){
                require_once['home.php'];
              } else{
                  switch($_REQUEST['modulo']){
                    case 'home':
                      require_once('home.php');
                    break;
                    case 'sobre':
                      require_once('sobre.php');
                    break;
                }

              }
           ?>

    </section>
    <footer>
        <div class="footer-copyright text-center py-3">2020 Meu Projeto:
            <a href="https://github.com/evertonborgesriconi">GitHub Everton Riconi</a>
        </div>
    </footer>
    
</body>
</html>