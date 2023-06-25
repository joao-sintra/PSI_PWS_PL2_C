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
                    <li class="breadcrumb-item"><a href="index.php?c=linhaobra&a=index">Registo de Linhas de Obra</a></li>
                    <li class="breadcrumb-item active">Criar Nova Linha de Obra</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
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
                        <input type="text" class="form-control" id="referencia" name="referencia"
                               placeholder="Introduza a referência..." value="<?php if (isset($user)) {
                            echo $user->username;
                        } ?>">
                        <?php if (isset($user->errors)) {
                            echo $user->errors->on('username');
                        } ?>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" id="descricao" name="descricao"
                               placeholder="Introduza a descrição..." value="<?php if (isset($user)) {
                            echo
                            $user->password;
                        } ?>">
                        <?php if (isset($user->errors)) {
                            echo $user->errors->on('password');
                        } ?>
                    </div>
                    <div class="form-group">
                        <label for="quantidade">Quantidade </label>
                        <input type="text" class="form-control" id="quantidade" name="quantidade"
                               placeholder="Introduza a quantidade..." value="<?php if (isset($user)) {
                            echo
                            $user->email;
                        } ?>">
                        <?php if (isset($user->errors)) {
                            echo $user->errors->on('email');
                        } ?>
                    </div>
                    <div class="form-group">
                        <label for="preco-unitario">Preço unitário </label>
                        <input type="text" class="form-control" id="preco-unitario" name="preco-unitario"
                               placeholder="Introduza o preço unitário..." value="<?php if (isset($user)) {
                            echo
                            $user->telefone;
                        } ?>">
                        <?php if (isset($user->errors)) {
                            echo $user->errors->on('telefone');
                        } ?>
                    </div>
                    <div class="form-group">
                        <label for="IVA">IVA </label>
                        <input type="text" class="form-control" id="IVA" name="IVA" placeholder="Introduza o IVA..."
                               value="<?php if (isset($user)) {
                                   echo
                                   $user->nif;
                               } ?>">
                        <?php if (isset($user->errors)) {
                            echo $user->errors->on('nif');
                        } ?>
                    </div>

                    <div class="card-footer">
                        <a href="index.php?c=linhaobra&a=index" class="btn btn-danger" role="button">CANCELAR</i></a>
                        <input class="btn btn-success" type="submit" value="CRIAR">
                    </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

