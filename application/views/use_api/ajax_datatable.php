<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Linking -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/dataTables.bootstrap5.min.css'); ?>">

    <style>
        .col-sm-12{
            position: relative;
        }
    </style>

    <title>Ajax Datatable</title>
</head>
<body>
    
    <div class="section py-5">
        <div class="container">
            <table id="userdata" class="table table-striped table-bordered text-center bg-white">
                <thead>
                    <tr class="table-success">
                        <th>Id</th>
                        <th>User Id</th>
                        <th>Title</th>
                        <th>Completed</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Defiine BaseURL -->
    <script>var baseUrl = `<?= base_url(); ?>`;</script>
    
    <!-- JS Linking -->
    <script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/dataTables.bootstrap5.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/ajax_datatable.js'); ?>"></script>
</body>
</html>