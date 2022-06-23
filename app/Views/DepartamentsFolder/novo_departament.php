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

  <!-- ABERTURA FORM -->
  <?php
  helper('form');
  echo form_open('departaments/criardepartamentosubmition');
  ?>

  <div class="container">
    <form class="form-signin">
      <h1 class="h3 mb-3 font-weight-normal">Criar departamento</h1>

      <div class="form-group">
        <label for="inputEmail">Nome do novo departamento:</label>
        <input type="text" name="nome_departamento" class="form-control" value="<?php echo $description->description ?>" required>
      </div>

      <div class="text-center">
        <input type="submit" value="Criar" class="btn btn-primary">
      </div>
      <div class="col">
        <a href="<?= site_url('departaments') ?>" class="btn btn-secondary">Cancelar</a>
      </div>

    </form>
  </div>

  <?= form_close() ?>

</body>

</html>