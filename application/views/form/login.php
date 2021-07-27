        <?= form_open('form/login'); ?>
            <p class="login-error">
                <?= $this->session->flashdata('login_error'); ?>
                <?= $this->session->flashdata('delete_account_message'); ?>
            </p>
            <div class="group">
                <input type="text" name="login_username" value="<?= $this->session->flashdata('username_value'); ?>"/>
                <span class="highlight"></span><span class="bar"></span>
                <label>Username or Email Id</label>
            </div>
            <div class="group">
                <input type="password" name="password"/>
                <span class="highlight"></span><span class="bar"></span>
                <label>Password</label>
            </div>
            <input type="submit" name="login" class="button buttonBlue" value="Login">
            <p style="margin: 1rem 0rem 0rem;">Don't have account ? <?= anchor('form/registration','Sign Up'); ?></p>
        <?= form_close(); ?>