<?php
    class Api_model_controller extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('url', 'form'));
            $this->load->model('use_api/api_model');
            header('Access-Control-Allow-Origin: *');
            //header("Access-Control-Allow-Methods", "DELETE, POST, GET, OPTIONS");
            // header('Content-Type: application/json');
           // header("Access-Control-Allow-Headers", "*");
        }

        public function index($id = NULL){
            $this->get($id);
        }

        public function get($id = NULL){
            echo json_encode($this->api_model->get_userdata($id));
        }

        public function create(){
            $data = !empty($this->input->post()) ? $this->input->post() : '';
            echo json_encode($data);die;
            echo json_encode($this->api_model->create_user($data));
        }

        public function edit(){
            echo json_encode($this->api_model->edit_user($this->input->post()));
        }

        public function delete(){
            echo json_encode($this->api_model->delete_user($this->input->post('id')));
        }

    }