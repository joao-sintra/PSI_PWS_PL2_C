<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Visualizar User</title>

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
                    <li class="breadcrumb-item"><a href="index.php?c=user&a=index">Registo Users</a></li>
                    <li class="breadcrumb-item active">Visualizar User</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-md-7 ">

        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Visualizar Informações do User</h3>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="username">Nome </label>
                    <input type="text" disabled class="form-control" value="<?=$user -> username?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" disabled class="form-control" value="<?=$user -> password?>">
                </div>
                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="email" disabled class="form-control" value="<?=$user -> email?>">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone </label>
                    <input type="text" disabled class="form-control" value="<?=$user -> telefone?>">
                </div>
                <div class="form-group">
                    <label for="nif">NIF </label>
                    <input type="text" disabled class="form-control" value="<?=$user -> nif?>">
                </div>
                <div class="form-group">
                    <label for="morada">Morada </label>
                    <input type="text" disabled class="form-control" value="<?=$user -> morada?>">
                </div>
                <div class="form-group">
                    <label for="codigopostal">Código Postal </label>
                    <input type="text" disabled class="form-control" value="<?=$user -> codigopostal?>">
                </div>
                <div class="form-group">
                    <label for="localidade">Localidade </label>
                    <input type="text" disabled class="form-control" value="<?=$user -> localidade?>">
                </div>
                <div class="form-group">
                    <label for="role">Role </label>
                    <input type="text" disabled class="form-control" value="<?=$user -> role?>">
                </div>
            </div>

            <div class="card-footer">
                <a href="index.php?c=user&a=index" class="btn btn-success" role="button">VOLTAR</i></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
