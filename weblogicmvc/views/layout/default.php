<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!--  <link rel="stylesheet" href="public/plugins/fontawesome-free/css/all.min.css">-->

    <link rel="stylesheet" href="public/css/adminlte.min.css?v=3.2.0">
    <script nonce="1cc656f9-f215-4d9a-851b-98e1d1c9a627">(function (w, d) {
            !function (bg, bh, bi, bj) {
                bg[bi] = bg[bi] || {};
                bg[bi].executed = [];
                bg.zaraz = {deferred: [], listeners: []};
                bg.zaraz.q = [];
                bg.zaraz._f = function (bk) {
                    return function () {
                        var bl = Array.prototype.slice.call(arguments);
                        bg.zaraz.q.push({m: bk, a: bl})
                    }
                };
                for (const bm of ["track", "set", "debug"]) bg.zaraz[bm] = bg.zaraz._f(bm);
                bg.zaraz.init = () => {
                    var bn = bh.getElementsByTagName(bj)[0], bo = bh.createElement(bj),
                        bp = bh.getElementsByTagName("title")[0];
                    bp && (bg[bi].t = bh.getElementsByTagName("title")[0].text);
                    bg[bi].x = Math.random();
                    bg[bi].w = bg.screen.width;
                    bg[bi].h = bg.screen.height;
                    bg[bi].j = bg.innerHeight;
                    bg[bi].e = bg.innerWidth;
                    bg[bi].l = bg.location.href;
                    bg[bi].r = bh.referrer;
                    bg[bi].k = bg.screen.colorDepth;
                    bg[bi].n = bh.characterSet;
                    bg[bi].o = (new Date).getTimezoneOffset();
                    if (bg.dataLayer) for (const bt of Object.entries(Object.entries(dataLayer).reduce(((bu, bv) => ({...bu[1], ...bv[1]}))))) zaraz.set(bt[0], bt[1], {scope: "page"});
                    bg[bi].q = [];
                    for (; bg.zaraz.q.length;) {
                        const bw = bg.zaraz.q.shift();
                        bg[bi].q.push(bw)
                    }
                    bo.defer = !0;
                    for (const bx of [localStorage, sessionStorage]) Object.keys(bx || {}).filter((bz => bz.startsWith("_zaraz_"))).forEach((by => {
                        try {
                            bg[bi]["z_" + by.slice(7)] = JSON.parse(bx.getItem(by))
                        } catch {
                            bg[bi]["z_" + by.slice(7)] = bx.getItem(by)
                        }
                    }));
                    bo.referrerPolicy = "origin";
                    bo.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bg[bi])));
                    bn.parentNode.insertBefore(bo, bn)
                };
                ["complete", "interactive"].includes(bh.readyState) ? zaraz.init() : bg.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);</script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
        </ul>
    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="index.php?c=backoffice&a=index" class="brand-link">
            <img src="public/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light"><?= constant('APP_NAME') ?></span>
        </a>

        <div class="sidebar">

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block"><?php if ($auth->isLoggedIn()) { ?>
                            <a href="index.php?c=login&a=logout">Logout (<?= $auth->getUserName() ?>)</a>
                        <?php } else { ?>
                            <a href="index.php?c=login&a=index">Login</a>
                        <?php } ?></a>
                </div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item">
                        <a href="index.php?c=backoffice&a=index" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    <li class="nav-item">
                        <a href="index.php?c=folhaobra&a=create&id_cliente=0&id_folhaobra=0" class="nav-link">
                            <i class="fas fa-file-import nav-icon"></i>
                            <p>Emitir FO</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?c=folhaobra&a=show" class="nav-link">
                            <i class="far fa-check-circle nav-icon"></i>
                            <p>FO Emitidas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?c=cliente&a=index" class="nav-link">
                            <i class="fas fa-user-plus nav-icon"></i>
                            <p>Registo Clientes</p>
                        </a>
                    </li>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-server nav-icon"></i>
                            <p>
                                Gestão de Dados
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if ($auth->isLoggedInAs($roles = ['admin'])) { ?>
                                <li class="nav-item">
                                    <a href="index.php?c=user&a=index" class="nav-link">
                                        <i class="fas fa-users nav-icon"></i>
                                        <p>Users</p>
                                    </a>
                                </li>
                            <?php } ?>

                            <li class="nav-item">
                                <a href="index.php?c=servico&a=index" class="nav-link">
                                    <i class="fas fa-file-alt nav-icon"></i>
                                    <p>Serviços</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?c=iva&a=index" class="nav-link">
                                    <i class="fas fa-tags nav-icon"></i>
                                    <p>IVA</p>
                                </a>
                            </li>
                            <?php if ($auth->isLoggedInAs($roles = ['funcionario'])) { ?>
                            <li class="nav-item">
                                <a href="index.php?c=user&a=dadosfuncionario" class="nav-link">
                                    <i class="fas fa-user-shield nav-icon"></i>
                                    <p>Dados Pessoais</p>
                                </a>
                            </li>
                            <?php } ?>
                    </li>
                    <?php if ($auth->isLoggedInAs($roles = ['admin'])) { ?>
                        <li class="nav-item">
                            <a href="index.php?c=empresa&a=index" class="nav-link">
                                <i class="fas fa-building nav-icon"></i>
                                <p>Empresa</p>
                            </a>
                        </li>
                    <?php } ?>
                    </li>
                </ul>
                </li>
                </ul>
            </nav>

        </div>

    </aside>

    <div class="content-wrapper">

        <?php require_once($viewPath); ?>

    </div>
    <footer class="main-footer">
        <strong>Copyright &copy; 2022-2023 <a href=""><?= constant('APP_NAME') ?></a>.</strong> All rights reserved.
        <div class="float-right d-none d-sm-inline">
            IPL-ESTG
        </div>


    </footer>
</div>


<aside class="control-sidebar control-sidebar-dark">

    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>


</div>




<script src="public/plugins/jquery/jquery.min.js"></script>

<script src="public/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="public/js/adminlte.min.js?v=3.2.0"></script>

<script src="https://kit.fontawesome.com/4b6b90e707.js"></script>
</body>
</html>
