<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= constant('APP_NAME') ?> | Visualizar Serviço</title>

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
                    <li class="breadcrumb-item active">Visualizar Serviço</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-md-7 ">

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Visualizar Informações do Serviço</h3>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="referencia">Refência </label>
                    <input type="text" disabled class="form-control" value="<?=$servico -> referencia?>">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" disabled class="form-control" value="<?=$servico -> descricao?>">
                </div>
                <div class="form-group">
                    <label for="valoruni">Valor Unitário</label>
                    <input type="text" disabled class="form-control" value="<?=$servico -> valorunitario?>">
                </div>
                <div class="form-group">
                    <label for="iva">IVA</label>
                    <input type="text" disabled class="form-control" value="<?=$servico->iva->percentagem?>%">
                </div>
            </div>

            <div class="card-footer">
                <a href="index.php?c=servico&a=index" class="btn btn-info" role="button">VOLTAR</i></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>

