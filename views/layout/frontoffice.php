<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/sticky-footer-navbar/">

    <title><?= constant('APP_NAME') ?></title>

    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="public/css/sticky-footer-navbar.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?c=home&a=index">CreditApp</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="index.php?c=home&a=index">Home</a></li>

                <li><a href="index.php?c=plano&a=index">Calculadora</a></li>
                <li><a href="index.php?c=book&a=index">Book</a></li>
                <?php if ($auth->isLoggedIn()) { ?>
                    <li><a href="index.php?c=auth&a=logout"> Logout (<?= $auth->getUserName() ?>)</a></li>
                <?php } else { ?>
                    <li><a href="index.php?c=auth&a=index"> Login </a></li>
                <?php } ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<!-- Begin page content -->
<div class="container-fluid">

    <?php require_once($viewPath); ?>
</div>

<footer class="footer">
    <div class="container">
        <h4 class="text-muted">Site feito por João Sintra .<img src="public/img/nice.jpg" width="150px"></h4>

    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="public/js/jquery-3.6.4.min.js"><\/script>')</script>
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>
