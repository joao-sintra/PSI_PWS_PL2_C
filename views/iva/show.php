<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Visualizar IVA</title>

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
                    <li class="breadcrumb-item"><a href="index.php?c=iva&a=index">Registo IVAs</a></li>
                    <li class="breadcrumb-item active">Visualizar IVA</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-md-7 ">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Visualizar Informações do IVA</h3>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="percentagem">Percentagem </label>
                    <input type="text" disabled class="form-control" value="<?=$iva -> percentagem?>">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" disabled class="form-control" value="<?=$iva -> descricao?>">
                </div>
                <div class="form-group">
                    <label for="vigor">Vigor </label>
                    <?php if ($iva->vigor == 1) { ?>
                        <input type="checkbox" disabled class="form-control" checked="checked">
                    <?php } else {?>
                        <input type="checkbox" disabled class="form-control">
                    <?php }?>
                </div>
            </div>

            <div class="card-footer">
                <a href="index.php?c=iva&a=index" class="btn btn-primary" role="button">VOLTAR</i></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
