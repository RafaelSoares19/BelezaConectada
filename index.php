<?php
session_start();

// if (!isset($_GET['id'])) {
//     header('Location: login.php');
//     exit;
// }

// require_once 'conexao.php';

// try {
//     $query = "SELECT * FROM usuarios WHERE id = :id";
//     $stmt = $conn->prepare($query);
//     $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
//     $stmt->execute();
//     $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

//     if (!$usuario) {
//         header('Location: index.php?id=' . $usuario['id']);
//         exit;
//     }
// } catch (PDOException $e) {
//     echo "Erro: " . $e->getMessage();
// }

if (!isset($usuario)) {
  $usuario = [
      'id' => 1,
      'nome' => 'Desenvolvedor'
  ];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <!-- Estilo customizado -->
        <link rel="stylesheet" type="text/css" href="css/estilohome.css">
        <title>BarberShop</title>
    </head>

    <body>
<body>

    <main class="caixa1" id="main">
      <nav class="navbar navbar-expand-lg navbar-dark" id="menurespbg">
        <div class="container">
          <a href="" class="navbar-brand ml-5"><img class="mr-3 logo" src="img/logo.jpg" style="width: 80px;"><h3 class="d-inline nomempresa">BarberShop - Beleza Conectada</h3></a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="nav-target">    
            <ul class="navbar-nav ml-auto" id="menu">
              <li class="nav-item">
                <a href="#main" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="#Serviços" class="nav-link">Agendar</a>
              </li>
              <li class="nav-item">
                <a href="#Contato" class="nav-link">Contato</a>
              </li>
              <li class="nav-item">
                <a href="sair.php" class="nav-link">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row align-items-center">
          <div class="col marcar">
            <div class="mt-5">
              <h1 class="title-usuario">Olá, <?= htmlspecialchars($usuario['nome']) ?>!</h1>
              <h2 class="subtitulo mb-4"><b>A moderna barbearia para grandes homens!</b></h2>
              <p class="person-min">A vida é muito curta para não fazer a barba. Agende seu horário,
              seja nosso cliente fiel, que prometemos pontos de fidelidades na 
              hora de pagar o seu corte. </p>
              <div>
                <a href="#Contato"><img src="img/whatsbg.png" class="redes-sociais whats mr-4"></a>
              </div>
              
            </div>
          </div>
          <div class="col img-banner">
            <img src="img/barbeiro.png">
          </div>
        </div>
      </div>
    </main>

    <div class="caixa2"  id="barber1">
      <div class="conteudo-titulo">
        <span class="titulo">Figaro "FI"?</span>
      </div>
    </div>

    <section id="Serviços">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5 mt-2">
            <span class="hint-title"><b>Serviço</b></span>
            <h1 class="title">
              <b>Conheça o nosso Trabalho</b>
            </h1>
          </div>
          <div class="col-12 container-menu">
            <a class="btn btn-orange btn-sm mr-3 active a-barba active" onclick="servicos.metodos.obterItensServicos('barba')">
              &nbsp; Barba
            </a>
            <a class="btn btn-orange btn-sm mr-3 a-cortes active" onclick="servicos.metodos.obterItensServicos('cortes')">&nbsp; Cortes
            </a>
            <a class="btn btn-orange btn-sm mr-3 a-quimica active" onclick="servicos.metodos.obterItensServicos('quimica')">
              &nbsp; Quimica
            </a>
            <a class="btn btn-orange btn-sm mr-3 a-combos active" onclick="servicos.metodos.obterItensServicos('combos')">
              &nbsp; Combos
            </a>
          </div>

          <div class="col-12">
            <div class="row barba conteudo" id="itensServicos">
              
            </div>
          </div>

          <div>
            <p class="text-center title mt-4">Entenda nossos pontos abaixo!</p>
          </div>

        </div>
      </div>
    </section>

    <div class="caixa3" id="Fidelidade">
      <div class="conteudo-titulo">
        <span class="titulo">Fidelidade sempre!</span>
      </div>
    </div>

    <section class="caixa3a" id="Fidelidade-points">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 text-center mb-5 mt-5">
            <span class="hint-title"><b>Fidelidade</b></span>
            <h1 class="title mt-4">
              <b>Entenda os pontos!</b>
            </h1>
            <b><p class="mt-5 text-justify">A cada serviço agendado são acrecidos pontos que cheagam ao chat do seu barbeiro. A pontuação é acrecida no valor do serviço mais 20 pontos. Ao ajuntar 300 pontos ganhe uma barba de graça. Ao ajuntar 500 pontos ganhe um corte de graça. Ao ajuntar 1000 pontos ganhe qualquer serviço da barbearia de graça. Comece ajuntar agora!!</p></b>
            <p><a class="btn btn-lg btn-orange mt-5" href="#Serviços">Agendar</a></p>
          </div>
        </div>
      </div>
    </section>

    <div class="caixa4">
      <div class="conteudo-titulo">
        <span class="titulo">Estamos te esperando!</span>
      </div>
    </div>

    <section class="caixa4a" id="Contato">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
            <div class="card mt-4" id="cartão">
              <div class="card-body">
                <h1 class="mt-3 cor2 mb-5">Endereço:</h1>
                <div class="row">
                  <h5>Rua Francisco Glicério, 904 – Jardim Amanda, Hortolandia – SP</h5>
                  <h6 class="hint-title">13188-081</h6>
                  <h5>11 99015 - 5204</h5>
                  <a href="https://wa.me/5511990155204?text=Olá,+tudo+bem?" target="_blank" class="btn btn-orange">Conversar</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <h1 class="cor1 display-5 mt-5">A confiança <span class="cor2">começa </span>com um  <span class="cor2">bom </span>corte.</h1>
            <img src="img/cadeira.png" id="cama" class="mt-4 mb-3 img-fluid">
          </div>
        </div>
      </div>
    </section>

    <div class="caixa5">
      <div class="conteudo-titulo">
        <span class="titulo">Beleza imersiva!</span>
      </div>
    </div>

    <footer class="caixa4a rod">
      <div class="container">
        <div class="d-flex justify-content-center">
          <a href="#main" class="btn cor2">Back topo -</a>
          <a href="#Contato" class="btn cor2">Back Endereço -</a>
          <a href="#Fidelidade-points" class="btn cor2">Back Fidelidade -</a>
          <a href="#Serviços" class="btn cor2">Back Serviços</a>
          </div>
        <p class="text-center cor1">&copy; Todos os direitos reservados - BarberShop Beleza Conectada - 2024</p>
      </div> 
    </footer>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/modernizr-3.5.0.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/dados.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
    </body>

</html>
