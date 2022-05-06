<?php

    class Model_Main extends Model
    {

        public $docs = [
            "controllers" => [
                "name" => "Контроллеры",
                "description" => "
                    Description controllers
                ",
            ],
            "models" => [
                "name" => "Модели",
                "description" => "
                    Description models
                ",
            ],
            "views" => [
                "name" => "Визуализаторы",
                "description" => "
                    Description views
                ",
            ],
            "dispatcher" => [
                "name" => "Диспетчер",
                "description" => "
                    Description dispatcher
                ",
            ],
            "core" => [
                "name" => "Ядро",
                "description" => "
                    Description core
                ",
            ]
        ];

        public function upload_data()
        {

        }

        public function load_data($target, ...$args)
        {
            return $this->$target($args);
        }

        private function load_all_doc()
        {
            return $this->docs;
        }

        private function load_doc($data)
        {
            return $this->docs[$data['document']];
        }

    }