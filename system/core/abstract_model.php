<?php

    namespace System\Core;

    require ROOT . 'lib' . DIRECTORY_SEPARATOR . 'simple-no-sql.php';

    abstract class Abstract_Model
    {
        public function connect()
        {
            $this->db = new \SimpleNoSql('database.json');
        }
    }