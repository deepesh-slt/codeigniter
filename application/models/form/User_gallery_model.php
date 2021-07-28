<?php
    class User_gallery_model extends CI_Model {
        private $tb_name = 'user_gallery';

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }

        public function get_gallery_data($column = '*', $user_id = FALSE, $id = FALSE)
        {
            if ($this->session->user_id) {
                $user_id = $this->session->user_id;
            }

            if (empty($user_id)) {
                return FALSE;
            }

            $this->db->select($column);
            $this->db->from($this->tb_name);
            if ($id) {
                $this->db->where('id =', $id);
            } else {
                $this->db->where('user_id =', $user_id);
            }

            $query = $this->db->get();

            if ($id) {
                if ($result = $query->row_array()){
                    return $result;
                } else {
                    return FALSE;
                }
            } else {
                if ($result = $query->result_array()){
                    return $result;
                } else {
                    return FALSE;
                }
            }

            
        }

        public function insert_image($data = FALSE)
        {
            $data['user_id'] = $this->session->user_id;
            if ($insert = $this->db->insert($this->tb_name, $data)) {
                return TRUE;
            } else {
                return FALSE;
            }            
        }

        public function delete_image($id){
            $this->db->where('id =', $id);

            if ($this->db->delete($this->tb_name)) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }