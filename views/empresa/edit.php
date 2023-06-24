<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Editar Empresa</title>

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
                    <li class="breadcrumb-item active">Editar Empresa</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-md-7 ">

        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Editar Informações da Empresa</h3>
            </div>


            <form action='index.php?c=user&a=update&id=<?=$empresa->id?>' method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="designacaosocial">Designação Social </label>
                        <input type="text" class="form-control" id="designacaosocial" name="designacaosocial" placeholder="Introduza o designação social..." value="<?=$empresa -> designacaosocial?>">
                        <p><?php
                            if(isset($empresa->errors)) {
                                if (is_array($empresa->errors->on('designacaosocial'))) {
                                    foreach ($empresa->errors->on('designacaosocial') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $empresa->errors->on('designacaosocial');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Introduza o email..." value="<?=$empresa -> email?>">
                        <p><?php
                            if(isset($empresa->errors)) {
                                if (is_array($empresa->errors->on('email'))) {
                                    foreach ($empresa->errors->on('email') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $empresa->errors->on('email');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone </label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Introduza o telefone..." value="<?=$empresa -> telefone?>">
                        <p><?php
                            if(isset($empresa->errors)) {
                                if (is_array($empresa->errors->on('telefone'))) {
                                    foreach ($empresa->errors->on('telefone') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $empresa->errors->on('telefone');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="nif">NIF </label>
                        <input type="text" class="form-control" id="nif" name="nif" placeholder="Introduza o NIF..." value="<?=$empresa -> nif?>">
                        <p><?php
                            if(isset($empresa->errors)) {
                                if (is_array($empresa->errors->on('nif'))) {
                                    foreach ($empresa->errors->on('nif') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $empresa->errors->on('nif');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="morada">Morada </label>
                        <input type="text" class="form-control" id="morada" name="morada" placeholder="Introduza a morada..." value="<?=$empresa -> morada?>">
                        <p><?php
                            if(isset($empresa->errors)) {
                                if (is_array($empresa->errors->on('morada'))) {
                                    foreach ($empresa->errors->on('morada') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $empresa->errors->on('morada');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="codigopostal">Código Postal </label>
                        <input type="text" class="form-control" id="codigopostal" name="codigopostal" placeholder="Introduza o código postal..." value="<?=$empresa -> codigopostal?>">
                        <p><?php
                            if(isset($empresa->errors)) {
                                if (is_array($empresa->errors->on('codigopostal'))) {
                                    foreach ($empresa->errors->on('codigopostal') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $empresa->errors->on('codigopostal');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="localidade">Localidade </label>
                        <input type="text" class="form-control" id="localidade" name="localidade" placeholder="Introduza a localidade..." value="<?=$empresa -> localidade?>">
                        <p><?php
                            if(isset($empresa->errors)) {
                                if (is_array($empresa->errors->on('localidade'))) {
                                    foreach ($empresa->errors->on('localidade') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $empresa->errors->on('localidade');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="capitalsocial">Capital Social</label>
                        <input type="text" class="form-control" id="capitalsocial" name="capitalsocial" placeholder="Introduza a capital social..." value="<?=$empresa -> capitalsocial?>">
                        <p><?php
                            if(isset($empresa->errors)) {
                                if (is_array($empresa->errors->on('capitalsocial'))) {
                                    foreach ($empresa->errors->on('capitalsocial') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $empresa->errors->on('capitalsocial');
                                }
                            }
                            ?>
                        </p>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="index.php?c=empresa&a=index" class="btn btn-danger" role="button">CANCELAR</i></a>
                    <input class="btn btn-warning" type="submit" value="ATUALIZAR">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
