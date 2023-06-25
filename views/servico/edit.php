<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Editar Serviço</title>

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
                    <li class="breadcrumb-item active">Editar Serviço</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-md-7 ">

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Editar Informações do Serviço</h3>
            </div>

            <form action='index.php?c=servico&a=update&id=<?=$servico->id?>' method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="referencia">Referência </label>
                        <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Introduza o referência..." value="<?=$servico -> referencia?>">
                        <p><?php
                            if(isset($servico->errors)) {
                                if (is_array($servico->errors->on('referencia'))) {
                                    foreach ($servico->errors->on('referencia') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $servico->errors->on('referencia');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Introduza a descrição..." value="<?=$servico -> descricao?>">
                        <p><?php
                            if(isset($servico->errors)) {
                                if (is_array($servico->errors->on('descricao'))) {
                                    foreach ($servico->errors->on('descricao') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $servico->errors->on('descricao');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="valorunitario">Valor Unitário</label>
                        <input type="text" class="form-control" id="valorunitario" name="valorunitario" placeholder="Introduza a valor unitário..." value="<?=$servico -> valorunitario?>">
                        <p><?php
                            if(isset($servico->errors)) {
                                if (is_array($servico->errors->on('valorunitario'))) {
                                    foreach ($servico->errors->on('valorunitario') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $servico->errors->on('valorunitario');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="iva_id">IVA (%)</label><br>
                        <select name="iva_id">
                            <?php foreach($ivas as $iva){?>
                                <?php if($iva->vigor == 1){ ?>
                                    <?php if($iva->id == $servico->iva_id) { ?>
                                        <option value="<?= $iva->id?>"><?= $iva->percentagem;
                                            ?> </option>
                                    <?php }else { ?>
                                        <option value="<?= $iva->id?>"> <?= $iva->percentagem;
                                            ?></option>
                                    <?php }
                                }
                            } ?>
                        </select>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="index.php?c=servico&a=index" class="btn btn-danger" role="button">CANCELAR</i></a>
                    <input class="btn btn-info" type="submit" value="ATUALIZAR">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>