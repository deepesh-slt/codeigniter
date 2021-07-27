        <?= form_open_multipart('form/registration'); ?>

            <div class="group">

                <input id="name" type="text" name="fullname"/>
                <span class="highlight"></span><span class="bar"></span>

                <label for="name">Full Name</label>

                <p class="error"></p>

            </div>

            <div class="group">

                <input id="username" type="text" name="username"/>
                <span class="highlight"></span><span class="bar"></span>

                <label for="username">Username</label>

                <p class="error"></p>

            </div>

            <div class="group">

                <input id="email" type="text" name="email"/>
                <span class="highlight"></span><span class="bar"></span>

                <label for="email">Email Id</label>

                <p class="error"></p>

            </div>

            <div class="group">

                <input id="profile_pic" type="file" name="profile_pic"/>
                <span class="highlight"></span><span class="bar"></span>

                <label for="profile_pic">Profile Pic</label>

                <p class="error"></p>

            </div>

            <div class="group">

                <input id="male" type="radio" name="gender" value="male"/>
                <label for="male">Male</label>
                
                <input id="female" type="radio" name="gender" value="female"/>
                <label for="female">Female</label>

                <input id="other" type="radio" name="gender" value="other"/>
                <label for="other">Other</label>

                <p class="error"></p>
                
            </div>


            <div class="group">

                <input id="password" type="password" name="password" />
                <span class="highlight"></span><span class="bar"></span>

                <label for="password">Password</label>

                <p class="error"></p>

            </div>

            <div class="group">

                <input id="cpassword" type="password" name="cpassword" />
                <span class="highlight"></span><span class="bar"></span>

                <label for="cpassword">Confirm Password</label>

                <p class="error"></p>

            </div>

            <input type="submit" name="registration" class="button buttonBlue" value="Register">
            <p style="margin: 1rem 0rem 0rem;">Already have account ? <?= anchor('form/login','Log In'); ?></p>

        <?= form_close(); ?>