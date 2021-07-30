    <section class="bg-white py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <?= form_open('use_api/userdata', array('class'=> "border bg-light p-3",)); ?>
                        <p class="text-center text-danger"><?= empty($add_user_message) ? '' : $add_user_message; ?></p>
                        <input type="hidden" name="id" value="">
                        <div class="mb-3">
                            <label for="name" class="mb-2 ms-1">Full Name :</label>
                            <input id="name" type="text" name="fullname" class="form-control" placeholder="Fullname"/>
                        </div>
                        
                        <div class="mb-3">
                            <label for="name" class="mb-2 ms-1">Username :</label>
                            <input id="username" type="username" name="username" class="form-control" placeholder="Username"/>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="mb-2 ms-1">Email :</label>
                            <input id="email" type="email" name="email" class="form-control" placeholder="Email"/>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="mb-2 ms-1">Password :</label>
                            <input id="password" type="password" name="password" class="form-control" placeholder="Password"/>
                        </div>

                        <input type="submit" name="add_user" value="Add User" class="btn btn-primary form-control">
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="userdata-container" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 my-3">
                    <table class="table table-striped table-bordered text-center bg-white h-100">
                        <thead>
                            <tr class="table-success">
                                <th>SR. No.</th>
                                <th>Fullname</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($response as $key => $value) {
                                    echo '<tr>
                                            <td>'.($key+1).'</td>
                                            <td>'.$value->fullname.'</td>
                                            <td>'.$value->username.'</td>
                                            <td>'.$value->email.'</td>
                                            <td>'.$value->password.'</td>
                                            <td><button class="btn btn-warning edit-btn" data-id="'.$value->id.'">Edit</button></td>
                                            <td><a href="'.base_url("use_api/delete_user/".$value->id).'" class="btn btn-danger delete-btn">Delete</a></td>
                                        </tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
