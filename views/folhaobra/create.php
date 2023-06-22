<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Emitir Folha de Obra</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?c=backoffice&a=index">Dashboard</a></li>
                    <li class="breadcrumb-item active">Emitir Folha de Obra</li>
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
                        <div class="col-12">
                            <h4>
                                <i class="fas fa-globe"></i> <?= constant('APP_NAME') ?>
                                <small class="float-right">Data: 27/05/2023</small>
                            </h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            De
                            <address>
                                <strong>Oficina do Mecânico</strong><br>
                                Rua das Empresas, 2400-200, Leiria<br>
                                NIF: 123456789<br>
                                Telefone: (351) 916 773 888<br>
                                Email: oficina.mecanico@mail.com
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">

                            <address>
                                Dados do Cliente:

                                </address>
                                <a href="index.php?c=folhaobra&a=selectcliente" class="btn btn-info"
                                   role="button">Selecionar</a>
                            <?php } else { ?>
                                <address>
                                    Dados do Cliente:<br>
                                    <strong><?= $users->username ?></strong><br>
                                    <?= $users->morada ?><br>
                                    <?= $users->localidade ?>, <?= $users->codigopostal ?><br>
                                    Telefone: <?= $users->telefone ?><br>
                                    Email: <?= $users->email ?><br>
                                </address>
                            <?php } ?>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <b>Folha de obra #<?= $folhasObra->id ?></b><br>


                            <b>Pagamento até:</b> 10/06/2023<br>

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
                                    <th>Quantidade</th>
                                    <th>Produto</th>
                                    <th>Serial #</th>
                                    <th>Descrição</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                            </table>
                            <br>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-6">
                            <p class="lead">Métodos de Pagamento:</p>
                            <img src="../../dist/img/credit/visa.png" alt="Visa">
                            <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                            <img src="../../dist/img/credit/american-express.png" alt="American Express">
                            <img src="../../dist/img/credit/paypal2.png" alt="Paypal">


                        </div>
                        <!-- /.col -->
                        <div class="col-6">


                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>0 €</td>
                                    </tr>
                                    <tr>
                                        <th>IVA (23%)</th>
                                        <td>0 €</td>
                                    </tr>

                                    <tr>
                                        <th>Total:</th>
                                        <td>0 €</td>
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
                            <a href="index.php?c=backoffice&a=index" class="btn btn-danger float-right" role="button">Cancelar</a>
                            <button type="button" disabled class="btn btn-secondary float-right"
                                    style="margin-right: 5px;">Emitir
                            </button>
                            <H5><b>Funcionário:</b> <?= $auth->getUserName() ?></H5>
                        </div>
                    </div>
                </div>
                <!-- /.invoice -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
