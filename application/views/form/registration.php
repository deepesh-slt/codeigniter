
        <?= form_open_multipart('form/registration'); ?>

            <div class="group">

                <input id="name" type="text" name="fullname" value="<?= set_value('fullname'); ?>"/>
                <span class="highlight"></span><span class="bar"></span>

                <label for="name">Full Name</label>

                <?= form_error('fullname'); ?>

            </div>

            <div class="group">

                <input id="username" type="text" name="username" value="<?= set_value('username'); ?>"/>
                <span class="highlight"></span><span class="bar"></span>

                <label for="username">Username</label>

                <?= form_error('username'); ?>

            </div>

            <div class="group">

                <input id="email" type="text" name="email" value="<?= set_value('email'); ?>"/>
                <span class="highlight"></span><span class="bar"></span>

                <label for="email">Email Id</label>

                <?= form_error('email'); ?>

            </div>

            <div class="group">

                <input id="profile_pic" type="file" name="profile_pic"/>
                <span class="highlight"></span><span class="bar"></span>

                <label for="profile_pic">Profile Pic</label>

                <?= form_error('profile_pic'); ?>

            </div>

            <div class="group">

                <input id="male" type="radio" name="gender" value="male" <?= set_value('gender') == 'male' ? 'checked' : ''; ?>/>
                <label for="male">Male</label>
                
                <input id="female" type="radio" name="gender" value="female" <?= set_value('gender') == 'female' ? 'checked' : ''; ?>/>
                <label for="female">Female</label>

                <input id="other" type="radio" name="gender" value="other" <?= set_value('gender') == 'other' ? 'checked' : ''; ?>/>
                <label for="other">Other</label>

                <?= form_error('gender'); ?>
                
            </div>


            <div class="group">

                <input id="password" type="password" name="password" />
                <span class="highlight"></span><span class="bar"></span>

                <label for="password">Password</label>

                <?= form_error('password'); ?>

            </div>

            <div class="group">

                <input id="cpassword" type="password" name="cpassword" />
                <span class="highlight"></span><span class="bar"></span>

                <label for="cpassword">Confirm Password</label>

                <?= form_error('cpassword'); ?>

            </div>

            <input type="submit" name="registration" class="button buttonBlue" value="Register">
            <p style="margin: 1rem 0rem 0rem;">Already have account ? <?= anchor('form/login','Log In'); ?>

        <?= form_close(); ?>