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
  echo form_open('computers/criarcomputadorsubmition');
  ?>

  <div class="container">
    <form class="form-signin">
      <h1 class="h3 mb-3 font-weight-normal">Criar computador</h1>

      <div class="form-group">
        <label>Especificações do novo computador:</label><br>
        Departamento:

        <select name="id_departamento">
          <?php
          foreach ($departaments as $departament) {
            echo '<option value="' . $departament['id'] . '">' . $departament["description"] . '</option>';
          } ?>
        </select><br>

        <label for="inputEmail">Codigo</label>
        <input type="text" name="codigo" class="form-control" value="<?php echo $codigo->codigo ?>" required>

        <label for="inputEmail">Usuario</label>
        <input type="text" name="usuario" class="form-control" value="<?php echo $username->username ?>" required>

        <label for="inputEmail">Placa de video</label>
        <input type="text" name="video" class="form-control" value="<?php echo $video->video ?>" required>

        <label for="inputEmail">HD</label>
        <input type="text" name="hd" class="form-control" value="<?php echo $hd->hd ?>" required>

        <label for="inputEmail">Memoria RAM</label>
        <input type="text" name="memoria" class="form-control" value="<?php echo $memory->memory ?>" required>

        <label for="inputEmail">Processador</label>
        <input type="text" name="processador" class="form-control" value="<?php echo $processor->processor ?>" required>

      </div>

      <div class="text-center">
        <input type="submit" value="Criar" class="btn btn-primary">
      </div>
      <div class="col">
        <a href="<?= site_url('computers') ?>" class="btn btn-secondary">Cancelar</a>
      </div>

    </form>
  </div>

  <?= form_close() ?>

</body>

</html>