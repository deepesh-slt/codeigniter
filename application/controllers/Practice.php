<?php
    class Practice extends CI_Controller {
        public function index()
        {
            set_status_header(401);
            echo var_dump(is_https()).CI_VERSION;
        }

        public function _remap($method = '', $param = array())
        {
            if ($method == 'view') {
                $this->$method();
            } else {
                $this->index();
            }        
        }

        // public function _output($output)
        // {
        //     echo "\noutput = $output";
        // }
    }