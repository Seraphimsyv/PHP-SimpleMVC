<?php

    require ROOT . 'lib' . DIRECTORY_SEPARATOR . 'simple-no-sql.php';

    abstract class Abstract_Model
    {
        public function connect()
        {
            $this->db = new SimpleNoSql('database.json');
        }

        abstract function upload_data();

        abstract function load_data($target, ...$args);
        
    }