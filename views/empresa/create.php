<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Criar Empresa</title>

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
                    <li class="breadcrumb-item"><a href="index.php?c=backoffice&a=index">Dashboard</a></li>
                    <li class="breadcrumb-item active">Criar Empresa</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-md-7 ">

        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Informações da Empresa</h3>
            </div>


            <form action='index.php?c=empresa&a=store' method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="designacaosocial">Designação Social </label>
                        <input type="text" class="form-control" id="designacaosocial" name="designacaosocial" placeholder="Introduza a designação social..." value="<?php if(isset($empresa)) {
                            echo $empresa->designacaosocial; }?>">
                        <?php if(isset($empresa->errors)){
                            echo $empresa->errors->on('designacaosocial');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Introduza o email..." value="<?php if(isset($empresa)) { echo
                        $empresa->email; }?>">
                        <?php if(isset($empresa->errors)){
                            echo $empresa->errors->on('email');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone </label>
                        <input type="number" class="form-control" id="telefone" name="telefone" placeholder="Introduza o telefone..." value="<?php if(isset($empresa)) { echo
                        $empresa->telefone; }?>">
                        <?php if(isset($empresa->errors)){
                            echo $empresa->errors->on('telefone');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="nif">NIF </label>
                        <input type="number" class="form-control" id="nif" name="nif" placeholder="Introduza o NIF..." value="<?php if(isset($empresa)) { echo
                        $empresa->nif; }?>">
                        <?php if(isset($empresa->errors)){
                            echo $empresa->errors->on('nif');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="morada">Morada </label>
                        <input type="text" class="form-control" id="morada" name="morada" placeholder="Introduza a morada..." value="<?php if(isset($empresa)) { echo
                        $empresa->morada; }?>">
                        <?php if(isset($empresa->errors)){
                            echo $empresa->errors->on('morada');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="codigopostal">Código Postal </label>
                        <input type="text" class="form-control" id="codigopostal" name="codigopostal" placeholder="Introduza o código postal..." value="<?php if(isset($empresa)) { echo
                        $empresa->codigopostal; }?>">
                        <?php if(isset($empresa->errors)){
                            echo $empresa->errors->on('codigopostal');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="localidade">Localidade </label>
                        <input type="text" class="form-control" id="localidade" name="localidade" placeholder="Introduza a localidade..." value="<?php if(isset($empresa)) { echo
                        $empresa->localidade; }?>">
                        <?php if(isset($empresa->errors)){
                            echo $empresa->errors->on('localidade');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="capitalsocial">Capital Social </label>
                        <input type="number" class="form-control" id="capitalsocial" name="capitalsocial" placeholder="Introduza a capital social..." value="<?php if(isset($empresa)) { echo
                        $empresa->capitalsocial; }?>">
                        <?php if(isset($empresa->errors)){
                            echo $empresa->errors->on('capitalsocial');
                        }?>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="index.php?c=empresa&a=index" class="btn btn-danger" role="button">CANCELAR</i></a>
                    <input class="btn btn-warning" type="submit" value="CRIAR">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
