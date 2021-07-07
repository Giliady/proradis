<?php
session_start();
include ('../assets/config.php');

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>PRORADIS</title>
  <meta name="description" content="Wireframe design of a cover page by Pingendo">
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
  <?php
  if (isset($_SESSION['setVacina'])) {

    ?>
    <div class="alert alert-success" role="alert">
      Vacina registrada!
    </div>
    <?php
    unset($_SESSION['setVacina']);
  }
  ?>
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
                      <a class="nav-link active" href="../vacinas"><b>Vacinas</b></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../pacientes"><b>Pacientes</b></a>
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
              <li class="breadcrumb-item active">Vacinas</li>
            </ul>
            <ul class="nav nav-tabs">
              <li class="nav-item"> <a href="" class="active nav-link" data-toggle="pill" data-target="#tabone">&nbsp;Cadastro</a> </li>
              <li class="nav-item"> <a class="nav-link" href="" data-toggle="pill" data-target="#tabtwo"> Vacinas</a> </li>
              <li class="nav-item"> <a href="" class="nav-link" data-toggle="pill" data-target="#tabthree"> Vacinar Paciente</a> </li>
            </ul>
            <div class="tab-content mt-2">
              <div style="background-color: white; color: #000; padding: 10px;" class="tab-pane fade show active" id="tabone" role="tabpanel">
                <h3 class="d-flex" style=""><span class="badge badge-success">Cadastro de Vacinas</span></h3>
                <div class="row">
                  <div class="col-md-6">
                    <div style="background-color: white; color: #000; padding: 10px; border-radius: 10px;" align="left">
                      <form action="../assets/insertVacina.php" method="POST">
                        <div class="form-group">
                          <label >Fabricante</label>
                          <input type="text" required="" class="form-control" name="fabricante" id="fabricante">
                        </div>
                        <div class="form-group">
                          <label>Lote</label>
                          <input type="text" required="" class="form-control" name="lote" id="lote">
                        </div>
                        <div class="form-group">
                          <label>Data de Validade</label>
                          <input type="date" required="" class="form-control" name="validade" id="validade">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div style="margin-top: 10px;" align="left">
                        <div class="form-group">
                          <label>Doses necessárias</label>
                          <input type="number" required="" class="form-control" name="doses" id="doses" placeholder="Digite apenas números">
                        </div>
                        <div style="margin-top: 9px;" class="form-group">
                          <label>Intervalo entre doses</label>
                          <input type="number" required="" class="form-control" name="intervalo" id="intervalo" placeholder="Digite apenas números">
                        </div>
                        <div class="row">
                          <div class="col-md-12"><button type="submit" class="btn btn-warning" style="width: 100%; color: black;" href="#"><b>CADASTRAR</b></button></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div style="background-color: white; color: #000; padding: 10px;" class="tab-pane fade" id="tabtwo" role="tabpanel">
                <table style="color: black;" class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Fabricante</th>
                      <th scope="col">Lote</th>
                      <th scope="col">Validade</th>
                      <th scope="col">Doses</th>
                      <th scope="col">Intervalo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM vacinas";
                    $result = $conn->query( $sql );
                    $rows = $result->fetchAll( PDO::FETCH_ASSOC );

                    foreach ($rows as $infosSite) {
                      ?>
                      <tr>
                        <td><?php echo $infosSite['fabricante']; ?></td>
                        <td><?php echo $infosSite['lote']; ?></td>
                        <td><?php echo $infosSite['validade']; ?></td>
                        <td><?php echo $infosSite['doses']; ?></td>
                        <td><?php echo $infosSite['intervalo'] . ' dias'; ?></td>
                      </tr>
                      <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <div style="background-color: white; color: #000; padding: 10px;" class="tab-pane fade" id="tabthree" role="tabpanel">
                <form action="../assets/insertVacinado.php" method="POST">
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="validationServer01">CPF</label>
                      <input type="number" class="form-control" name="cpf" id="cpf" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationServer02">Data de Nascimento</label>
                      <input type="date" class="form-control" name="nascimento" id="nascimento" required>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationServer01">Vacina</label>
                      <select name="lote" id="lote" class="custom-select" required>
                        <option value="" disabled="" act>Escolha a vacina</option>
                        <?php
                        $sql = "SELECT * FROM vacinas";
                        $result = $conn->query( $sql );
                        $rows = $result->fetchAll( PDO::FETCH_ASSOC );

                        foreach ($rows as $infosSite) {
                          ?>
                          <option value="<?php echo $infosSite['lote']; ?>"><?php echo $infosSite['fabricante']; ?> | Lote: <?php echo $infosSite['lote']; ?></option>
                          <?php
                        }
                        ?>
                      </select>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit">VACINAR</button>
                </form>
              </div>
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