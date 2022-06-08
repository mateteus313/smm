<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Computadores</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="assets/dist/css/dashboard.css" rel="stylesheet">

    <!--  Inclusao do font awesome  -->
    <link rel="stylesheet" href="<?= base_url('/assets/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
</head>

<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Nome da companhia</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sair</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="/home">
                                <span data-feather="home"></span>
                                Inicio <span class="sr-only">(atual)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/departaments">
                                <span data-feather="file"></span>
                                Departamentos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/computers">
                                <span data-feather="shopping-cart"></span>
                                Computadores
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Relatórios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Integrações
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Relatórios salvos</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Neste mês
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Último trimestre
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Engajamento social
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Vendas do final de ano
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h2>Computadores</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Departament_id</th>
                                <th>Codigo</th>
                                <th>Username</th>
                                <th>Video</th>
                                <th>HD</th>
                                <th>Memory</th>
                                <th>Processor</th>
                                <th>Created_at</th>
                                <th>Updated_at</th>
                                <th><!--- Açoes --></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($computers as $computer) : ?>
                                <tr>
                                    <td><?= $computer->id ?></td>
                                    <td><?= $computer->departament_id ?></td>
                                    <td><?= $computer->codigo ?></td>
                                    <td><?= $computer->username ?></td>
                                    <td><?= $computer->video ?></td>
                                    <td><?= $computer->hd ?></td>
                                    <td><?= $computer->memory ?></td>
                                    <td><?= $computer->processor ?></td>
                                    <td><?= $computer->created_at ?></td>
                                    <td><?= $computer->updated_at ?></td>
                                    
                                    <td class="text-center">
                                        <!-- BOTAO DE EDITAR COMPUTADOR -->
                                        <a href="<?php echo site_url('Computers/editarComputador/' . $computer->id) ?>" class="btn btn-primary btn-sm mx-2 "><i class="fa fa-edit"></i></a>
                                        <!-- FIM -->

                                        <!-- BOTAO DE EXCLUIR COMPUTADOR -->
                                        <a href="<?php echo site_url('Computers/deletarComputador/' . $computer->id) ?>" class="btn btn-primary btn-sm mx-2"><i class="fa fa-trash"></i></a>
                                        <!-- FIM -->
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <div>
                        <a href="<?php echo site_url('Computers/criarComputador/' . $computer->id) ?>" class="btn btn-primary">Novo</a>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="assets/dist/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="assets/dist/js/popper.min.js"></script>
    <script src="assets/dist/js/bootstrap.min.js"></script>

    <!-- Ícones -->
    <script src="assets/dist/js/feather.min.js"></script>
    <script>
        feather.replace()
    </script>

    <!-- Gráficos -->
    <script src="assets/dist/js/chart.min.js"></script>
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                datasets: [{
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false
                        }
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });
    </script>
</body>

</html>