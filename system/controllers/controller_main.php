<?php

    class Controller_Main extends Controller
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

            $this->view = new View_Main();
            $this->view->set_template('template.php');

            $this->urls = [
                [$this->url . '', 'action_index'],
                [$this->url . 'documentation/', 'action_documentation'],
                [$this->url . 'help/', 'action_help'],
                [$this->url . 'about/', 'action_about'],
                [$this->url . 'core/', 'action_core']
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
            $data = [
                "title" => "Core",
            ];

            $this->view->set_content('core.php');
            $this->view->render($data);
        }

        public function action_about()
        {
            $data = [
                "title" => "Core",
            ];

            $this->view->set_content('core.php');
            $this->view->render($data);
        }

        public function action_core()
        {
            $data = [
                "title" => "Core",
            ];

            $this->view->set_content('core.php');
            $this->view->render($data);
        }

        public function notFound()
        {
            $this->view->set_content('404.php');
            $this->view->render();
        }
    }