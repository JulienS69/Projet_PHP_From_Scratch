<?php
spl_autoload_register(
    function ($class_name) {
        if (strpos($class_name, 'Controller') !== false) {
            include "Controller/" . $class_name . ".php";
        } else {
            include "Model/" . $class_name . ".php";
        }
    }
);
include "route.php";
?>


