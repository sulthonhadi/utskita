public function index()
{
return view('dashboard_admin/template_dashboard');
}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/dist/img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>UNWAHA</title>

    <link href="<?= base_url() ?>assets/dist/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        .bluexnxx {
            background-color: #232cc2 !important;
        }

        .sidebar-link,
        a.sidebar-link {
            background-color: #00000000 !important;
            transform: translateX(0);
            border-radius: 20px 0px 0px 20px;
            transition: .2s;
            margin-top: 10px;
        }

        .sidebar-link,
        a.sidebar-link:hover {
            background-color: var(--bs-body-bg) !important;
            border-radius: 20px 0px 0px 20px;
            color: #333;
            transform: translateX(20px);

        }


        a:hover svg {
            color: #232cc2 !important;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar bluexnxx">
            <div class="sidebar-content js-simplebar bluexnxx">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">MIMIN DASHBOARD</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Judul Menu Di sini
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#dashboards" data-bs-toggle="collapse" class="sidebar-link" aria-expanded="true">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                        <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url() ?>"><i data-feather="chevron-right"></i> Item 1</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url() ?>"><i data-feather="chevron-right"></i> Item 2</a></li>
                            <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url() ?>"><i data-feather="chevron-right"></i> Item 3</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('afrizal')?>">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                        </a>
                    </li>

            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">

                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <span class="text-dark">Admin</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>
                </div>
            </main>


        </div>
    </div>

    <script src="<?= base_url() ?>assets/dist/js/app.js"></script>

</body>

</html>