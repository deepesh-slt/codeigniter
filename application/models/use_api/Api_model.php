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

        // public function  insert_ajax_datatable_table($data){
        //     foreach($data as $single_data){
        //         $this->db->insert('insert_ajax_datatable_table', $single_data);
        //     }
        // }

        // public function get_ajax_datatable_table(){
        //     $output = [];
        //     $order = ["mainId", "userId", "id", "title", "completed"];

        //     $this->db->select("*");
        //     $this->db->from('insert_ajax_datatable_table');
            
        //     if(isset($this->input->post('search')['value'])){
        //         $this->db->like("mainId", $this->input->post('search')['value']);
        //         $this->db->or_like("userId", $this->input->post('search')['value']);
        //         $this->db->or_like("id", $this->input->post('search')['value']);
        //         $this->db->or_like("title", $this->input->post('search')['value']);
        //         $this->db->or_like("completed", $this->input->post('search')['value']);
        //     }

        //     if(!empty($this->input->post('order'))){

        //         $this->db->order_by($order[$this->input->post('order')['0']['column']], $this->input->post('order')['0']['dir']);

        //     } else {
        //         $this->db->order_by('mainId', "DESC");
        //     }

        //     if (!empty($this->input->post('length'))) {
        //         if($this->input->post('length') > -1) {
        //             $this->db->limit($this->input->post('length'), $this->input->post('start'));
        //         }
        //     }

        //     $query = $this->db->get();
        //     $output['num_rows'] = $query->num_rows();
        //     $output['result'] = $query->result();

        //     return $output;
        // }

        // public function get_ajax_datatable_all_data(){
        //     $this->db->select("*");
        //     $this->db->from('insert_ajax_datatable_table');
        //     return  $this->db->count_all_results();
        // }
    }