<?php
    class User_gallery_model extends CI_Model {
        private $tb_name = 'user_gallery';

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }

        public function get_gallery_data($user_id = FALSE)
        {
            if ($this->session->user_id) {
                $user_id = $this->session->user_id;
            }

            if (empty($user_id)) {
                return FALSE;
            }

            $this->db->select("*");
            $this->db->from($this->tb_name);
            $this->db->where('user_id =', $user_id);

            $query = $this->db->get();

            if ($result = $query->result_array()){
                return $result;
            } else {
                return FALSE;
            }
        }
    }