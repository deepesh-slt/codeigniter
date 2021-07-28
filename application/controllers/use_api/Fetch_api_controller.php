<?php
    class Fetch_api_controller extends CI_Controller {
        public function index()
        {
            echo 'index';
            $this->load->view('use_api/index');
        }
    }