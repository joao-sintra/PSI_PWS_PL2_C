<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Editar IVA</title>

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
                    <li class="breadcrumb-item active">Editar IVA</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-md-7 ">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Editar Informações do IVA</h3>
            </div>


            <form action='index.php?c=iva&a=update&id=<?=$iva->id?>' method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="percentagem">Percentagem </label>
                        <input type="text" class="form-control" id="percentagem" name="percentagem" placeholder="Introduza o percentagem..." value="<?=$iva -> percentagem?>">
                        <p><?php
                            if(isset($iva->errors)) {
                                if (is_array($iva->errors->on('percentagem'))) {
                                    foreach ($iva->errors->on('percentagem') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $iva->errors->on('percentagem');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Introduza a descrição..." value="<?=$iva -> descricao?>">
                        <p><?php
                            if(isset($iva->errors)) {
                                if (is_array($iva->errors->on('descricao'))) {
                                    foreach ($iva->errors->on('descricao') as $error) {
                                        echo $error . '<br>';
                                    }
                                } else {
                                    echo $iva->errors->on('descricao');
                                }
                            }
                            ?>
                        </p>
                    </div>
                    <div class="form-group">
                        <label >Vigor </label>
                        <?php if ($iva->vigor == 1) { ?>
                            <input type="checkbox" class="form-control" id="Cbvigor"  checked="checked" value="<?= $iva -> vigor ?>">
                        <?php } else {?>
                            <input type="checkbox" class="form-control" id="Cbvigor" value="<?= $iva -> vigor?>">
                        <?php }?>
                        <input type="hidden" class="form-control" id="vigor" name="vigor"  value="0">

                        <script>
                            function changeInputValue() {
                                var cb = document.getElementById("Cbvigor");
                                var vigor = document.getElementById("vigor");

                                if (cb.checked)
                                    vigor.value = "1";
                                console.log(vigor.value);
                            }
                        </script>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="index.php?c=iva&a=index" class="btn btn-danger" role="button">CANCELAR</i></a>
                    <input class="btn btn-primary" type="submit" value="ATUALIZAR" onclick="changeInputValue()">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
