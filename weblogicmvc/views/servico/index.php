<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Serviços</title>

    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">

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
                    <li class="breadcrumb-item"><a href="index.php?c=backoffice&a=index">Dashboard</a></li>
                    <li class="breadcrumb-item active">Serviços</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title ">Registo de Serviços</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 200px;">
                    <input type="text" name="table_search" class="form-control float-left" placeholder="Pesquisar serviços...">
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
                    <th>Nº Serviço</th>
                    <th>Referência</th>
                    <th>Descrição</th>
                    <th>Valor Unit.</th>
                    <th>IVA</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($servicos as $servico) { ?>
                    <tr>
                        <td><?= $servico->id ?></td>
                        <td><?= $servico->referencia ?></td>
                        <td><?= $servico->descricao ?></td>
                        <td><?= $servico->valorunitario ?></td>
                        <td><?= $servico->iva->percentagem?>%</td>
                        <td>
                            <a href="index.php?c=servico&a=show&id=<?=$servico->id?>" class="btn btn-warning btn-sm" role="button"><i class="fas fa-eye" style="color: #ffffff;"></i></a>
                            <a href="index.php?c=servico&a=edit&id=<?=$servico->id?>" class="btn btn-primary btn-sm" role="button"><i class="fas fa-pencil-alt"></i></a>
                            <a href="index.php?c=servico&a=delete&id=<?=$servico->id?>" class="btn btn-danger btn-sm" role="button"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-title">
        <h3 class="text-center"><b>Criar um novo serviço</h3></b></h3>
    </div>
    &ensp; <a href="index.php?c=servico&a=create" class="btn btn-success" role="button"><i class="fas fa-plus" style="color: #ffffff;"></i></a>
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

