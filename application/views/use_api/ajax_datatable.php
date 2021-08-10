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

        <section class="py-5 bg-light">
            <div class="container">
                <form action="" id="userdata_filter" class="row justify-content-center">
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
                            <select id="" class="form-control" data-index="3">
                                <option value="">--Select--</option>
                                <option value="true">True</option>
                                <option value="false">False</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    
    <div class="section py-5">
        <div class="container">
            <table id="userdata" class="table table-striped table-bordered text-center bg-white">
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
                <tfoot>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tfoot>
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