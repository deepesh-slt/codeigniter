<?php
    class Translate_controller extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper(['url']);
        }

        public function index(){

            $this->load->view("translate/index");
        }

        public function api(){
            $post_data = array(
                'q' => $this->input->post('q'),
                'target' => $this->input->post('target'),
                'source' => $this->input->post('language'),
            );

            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://google-translate1.p.rapidapi.com/language/translate/v2",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => 'q='.$post_data['q'].'&target='.$post_data['target'].'&source='.$post_data['source'],
                CURLOPT_HTTPHEADER => [
                    "accept-encoding: application/gzip",
                    "content-type: application/x-www-form-urlencoded",
                    "x-rapidapi-host: google-translate1.p.rapidapi.com",
                    "x-rapidapi-key: 48e8daa2f5msh5f0036bce90cc41p1ddc71jsnce60b2c776df"
                ],
            ]);
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);

            if (!empty($err)) {
                $output = '{"data":{"translations":[{"translatedText":"'.$err.'"}]}}';
            } else {
                $output = $response;
            }

            echo $output;
        }
    }