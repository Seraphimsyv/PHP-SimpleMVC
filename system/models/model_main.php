<?php

    class Model_Main extends Abstract_Model
    {

        public $table_name = "documentation";

        function __construct()
        {
            
            $this->connect();

            if($this->db->check_table($this->table_name) == false)
            {
                $this->prepare();
            }
            
        }

        protected function prepare()
        {
            $data = [
                [
                    'title' => 'Контроллеры',
                    'slug' => 'controllers',
                    'description' => 'Description about controllers'
                ],
                [
                    'title' => 'Модели',
                    'slug' => 'models',
                    'description' => 'Description about models'
                ],
                [
                    'title' => 'Визуализаторы',
                    'slug' => 'views',
                    'description' => 'Description about views'
                ],
                [
                    'title' => 'Работа с бд',
                    'slug' => 'work-with-database',
                    'description' => 'Description about database'
                ],
                [
                    'title' => 'Диспетчер запросов',
                    'slug' => 'request-dispatcher',
                    'description' => 'Description about dispatcher'
                ]
            ];

            $this->db->create_table($this->table_name);

            $this->db->insert_document($this->table_name, $data, true, true);

        }

        public function upload_data()
        {

        }

        public function load_data($target, ...$args)
        {
            return $this->$target($args);
        }

        private function load_all_doc()
        {
            return $this->db->select_document('documentation', 'all');
        }

        private function load_doc($data)
        {
            return $this->db->select_document('documentation', 'all', [["key" => 'slug', "format" => "'%s' == '".$data['document']."'"]])[0];
        }

    }