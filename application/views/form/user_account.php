        <div class="changing-buttons">
            <?= anchor('form/logout', 'Logout', array('class' => 'logout-btn buttonBlue')); ?>
            <?= anchor('#', 'Delete Account', array('class' => 'delete-btn buttonRed', 'id'=>'account_deletion_confirmation')); ?>
            <?= anchor('form/gallery', 'Your Gallery', array('class' => 'logout-btn buttonBlue')); ?>
        </div>

        <!-- Confirm Delete Account -->
        <div id="confirm-delete-wrapper" class="confirm-delete-wrapper">
            <div class="confirm-delete">
                <p>Are You Sure Want To Delete Your Account ?</p>
                <div class="delete-btn-wrapper">
                    <?= anchor('form/delete_account/'.$userdata['username'], 'Delete', array('class' => 'delete-btn buttonRed')); ?>
                    <?= anchor('#', 'No', array('class' => 'logout-btn buttonBlue', 'id'=>'account_deletion_cancel')); ?>
                </div>
            </div>
        </div>

        <?= form_open_multipart('form/profile'); ?>
            <p class="error">
                <?= $this->session->flashdata('update_account_message'); ?>
            </p>

            <div class="group">
                <div class="profile-pic">
                        
                    <img alt="<?= $userdata['fullname']; ?>" title="<?= $userdata['fullname']; ?>" src="<?= $userdata['profile_pic']; ?>" id="profile-image">
                    <input id="profile-image-upload" class="hidden" type="file" name="profile_pic">
                        
                </div>

                <?= form_error('profile_pic'); ?>
            </div>

            <div class="group">

                <input id="name" type="text" name="fullname" value="<?= $userdata['fullname']; ?>" />
                <span class="highlight"></span><span class="bar"></span>

                <label for="name">Full Name</label>

                <?= form_error('fullname'); ?>

            </div>

            <div class="group">

                <input id="username" type="text" name="username" value="<?= $userdata['username']; ?>" />
                <span class="highlight"></span><span class="bar"></span>

                <label for="username">Username</label>

                <?= form_error('username'); ?>

            </div>



            <div class="group">

                <input id="email" type="text" name="email" value="<?= $userdata['email']; ?>" />
                <span class="highlight"></span><span class="bar"></span>

                <label for="email">Email Id</label>

                <?= form_error('email'); ?>

            </div>

            <div class="group">

                <input id="male" type="radio" name="gender" value="male"  <?= $userdata['gender'] == 'male' ? 'checked' : ''; ?>/>
                <label for="male">Male</label>
                
                <input id="female" type="radio" name="gender" value="female"  <?= $userdata['gender'] == 'female' ? 'checked' : ''; ?>/>
                <label for="female">Female</label>

                <input id="other" type="radio" name="gender" value="other"  <?= $userdata['gender'] == 'other' ? 'checked' : ''; ?>/>
                <label for="other">Other</label>

                <?= form_error('gender'); ?>
                
            </div>


            <div class="group">

                <input id="password" type="password" name="password" />
                <span class="highlight"></span><span class="bar"></span>

                <label for="password">Password</label>

                <?= empty(form_error('password')) ? '<p class="error">type password to continue</p>' : form_error('password'); ?>

            </div>

            <input type="submit" name="update" class="button buttonGreen" value="Update Account">
        <?= form_close(); ?>
