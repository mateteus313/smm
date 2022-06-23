<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Editar departamento</title>

  <!-- Principal CSS do Bootstrap -->
  <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos customizados para esse template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <div class="container">
    <form class="form-signin">
      <h1 class="h3 mb-3 font-weight-normal">Excluir computador</h1>

      <div class="form-group">
        <label for="inputEmail">Deseja excluir o computador que pertence ao departamento:</label>
        <div class="card p-3 my-3 bg-light">
          <h4><?php echo $departaments['description'] ?></h4>
        </div>
      </div>

      <!-- Botões de confirmação -->
      <div class="row">
            <div class="col text-center">
                <a href="<?php echo site_url('computers') ?>" class="btn btn-secondary">Não</a>
                <a href="<?php echo site_url('computers/deletarComputadorConfirmar/'.$id) ?>" class="btn btn-primary">Sim</a>
            </div>
        </div>
    </form>
  </div>



</body>

</html>