<?php

    namespace System\Core;
    
    abstract class Abstract_Views
    {

        public $path_page = ROOT . "templates" . DIRECTORY_SEPARATOR . "pages" . DIRECTORY_SEPARATOR;
        public $path_block = ROOT . "templates" . DIRECTORY_SEPARATOR . "blocks" . DIRECTORY_SEPARATOR;

        function __construct($template)
        {
            $this->template = $this->path_page . $template;
        }

        abstract function set_content($content);

        abstract function render($data=[]);

    }