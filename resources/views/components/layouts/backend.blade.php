<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Santana Admin</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/assets/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/admin/css/adminlte.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Font Icons -->
    <link rel="stylesheet" href="/assets/css/font-icons.css">
    <link rel="stylesheet" href="/assets/one-page/css/et-line.css">
    @stack('css')

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <span class="brand-text font-weight-light">SANTANA ADMIN</span>
            </a>

            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img class="img-circle elevation-2" src="/assets/admin/img/user.png">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>

                @php
                    $currentUrl = '/' . Request::path();
                @endphp
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="/admin" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/blog" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/service" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                Service
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/about" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/contact" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                Contact
                            </a>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a class="nav-link btn-warning text-dark" aria-current="page" href="javascript:;"
                                id="btn-logout">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                Log out
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            {{ $slot }}
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2022</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    </form>

    <script src="/assets/admin/plugins/jquery/jquery.min.js"></script>
    <script src="/assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/admin/plugins/sparklines/sparkline.js"></script>
    <script src="/assets/admin/js/adminlte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script>
        $("#btn-logout").on("click", function(e) {
            document.getElementById('logout-form').submit();
        });
    </script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

    @stack('scripts')
</body>

</html>
