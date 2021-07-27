<?php
    class Form_controller extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->helper(array('url', 'form'));
            $this->load->library('session');
            $this->load->model('form/form_model');
            $this->output->enable_profiler(TRUE);
        }

        public function index() {

            // Check Session
            if ($this->session->has_userdata('logged_in')) {
                if ($this->session->logged_in === TRUE) {
                    if ($this->form_model->session_check($this->session->username, $this->session->user_id)) {
                        redirect('form/profile');
                    } else {
                        redirect('form/login');
                    }
                } else {
                    redirect('form/login');
                }
            } else {
                redirect('form/login');
            }
        }

        // Login Function
        public function login() {

            // Check Login Form Credentials
            if (isset($_POST['login'])) {
                if ($userdata = $this->form_model->login_check($this->input->post('login_username'), md5($this->input->post('password')))) {
                    $this->session->username = $userdata['username'];
                    $this->session->user_id = $userdata['id'];
                    $this->session->logged_in = TRUE;
                } else {
                    // Set Login Error and value of username (submitted username)
                    $this->session->set_flashdata('login_error', 'Invalid Credentials');
                    $this->session->set_flashdata('username_value', $this->input->post('login_username'));
                }
            }

            // Session Check
            if ($this->session->has_userdata('logged_in')) {
                if ($this->session->logged_in === TRUE) {
                    if ($this->form_model->session_check($this->session->username, $this->session->user_id)){
                        redirect('form/profile');
                    }
                }                
            }

            // Login Page View
            $data['title'] = 'Login';
            $this->load->view('form/header', $data);
            $this->load->view('form/login');
            $this->load->view('form/footer');
        }

        // User Registration Function
        public function registration() {

            // Handle Registration Form Data
            do {
                if (isset($_POST['registration'])) {
                    $data = $this->input->post();
    
                    $this->load->library(array('form_validation' => 'fv'));
    
                    $fv_config = array(
                        array(
                            'field' => 'fullname',
                            'label' => 'Name',
                            'rules' => 'required',
                        ),
                        array(
                            'field' => 'username',
                            'label' => 'Username',
                            'rules' => 'trim|required|min_length[5]|max_length[20]|is_unique[userdata.username]',
                        ),
                        array(
                            'field' => 'email',
                            'label' => 'Email',
                            'rules' => 'required|valid_email|is_unique[userdata.email]',
                        ),
                        array(
                            'field' => 'gender',
                            'label' => 'Gender',
                            'rules' => 'required',
                        ),
                        array(
                            'field' => 'password',
                            'label' => 'Password',
                            'rules' => 'trim|required|min_length[8]|max_length[20]|callback_check_password',
                        ),
                        array(
                            'field' => 'cpassword',
                            'label' => 'Confirm Password',
                            'rules' => 'trim|required|matches[password]',
                            'errors' => 'Password Does Not Match',
                        ),
                    );
    
                    $this->fv->set_rules($fv_config);
                    $this->fv->set_error_delimiters('<p class="error">','</p>');
    
                    if ($this->fv->run() == FALSE) {
                        break;
                    }

                    // File Upload
                    $config['upload_path'] = 'assets/profile';
                    $data['profile_pic'] = base_url($config['upload_path'].'/');
    
                    if ($_FILES['profile_pic']['error'] == 0) {
                        print_r($_FILES);die;
                        $config['allowed_types']        = 'gif|jpg|png';
                        $config['max_size']             = 2048;
                        $config['overwrite']             = FALSE;
    
                        $this->load->library('upload', $config);
    
                        if ($this->upload->do_upload('profile_pic')) {
                            $data['profile_pic'] .= $this->upload->data('file_name');
    
                        } else {
                            echo $this->upload->display_errors();die;
                        }
                    } else {
                        $data['profile_pic'] .= 'default-profile.png';
                    }
                    
                    $data['password'] = md5($data['password']);
                    unset($data['cpassword']);
                    unset($data['registration']);
    
                    $insert = $this->form_model->sign_up($data);
                    
                    if (!empty($insert['id'])) {
                        $this->session->username = $insert['username'];
                        $this->session->user_id = $insert['id'];
                        $this->session->logged_in = TRUE;
                    } else {
                        echo $insert;die;
                    }
                }
            } while (0);

            // Session Check
            if ($this->session->has_userdata('logged_in')) {
                if ($this->session->logged_in === TRUE) {
                    if ($this->form_model->session_check($this->session->username, $this->session->user_id)) {
                        redirect('form/profile');
                    }
                } 
            }

            // Registration Page View
            $data['title'] = 'Registration';
            $this->load->view('form/header', $data);
            $this->load->view('form/registration');
            $this->load->view('form/footer');
        }

        // User Profile Function
        public function profile() {

            // Handle Update Form Data
            if (isset($_POST['update'])) {
                do {
                    $data = $this->input->post();
        
                    $this->load->library(array('form_validation' => 'fv'));
    
                    $fv_config = array(
                        array(
                            'field' => 'fullname',
                            'label' => 'Name',
                            'rules' => 'required',
                        ),
                        array(
                            'field' => 'username',
                            'label' => 'Username',
                            'rules' => 'trim|required|min_length[5]|max_length[20]',
                        ),
                        array(
                            'field' => 'email',
                            'label' => 'Email',
                            'rules' => 'required|valid_email',
                        ),
                        array(
                            'field' => 'gender',
                            'label' => 'Gender',
                            'rules' => 'required',
                        ),
                        array(
                            'field' => 'password',
                            'label' => 'Password',
                            'rules' => 'callback_check_password[update]',
                        ),
                    );
    
                    $this->fv->set_rules($fv_config);
                    $this->fv->set_error_delimiters('<p class="error">','</p>');
    
                    if ($this->fv->run() == FALSE) {
                        break;
                    }
    
                    // File Upload
                    $config['upload_path'] = 'assets/profile';
                    $data['profile_pic'] = base_url($config['upload_path'].'/');
    
                    if ($_FILES['profile_pic']['error'] == 0) {
                        $config['allowed_types']        = 'gif|jpg|png';
                        $config['max_size']             = 2048;
                        $config['overwrite']             = FALSE;
    
                        $this->load->library('upload', $config);
    
                        if ($this->upload->do_upload('profile_pic')) {
                            $data['profile_pic'] .= $this->upload->data('file_name');
    
                        } else {
                            echo $this->upload->display_errors();die;
                        }
                    } else {
                        $data['profile_pic'] = $this->form_model->get_userdata('profile_pic')['profile_pic'];
                    }   
    
                    unset($data['update']);
                    unset($data['password']);
    
                    $update = $this->form_model->update_userdata($data);
                    
                    if (!empty($update['username'])) {
                        $this->session->username = $update['username'];
                        $this->session->set_flashdata('update_account_message', 'Account Update Successfully');
                    } else {
                        $this->session->set_flashdata('update_account_message', "Error Updating Data : $update");
                    }
                } while (0);
            }

            // Session Check
            if ($this->session->has_userdata('logged_in')) {
                if ($this->session->logged_in === TRUE) {
                    if (!$this->form_model->session_check($this->session->username, $this->session->user_id)){
                        redirect('form/login');
                    }
                } else {
                    redirect('form/login');
                }
            } else {
                redirect('form/login');
            }

            // Profile Page View
            $data['title'] = 'My Account';
            $data['userdata'] = $this->form_model->get_userdata();
            $this->load->view('form/header', $data);
            $this->load->view('form/user_account', $data);
            $this->load->view('form/footer');
        }
        
        public function gallery() {
            
            // Load Gallery Model
            $this->load->model('form/user_gallery_model', 'user_gallery');

            // Session Check
            if ($this->session->has_userdata('logged_in')) {
                if ($this->session->logged_in === TRUE) {
                    if (!$this->form_model->session_check($this->session->username, $this->session->user_id)){
                        redirect('form/login');
                    }
                } else {
                    redirect('form/login');
                }
            } else {
                redirect('form/login');
            }

            // Gallery Page View
            $data['title'] = 'My Account';
            $data['userdata'] = $this->user_gallery->get_gallery_data();
            $this->load->view('form/header', $data);
            $this->load->view('form/user_gallery', $data);
            $this->load->view('form/footer');
        }

        // Logout Function
        public function logout() {
            $this->session->sess_destroy();
            redirect('form/login');
        }

        // Delete User Account
        public function delete_account($username = '') {

            // Session Check
            if ($this->session->has_userdata('logged_in')) {
                if ($this->session->logged_in === TRUE) {
                    if (!$this->form_model->session_check($this->session->username, $this->session->user_id)){
                        redirect('form/login');
                    }
                } else {
                    redirect('form/login');
                }
            } else {
                $this->session->set_flashdata('delete_account_message', 'Login To Delete Your Account');
                redirect('form/login');
            }

            // Redirect if username does not match with session username
            if ($this->session->username != $username) {
                $this->session->unset_userdata('logged_in', 'username', 'user_id');
                $this->session->set_flashdata('delete_account_message', 'Error Deleting Your Account, Please Try Again');
                redirect('form/login');
            }

            if ($this->form_model->delete_user_account($username, $this->session->user_id)) {
                $this->session->unset_userdata('logged_in', 'username', 'user_id');
                $this->session->set_flashdata('delete_account_message', 'Account Deleted Successfully');
                redirect('form/login');
            } else {
                $this->session->unset_userdata('logged_in', 'username', 'user_id');
                $this->session->set_flashdata('delete_account_message', 'Error Deleting Your Account, Please Try Again');
                redirect('form/login');
            }
        }

        public function check_password($value, $type = FALSE)
        {
            if ($type === FALSE) {
                $pattern = "/[^\w\d]*(([0-9]+.*[A-Za-z]+.*)|[A-Za-z]+.*([0-9]+.*))/";

                if (!preg_match($pattern, $value)) {
                    $this->fv->set_message('check_password' ,"Password should contain atleast one letter, one number");
                    return FALSE;
                }

                return TRUE;
            }

            if ($type == 'update') {
                $password = $this->form_model->get_userdata('password')['password'];

                if (md5($value) != $password) {
                    $this->fv->set_message('check_password' ,"Wrong Password Entered");
                    return FALSE;
                }

                return TRUE;
            }
        }
    }