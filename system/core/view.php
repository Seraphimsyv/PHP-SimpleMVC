<?php

    abstract class Abstract_Views
    {

        public $path_page = ROOT . "templates" . DIRECTORY_SEPARATOR . "pages" . DIRECTORY_SEPARATOR;
        public $path_block = ROOT . "templates" . DIRECTORY_SEPARATOR . "blocks" . DIRECTORY_SEPARATOR;

        abstract function set_template($template);
        abstract function set_content($content);
        abstract function render($data);
    }