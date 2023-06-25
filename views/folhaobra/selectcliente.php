<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Selecionar cliente</title>

</head>
<body>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?c=folhaobra&a=create&id=0">Emitir Folha de Obra</a>
                    </li>
                    <li class="breadcrumb-item active">Selecionar cliente</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Selecione um cliente para a Folha de Obra</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 200px;">
                    <input type="text" name="table_search" class="form-control float-left"
                           placeholder="Pesquisar clientes...">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body table-responsive p-0" style="height: 450px;">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>NIF</th>
                    <th>Selecionar</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $clientes) { ?>
                    <tr>
                        <td><?= $clientes->username ?></td>
                        <td><?= $clientes->nif ?></td>
                        <td>
                             <a href="index.php?c=folhaobra&a=create&id=<?= $clientes->id ?>" class="btn btn-success btn-sm">SELECIONAR</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</div>
</section>
<!-- /.content -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

</body>
</html>
