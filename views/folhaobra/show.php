<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Início</title>

    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">

</head>
<body>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?c=backoffice&a=index">Dashboard</a></li>
                    <li class="breadcrumb-item active">FO emitidas</li>
                </ol>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title ">Registo de FO's Emitidas</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <input type="text" name="table_search" class="form-control float-left"
                                   placeholder="Pesquisar FO...">
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
                            <th>Nº FO</th>
                            <th>Data</th>
                            <th>Cliente</th>
                            <th>Funcionário</th>
                            <th>Valor Total</th>
                            <th>Estado</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($folhasObra as $folhaObra) {
                            if ($folhaObra->estado != 'Em lançamento') { ?>
                                <tr>
                                    <td><?= $folhaObra->id ?></td>
                                    <td><?= date('d/m/Y', strtotime($folhaObra->data)) ?></td>
                                    <?php foreach ($users as $cliente) { ?>
                                        <?php if ($cliente->id == $folhaObra->cliente_id) { ?>
                                            <td><?= $cliente->username ?></td>
                                        <?php }
                                    } ?>
                                    <?php foreach ($users as $funcionario) { ?>
                                        <?php if ($funcionario->id == $folhaObra->user_id) { ?>
                                            <td><?= $funcionario->username ?></td>
                                        <?php }
                                    } ?>
                                    <td><?= $folhaObra->valortotal ?></td>
                                    <td><?= $folhaObra->estado ?></td>
                                </tr>
                            <?php }
                        } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
</section>
</body>
</html>
