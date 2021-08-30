<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Linking -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/dataTables.bootstrap5.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.bootstrap5.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/buttons.dataTables.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/buttons.bootstrap5.min.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .select2-container .select2-selection--single, .select2-container--default .select2-selection--single .select2-selection__arrow{
            height: 38px;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered{
            line-height: 35px;
        }
        .form-control:focus, .page-link:focus, .btn-check:active+.btn:focus, .btn-check:checked+.btn:focus, .btn.active:focus, .btn:active:focus, .show>.btn.dropdown-toggle:focus, .btn:focus{
            box-shadow: none;
        }
        .table{
            vertical-align: middle;
        }
    </style>

    <style>
        .col-sm-12{
            position: relative;
        }
    </style>

    <title>Ajax Datatable</title>
</head>
<body>

        <section class="py-5 bg-light">
            <div class="container">
                <form action="" id="userdata_filter" class="row row-cols justify-content-center">
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Search in Id" data-index="0">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Search in User id" data-index="1">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" placeholder="Search in Title" data-index="2">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                        <div class="form-group mb-3">
                            <select id="completed-select" class="form-control" data-index="3">
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    
    <div class="section py-5">
        <div class="container">
            <table id="userdata" class="table table-striped table-bordered text-center bg-white responsive ">
                <thead>
                    <tr class="table-success">
                        <th>Id</th>
                        <th>User Id</th>
                        <th>Title</th>
                        <th>Completed</th>
                        <th>Edit</th>
                        <th>Delete</th>
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

    <script src="<?= base_url('assets/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/buttons.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/dataTables.buttons.min.js'); ?>"></script>

    <script src="<?= base_url('assets/js/jszip.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/pdfmake.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/vfs_fonts.js'); ?>"></script>

    <script src="<?= base_url('assets/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/buttons.print.min.js'); ?>"></script>
    
    <script src="<?= base_url('assets/js/dataTables.bootstrap5.min.js'); ?>"></script>

    <!-- Custom -->
    <script src="<?= base_url('assets/js/ajax_datatable.js'); ?>"></script>

    <!-- Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>
</html>