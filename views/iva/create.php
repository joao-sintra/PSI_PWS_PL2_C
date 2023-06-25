<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Criar Novo IVA</title>

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
                    <li class="breadcrumb-item active">Criar Novo IVA</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-md-7 ">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Informações do IVA</h3>
            </div>


            <form action='index.php?c=iva&a=store' method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="percentagem">Percentagem </label>
                        <input type="text" class="form-control" id="percentagem" name="percentagem" placeholder="Introduza o percentagem..." value="<?php if(isset($iva)) {
                            echo $iva->percentagem; }?>">
                        <?php if(isset($iva->errors)){
                            echo $iva->errors->on('percentagem');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Introduza a descrição..." value="<?php if(isset($iva)) { echo
                        $iva->descricao; }?>">
                        <?php if(isset($iva->errors)){
                            echo $iva->errors->on('descricao');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="vigor">Vigor </label>
                        <input type="checkbox" class="form-control"  value="<?php if(isset($iva)) { echo
                        $iva->vigor; }?>">
                    </div>
                </div>

                <div class="card-footer">
                    <a href="index.php?c=iva&a=index" class="btn btn-danger" role="button">CANCELAR</i></a>
                    <input class="btn btn-primary" type="submit" value="CRIAR">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

