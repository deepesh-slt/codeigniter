<?php
    class Fetch_api_controller extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('url', 'form'));
        }

        public function index()
        {
            $data['title'] = 'Index Page';
            $data['page_name'] = 'index';
            $this->load->view('use_api/header', $data);
            $this->load->view('use_api/index');
            $this->load->view('use_api/footer');
        }

        public function userdata(){

            // Inserting Data
            if (!empty($this->input->post('add_user'))) {
                $add_user_data = $this->input->post();

                unset($add_user_data['add_user']);

                $add_user_url = base_url('api/create');
                $client = curl_init($add_user_url);

                curl_setopt($client, CURLOPT_POST , true);
                curl_setopt($client, CURLOPT_POSTFIELDS , $add_user_data);
                curl_setopt($client, CURLOPT_RETURNTRANSFER , true);

                if (json_decode(curl_exec($client))) {
                    $data['add_user_message'] = 'Added Successfully';
                } else {
                    $data['add_user_message'] = 'Error Inserting Data';
                }
                curl_close($client);
            }

            // Edit/Updating Data
            if (!empty($this->input->post('edit_user'))) {
                $edit_user_data = $this->input->post();

                unset($edit_user_data['edit_user']);

                $edit_user_url = base_url('api/edit');
                $client = curl_init($edit_user_url);

                curl_setopt($client, CURLOPT_POST , true);
                curl_setopt($client, CURLOPT_POSTFIELDS , $edit_user_data);
                curl_setopt($client, CURLOPT_RETURNTRANSFER , true);

                if (json_decode(curl_exec($client))) {
                    $data['add_user_message'] = 'Data Successfully Updated';
                } else {
                    $data['add_user_message'] = 'Error Updating Data';
                }
                curl_close($client);
            }

            // Get All Data
            $get_url = base_url('api/get');

            $client = curl_init($get_url);
            curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
            $userdata = curl_exec($client);
            curl_close($client);

            // Set View Data
            $data['title'] = 'User Data';
            $data['page_name'] = 'userdata';
            $data['response'] = json_decode($userdata);

            // View Pages
            $this->load->view('use_api/header', $data);
            $this->load->view('use_api/userdata', $data);
            $this->load->view('use_api/footer');
        }

        public function delete_user($user_id){
            $delete_user_data = array('id' => $user_id);

            $delete_user_url = base_url('api/delete');
            $client = curl_init($delete_user_url);

            curl_setopt($client, CURLOPT_POST , true);
            curl_setopt($client, CURLOPT_POSTFIELDS , $delete_user_data);
            curl_setopt($client, CURLOPT_RETURNTRANSFER , true);
            $response = json_decode(curl_exec($client));
            curl_close($client);

            if ($response) {
                redirect(base_url('use_api/userdata'));
            } else {
                echo 'Error Deleting Data';die;
            }
        }
    }