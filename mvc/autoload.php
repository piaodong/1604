<?php
/**
 * Created by PhpStorm.
 * User: lzq
 * Date: 2018/11/27
 * Time: 10:40
 */

function __autoload($className){
//    echo $className;
    if($className == 'display'){
        require_once APP_PATH . '/fromwork/'.$className.'.php';
    }
    switch (substr($className,-5)){
        case 'oller':
            require_once APP_PATH .'/controller/'.$className.'.php';
            break;
        case 'Model':
            require_once APP_PATH .'/Model/'.$className.'.php';
            break;

    }

}