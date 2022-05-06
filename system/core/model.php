<?php

    abstract class Model
    {

        abstract function upload_data();

        abstract function load_data($target, ...$args);
        
    }