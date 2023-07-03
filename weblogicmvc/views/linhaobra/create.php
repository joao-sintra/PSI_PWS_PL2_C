<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Criar novas Linhas de Obra</title>

    <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">

</head>
<body>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?c=linhaobra&a=index&id_folhaobra=<?=$id_folhaobra?>">Registo de Linhas de Obra</a>
                    </li>
                    <li class="breadcrumb-item active">Criar Nova Linha de Obra</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="col-md-7 ">

                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Informações da Linha de Obra</h3>
                    </div>


                    <form action='index.php?c=linhaobra&a=store' method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="referencia">Referência </label>
                                <input type="number" class="form-control" id="referencia" name="referencia"
                                       placeholder="Introduza a referência..." value="<?php if (isset($servico->referencia)) { echo $servico->referencia; }
                                if (isset($servico->errors)) {
                                    echo $servico->errors->on('referencia');
                                } ?>">

                            </div>

                            <div class="form-group">
                                <label for="quantidade">Quantidade </label>
                                <input type="number" class="form-control" id="quantidade" name="quantidade"
                                       placeholder="Introduza a quantidade..." value="1">

                            </div>
                    <input type="hidden" name="folhaobra_id" value="<?= $id_folhaobra ?>">

                            <div class="col-12">
                                <a href="index.php?c=linhaobra&a=index&id_folhaobra=<?=$id_folhaobra?>" class="btn btn-danger"
                                   role="button">CANCELAR</i></a>
                                <input class="btn btn-success" type="submit" value="ADICIONAR">
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>

