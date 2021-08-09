<?php
    class Api_model_controller extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('url', 'form'));
            $this->load->model('use_api/api_model');
        }

        public function index(){
            self::get();
        }

        public function get(){
            echo json_encode($this->api_model->get_userdata());
        }

        public function create(){
            echo json_encode($this->api_model->create_user($this->input->post()));
        }

        public function edit(){
            echo json_encode($this->api_model->edit_user($this->input->post()));
        }

        public function delete(){
            echo json_encode($this->api_model->delete_user($this->input->post('id')));
        }

        // private function insert_ajax_datatable_table(){
        //     $data = array (
        //         0 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 1,
        //           'title' => 'delectus aut autem',
        //           'completed' => false,
        //         ),
        //         1 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 2,
        //           'title' => 'quis ut nam facilis et officia qui',
        //           'completed' => false,
        //         ),
        //         2 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 3,
        //           'title' => 'fugiat veniam minus',
        //           'completed' => false,
        //         ),
        //         3 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 4,
        //           'title' => 'et porro tempora',
        //           'completed' => true,
        //         ),
        //         4 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 5,
        //           'title' => 'laboriosam mollitia et enim quasi adipisci quia provident illum',
        //           'completed' => false,
        //         ),
        //         5 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 6,
        //           'title' => 'qui ullam ratione quibusdam voluptatem quia omnis',
        //           'completed' => false,
        //         ),
        //         6 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 7,
        //           'title' => 'illo expedita consequatur quia in',
        //           'completed' => false,
        //         ),
        //         7 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 8,
        //           'title' => 'quo adipisci enim quam ut ab',
        //           'completed' => true,
        //         ),
        //         8 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 9,
        //           'title' => 'molestiae perspiciatis ipsa',
        //           'completed' => false,
        //         ),
        //         9 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 10,
        //           'title' => 'illo est ratione doloremque quia maiores aut',
        //           'completed' => true,
        //         ),
        //         10 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 11,
        //           'title' => 'vero rerum temporibus dolor',
        //           'completed' => true,
        //         ),
        //         11 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 12,
        //           'title' => 'ipsa repellendus fugit nisi',
        //           'completed' => true,
        //         ),
        //         12 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 13,
        //           'title' => 'et doloremque nulla',
        //           'completed' => false,
        //         ),
        //         13 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 14,
        //           'title' => 'repellendus sunt dolores architecto voluptatum',
        //           'completed' => true,
        //         ),
        //         14 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 15,
        //           'title' => 'ab voluptatum amet voluptas',
        //           'completed' => true,
        //         ),
        //         15 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 16,
        //           'title' => 'accusamus eos facilis sint et aut voluptatem',
        //           'completed' => true,
        //         ),
        //         16 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 17,
        //           'title' => 'quo laboriosam deleniti aut qui',
        //           'completed' => true,
        //         ),
        //         17 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 18,
        //           'title' => 'dolorum est consequatur ea mollitia in culpa',
        //           'completed' => false,
        //         ),
        //         18 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 19,
        //           'title' => 'molestiae ipsa aut voluptatibus pariatur dolor nihil',
        //           'completed' => true,
        //         ),
        //         19 => 
        //         array (
        //           'userId' => 1,
        //           'id' => 20,
        //           'title' => 'ullam nobis libero sapiente ad optio sint',
        //           'completed' => true,
        //         ),
        //         20 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 21,
        //           'title' => 'suscipit repellat esse quibusdam voluptatem incidunt',
        //           'completed' => false,
        //         ),
        //         21 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 22,
        //           'title' => 'distinctio vitae autem nihil ut molestias quo',
        //           'completed' => true,
        //         ),
        //         22 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 23,
        //           'title' => 'et itaque necessitatibus maxime molestiae qui quas velit',
        //           'completed' => false,
        //         ),
        //         23 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 24,
        //           'title' => 'adipisci non ad dicta qui amet quaerat doloribus ea',
        //           'completed' => false,
        //         ),
        //         24 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 25,
        //           'title' => 'voluptas quo tenetur perspiciatis explicabo natus',
        //           'completed' => true,
        //         ),
        //         25 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 26,
        //           'title' => 'aliquam aut quasi',
        //           'completed' => true,
        //         ),
        //         26 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 27,
        //           'title' => 'veritatis pariatur delectus',
        //           'completed' => true,
        //         ),
        //         27 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 28,
        //           'title' => 'nesciunt totam sit blanditiis sit',
        //           'completed' => false,
        //         ),
        //         28 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 29,
        //           'title' => 'laborum aut in quam',
        //           'completed' => false,
        //         ),
        //         29 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 30,
        //           'title' => 'nemo perspiciatis repellat ut dolor libero commodi blanditiis omnis',
        //           'completed' => true,
        //         ),
        //         30 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 31,
        //           'title' => 'repudiandae totam in est sint facere fuga',
        //           'completed' => false,
        //         ),
        //         31 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 32,
        //           'title' => 'earum doloribus ea doloremque quis',
        //           'completed' => false,
        //         ),
        //         32 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 33,
        //           'title' => 'sint sit aut vero',
        //           'completed' => false,
        //         ),
        //         33 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 34,
        //           'title' => 'porro aut necessitatibus eaque distinctio',
        //           'completed' => false,
        //         ),
        //         34 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 35,
        //           'title' => 'repellendus veritatis molestias dicta incidunt',
        //           'completed' => true,
        //         ),
        //         35 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 36,
        //           'title' => 'excepturi deleniti adipisci voluptatem et neque optio illum ad',
        //           'completed' => true,
        //         ),
        //         36 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 37,
        //           'title' => 'sunt cum tempora',
        //           'completed' => false,
        //         ),
        //         37 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 38,
        //           'title' => 'totam quia non',
        //           'completed' => false,
        //         ),
        //         38 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 39,
        //           'title' => 'doloremque quibusdam asperiores libero corrupti illum qui omnis',
        //           'completed' => false,
        //         ),
        //         39 => 
        //         array (
        //           'userId' => 2,
        //           'id' => 40,
        //           'title' => 'totam atque quo nesciunt',
        //           'completed' => true,
        //         ),
        //         40 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 41,
        //           'title' => 'aliquid amet impedit consequatur aspernatur placeat eaque fugiat suscipit',
        //           'completed' => false,
        //         ),
        //         41 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 42,
        //           'title' => 'rerum perferendis error quia ut eveniet',
        //           'completed' => false,
        //         ),
        //         42 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 43,
        //           'title' => 'tempore ut sint quis recusandae',
        //           'completed' => true,
        //         ),
        //         43 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 44,
        //           'title' => 'cum debitis quis accusamus doloremque ipsa natus sapiente omnis',
        //           'completed' => true,
        //         ),
        //         44 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 45,
        //           'title' => 'velit soluta adipisci molestias reiciendis harum',
        //           'completed' => false,
        //         ),
        //         45 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 46,
        //           'title' => 'vel voluptatem repellat nihil placeat corporis',
        //           'completed' => false,
        //         ),
        //         46 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 47,
        //           'title' => 'nam qui rerum fugiat accusamus',
        //           'completed' => false,
        //         ),
        //         47 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 48,
        //           'title' => 'sit reprehenderit omnis quia',
        //           'completed' => false,
        //         ),
        //         48 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 49,
        //           'title' => 'ut necessitatibus aut maiores debitis officia blanditiis velit et',
        //           'completed' => false,
        //         ),
        //         49 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 50,
        //           'title' => 'cupiditate necessitatibus ullam aut quis dolor voluptate',
        //           'completed' => true,
        //         ),
        //         50 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 51,
        //           'title' => 'distinctio exercitationem ab doloribus',
        //           'completed' => false,
        //         ),
        //         51 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 52,
        //           'title' => 'nesciunt dolorum quis recusandae ad pariatur ratione',
        //           'completed' => false,
        //         ),
        //         52 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 53,
        //           'title' => 'qui labore est occaecati recusandae aliquid quam',
        //           'completed' => false,
        //         ),
        //         53 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 54,
        //           'title' => 'quis et est ut voluptate quam dolor',
        //           'completed' => true,
        //         ),
        //         54 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 55,
        //           'title' => 'voluptatum omnis minima qui occaecati provident nulla voluptatem ratione',
        //           'completed' => true,
        //         ),
        //         55 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 56,
        //           'title' => 'deleniti ea temporibus enim',
        //           'completed' => true,
        //         ),
        //         56 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 57,
        //           'title' => 'pariatur et magnam ea doloribus similique voluptatem rerum quia',
        //           'completed' => false,
        //         ),
        //         57 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 58,
        //           'title' => 'est dicta totam qui explicabo doloribus qui dignissimos',
        //           'completed' => false,
        //         ),
        //         58 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 59,
        //           'title' => 'perspiciatis velit id laborum placeat iusto et aliquam odio',
        //           'completed' => false,
        //         ),
        //         59 => 
        //         array (
        //           'userId' => 3,
        //           'id' => 60,
        //           'title' => 'et sequi qui architecto ut adipisci',
        //           'completed' => true,
        //         ),
        //         60 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 61,
        //           'title' => 'odit optio omnis qui sunt',
        //           'completed' => true,
        //         ),
        //         61 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 62,
        //           'title' => 'et placeat et tempore aspernatur sint numquam',
        //           'completed' => false,
        //         ),
        //         62 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 63,
        //           'title' => 'doloremque aut dolores quidem fuga qui nulla',
        //           'completed' => true,
        //         ),
        //         63 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 64,
        //           'title' => 'voluptas consequatur qui ut quia magnam nemo esse',
        //           'completed' => false,
        //         ),
        //         64 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 65,
        //           'title' => 'fugiat pariatur ratione ut asperiores necessitatibus magni',
        //           'completed' => false,
        //         ),
        //         65 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 66,
        //           'title' => 'rerum eum molestias autem voluptatum sit optio',
        //           'completed' => false,
        //         ),
        //         66 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 67,
        //           'title' => 'quia voluptatibus voluptatem quos similique maiores repellat',
        //           'completed' => false,
        //         ),
        //         67 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 68,
        //           'title' => 'aut id perspiciatis voluptatem iusto',
        //           'completed' => false,
        //         ),
        //         68 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 69,
        //           'title' => 'doloribus sint dolorum ab adipisci itaque dignissimos aliquam suscipit',
        //           'completed' => false,
        //         ),
        //         69 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 70,
        //           'title' => 'ut sequi accusantium et mollitia delectus sunt',
        //           'completed' => false,
        //         ),
        //         70 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 71,
        //           'title' => 'aut velit saepe ullam',
        //           'completed' => false,
        //         ),
        //         71 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 72,
        //           'title' => 'praesentium facilis facere quis harum voluptatibus voluptatem eum',
        //           'completed' => false,
        //         ),
        //         72 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 73,
        //           'title' => 'sint amet quia totam corporis qui exercitationem commodi',
        //           'completed' => true,
        //         ),
        //         73 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 74,
        //           'title' => 'expedita tempore nobis eveniet laborum maiores',
        //           'completed' => false,
        //         ),
        //         74 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 75,
        //           'title' => 'occaecati adipisci est possimus totam',
        //           'completed' => false,
        //         ),
        //         75 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 76,
        //           'title' => 'sequi dolorem sed',
        //           'completed' => true,
        //         ),
        //         76 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 77,
        //           'title' => 'maiores aut nesciunt delectus exercitationem vel assumenda eligendi at',
        //           'completed' => false,
        //         ),
        //         77 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 78,
        //           'title' => 'reiciendis est magnam amet nemo iste recusandae impedit quaerat',
        //           'completed' => false,
        //         ),
        //         78 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 79,
        //           'title' => 'eum ipsa maxime ut',
        //           'completed' => true,
        //         ),
        //         79 => 
        //         array (
        //           'userId' => 4,
        //           'id' => 80,
        //           'title' => 'tempore molestias dolores rerum sequi voluptates ipsum consequatur',
        //           'completed' => true,
        //         ),
        //         80 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 81,
        //           'title' => 'suscipit qui totam',
        //           'completed' => true,
        //         ),
        //         81 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 82,
        //           'title' => 'voluptates eum voluptas et dicta',
        //           'completed' => false,
        //         ),
        //         82 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 83,
        //           'title' => 'quidem at rerum quis ex aut sit quam',
        //           'completed' => true,
        //         ),
        //         83 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 84,
        //           'title' => 'sunt veritatis ut voluptate',
        //           'completed' => false,
        //         ),
        //         84 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 85,
        //           'title' => 'et quia ad iste a',
        //           'completed' => true,
        //         ),
        //         85 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 86,
        //           'title' => 'incidunt ut saepe autem',
        //           'completed' => true,
        //         ),
        //         86 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 87,
        //           'title' => 'laudantium quae eligendi consequatur quia et vero autem',
        //           'completed' => true,
        //         ),
        //         87 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 88,
        //           'title' => 'vitae aut excepturi laboriosam sint aliquam et et accusantium',
        //           'completed' => false,
        //         ),
        //         88 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 89,
        //           'title' => 'sequi ut omnis et',
        //           'completed' => true,
        //         ),
        //         89 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 90,
        //           'title' => 'molestiae nisi accusantium tenetur dolorem et',
        //           'completed' => true,
        //         ),
        //         90 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 91,
        //           'title' => 'nulla quis consequatur saepe qui id expedita',
        //           'completed' => true,
        //         ),
        //         91 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 92,
        //           'title' => 'in omnis laboriosam',
        //           'completed' => true,
        //         ),
        //         92 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 93,
        //           'title' => 'odio iure consequatur molestiae quibusdam necessitatibus quia sint',
        //           'completed' => true,
        //         ),
        //         93 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 94,
        //           'title' => 'facilis modi saepe mollitia',
        //           'completed' => false,
        //         ),
        //         94 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 95,
        //           'title' => 'vel nihil et molestiae iusto assumenda nemo quo ut',
        //           'completed' => true,
        //         ),
        //         95 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 96,
        //           'title' => 'nobis suscipit ducimus enim asperiores voluptas',
        //           'completed' => false,
        //         ),
        //         96 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 97,
        //           'title' => 'dolorum laboriosam eos qui iure aliquam',
        //           'completed' => false,
        //         ),
        //         97 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 98,
        //           'title' => 'debitis accusantium ut quo facilis nihil quis sapiente necessitatibus',
        //           'completed' => true,
        //         ),
        //         98 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 99,
        //           'title' => 'neque voluptates ratione',
        //           'completed' => false,
        //         ),
        //         99 => 
        //         array (
        //           'userId' => 5,
        //           'id' => 100,
        //           'title' => 'excepturi a et neque qui expedita vel voluptate',
        //           'completed' => false,
        //         ),
        //         100 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 101,
        //           'title' => 'explicabo enim cumque porro aperiam occaecati minima',
        //           'completed' => false,
        //         ),
        //         101 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 102,
        //           'title' => 'sed ab consequatur',
        //           'completed' => false,
        //         ),
        //         102 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 103,
        //           'title' => 'non sunt delectus illo nulla tenetur enim omnis',
        //           'completed' => false,
        //         ),
        //         103 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 104,
        //           'title' => 'excepturi non laudantium quo',
        //           'completed' => false,
        //         ),
        //         104 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 105,
        //           'title' => 'totam quia dolorem et illum repellat voluptas optio',
        //           'completed' => true,
        //         ),
        //         105 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 106,
        //           'title' => 'ad illo quis voluptatem temporibus',
        //           'completed' => true,
        //         ),
        //         106 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 107,
        //           'title' => 'praesentium facilis omnis laudantium fugit ad iusto nihil nesciunt',
        //           'completed' => false,
        //         ),
        //         107 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 108,
        //           'title' => 'a eos eaque nihil et exercitationem incidunt delectus',
        //           'completed' => true,
        //         ),
        //         108 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 109,
        //           'title' => 'autem temporibus harum quisquam in culpa',
        //           'completed' => true,
        //         ),
        //         109 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 110,
        //           'title' => 'aut aut ea corporis',
        //           'completed' => true,
        //         ),
        //         110 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 111,
        //           'title' => 'magni accusantium labore et id quis provident',
        //           'completed' => false,
        //         ),
        //         111 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 112,
        //           'title' => 'consectetur impedit quisquam qui deserunt non rerum consequuntur eius',
        //           'completed' => false,
        //         ),
        //         112 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 113,
        //           'title' => 'quia atque aliquam sunt impedit voluptatum rerum assumenda nisi',
        //           'completed' => false,
        //         ),
        //         113 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 114,
        //           'title' => 'cupiditate quos possimus corporis quisquam exercitationem beatae',
        //           'completed' => false,
        //         ),
        //         114 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 115,
        //           'title' => 'sed et ea eum',
        //           'completed' => false,
        //         ),
        //         115 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 116,
        //           'title' => 'ipsa dolores vel facilis ut',
        //           'completed' => true,
        //         ),
        //         116 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 117,
        //           'title' => 'sequi quae est et qui qui eveniet asperiores',
        //           'completed' => false,
        //         ),
        //         117 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 118,
        //           'title' => 'quia modi consequatur vero fugiat',
        //           'completed' => false,
        //         ),
        //         118 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 119,
        //           'title' => 'corporis ducimus ea perspiciatis iste',
        //           'completed' => false,
        //         ),
        //         119 => 
        //         array (
        //           'userId' => 6,
        //           'id' => 120,
        //           'title' => 'dolorem laboriosam vel voluptas et aliquam quasi',
        //           'completed' => false,
        //         ),
        //         120 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 121,
        //           'title' => 'inventore aut nihil minima laudantium hic qui omnis',
        //           'completed' => true,
        //         ),
        //         121 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 122,
        //           'title' => 'provident aut nobis culpa',
        //           'completed' => true,
        //         ),
        //         122 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 123,
        //           'title' => 'esse et quis iste est earum aut impedit',
        //           'completed' => false,
        //         ),
        //         123 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 124,
        //           'title' => 'qui consectetur id',
        //           'completed' => false,
        //         ),
        //         124 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 125,
        //           'title' => 'aut quasi autem iste tempore illum possimus',
        //           'completed' => false,
        //         ),
        //         125 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 126,
        //           'title' => 'ut asperiores perspiciatis veniam ipsum rerum saepe',
        //           'completed' => true,
        //         ),
        //         126 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 127,
        //           'title' => 'voluptatem libero consectetur rerum ut',
        //           'completed' => true,
        //         ),
        //         127 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 128,
        //           'title' => 'eius omnis est qui voluptatem autem',
        //           'completed' => false,
        //         ),
        //         128 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 129,
        //           'title' => 'rerum culpa quis harum',
        //           'completed' => false,
        //         ),
        //         129 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 130,
        //           'title' => 'nulla aliquid eveniet harum laborum libero alias ut unde',
        //           'completed' => true,
        //         ),
        //         130 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 131,
        //           'title' => 'qui ea incidunt quis',
        //           'completed' => false,
        //         ),
        //         131 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 132,
        //           'title' => 'qui molestiae voluptatibus velit iure harum quisquam',
        //           'completed' => true,
        //         ),
        //         132 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 133,
        //           'title' => 'et labore eos enim rerum consequatur sunt',
        //           'completed' => true,
        //         ),
        //         133 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 134,
        //           'title' => 'molestiae doloribus et laborum quod ea',
        //           'completed' => false,
        //         ),
        //         134 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 135,
        //           'title' => 'facere ipsa nam eum voluptates reiciendis vero qui',
        //           'completed' => false,
        //         ),
        //         135 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 136,
        //           'title' => 'asperiores illo tempora fuga sed ut quasi adipisci',
        //           'completed' => false,
        //         ),
        //         136 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 137,
        //           'title' => 'qui sit non',
        //           'completed' => false,
        //         ),
        //         137 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 138,
        //           'title' => 'placeat minima consequatur rem qui ut',
        //           'completed' => true,
        //         ),
        //         138 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 139,
        //           'title' => 'consequatur doloribus id possimus voluptas a voluptatem',
        //           'completed' => false,
        //         ),
        //         139 => 
        //         array (
        //           'userId' => 7,
        //           'id' => 140,
        //           'title' => 'aut consectetur in blanditiis deserunt quia sed laboriosam',
        //           'completed' => true,
        //         ),
        //         140 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 141,
        //           'title' => 'explicabo consectetur debitis voluptates quas quae culpa rerum non',
        //           'completed' => true,
        //         ),
        //         141 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 142,
        //           'title' => 'maiores accusantium architecto necessitatibus reiciendis ea aut',
        //           'completed' => true,
        //         ),
        //         142 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 143,
        //           'title' => 'eum non recusandae cupiditate animi',
        //           'completed' => false,
        //         ),
        //         143 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 144,
        //           'title' => 'ut eum exercitationem sint',
        //           'completed' => false,
        //         ),
        //         144 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 145,
        //           'title' => 'beatae qui ullam incidunt voluptatem non nisi aliquam',
        //           'completed' => false,
        //         ),
        //         145 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 146,
        //           'title' => 'molestiae suscipit ratione nihil odio libero impedit vero totam',
        //           'completed' => true,
        //         ),
        //         146 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 147,
        //           'title' => 'eum itaque quod reprehenderit et facilis dolor autem ut',
        //           'completed' => true,
        //         ),
        //         147 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 148,
        //           'title' => 'esse quas et quo quasi exercitationem',
        //           'completed' => false,
        //         ),
        //         148 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 149,
        //           'title' => 'animi voluptas quod perferendis est',
        //           'completed' => false,
        //         ),
        //         149 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 150,
        //           'title' => 'eos amet tempore laudantium fugit a',
        //           'completed' => false,
        //         ),
        //         150 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 151,
        //           'title' => 'accusamus adipisci dicta qui quo ea explicabo sed vero',
        //           'completed' => true,
        //         ),
        //         151 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 152,
        //           'title' => 'odit eligendi recusandae doloremque cumque non',
        //           'completed' => false,
        //         ),
        //         152 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 153,
        //           'title' => 'ea aperiam consequatur qui repellat eos',
        //           'completed' => false,
        //         ),
        //         153 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 154,
        //           'title' => 'rerum non ex sapiente',
        //           'completed' => true,
        //         ),
        //         154 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 155,
        //           'title' => 'voluptatem nobis consequatur et assumenda magnam',
        //           'completed' => true,
        //         ),
        //         155 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 156,
        //           'title' => 'nam quia quia nulla repellat assumenda quibusdam sit nobis',
        //           'completed' => true,
        //         ),
        //         156 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 157,
        //           'title' => 'dolorem veniam quisquam deserunt repellendus',
        //           'completed' => true,
        //         ),
        //         157 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 158,
        //           'title' => 'debitis vitae delectus et harum accusamus aut deleniti a',
        //           'completed' => true,
        //         ),
        //         158 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 159,
        //           'title' => 'debitis adipisci quibusdam aliquam sed dolore ea praesentium nobis',
        //           'completed' => true,
        //         ),
        //         159 => 
        //         array (
        //           'userId' => 8,
        //           'id' => 160,
        //           'title' => 'et praesentium aliquam est',
        //           'completed' => false,
        //         ),
        //         160 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 161,
        //           'title' => 'ex hic consequuntur earum omnis alias ut occaecati culpa',
        //           'completed' => true,
        //         ),
        //         161 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 162,
        //           'title' => 'omnis laboriosam molestias animi sunt dolore',
        //           'completed' => true,
        //         ),
        //         162 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 163,
        //           'title' => 'natus corrupti maxime laudantium et voluptatem laboriosam odit',
        //           'completed' => false,
        //         ),
        //         163 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 164,
        //           'title' => 'reprehenderit quos aut aut consequatur est sed',
        //           'completed' => false,
        //         ),
        //         164 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 165,
        //           'title' => 'fugiat perferendis sed aut quidem',
        //           'completed' => false,
        //         ),
        //         165 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 166,
        //           'title' => 'quos quo possimus suscipit minima ut',
        //           'completed' => false,
        //         ),
        //         166 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 167,
        //           'title' => 'et quis minus quo a asperiores molestiae',
        //           'completed' => false,
        //         ),
        //         167 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 168,
        //           'title' => 'recusandae quia qui sunt libero',
        //           'completed' => false,
        //         ),
        //         168 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 169,
        //           'title' => 'ea odio perferendis officiis',
        //           'completed' => true,
        //         ),
        //         169 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 170,
        //           'title' => 'quisquam aliquam quia doloribus aut',
        //           'completed' => false,
        //         ),
        //         170 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 171,
        //           'title' => 'fugiat aut voluptatibus corrupti deleniti velit iste odio',
        //           'completed' => true,
        //         ),
        //         171 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 172,
        //           'title' => 'et provident amet rerum consectetur et voluptatum',
        //           'completed' => false,
        //         ),
        //         172 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 173,
        //           'title' => 'harum ad aperiam quis',
        //           'completed' => false,
        //         ),
        //         173 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 174,
        //           'title' => 'similique aut quo',
        //           'completed' => false,
        //         ),
        //         174 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 175,
        //           'title' => 'laudantium eius officia perferendis provident perspiciatis asperiores',
        //           'completed' => true,
        //         ),
        //         175 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 176,
        //           'title' => 'magni soluta corrupti ut maiores rem quidem',
        //           'completed' => false,
        //         ),
        //         176 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 177,
        //           'title' => 'et placeat temporibus voluptas est tempora quos quibusdam',
        //           'completed' => false,
        //         ),
        //         177 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 178,
        //           'title' => 'nesciunt itaque commodi tempore',
        //           'completed' => true,
        //         ),
        //         178 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 179,
        //           'title' => 'omnis consequuntur cupiditate impedit itaque ipsam quo',
        //           'completed' => true,
        //         ),
        //         179 => 
        //         array (
        //           'userId' => 9,
        //           'id' => 180,
        //           'title' => 'debitis nisi et dolorem repellat et',
        //           'completed' => true,
        //         ),
        //         180 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 181,
        //           'title' => 'ut cupiditate sequi aliquam fuga maiores',
        //           'completed' => false,
        //         ),
        //         181 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 182,
        //           'title' => 'inventore saepe cumque et aut illum enim',
        //           'completed' => true,
        //         ),
        //         182 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 183,
        //           'title' => 'omnis nulla eum aliquam distinctio',
        //           'completed' => true,
        //         ),
        //         183 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 184,
        //           'title' => 'molestias modi perferendis perspiciatis',
        //           'completed' => false,
        //         ),
        //         184 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 185,
        //           'title' => 'voluptates dignissimos sed doloribus animi quaerat aut',
        //           'completed' => false,
        //         ),
        //         185 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 186,
        //           'title' => 'explicabo odio est et',
        //           'completed' => false,
        //         ),
        //         186 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 187,
        //           'title' => 'consequuntur animi possimus',
        //           'completed' => false,
        //         ),
        //         187 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 188,
        //           'title' => 'vel non beatae est',
        //           'completed' => true,
        //         ),
        //         188 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 189,
        //           'title' => 'culpa eius et voluptatem et',
        //           'completed' => true,
        //         ),
        //         189 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 190,
        //           'title' => 'accusamus sint iusto et voluptatem exercitationem',
        //           'completed' => true,
        //         ),
        //         190 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 191,
        //           'title' => 'temporibus atque distinctio omnis eius impedit tempore molestias pariatur',
        //           'completed' => true,
        //         ),
        //         191 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 192,
        //           'title' => 'ut quas possimus exercitationem sint voluptates',
        //           'completed' => false,
        //         ),
        //         192 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 193,
        //           'title' => 'rerum debitis voluptatem qui eveniet tempora distinctio a',
        //           'completed' => true,
        //         ),
        //         193 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 194,
        //           'title' => 'sed ut vero sit molestiae',
        //           'completed' => false,
        //         ),
        //         194 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 195,
        //           'title' => 'rerum ex veniam mollitia voluptatibus pariatur',
        //           'completed' => true,
        //         ),
        //         195 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 196,
        //           'title' => 'consequuntur aut ut fugit similique',
        //           'completed' => true,
        //         ),
        //         196 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 197,
        //           'title' => 'dignissimos quo nobis earum saepe',
        //           'completed' => true,
        //         ),
        //         197 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 198,
        //           'title' => 'quis eius est sint explicabo',
        //           'completed' => true,
        //         ),
        //         198 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 199,
        //           'title' => 'numquam repellendus a magnam',
        //           'completed' => true,
        //         ),
        //         199 => 
        //         array (
        //           'userId' => 10,
        //           'id' => 200,
        //           'title' => 'ipsam aperiam voluptates qui',
        //           'completed' => false,
        //         ),
        //       );

        //     $this->api_model->insert_ajax_datatable_table($data);
        // }

        // public function jsonplaceholder() { 
        //     // for ($i=0; $i < 500; $i++) { 
        //     //     self::insert_ajax_datatable_table();
        //     // }

        //     $db_data = $this->api_model->get_ajax_datatable_table();
        //     $data = array();

        //     foreach ($db_data['result'] as $row) {
        //         $sub_array['mainId'] = $row->mainId;
        //         $sub_array['userId'] = $row->userId;
        //         $sub_array['id'] = $row->id;
        //         $sub_array['title'] = $row->title;
        //         $sub_array['completed'] = $row->completed;

        //         $data[] = $sub_array;
        //     }

        //     $output = array(
        //         'draw' => intval($this->input->post('draw')),
        //         'recordsTotal' => $this->api_model->get_ajax_datatable_all_data(),
        //         'recordsFiltered' => $db_data['num_rows'],
        //         "data" => $data,
        //     );

        //     echo json_encode($output);
        //     // echo json_encode($this->api_model->get_ajax_datatable_table());

        //     // echo json_encode($this->input->post());
        // }
    }