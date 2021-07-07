<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>PRORADIS</title>
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../wireframe.css">
  <style type="text/css">
    body {
      background-image: url("../wpp2.jpg");
      background-color: #222;
      background-position: center center;
      background-size: 100%;
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      cursor: default;
    }
  </style>
</head>

<body class="text-center bg-dark">
  <div class="p-3 h-100 d-flex flex-column">
    <div class="container mb-auto">
      <div class="row">
        <div class="mx-auto col-md-9">
          <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
              <a class="navbar-brand" href="#"><b>PRORADIS</b></a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> </button>
              <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="../"><b>Home</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../vacinas"><b>Vacinas</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="../pacientes"><b>Pacientes</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://github.com/giliady/proradis"><b>GitHub</b></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"> <a href="#"><font color="black">Home</font></a> </li>
            <li class="breadcrumb-item active">Pacientes</li>
          </ul>
          <ul class="nav nav-tabs">
            <li class="nav-item"> <a href="" class="active nav-link" data-toggle="pill" data-target="#tabone">&nbsp;Cadastro</a> </li>
          </ul>
          <div class="tab-content mt-2">
            <div style="background-color: white; color: #000; padding: 10px;" class="tab-pane fade show active" id="tabone" role="tabpanel">
              <h3 class="d-flex" style=""><span class="badge badge-warning">Cadastro de Pacientes</span></h3>
              <div class="row">
                <div class="col-md-6">
                  <div style="background-color: white; color: #000; padding: 10px; border-radius: 10px;" align="left">
                    <form action="../assets/insertPaciente.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Sobrenome</label>
                        <input type="text" id="sobrenome" name="sobrenome" class="form-control" aria-describedby="emailHelp">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Data de Nascimento</label>
                        <input type="date" id="nascimento" name="nascimento" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">CPF</label>
                        <input type="number" id="cpf" name="cpf" class="form-control" aria-describedby="emailHelp" placeholder="Digite apenas números">
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div align="left">
                    <div style="margin-top: 9px;" class="form-group">
                      <label for="exampleInputEmail1">CEP</label>
                      <input id="cep" name="cep" type="number" class="form-control" aria-describedby="emailHelp" placeholder="Digite apenas números">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Rua</label>
                      <input id="rua" name="rua" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Número da Residência</label>
                      <input id="numeroCasa" name="numeroCasa" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Complemento</label>
                      <input id="complemento" name="complemento" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Digite apenas números">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12"><button type="submit" class="btn btn-warning" style="width: 100%; color: black;" href="#"><b>CADASTRAR</b></button></div>
              </div>
            </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container mt-auto">
      <div class="row">
        <div class="col-md-12"></div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <p class="mt-auto text-light">Protótipo de Sistema de Gerenciamento de Pacientes e Vacinas - Feito por Giliady</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>