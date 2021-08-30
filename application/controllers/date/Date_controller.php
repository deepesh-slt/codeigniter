<?php
    class date_controller extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper(['url']);
        }

        public function index(){
            $this->load->view('date/index');
        }

        public function test(){
            $this->load->view('date/test');
        }
    }