<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Empresa</title>

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
                    <li class="breadcrumb-item active">Empresa</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title ">Registo da Empresa</h3>
        </div>

        <div class="card-body table-responsive p-0" style="height: 450px;">
            <table class="table table-head-fixed text-nowrap">
                <?php if (COUNT($empresas) == 0) { ?>
                    <div class="card-body">
                        <div class="card-title">
                            <h3><b>Criar empresa</h3></b></h3> &ensp; <a href="index.php?c=empresa&a=create"
                                                                         class="btn btn-success" role="button"><i
                                        class="fas fa-plus" style="color: #ffffff;"></i></a>


                        </div>
                    </div>
                <?php } else { ?>
                <thead>
                <tr>
                    <th>Nº Empresa</th>
                    <th>Designação Social</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>NIF</th>
                    <th>Morada</th>
                    <th>Código Postal</th>
                    <th>Localidade</th>
                    <th>Capital Social</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($empresas as $empresa) { ?>
                    <tr>
                        <td class="text-center"><?= $empresa->id ?></td>
                        <td><?= $empresa->designacaosocial ?></td>
                        <td><?= $empresa->email ?></td>
                        <td><?= $empresa->telefone ?></td>
                        <td><?= $empresa->nif ?></td>
                        <td><?= $empresa->morada ?></td>
                        <td><?= $empresa->codigopostal ?></td>
                        <td><?= $empresa->localidade ?></td>
                        <td><?= $empresa->capitalsocial ?></td>
                        <td>
                            <a href="index.php?c=empresa&a=show&id=<?= $empresa->id ?>" class="btn btn-warning btn-sm"
                               role="button"><i class="fas fa-eye" style="color: #ffffff;"></i></a>
                            <a href="index.php?c=empresa&a=edit&id=<?= $empresa->id ?>" class="btn btn-primary btn-sm"
                               role="button"><i class="fas fa-pencil-alt"></i></a>
                        </td>
                    </tr>
                <?php }
                } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>

