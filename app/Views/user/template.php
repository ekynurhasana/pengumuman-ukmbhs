<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="scaffolded-by" content="https://github.com/google/stagehand">
    <title><?= $title; ?></title>
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('/'); ?>/user/css/style.css">
    <link rel="stylesheet" href="<?= base_url('/'); ?>/admin/dist/css/adminlte.min.css">
    <link rel="icon" href="<?= base_url('/'); ?>/user/img/favicon.ico">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('/'); ?>/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

</head>
<style>
    #clockdiv {
        font-family: sans-serif;
        opacity: 0.3;
        color: #fff;
        display: inline-block;
        font-weight: 150;
        text-align: center;
        font-size: 40px;
        font-weight: bold;
    }

    #clockdiv>div {
        padding: 10px;
        border-radius: 1px;
        background: #212529;
        display: inline-block;
    }

    #clockdiv div>span {
        padding: 15px;
        border-radius: 3px;
        background: #3366ff;
        display: inline-block;
    }

    .smalltext {
        padding-top: 5px;
        font-size: 16px;
    }

    #clockdiv:hover {
        opacity: 1;
    }
</style>

<body id="body">
    <div id="main" class="main">
        <div id="index" class="index">
            <?= $this->renderSection('content'); ?>
        </div>
    </div>
    <!-- <script defer="" src="<?= base_url('/'); ?>/user/js/js.js"></script> -->
    <!-- jQuery -->
    <script src="<?= base_url('/'); ?>/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('/'); ?>/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url('/'); ?>/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
    <?= $this->renderSection('script'); ?>
</body>

</html>