<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= empty($title) ? 'GET API' : $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body class="bg-light">
    <header class="bg-success text-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center mb-0 py-3 text-uppercase">
                        <?= empty($title) ? 'GET API' : $title; ?> header
                    </h1>
                </div>
            </div>
        </div>
    </header>
