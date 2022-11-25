        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <title> Sistem Pakar Hipertensi</title>

            <!-- Bootstrap -->
            <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">

            <!-- Google Font -->
            <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

            <!-- Template style -->
            <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style.css">
            <link rel="stylesheet" href="<?= base_url() ?>assets/dist/et-line-font/et-line-font.css">
            <link rel="stylesheet" href="<?= base_url() ?>assets/tables/et-line-font/et-line-font.css">
            <link rel="stylesheet" href="<?= base_url() ?>assets/tables/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="<?= base_url() ?>assets/dist/font-awesome/css/font-awesome.min.css">
            <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/dist/weather/weather-icons.min.css">
            <link type="text/css" rel="stylesheet"
                href="<?= base_url() ?>assets/dist/weather/weather-icons-wind.min.css">

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

            <script src="<?= base_url() ?>assets/plugins/charts/code/highcharts.js"></script>
        </head>

        <body class="sidebar-mini">
            <div class="wrapper">

                <!-- Main Header -->
                <header class="main-header dark-bg">

                    <!-- Logo -->
                    <a href="<?= base_url() ?>" class="logo dark-bg">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <span class="logo-mini"> SPK</span>
                        <!-- logo for regular state and mobile devices -->
                        <span class="logo-lg">SPK</span>
                    </a>

                    <!-- Header Navbar -->
                    <nav class="navbar navbar-static-top" role="navigation">
                        <!-- Sidebar toggle button-->
                        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span
                                class="sr-only">Toggle
                                navigation</span> </a>
                        <!-- Navbar Right Menu -->
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">

                                <!-- Tasks Menu -->
                                <!-- User Account Menu -->
                                <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle"
                                        data-toggle="dropdown">
                                        <i class="fa fa-sign-in"></i><span
                                            class="hidden-xs"><?= $this->session->userdata('name') ?></span> </a>
                                    <ul class="dropdown-menu">

                                        <li>
                                            <?php
                                            if ($this->session->userdata('status') == 'Login') {
                                                echo '<a class="dropdown-item" href="' . base_url('Login/logout') . '"><i class="fa fa-power-off "></i> Log Out</a>';
                                            } else {
                                                echo '<a class="dropdown-item" href="' . base_url('Login') . '"><i class="fa fa-power-off "></i> Login</a>';
                                            }
                                            ?>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>