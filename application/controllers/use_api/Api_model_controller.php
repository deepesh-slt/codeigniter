<?php
    class Api_model_controller extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('url', 'form'));
            $this->load->model('use_api/api_model');
        }

        public function get(){
            $this->load->model('use_api/api_model');
            echo json_encode($this->api_model->get_userdata());
        }

        public function create(){
            echo json_encode($this->api_model->create_user($this->input->post()));
        }

        public function edit(){
            echo json_encode($this->api_model->edit_user($this->input->post()));
        }

        public function delete(){
            echo json_encode($this->api_model->delete_user($this->input->post('id')));
        }
    }