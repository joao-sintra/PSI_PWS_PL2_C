<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Selecionar cliente</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
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
                    <li class="breadcrumb-item"><a href="index.php?c=folhaobra&a=create">Emitir Folha de Obra</a></li>
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
                    <input type="text" name="table_search" class="form-control float-left" placeholder="Search">
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
                    <th>Data</th>
                    <th>Valor Total</th>
                    <th>Iva Total</th>
                    <th>Estado</th>
                    <th>User_id</th>
                    <th>Cliente_id</th>
                    <th>Escolher</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($folhasObra as $folhaobra) { ?>
                    <tr>
                        <td><?= date_format($folhaobra->data, "Y/m/d") ?></td>
                        <td><?= $folhaobra->valortotal ?></td>
                        <td><?= $folhaobra->ivatotal ?></td>
                        <td><?= $folhaobra->estado ?></td>
                        <td><?= $folhaobra->user_id ?></td>
                        <td><?= $folhaobra->cliente_id ?></td>
                        <td>
                            <a href="index.php?c=folhaobra&a=show&id=<?= $folhaobra->id ?>" class="btn btn-info"
                               role="button">Show</a>
                            <a href="index.php?c=folhaobra&a=edit&id=<?= $folhaobra->id ?>" class="btn btn-info"
                               role="button">Edit</a>
                            <a href="index.php?c=folhaobra&a=delete&id=<?= $folhaobra->id ?>" class="btn btn-warning"
                               role="button">Delete</a>
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
