<?php
    class Api_model extends CI_Model {
        private $tb_name = 'api_userdata';

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function get_userdata($id = FALSE){
            $this->db->select('*');
            $this->db->order_by('id', 'DESC');

            $query = $this->db->get($this->tb_name);
            return $query->result_array();

        }

        public function create_user($data){
            if ($this->db->insert($this->tb_name, $data)) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        public function edit_user($data){
            $this->db->where('id =', $data['id']);

            if ($this->db->update($this->tb_name, $data)) {
                return TRUE;
            } else {
                return FALSE;
            }
        }

        public function delete_user($id) {
            $this->db->where('id =', $id);

            if ($this->db->delete($this->tb_name)) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }