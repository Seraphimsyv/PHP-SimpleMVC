<?php

    class View_Main extends Abstract_Views
    {
        public $template;
        public $content;

        public function set_template($template)
        {
            $this->template = $this->path_page . $template;
        }

        public function set_content($content)
        {
            $this->content = $this->path_page . $content;
        }

        public function render($data=null)
        {
            include $this->template;
        }

    }