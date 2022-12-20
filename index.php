<?php

namespace mysoftware;

use \Debred\{
    fgestor,
    roles
};

require 'modules/autoload.php'; // Modulos de terceros
require 'autolad.php';


$users_controllers = new \controllers\Users;
$users_model = new \models\users\Main;
$file_gestor = new fgestor;


echo roles::$contador;

roles::$contador++;
roles::$contador++;
roles::$contador++;
roles::$contador++;

echo '<br>', roles::$contador;