<?php
    class Datatable_model extends CI_Model{
        private $tb_name = 'datatable';
        private $order = ['id', 'user_id', 'title', 'completed'];
        private $shown_columns = ['id', 'user_id', 'title', 'completed'];

        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        // Insert Data in `datatable` table
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

        // If Any column uses any order/sort
        private function order_datatable(){

            if(isset($_POST['order']) && count($this->input->post('order'))){

                for ($i=0; $i < count($this->input->post('order')); $i++) { 

                    if($this->input->post('columns')[intval($this->input->post('order')[$i]['column'])]['orderable']){

                        // Order will only acceptable as ascending or descending
                        $this->db->order_by($this->order[intval($this->input->post('order')[$i]['column'])], $this->input->post('order')[$i]['dir'] == 'asc' ? 'ASC' : 'DESC');
                    }                    
                }

            } else {
                $this->db->order_by($this->shown_columns[0],'ASC');
            }
        }

        // If User Search any record
        private function search_datatable(){     
            
            // Search in selected columns
            if(!empty($this->input->post('search')['value'])) {
                $like_done = FALSE;
                $this->db->group_start();
                foreach ($this->input->post('columns') as $i => $column) {
                    if($column['searchable'] == 'true') {
                        if($like_done === FALSE) {
                            $this->db->like($this->shown_columns[$i], $this->input->post('search')['value']);
                            $like_done = TRUE;
                        } else {
                            $this->db->or_like($this->shown_columns[$i], $this->input->post('search')['value']);
                        }
                    }
                }
                $this->db->group_end();
            }

            // Individual Column Search
            if(!empty($this->input->post('columns'))) {

                foreach ($this->input->post('columns') as $i => $column) {
                    if($column['searchable'] == 'true' && $column['search']['value'] != '') {
                        $this->db->like($this->shown_columns[$i], $column['search']['value']);
                    }
                }
            }
        }

        // Limit the data
        private function limit_datatable(){
            if(isset($_POST['start']) && $this->input->post('length') != -1) {
                $this->db->limit(intval($this->input->post('length')), intval($this->input->post('start')));
            }
        }

        // Make database query of getting data (without limit)
        private function query_datatable($select = '*'){
            $this->db->select($select);
            $this->db->from($this->tb_name);

            $this->search_datatable();
            $this->order_datatable();
        }

        // Get data in the form of array
        public function get_datatable(){
            $this->query_datatable();
            $this->limit_datatable();
            
            $query = $this->db->get();
            
            if (!empty($query->result_array())) {
                return $query->result_array();
            }

            return FALSE;
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

        // Print any error (works only with dataTables)
        static function fatal ( $msg ) {
            echo json_encode( array( 
                "error" => $msg
            ) );

            exit(0);
        }
    }