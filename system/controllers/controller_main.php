<?php

    namespace System\Controllers;

    class Controller_Main extends \System\Core\Abstract_Controller
    {

        public $model;
        public $view;

        static public $urls = [
            
            ['path', '/', 'action_index'],
            ['path', '/documentation/', 'action_documentation'],
            ['path', '/help/', 'action_help'],
            ['path', '/about/', 'action_about'],
            ['path', '/core/', 'action_core']
        ];

        function __construct()
        {

            $this->model = new \System\Models\Model_Main();
            $this->view = new \System\Views\View_Main('template.php');

        }

        public function action_index()
        {
            $data = [
                "title" => "SimpleMVC",
            ];

            $this->view->set_content('index.php');
            $this->view->render($data);
        }

        public function action_documentation()
        {
            $data = [
                "title" => "Документация",
                "docs" => $this->model->load_data("load_all_doc")
            ];

            if(!empty($_GET) and isset($_GET['document']))
            {
                unset($data['docs']);
                $data['doc'] = $this->model->load_data("load_doc", document: $_GET['document']);
            }

            $this->view->set_content('documentation.php');
            $this->view->render($data);
        }

        public function action_help()
        {
            $this->notFound();
        }

        public function action_about()
        {
            $this->notFound();
        }

        public function action_core()
        {
            $this->notFound();
        }

        public function notFound()
        {
            $this->view->set_content('404.php');
            $this->view->render();
        }
    }