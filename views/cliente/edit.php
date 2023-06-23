<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Editar Cliente</title>

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
                    <li class="breadcrumb-item"><a href="index.php?c=cliente&a=index">Registo Clientes</a></li>
                    <li class="breadcrumb-item active">Editar Cliente</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-md-7 ">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Editar Informações do Cliente</h3>
            </div>


            <form action='index.php?c=cliente&a=update&id=<?=$cliente->id?>' method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="username">Nome </label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Introduza o nome..." value="<?=$cliente -> username?>">
                        <p><?php
                            if(isset($cliente->errors)) {
                                if (is_array($cliente->errors->on('username'))) {
                                    foreach ($cliente->errors->on('username') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $cliente->errors->on('username');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Introduza a password..." value="<?=$cliente -> password?>"><br>
                        <p><?php
                            if(isset($cliente->errors)) {
                                if (is_array($cliente->errors->on('password'))) {
                                    foreach ($cliente->errors->on('password') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $cliente->errors->on('password');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Introduza o email..." value="<?=$cliente -> email?>"><br>
                        <p><?php
                            if(isset($cliente->errors)) {
                                if (is_array($cliente->errors->on('email'))) {
                                    foreach ($cliente->errors->on('email') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $cliente->errors->on('email');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone </label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Introduza o telefone..." value="<?=$cliente -> telefone?>"><br>
                        <p><?php
                            if(isset($cliente->errors)) {
                                if (is_array($cliente->errors->on('telefone'))) {
                                    foreach ($cliente->errors->on('telefone') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $cliente->errors->on('telefone');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="nif">NIF </label>
                        <input type="text" class="form-control" id="nif" name="nif" placeholder="Introduza o NIF..." value="<?=$cliente -> nif?>"><br>
                        <p><?php
                            if(isset($cliente->errors)) {
                                if (is_array($cliente->errors->on('nif'))) {
                                    foreach ($cliente->errors->on('nif') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $cliente->errors->on('nif');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="morada">Morada </label>
                        <input type="text" class="form-control" id="morada" name="morada" placeholder="Introduza a morada..." value="<?=$cliente -> morada?>"><br>
                        <p><?php
                            if(isset($cliente->errors)) {
                                if (is_array($cliente->errors->on('morada'))) {
                                    foreach ($cliente->errors->on('morada') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $cliente->errors->on('morada');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="codigopostal">Código Postal </label>
                        <input type="text" class="form-control" id="codigopostal" name="codigopostal" placeholder="Introduza o código postal..." value="<?=$cliente -> codigopostal?>"><br>
                        <p><?php
                            if(isset($cliente->errors)) {
                                if (is_array($cliente->errors->on('codigopostal'))) {
                                    foreach ($cliente->errors->on('codigopostal') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $cliente->errors->on('codigopostal');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="localidade">Localidade </label>
                        <input type="text" class="form-control" id="localidade" name="localidade" placeholder="Introduza a localidade..." value="<?=$cliente -> localidade?>"><br>
                        <p><?php
                            if(isset($cliente->errors)) {
                                if (is_array($cliente->errors->on('localidade'))) {
                                    foreach ($cliente->errors->on('localidade') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $cliente->errors->on('localidade');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">

                        <input type="hidden" readonly="readonly" name="role" class="form-control" value="cliente">
                    </div>
                </div>

                <div class="card-footer">
                    <input class="btn btn-primary" type="submit" value="ATUALIZAR">
                    <a href="index.php?c=cliente&a=index" class="btn btn-danger" role="button">CANCELAR</i></a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
