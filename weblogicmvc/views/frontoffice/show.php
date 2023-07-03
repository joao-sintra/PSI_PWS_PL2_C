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
                        <div class="col-4"><h5 class="float-right">Data: <?= $folhaObra->data->format('d/m/Y') ?></h5>
                        </div>
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
                                <a href="index.php?c=folhaobra&a=selectcliente" class="btn btn-info"
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

                            <b>Folha de obra #<?= $folhaObra->id; ?></b><br>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Ref.</th>
                                    <th>Desc.</th>
                                    <th>Qtn.</th>
                                    <th>Pr. Uni.</th>
                                    <th>IVA Valor</th>
                                    <th>Subtotal</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php if (isset($linhasObra)) {
                                    foreach ($linhasObra as $linhaobra) { ?>
                                        <tr>
                                            <td><?= $linhaobra->servico->referencia ?></td>
                                            <td><?= $linhaobra->servico->descricao ?></td>
                                            <td><?= $linhaobra->quantidade ?></td>
                                            <td><?= $linhaobra->valorunitario ?></td>
                                            <td><?= $linhaobra->valoriva ?></td>
                                            <td><?= $linhaobra->quantidade * $linhaobra->valorunitario ?></td>
                                        </tr>
                                    <?php }
                                } ?>
                                </tbody>
                            </table>

                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-6">
                                    <p class="lead">Métodos de Pagamento:</p>
                                    <img src="public/img/credit/visa.png" alt="Visa">
                                    <img src="public/img/credit/mastercard.png" alt="Mastercard">
                                    <img src="public/img/credit/paypal2.png" alt="Paypal">


                                </div>
                                <!-- /.col -->
                                <div class="col-6">


                                    <!-- Mostrar toda a linhaobra com um for each -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-6">


                                </div>
                                <!-- /.col -->
                                <div class="col-6">


                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th style="width:50%">Subtotal:</th>
                                                <td><?php if (isset($subtotal)) echo $subtotal; else echo '0'; ?>€</td>
                                            </tr>
                                            <tr>
                                                <th>IVA</th>
                                                <td><?= $folhaObra->ivatotal ?>€</td>
                                            </tr>

                                            <tr>
                                                <th>Total:</th>
                                                <td><?= $folhaObra->valortotal ?>€</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <a href="index.php?c=frontoffice&a=index" class="btn btn-info float-right"
                                       role="button">VOLTAR</a>
                                    <script>
                                        function myFunction() {
                                            let text = "Deseja pagar esta folha de obra?";
                                            if (confirm(text) == true) {
                                                window.location.href = "index.php?c=frontoffice&a=pagarfolha&id_folhaobra=<?= $folhaObra->id ?>";
                                            }

                                        }
                                    </script>
                                    <?php
                                    if ($folhaObra->estado == 'Emitida') {
                                        ?>
                                        <button type="button" class="btn btn-success float-right"
                                                style="margin-right: 5px;" onclick="myFunction()">Pagar
                                        </button>


                                        <?php
                                    } ?>

                                    <H5><b>Funcionário:</b> <?= $folhaObra->user->username ?></H5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div><!-- /.container-fluid -->
</section>
</body>
</html>