<?php
    define('PORT', '80');
    define('BASEPATH', '/tareas_electrica/');
    define('URL', 'http://127.0.0.1:'.PORT.BASEPATH);

    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', getcwd().DS);

    define('APP', ROOT.'app'.DS);
    define('INCLUDES', ROOT.'includes'.DS);
    define('VIEWS', ROOT.'views'.DS);

    define('ASSETS', URL.'assets/');
    define('CSS', ASSETS.'css/');
    define('JS', ASSETS.'js/');
    define('ICONOS', ASSETS.'iconos/');
    define('PLUGINS', ASSETS.'plugins/');


?>