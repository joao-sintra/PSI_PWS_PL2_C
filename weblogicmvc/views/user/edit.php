<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Editar User</title>

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
                    <li class="breadcrumb-item active">Editar User</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-md-7 ">

        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Editar Informações do User</h3>
            </div>


            <form action='index.php?c=user&a=update&id=<?=$user->id?>' method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="username">Nome </label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Introduza o nome..." value="<?=$user -> username?>">
                        <p><?php
                            if(isset($user->errors)) {
                                if (is_array($user->errors->on('username'))) {
                                    foreach ($user->errors->on('username') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $user->errors->on('username');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Introduza a password..." value="<?=$user -> password?>">
                        <p><?php
                            if(isset($user->errors)) {
                                if (is_array($user->errors->on('password'))) {
                                    foreach ($user->errors->on('password') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $user->errors->on('password');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Introduza o email..." value="<?=$user -> email?>">
                        <p><?php
                            if(isset($user->errors)) {
                                if (is_array($user->errors->on('email'))) {
                                    foreach ($user->errors->on('email') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $user->errors->on('email');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone </label>
                        <input type="number" class="form-control" id="telefone" name="telefone" placeholder="Introduza o telefone..." value="<?=$user -> telefone?>">
                        <p><?php
                            if(isset($user->errors)) {
                                if (is_array($user->errors->on('telefone'))) {
                                    foreach ($user->errors->on('telefone') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $user->errors->on('telefone');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="nif">NIF </label>
                        <input type="number" class="form-control" id="nif" name="nif" placeholder="Introduza o NIF..." value="<?=$user -> nif?>">
                        <p><?php
                            if(isset($user->errors)) {
                                if (is_array($user->errors->on('nif'))) {
                                    foreach ($user->errors->on('nif') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $user->errors->on('nif');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="morada">Morada </label>
                        <input type="text" class="form-control" id="morada" name="morada" placeholder="Introduza a morada..." value="<?=$user -> morada?>">
                        <p><?php
                            if(isset($user->errors)) {
                                if (is_array($user->errors->on('morada'))) {
                                    foreach ($user->errors->on('morada') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $user->errors->on('morada');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="codigopostal">Código Postal </label>
                        <input type="text" class="form-control" id="codigopostal" name="codigopostal" placeholder="Introduza o código postal..." value="<?=$user -> codigopostal?>">
                        <p><?php
                            if(isset($user->errors)) {
                                if (is_array($user->errors->on('codigopostal'))) {
                                    foreach ($user->errors->on('codigopostal') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $user->errors->on('codigopostal');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="localidade">Localidade </label>
                        <input type="text" class="form-control" id="localidade" name="localidade" placeholder="Introduza a localidade..." value="<?=$user -> localidade?>">
                        <p><?php
                            if(isset($user->errors)) {
                                if (is_array($user->errors->on('localidade'))) {
                                    foreach ($user->errors->on('localidade') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $user->errors->on('localidade');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label><br>
                        <?php switch ($user->role) {
                            case 'admin': ?>
                                <select name="role" id="role">
                                    <option value="admin">Administrador</option>
                                    <option value="funcionario">Funcionário</option>
                                </select>
                            <?php break;

                            case 'funcionario': ?>
                                <select name="role" id="role">
                                    <option value="funcionario">Funcionário</option>
                                    <option value="admin">Administrador</option>
                                </select>
                                <?php break;
                        } ?>

                    </div>
                </div>

                <div class="card-footer">
                    <a href="index.php?c=user&a=index" class="btn btn-danger" role="button">CANCELAR</i></a>
                    <input class="btn btn-success" type="submit" value="ATUALIZAR">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
