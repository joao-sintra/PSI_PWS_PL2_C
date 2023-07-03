<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Emitir FO</title>

</head>
<body>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Emitir Folha de Obra</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?c=backoffice&a=index">Dashboard</a></li>
                    <li class="breadcrumb-item active">Emitir FO</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!-- Main content -->
                <div class="invoice p-3 mb-3">
                    <!-- title row -->
                    <div class="row">
                        <!--<div class="col-12">
                            <h4>


                            </h4>
                        </div>-->
                        <div class="col-4"><i class="fas fa-globe"></i> <?= constant('APP_NAME') ?></div>
                        <div class="col-4">Dados do Cliente:</div>
                        <div class="col-4"><h5 class="float-right">Data: <?= $dataFormatada ?></h5></div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">

                            <?php if (!isset($empresa->id)) { ?>

                                <a href="index.php?c=empresa&a=create" class="btn btn-info"
                                   role="button">Criar Empresa </i></a>

                            <?php } else { ?>

                                <address>
                                    <strong><?= $empresa->designacaosocial ?></strong><br>
                                    <?= $empresa->morada ?>, <?= $empresa->codigopostal ?>, <?= $empresa->localidade ?>
                                    <br>
                                    NIF: <?= $empresa->nif ?>, <br>
                                    Telefone: <?= $empresa->telefone ?><br>
                                    Email: <?= $empresa->email ?><br>
                                </address>
                            <?php } ?>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <?php if (!isset($cliente->id)) { ?>
                                <a href="index.php?c=folhaobra&a=selectcliente&pesquisa=" class="btn btn-info"
                                   role="button">Selecionar </i></a>
                                <br>
                                <br>
                            <?php } else { ?>
                                <address>
                                    <strong><?= $cliente->username ?></strong><br>
                                    <?= $cliente->morada ?><br>
                                    <?= $cliente->localidade ?>, <?= $cliente->codigopostal ?><br>
                                    Telefone: <?= $cliente->telefone ?><br>
                                    Email: <?= $cliente->email ?><br>
                                </address>
                            <?php } ?>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">

                            <b>Folha de obra #<?php if(isset($folhaObra->id)) echo$folhaObra->id; ?></b><br>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->



                </div>
                <!-- /.invoice -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
</body>
</html>