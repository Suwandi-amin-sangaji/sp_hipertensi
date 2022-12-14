<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Admin</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Template style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/pages/et-line-font/et-line-font.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/pages/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/dist/weather/weather-icons.min.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/dist/weather/weather-icons-wind.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body-bg-color">
    <div class="wrapper">
        <div class="form-body">
            <form action="<?= base_url('Login/login_act'); ?>" method="POST" class="col-form" novalidate>

                <header>Login Admin</header>
                <fieldset>
                    <section>
                        <div class="form-group has-feedback">
                            <label class="control-label">Username</label>
                            <input class="form-control" placeholder="Username" name="username" type="text">
                            <span class="fa fa-users form-control-feedback" aria-hidden="true"></span>
                            <?= form_error('username', '<small><span class="text-danger">', '</span></small>'); ?>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-white h-100" id="basic-addon2"><i
                                            class="ti-pencil"></i></span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="form-group has-feedback">
                            <label class="control-label">Password</label>
                            <input class="form-control" placeholder="Password" name="password" type="password">
                            <span class="fa fa-lock form-control-feedback" aria-hidden="true"></span>
                            <?= form_error('password', '<small><span class="text-danger">', '</span></small>'); ?>
                        </div>
                    </section>

                </fieldset>
                <footer class="text-right">
                    <button type="submit" name="submit" class="btn btn-info pull-right">Login</button>
                    <a href="<?= base_url() ?>" class="button button-secondary">Home</a>
                </footer>
            </form>
        </div>
    </div>
    <!-- wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/dist/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/dist/js/ovio.js"></script>
</body>

</html>