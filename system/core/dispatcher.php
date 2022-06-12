<?php

    namespace System\Core;

    namespace System\Core;

    class Dispatcher
    {
        
        static function router()
        {

            session_start();

            if(isset($_SERVER['PATH_INFO']))
            {
                $path = $_SERVER['PATH_INFO'];
            } else {
                $path = '/';
            }

            // Список стандартных паттернов урлов
            $urlspatterns = array();

            // Открытие папки с контроллерами
            $dir_handle = opendir(CONTROLLERS);

            // Итерация файлы контроллеров
            while(($file_name = readdir($dir_handle)) == true)
            {
                // Проверка на имя
                if(str_contains($file_name, 'controller'))
                {
                    // Отделяем формат файла
                    $controller_pattern = explode('.', $file_name);
                    // Отделяем имя
                    $controller_name = explode('_', $controller_pattern[0]);
                    // Подготовливаем имя для импортирования
                    $controller_name = '\System\Controllers\Controller_' . ucfirst($controller_name[1]);
                    // Импорт файла контроллера
                    include CONTROLLERS . $file_name;
                    // Создаем контроллер
                    $controller = new $controller_name();
                    // Добавление новых урлов с контроллером
                    array_push($urlspatterns, [$controller_name, $controller_name::$urls]);
                }
            }

            // Закрытие папки
            closedir($dir_handle);

            // Итерация списка паттернов
            foreach($urlspatterns as $pattern)
            {
                // Итерация списка урлов
                foreach($pattern[1] as $urls)
                {
                    // Проверка на существование паттерна
                    if($urls[0] == 'path' and $path == $urls[1])
                    {
                        $controller = $pattern[0];
                        $action = $urls[2];
                    }
                    if($urls[0] == 'regex' and preg_match("/$urls[1]/", $path, $math) == 1)
                    {
                        $controller = $pattern[0];
                        $action = $urls[2];
                    }
                }
            }

            if(!isset($action))
            {
                exit("Not found");
            } else {
                $controller = new $controller();
                $controller->$action();
            }

        }
    }