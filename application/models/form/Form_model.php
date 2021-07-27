<?php
    class Form_model extends CI_Model {
        private $tb_name = 'userdata';

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }

        public function session_check($username = FALSE, $user_id = FALSE) {
            if ($username === FALSE || $user_id === FALSE) {
                return FALSE;
            }

            $this->db->select('username, id');
            $this->db->from($this->tb_name);
            $this->db->where('username =', $username);
            $this->db->or_where('email =', $username);
            $this->db->where('id =', $user_id);

            $query = $this->db->get();
            if ($query->row_array()) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        public function login_check($username = FALSE, $password = FALSE){
            if ($username === FALSE || $password === FALSE) {
                return FALSE;
            }

            $this->db->select('username, id');
            $this->db->from($this->tb_name);
            $this->db->group_start();
            $this->db->where('username =', $username);
            $this->db->or_where('email =', $username);
            $this->db->group_end();
            $this->db->where('password =', $password);

            $query = $this->db->get();
            if ($result = $query->row_array()) {
                return $result;
            } else {
                return FALSE;
            }
        }

        public function get_userdata($column = "*", $username = NULL, $id = NULL){

            if ($this->session->has_userdata('username', 'user_id')) {

                if (empty($username)) {
                    $username = $this->session->username;
                }
    
                if (empty($id)) {
                    $id = $this->session->user_id;
                }
            }

            if (empty($username) && empty($id)) {
                return FALSE;
            }

            $this->db->select($column);
            $this->db->from($this->tb_name);
            if (empty($username)) {
                $this->db->where('id =', $id);
            } else {
                $this->db->where('username =', $username);
                $this->db->or_where('email =', $username);
            }

            $query = $this->db->get();
            if ($result = $query->row_array()) {
                return $result;
            } else {
                return FALSE;
            }
        }

        public function sign_up($data) {
            if ($this->db->insert($this->tb_name, $data)) {
                $return_data['username'] = $data['username'];
                $return_data['id'] = $this->db->insert_id();
            } else {
                $return_data = $this->db->display_error();
            }

            return $return_data;
        }
    }