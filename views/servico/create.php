<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Criar Novo Serviço</title>

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
                    <li class="breadcrumb-item"><a href="index.php?c=servico&a=index">Serviços</a></li>
                    <li class="breadcrumb-item active">Criar Novo Serviço</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-md-7 ">

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Informações do Serviço</h3>
            </div>


            <form action='index.php?c=servico&a=store' method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="referencia">Referência </label>
                        <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Introduza o referência..." value="<?php if(isset($servico)) {
                            echo $servico->referencia; }?>">
                        <?php if(isset($servico->errors)){
                            echo $servico->errors->on('referencia');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Introduza a descrição..." value="<?php if(isset($servico)) { echo
                        $servico->descricao; }?>">
                        <?php if(isset($servico->errors)){
                            echo $servico->errors->on('descricao');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="valorunitario">Valor Unitário</label>
                        <input type="text" class="form-control" id="valorunitario" name="valorunitario" placeholder="Introduza a valor unitário..." value="<?php if(isset($servico)) { echo
                        $servico->valorunitario; }?>">
                        <?php if(isset($servico->errors)){
                            echo $servico->errors->on('valorunitario');
                        }?>
                    </div>
                    <div class="form-group">
                        <label for="iva_id">IVA (%)</label><br>
                        <select name="iva_id">
                            <?php foreach($ivas as $iva){?>
                                    <?php if($iva->vigor == 1){ ?>
                                        <option value="<?= $iva->id?>"> <?= $iva->percentagem; ?></option>
                                    <?php }
                            } ?>
                        </select>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="index.php?c=servico&a=index" class="btn btn-danger" role="button">CANCELAR</i></a>
                    <input class="btn btn-info" type="submit" value="CRIAR">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

