<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Ku</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/normalize.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('fontawesome/css/all.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/themifyicon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/peicon7') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/flagicon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/cs-skin-elastic.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/datatable/dataTables.bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <?php $level = session()->get('level'); ?>
                    <?php if ($level === "Admin") : ?>
                        <li>
                            <a href="<?= base_url('admin') ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/kategori') ?>"><i class="menu-icon fa fa-table"></i>Kategori</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/menu') ?>"><i class="menu-icon fa fa-table"></i>Menu</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/order') ?>"><i class="menu-icon fa fa-table"></i>Order</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/orderdetail') ?>"><i class="menu-icon fa fa-table"></i>Order Detail</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/pelanggan') ?>"><i class="menu-icon fa fa-table"></i>Pelanggan</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/user') ?>"><i class="menu-icon fa fa-table"></i>User</a>
                        </li>
                    <?php endif; ?>
                    <?php if ($level === "Kasir") : ?>
                        <li>
                            <a href="<?= base_url('/admin/order') ?>"><i class="menu-icon fa fa-table"></i>Order</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/orderdetail') ?>"><i class="menu-icon fa fa-table"></i>Order Detail</a>
                        </li>
                    <?php endif; ?>
                    <?php if ($level === "Koki") : ?>
                        <li>
                            <a href="<?= base_url('/admin/orderdetail') ?>"><i class="menu-icon fa fa-table"></i>Order Detail</a>
                        </li>
                    <?php endif; ?>
                    <?php if ($level === "Gudang") : ?>
                        <li>
                            <a href="<?= base_url('/admin/kategori') ?>"><i class="menu-icon fa fa-table"></i>Kategori</a>
                        </li>
                        <li>
                            <a href="<?= base_url('/admin/menu') ?>"><i class="menu-icon fa fa-table"></i>Menu</a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>
        </nav>
    </aside>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href=""></a>
                    <a class="navbar-brand hidden" href=""></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <div class="user-area mt-1">
                            <a class="nav-link btn btn-primary" href="<?= base_url('admin/login/logout') ?>">Logout</a>
                        </div>
                        <div class="user-area mt-3">
                            <p>User :
                                <?php
                                if (!empty(session()->get('user'))) {
                                    echo session()->get('user');
                                }
                                ?></p>
                        </div>
                        <div class="user-area mt-3">
                            <p>Email :
                                <?php
                                if (!empty(session()->get('email'))) {
                                    echo session()->get('email');
                                }
                                ?></p>
                        </div>
                        <div class="user-area mt-3">
                            <p>Level :
                                <?php
                                if (!empty(session()->get('level'))) {
                                    echo session()->get('level');
                                    $level = session()->get('level');
                                }
                                ?></p>
                        </div>


                    </div>

                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <?= $this->renderSection('content') ?>

        <!-- Right Panel -->
        <div class="clearfix"></div>
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2020 Arif Setyo Wibowo
                    </div>

                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->


    <!-- Scripts -->
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquerymatch.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>


    <script src="<?= base_url('assets/js/lib/data-table/datatables.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/lib/data-table/dataTables.bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('ssets/js/lib/data-table/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/lib/data-table/buttons.bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/lib/data-table/jszip.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/lib/data-table/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('assets/js/lib/data-table/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/lib/data-table/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/lib/data-table/buttons.colVis.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/init/datatables-init.js') ?>"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>


</body>

</html>