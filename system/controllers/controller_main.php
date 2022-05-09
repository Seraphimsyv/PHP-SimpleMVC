<?php

    class Controller_Main extends Abstract_Controller
    {
        public $model;
        public $view;

        public $urls;
        public $url = '/';

        function __construct()
        {
            include MODELS . 'model_main.php';
            include VIEWS . 'view_main.php';

            $this->model = new Model_Main();
            $this->view = new View_Main('template.php');

            $this->urls = [
                ['path', $this->url . '', 'action_index'],
                ['path', $this->url . 'documentation/', 'action_documentation'],
                ['path', $this->url . 'help/', 'action_help'],
                ['path', $this->url . 'about/', 'action_about'],
                ['path', $this->url . 'core/', 'action_core']
            ];
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