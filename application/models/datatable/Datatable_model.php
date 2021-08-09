<?php
    class Datatable_model extends CI_Model{
        private $tb_name = 'datatable';

        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function insert_datatable($data = FALSE) {
            $status = TRUE;

            if($data === FALSE) {
                return FALSE;
            }

            foreach($data as $single_data){
                if ($this->db->insert($this->tb_name, $single_data)) {
                    $status = TRUE;
                } else {
                    $status = FALSE;
                    break;
                }
            }

            return $status;
        }

        private function query_datatable(){
            $select = '*';
            $order = ['id', 'user_id', 'title', 'completed'];

            $this->db->select($select);
            $this->db->from($this->tb_name);

            if(!empty($this->input->post('search')['value'])) {
                $this->db->like('id', $this->input->post('search')['value']);
                $this->db->or_like('user_id', $this->input->post('search')['value']);
                $this->db->or_like('title', $this->input->post('search')['value']);
                $this->db->or_like('completed', $this->input->post('search')['value']);
            }

            if($this->input->post('order')){
                $this->db->order_by($order[$this->input->post('order')['0']['column']], $this->input->post('order')['0']['dir']);
            } else {
                $this->db->order_by('id','ASC');
            }
        }

        public function get_datatable(){
            $this->query_datatable();
            if($this->input->post('length') > -1) {
                $this->db->limit($this->input->post('length'), $this->input->post('start'));
            }
            $query = $this->db->get();
            
            if (!empty($query->result())) {
                return $query->result();
            }

            return ['error' => 'No Record Found'];
        }

        public function get_filtered_count(){
            $this->query_datatable();            
            $query = $this->db->get();
            return $query->num_rows();
        }

        public function get_all_count(){
            $this->db->from($this->tb_name);
            return $this->db->count_all_results();
        }
    }