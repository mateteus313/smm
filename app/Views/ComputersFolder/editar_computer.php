<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Editar Computador</title>

  <!-- Principal CSS do Bootstrap -->
  <link href="/assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos customizados para esse template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

<!-- ABERTURA FORM -->
<?php
helper('form');
echo form_open('computers/editarcomputadorsubmition');
?>

<!-- Um input escondido para armazenar o id da tarefa que está sendo editada -->
<input type="hidden" name="id" value="<?php echo $departament_id->id?>">


  <div class="container">
    <form class="form-signin">
      <h1 class="h3 mb-3 font-weight-normal">Editar Computador</h1>
      
      <div class="form-group">
        <label for="inputEmail">Id do departamento</label>
        <input type="text" name="id_departamento" class="form-control" value="<?php echo $departament_id->departament_id ?>" required>

        <label for="inputEmail">Codigo</label>
        <input type="text" name="codigo" class="form-control" value="<?php echo $departament_id->codigo ?>" required>

        <label for="inputEmail">Nome do(a) usuario</label>
        <input type="text" name="usuario" class="form-control" value="<?php echo $departament_id->username ?>" required>

        <label for="inputEmail">Placa de video</label>
        <input type="text" name="video" class="form-control" value="<?php echo $departament_id->video ?>" required>

        <label for="inputEmail">HD</label>
        <input type="text" name="hd" class="form-control" value="<?php echo $departament_id->hd ?>" required>

        <label for="inputEmail">Memoria</label>
        <input type="text" name="memoria" class="form-control" value="<?php echo $departament_id->memory ?>" required>

        <label for="inputEmail">Processador</label>
        <input type="text" name="processador" class="form-control" value="<?php echo $departament_id->processor ?>" required>

      </div>
      
      <div class="text-center">
        <input type="submit" value="Atualizar" class="btn btn-primary">
      </div>

      <div class="col">
        <a href="<?= site_url('computers') ?>" class="btn btn-secondary">Cancelar</a>
      </div>
    </form>
  </div>



</body>

</html>