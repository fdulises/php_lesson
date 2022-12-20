<?php

//Definimos autocarga de clases
spl_autoload_register(function($classname){
    $classname = explode("\\" , $classname);
    $class = end($classname);

    $path = array_pop( $classname );
    $path = implode("/", $classname);

    //                              \models\users\ Main.php
    $filename = realpath( __DIR__ . "/{$path}/{$class}.php" );
    if( file_exists($filename) ){
        require($filename);
        return true;
    }
    return false;
});


//Definimos autocarga de clases
spl_autoload_register(function($classname){
    $classname = explode("\\" , $classname);
    if( $classname[0] == 'Debred' ){
        $filename = realpath( __DIR__ . "/modules/debred/files/{$classname[1]}.php" );
        if( file_exists($filename) ){
            require($filename);
            return true;
        }
        return false;
    }
});