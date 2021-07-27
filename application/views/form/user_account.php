        <div class="changing-buttons">
            <?= anchor('form/logout', 'Logout', array('class' => 'logout-btn buttonBlue')); ?>
            <?= anchor("form/delete_account/".$this->session->username.'', 'Delete Account', array('class' => 'delete-btn buttonRed')); ?>
        </div>

        <?= form_open_multipart('form/profile'); ?>
            <p class="error">
                <?= empty($_SESSION['delete_account_message']) ? '' : $_SESSION['delete_account_message']; ?>
                <?= empty($_SESSION['update_account_message']) ? '' : $_SESSION['update_account_message']; ?>
            </p>

            <div class="group">
                <div class="profile-pic">
                        
                    <img alt="<?= empty($userdata['fullname']) ? '' : $userdata['fullname']; ?>" title="<?= empty($userdata['fullname']) ? '' : $userdata['fullname']; ?>" src="file:///<?= empty($userdata['profile_pic']) ? '' : $userdata['profile_pic']; ?>" id="profile-image">
                    <input id="profile-image-upload" class="hidden" type="file" name="profile_pic">
                        
                </div>

                <p class="error" style="text-align: center;"><?= empty($_SESSION['profile_pic_error_message']) ? '' : $_SESSION['profile_pic_error_message']; ?></p>
            </div>

            <div class="group">

                <input id="name" type="text" name="fullname" value="<?= empty($userdata['fullname']) ? '' : $userdata['fullname']; ?>" />
                <span class="highlight"></span><span class="bar"></span>

                <label for="name">Full Name</label>

                <p class="error"><?= empty($_SESSION['fullname_error_message']) ? '' : $_SESSION['fullname_error_message']; ?></p>

            </div>

            <div class="group">

                <input id="username" type="text" name="username" value="<?= empty($userdata['username']) ? '' : $userdata['username']; ?>" />
                <span class="highlight"></span><span class="bar"></span>

                <label for="username">Username</label>

                <p class="error"><?= empty($_SESSION['username_error_message']) ? '' : $_SESSION['username_error_message']; ?></p>

            </div>



            <div class="group">

                <input id="email" type="text" name="email" value="<?= empty($userdata['email']) ? '' : $userdata['email']; ?>" />
                <span class="highlight"></span><span class="bar"></span>

                <label for="email">Email Id</label>

                <p class="error"><?= empty($_SESSION['email_error_message']) ? '' : $_SESSION['email_error_message']; ?></p>

            </div>

            <div class="group">

                <input id="male" type="radio" name="gender" value="male"  <?= $userdata['gender'] == 'male' ? 'checked' : ''; ?>/>
                <label for="male">Male</label>
                
                <input id="female" type="radio" name="gender" value="female"  <?= $userdata['gender'] == 'female' ? 'checked' : ''; ?>/>
                <label for="female">Female</label>

                <input id="other" type="radio" name="gender" value="other"  <?= $userdata['gender'] == 'other' ? 'checked' : ''; ?>/>
                <label for="other">Other</label>

                <p class="error"><?= empty($_SESSION['gender_error_message']) ? '' : $_SESSION['gender_error_message']; ?></p>
                
            </div>


            <div class="group">

                <input id="password" type="password" name="password" />
                <span class="highlight"></span><span class="bar"></span>

                <label for="password">Password</label>

                <p class="error"><?= empty($_SESSION['password_error_message']) ? 'type password to continue' : $_SESSION['password_error_message']; ?></p>

            </div>

            <input type="submit" name="update" class="button buttonGreen" value="Update Account">
        <?= form_close(); ?>
