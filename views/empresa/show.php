<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Visualizar Empresa</title>

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
                    <li class="breadcrumb-item"><a href="index.php?c=empresa&a=index">Empresa</a></li>
                    <li class="breadcrumb-item active">Visualizar Empresa</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-md-7 ">

        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Visualizar Informações da Empresa</h3>
            </div>


            <form action='index.php?c=user&a=update&id=<?=$empresa->id?>' method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="designacaosocial">Designação Social </label>
                        <input type="text" disabled class="form-control" value="<?=$empresa -> designacaosocial?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" disabled class="form-control" value="<?=$empresa -> email?>">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone </label>
                        <input type="text" disabled class="form-control" value="<?=$empresa -> telefone?>">
                    </div>
                    <div class="form-group">
                        <label for="nif">NIF </label>
                        <input type="text" disabled class="form-control" value="<?=$empresa -> nif?>">
                    </div>
                    <div class="form-group">
                        <label for="morada">Morada </label>
                        <input type="text" disabled class="form-control" value="<?=$empresa -> morada?>">
                    </div>
                    <div class="form-group">
                        <label for="codigopostal">Código Postal </label>
                        <input type="text" disabled class="form-control" value="<?=$empresa -> codigopostal?>">
                    </div>
                    <div class="form-group">
                        <label for="localidade">Localidade </label>
                        <input type="text" disabled class="form-control" value="<?=$empresa -> localidade?>">
                    </div>
                    <div class="form-group">
                        <label for="capitalsocial">Capital Social</label>
                        <input type="text" disabled class="form-control" value="<?=$empresa -> capitalsocial?>">
                    </div>
                </div>

                <div class="card-footer">
                    <a href="index.php?c=empresa&a=index" class="btn btn-warning" role="button">VOLTAR</i></a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
