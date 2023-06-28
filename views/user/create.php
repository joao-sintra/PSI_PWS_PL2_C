<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Criar Novo User</title>

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
                    <li class="breadcrumb-item active">Criar Novo User</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-md-7 ">

        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Informações do User</h3>
            </div>


            <form action='index.php?c=user&a=store' method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="username">Nome </label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Introduza o nome..." value="<?php if(isset($user)) {
                            echo $user->username; }?>">
                        <?php if(isset($user->errors)){
                            echo $user->errors->on('username');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Introduza a password..." value="<?php if(isset($user)) { echo
                        $user->password; }?>">
                        <?php if(isset($user->errors)){
                            echo $user->errors->on('password');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Introduza o email..." value="<?php if(isset($user)) { echo
                        $user->email; }?>">
                        <?php if(isset($user->errors)){
                            echo $user->errors->on('email');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone </label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Introduza o telefone..." value="<?php if(isset($user)) { echo
                        $user->telefone; }?>">
                        <?php if(isset($user->errors)){
                            echo $user->errors->on('telefone');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="nif">NIF </label>
                        <input type="text" class="form-control" id="nif" name="nif" placeholder="Introduza o NIF..." value="<?php if(isset($user)) { echo
                        $user->nif; }?>">
                        <?php if(isset($user->errors)){
                            echo $user->errors->on('nif');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="morada">Morada </label>
                        <input type="text" class="form-control" id="morada" name="morada" placeholder="Introduza a morada..." value="<?php if(isset($user)) { echo
                        $user->morada; }?>">
                        <?php if(isset($user->errors)){
                            echo $user->errors->on('morada');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="codigopostal">Código Postal </label>
                        <input type="text" class="form-control" id="codigopostal" name="codigopostal" placeholder="Introduza o código postal..." value="<?php if(isset($user)) { echo
                        $user->codigopostal; }?>">
                        <?php if(isset($user->errors)){
                            echo $user->errors->on('codigopostal');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="localidade">Localidade </label>
                        <input type="text" class="form-control" id="localidade" name="localidade" placeholder="Introduza a localidade..." value="<?php if(isset($user)) { echo
                        $user->localidade; }?>">
                        <?php if(isset($user->errors)){
                            echo $user->errors->on('localidade');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label><br>
                        <select name="role" id="role">
                            <option value="admin">Administrador</option>
                            <option value="funcionario">Funcionário</option>
                            <option value="cliente">Cliente</option>
                        </select>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="index.php?c=user&a=index" class="btn btn-danger" role="button">CANCELAR</i></a>
                    <input class="btn btn-success" type="submit" value="CRIAR">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

