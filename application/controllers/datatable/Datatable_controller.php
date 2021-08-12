<?php
    class Datatable_controller extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper(array('url'));
            $this->load->model('datatable/datatable_model');
        }

        public function index(){
            self::get();
        }

        public function insert(){
            $data = array (
                0 => 
                array (
                  'user_id' => 1,
                  'title' => 'delectus aut autem',
                  'completed' => 'FALSE',
                ),
                1 => 
                array (
                  'user_id' => 1,
                  'title' => 'quis ut nam facilis et officia qui',
                  'completed' => 'FALSE',
                ),
                2 => 
                array (
                  'user_id' => 1,
                  'title' => 'fugiat veniam minus',
                  'completed' => 'FALSE',
                ),
                3 => 
                array (
                  'user_id' => 1,
                  'title' => 'et porro tempora',
                  'completed' => 'TRUE',
                ),
                4 => 
                array (
                  'user_id' => 1,
                  'title' => 'laboriosam mollitia et enim quasi adipisci quia provident illum',
                  'completed' => 'FALSE',
                ),
                5 => 
                array (
                  'user_id' => 1,
                  'title' => 'qui ullam ratione quibusdam voluptatem quia omnis',
                  'completed' => 'FALSE',
                ),
                6 => 
                array (
                  'user_id' => 1,
                  'title' => 'illo expedita consequatur quia in',
                  'completed' => 'FALSE',
                ),
                7 => 
                array (
                  'user_id' => 1,
                  'title' => 'quo adipisci enim quam ut ab',
                  'completed' => 'TRUE',
                ),
                8 => 
                array (
                  'user_id' => 1,
                  'title' => 'molestiae perspiciatis ipsa',
                  'completed' => 'FALSE',
                ),
                9 => 
                array (
                  'user_id' => 1,
                  'title' => 'illo est ratione doloremque quia maiores aut',
                  'completed' => 'TRUE',
                ),
                10 => 
                array (
                  'user_id' => 1,
                  'title' => 'vero rerum temporibus dolor',
                  'completed' => 'TRUE',
                ),
                11 => 
                array (
                  'user_id' => 1,
                  'title' => 'ipsa repellendus fugit nisi',
                  'completed' => 'TRUE',
                ),
                12 => 
                array (
                  'user_id' => 1,
                  'title' => 'et doloremque nulla',
                  'completed' => 'FALSE',
                ),
                13 => 
                array (
                  'user_id' => 1,
                  'title' => 'repellendus sunt dolores architecto voluptatum',
                  'completed' => 'TRUE',
                ),
                14 => 
                array (
                  'user_id' => 1,
                  'title' => 'ab voluptatum amet voluptas',
                  'completed' => 'TRUE',
                ),
                15 => 
                array (
                  'user_id' => 1,
                  'title' => 'accusamus eos facilis sint et aut voluptatem',
                  'completed' => 'TRUE',
                ),
                16 => 
                array (
                  'user_id' => 1,
                  'title' => 'quo laboriosam deleniti aut qui',
                  'completed' => 'TRUE',
                ),
                17 => 
                array (
                  'user_id' => 1,
                  'title' => 'dolorum est consequatur ea mollitia in culpa',
                  'completed' => 'FALSE',
                ),
                18 => 
                array (
                  'user_id' => 1,
                  'title' => 'molestiae ipsa aut voluptatibus pariatur dolor nihil',
                  'completed' => 'TRUE',
                ),
                19 => 
                array (
                  'user_id' => 1,
                  'title' => 'ullam nobis libero sapiente ad optio sint',
                  'completed' => 'TRUE',
                ),
                20 => 
                array (
                  'user_id' => 2,
                  'title' => 'suscipit repellat esse quibusdam voluptatem incidunt',
                  'completed' => 'FALSE',
                ),
                21 => 
                array (
                  'user_id' => 2,
                  'title' => 'distinctio vitae autem nihil ut molestias quo',
                  'completed' => 'TRUE',
                ),
                22 => 
                array (
                  'user_id' => 2,
                  'title' => 'et itaque necessitatibus maxime molestiae qui quas velit',
                  'completed' => 'FALSE',
                ),
                23 => 
                array (
                  'user_id' => 2,
                  'title' => 'adipisci non ad dicta qui amet quaerat doloribus ea',
                  'completed' => 'FALSE',
                ),
                24 => 
                array (
                  'user_id' => 2,
                  'title' => 'voluptas quo tenetur perspiciatis explicabo natus',
                  'completed' => 'TRUE',
                ),
                25 => 
                array (
                  'user_id' => 2,
                  'title' => 'aliquam aut quasi',
                  'completed' => 'TRUE',
                ),
                26 => 
                array (
                  'user_id' => 2,
                  'title' => 'veritatis pariatur delectus',
                  'completed' => 'TRUE',
                ),
                27 => 
                array (
                  'user_id' => 2,
                  'title' => 'nesciunt totam sit blanditiis sit',
                  'completed' => 'FALSE',
                ),
                28 => 
                array (
                  'user_id' => 2,
                  'title' => 'laborum aut in quam',
                  'completed' => 'FALSE',
                ),
                29 => 
                array (
                  'user_id' => 2,
                  'title' => 'nemo perspiciatis repellat ut dolor libero commodi blanditiis omnis',
                  'completed' => 'TRUE',
                ),
                30 => 
                array (
                  'user_id' => 2,
                  'title' => 'repudiandae totam in est sint facere fuga',
                  'completed' => 'FALSE',
                ),
                31 => 
                array (
                  'user_id' => 2,
                  'title' => 'earum doloribus ea doloremque quis',
                  'completed' => 'FALSE',
                ),
                32 => 
                array (
                  'user_id' => 2,
                  'title' => 'sint sit aut vero',
                  'completed' => 'FALSE',
                ),
                33 => 
                array (
                  'user_id' => 2,
                  'title' => 'porro aut necessitatibus eaque distinctio',
                  'completed' => 'FALSE',
                ),
                34 => 
                array (
                  'user_id' => 2,
                  'title' => 'repellendus veritatis molestias dicta incidunt',
                  'completed' => 'TRUE',
                ),
                35 => 
                array (
                  'user_id' => 2,
                  'title' => 'excepturi deleniti adipisci voluptatem et neque optio illum ad',
                  'completed' => 'TRUE',
                ),
                36 => 
                array (
                  'user_id' => 2,
                  'title' => 'sunt cum tempora',
                  'completed' => 'FALSE',
                ),
                37 => 
                array (
                  'user_id' => 2,
                  'title' => 'totam quia non',
                  'completed' => 'FALSE',
                ),
                38 => 
                array (
                  'user_id' => 2,
                  'title' => 'doloremque quibusdam asperiores libero corrupti illum qui omnis',
                  'completed' => 'FALSE',
                ),
                39 => 
                array (
                  'user_id' => 2,
                  'title' => 'totam atque quo nesciunt',
                  'completed' => 'TRUE',
                ),
                40 => 
                array (
                  'user_id' => 3,
                  'title' => 'aliquid amet impedit consequatur aspernatur placeat eaque fugiat suscipit',
                  'completed' => 'FALSE',
                ),
                41 => 
                array (
                  'user_id' => 3,
                  'title' => 'rerum perferendis error quia ut eveniet',
                  'completed' => 'FALSE',
                ),
                42 => 
                array (
                  'user_id' => 3,
                  'title' => 'tempore ut sint quis recusandae',
                  'completed' => 'TRUE',
                ),
                43 => 
                array (
                  'user_id' => 3,
                  'title' => 'cum debitis quis accusamus doloremque ipsa natus sapiente omnis',
                  'completed' => 'TRUE',
                ),
                44 => 
                array (
                  'user_id' => 3,
                  'title' => 'velit soluta adipisci molestias reiciendis harum',
                  'completed' => 'FALSE',
                ),
                45 => 
                array (
                  'user_id' => 3,
                  'title' => 'vel voluptatem repellat nihil placeat corporis',
                  'completed' => 'FALSE',
                ),
                46 => 
                array (
                  'user_id' => 3,
                  'title' => 'nam qui rerum fugiat accusamus',
                  'completed' => 'FALSE',
                ),
                47 => 
                array (
                  'user_id' => 3,
                  'title' => 'sit reprehenderit omnis quia',
                  'completed' => 'FALSE',
                ),
                48 => 
                array (
                  'user_id' => 3,
                  'title' => 'ut necessitatibus aut maiores debitis officia blanditiis velit et',
                  'completed' => 'FALSE',
                ),
                49 => 
                array (
                  'user_id' => 3,
                  'title' => 'cupiditate necessitatibus ullam aut quis dolor voluptate',
                  'completed' => 'TRUE',
                ),
                50 => 
                array (
                  'user_id' => 3,
                  'title' => 'distinctio exercitationem ab doloribus',
                  'completed' => 'FALSE',
                ),
                51 => 
                array (
                  'user_id' => 3,
                  'title' => 'nesciunt dolorum quis recusandae ad pariatur ratione',
                  'completed' => 'FALSE',
                ),
                52 => 
                array (
                  'user_id' => 3,
                  'title' => 'qui labore est occaecati recusandae aliquid quam',
                  'completed' => 'FALSE',
                ),
                53 => 
                array (
                  'user_id' => 3,
                  'title' => 'quis et est ut voluptate quam dolor',
                  'completed' => 'TRUE',
                ),
                54 => 
                array (
                  'user_id' => 3,
                  'title' => 'voluptatum omnis minima qui occaecati provident nulla voluptatem ratione',
                  'completed' => 'TRUE',
                ),
                55 => 
                array (
                  'user_id' => 3,
                  'title' => 'deleniti ea temporibus enim',
                  'completed' => 'TRUE',
                ),
                56 => 
                array (
                  'user_id' => 3,
                  'title' => 'pariatur et magnam ea doloribus similique voluptatem rerum quia',
                  'completed' => 'FALSE',
                ),
                57 => 
                array (
                  'user_id' => 3,
                  'title' => 'est dicta totam qui explicabo doloribus qui dignissimos',
                  'completed' => 'FALSE',
                ),
                58 => 
                array (
                  'user_id' => 3,
                  'title' => 'perspiciatis velit id laborum placeat iusto et aliquam odio',
                  'completed' => 'FALSE',
                ),
                59 => 
                array (
                  'user_id' => 3,
                  'title' => 'et sequi qui architecto ut adipisci',
                  'completed' => 'TRUE',
                ),
                60 => 
                array (
                  'user_id' => 4,
                  'title' => 'odit optio omnis qui sunt',
                  'completed' => 'TRUE',
                ),
                61 => 
                array (
                  'user_id' => 4,
                  'title' => 'et placeat et tempore aspernatur sint numquam',
                  'completed' => 'FALSE',
                ),
                62 => 
                array (
                  'user_id' => 4,
                  'title' => 'doloremque aut dolores quidem fuga qui nulla',
                  'completed' => 'TRUE',
                ),
                63 => 
                array (
                  'user_id' => 4,
                  'title' => 'voluptas consequatur qui ut quia magnam nemo esse',
                  'completed' => 'FALSE',
                ),
                64 => 
                array (
                  'user_id' => 4,
                  'title' => 'fugiat pariatur ratione ut asperiores necessitatibus magni',
                  'completed' => 'FALSE',
                ),
                65 => 
                array (
                  'user_id' => 4,
                  'title' => 'rerum eum molestias autem voluptatum sit optio',
                  'completed' => 'FALSE',
                ),
                66 => 
                array (
                  'user_id' => 4,
                  'title' => 'quia voluptatibus voluptatem quos similique maiores repellat',
                  'completed' => 'FALSE',
                ),
                67 => 
                array (
                  'user_id' => 4,
                  'title' => 'aut id perspiciatis voluptatem iusto',
                  'completed' => 'FALSE',
                ),
                68 => 
                array (
                  'user_id' => 4,
                  'title' => 'doloribus sint dolorum ab adipisci itaque dignissimos aliquam suscipit',
                  'completed' => 'FALSE',
                ),
                69 => 
                array (
                  'user_id' => 4,
                  'title' => 'ut sequi accusantium et mollitia delectus sunt',
                  'completed' => 'FALSE',
                ),
                70 => 
                array (
                  'user_id' => 4,
                  'title' => 'aut velit saepe ullam',
                  'completed' => 'FALSE',
                ),
                71 => 
                array (
                  'user_id' => 4,
                  'title' => 'praesentium facilis facere quis harum voluptatibus voluptatem eum',
                  'completed' => 'FALSE',
                ),
                72 => 
                array (
                  'user_id' => 4,
                  'title' => 'sint amet quia totam corporis qui exercitationem commodi',
                  'completed' => 'TRUE',
                ),
                73 => 
                array (
                  'user_id' => 4,
                  'title' => 'expedita tempore nobis eveniet laborum maiores',
                  'completed' => 'FALSE',
                ),
                74 => 
                array (
                  'user_id' => 4,
                  'title' => 'occaecati adipisci est possimus totam',
                  'completed' => 'FALSE',
                ),
                75 => 
                array (
                  'user_id' => 4,
                  'title' => 'sequi dolorem sed',
                  'completed' => 'TRUE',
                ),
                76 => 
                array (
                  'user_id' => 4,
                  'title' => 'maiores aut nesciunt delectus exercitationem vel assumenda eligendi at',
                  'completed' => 'FALSE',
                ),
                77 => 
                array (
                  'user_id' => 4,
                  'title' => 'reiciendis est magnam amet nemo iste recusandae impedit quaerat',
                  'completed' => 'FALSE',
                ),
                78 => 
                array (
                  'user_id' => 4,
                  'title' => 'eum ipsa maxime ut',
                  'completed' => 'TRUE',
                ),
                79 => 
                array (
                  'user_id' => 4,
                  'title' => 'tempore molestias dolores rerum sequi voluptates ipsum consequatur',
                  'completed' => 'TRUE',
                ),
                80 => 
                array (
                  'user_id' => 5,
                  'title' => 'suscipit qui totam',
                  'completed' => 'TRUE',
                ),
                81 => 
                array (
                  'user_id' => 5,
                  'title' => 'voluptates eum voluptas et dicta',
                  'completed' => 'FALSE',
                ),
                82 => 
                array (
                  'user_id' => 5,
                  'title' => 'quidem at rerum quis ex aut sit quam',
                  'completed' => 'TRUE',
                ),
                83 => 
                array (
                  'user_id' => 5,
                  'title' => 'sunt veritatis ut voluptate',
                  'completed' => 'FALSE',
                ),
                84 => 
                array (
                  'user_id' => 5,
                  'title' => 'et quia ad iste a',
                  'completed' => 'TRUE',
                ),
                85 => 
                array (
                  'user_id' => 5,
                  'title' => 'incidunt ut saepe autem',
                  'completed' => 'TRUE',
                ),
                86 => 
                array (
                  'user_id' => 5,
                  'title' => 'laudantium quae eligendi consequatur quia et vero autem',
                  'completed' => 'TRUE',
                ),
                87 => 
                array (
                  'user_id' => 5,
                  'title' => 'vitae aut excepturi laboriosam sint aliquam et et accusantium',
                  'completed' => 'FALSE',
                ),
                88 => 
                array (
                  'user_id' => 5,
                  'title' => 'sequi ut omnis et',
                  'completed' => 'TRUE',
                ),
                89 => 
                array (
                  'user_id' => 5,
                  'title' => 'molestiae nisi accusantium tenetur dolorem et',
                  'completed' => 'TRUE',
                ),
                90 => 
                array (
                  'user_id' => 5,
                  'title' => 'nulla quis consequatur saepe qui id expedita',
                  'completed' => 'TRUE',
                ),
                91 => 
                array (
                  'user_id' => 5,
                  'title' => 'in omnis laboriosam',
                  'completed' => 'TRUE',
                ),
                92 => 
                array (
                  'user_id' => 5,
                  'title' => 'odio iure consequatur molestiae quibusdam necessitatibus quia sint',
                  'completed' => 'TRUE',
                ),
                93 => 
                array (
                  'user_id' => 5,
                  'title' => 'facilis modi saepe mollitia',
                  'completed' => 'FALSE',
                ),
                94 => 
                array (
                  'user_id' => 5,
                  'title' => 'vel nihil et molestiae iusto assumenda nemo quo ut',
                  'completed' => 'TRUE',
                ),
                95 => 
                array (
                  'user_id' => 5,
                  'title' => 'nobis suscipit ducimus enim asperiores voluptas',
                  'completed' => 'FALSE',
                ),
                96 => 
                array (
                  'user_id' => 5,
                  'title' => 'dolorum laboriosam eos qui iure aliquam',
                  'completed' => 'FALSE',
                ),
                97 => 
                array (
                  'user_id' => 5,
                  'title' => 'debitis accusantium ut quo facilis nihil quis sapiente necessitatibus',
                  'completed' => 'TRUE',
                ),
                98 => 
                array (
                  'user_id' => 5,
                  'title' => 'neque voluptates ratione',
                  'completed' => 'FALSE',
                ),
                99 => 
                array (
                  'user_id' => 5,
                  'title' => 'excepturi a et neque qui expedita vel voluptate',
                  'completed' => 'FALSE',
                ),
              );

            for($i=0;$i<50;$i++){
              if ($this->datatable_model->insert_datatable($data) === FALSE) {
                  echo '<script>alert("Error Inserting Data - Some of information Might Have Inserted");</script>';
              }
            }
            
        }

        public function get(){
            // $data = $this->datatable_model->get_datatable();
            // $output['data'] = $this->datatable_model->get_datatable();

            // if (($data != FALSE) && is_array($data)) {
            //     foreach ($data as $row) {
            //         // $row_data['id'] = $row['id'];
            //         // $row_data['user_id'] = $row['user_id'];
            //         // $row_data['title'] = $row['title'];
            //         // $row_data['completed'] = $row['completed'];
                    
            //         // array_push($output);
            //         $output['data'][] = $row;
            //     }
            // 

            // $output['draw'] = isset($_POST['draw']) ? intval($this->input->post('draw')) : 0;
            // $output['recordsFiltered'] = intval($this->datatable_model->get_filtered_count());
            // $output['recordsTotal'] = intval($this->datatable_model->get_all_count());

            // echo json_encode($output);

            echo json_encode(array(
              'draw'              => isset($_POST['draw']) ? intval($this->input->post('draw')) : 0,
              'recordsFiltered'   => intval($this->datatable_model->get_filtered_count()),
              'recordsTotal'      => intval($this->datatable_model->get_all_count()),
              'data'              => $this->datatable_model->get_datatable(),
            ));
        }

        public function user_datatable(){
            $this->load->view('use_api/ajax_datatable');
        }
    }