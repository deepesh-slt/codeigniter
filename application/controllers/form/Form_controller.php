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
            if ($this->session->has_userdata('logged_in', 'username', 'user_id')) {
                if ($this->session->logged_in === TRUE) {
                    redirect('form/profile');
                } else {
                    if ($this->form_model->session_check($this->session->username, $this->session->user_id)) {
                        $this->session->logged_in = TRUE;
                        redirect('form/profile');
                    } else {
                        $this->session->unset_userdata(array('username', 'user_id', 'logged_in'));
                        redirect('form/login');
                    }
                }
            } else {
                redirect('form/login');
            }
        }

        public function login() {

            if (isset($_POST['login'])) {
                if ($userdata = $this->form_model->login_check($this->input->post('login_username'), $this->input->post('password'))) {
                    $this->session->username = $userdata['username'];
                    $this->session->user_id = $userdata['id'];
                    $this->session->logged_in = TRUE;
                } else {
                    $this->session->set_flashdata('login_error', 'Invalid Credentials');
                    $this->session->set_flashdata('username_value', $this->input->post('login_username'));
                }
            }

            if ($this->session->has_userdata('logged_in', 'username', 'user_id')) {
                if ($this->session->logged_in === TRUE) {
                    redirect('form/profile');
                } else {
                    if ($this->form_model->session_check($this->session->username, $this->session->user_id)) {
                        $this->session->logged_in = TRUE;
                        redirect('form/profile');
                    } else {
                        $this->session->unset_userdata(array('username', 'user_id', 'logged_in'));
                    }
                }
                
            }

            $data['title'] = 'Login';
            $this->load->view('form/header', $data);
            $this->load->view('form/login');
            $this->load->view('form/footer');
        }

        public function registration() {

            if (isset($_POST['registration'])) {
                $data = $this->input->post();
                $config['upload_path'] = './assets/profile/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048;
                $config['overwrite']             = FALSE;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('profile_pic')) {
                    $data['profile_pic'] = $this->upload->data('full_path');

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

                } else {
                    echo $this->upload->display_errors();die;
                }
            }

            if ($this->session->has_userdata('logged_in', 'username', 'user_id')) {
                if ($this->session->logged_in === TRUE) {
                    redirect('form/profile');
                } else {
                    if ($this->form_model->session_check($this->session->username, $this->session->user_id)) {
                        $this->session->logged_in = TRUE;
                        redirect('form/profile');
                    } else {
                        $this->session->unset_userdata(array('username', 'user_id', 'logged_in'));
                    }
                }
                
            }

            $data['title'] = 'Registration';
            $this->load->view('form/header', $data);
            $this->load->view('form/registration');
            $this->load->view('form/footer');
        }

        public function profile() {

            if ($this->session->has_userdata('logged_in', 'username', 'user_id')) {
                if ($this->session->logged_in !== TRUE) {
                    if ($this->form_model->session_check($this->session->username, $this->session->user_id)) {
                        $this->session->logged_in = TRUE;
                    } else {
                        $this->session->unset_userdata(array('username', 'user_id', 'logged_in'));
                        redirect('form/login');
                    }
                }
                
            } else {
                redirect('form/login');
            }

            $data['title'] = 'My Account';
            $data['userdata'] = $this->form_model->get_userdata();
            $this->load->view('form/header', $data);
            $this->load->view('form/user_account', $data);
            $this->load->view('form/footer');
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('form/login');
        }
    }