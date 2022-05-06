<?php
    /**
     * Load core files
     */
    // require_once CORE . 'db.php';
    require_once CORE . 'model.php';
    require_once CORE . 'controller.php';
    require_once CORE . 'view.php';
    /**
     * Load routing
     */
    require_once CORE . 'dispatcher.php';

    Dispatcher::router();