<?php
/**
 * Created by PhpStorm.
 * User: lzq
 * Date: 2018/11/27
 * Time: 10:20
 */
//echo "111";
define('APP_PATH',dirname(__FILE__));

require_once APP_PATH .'\autoload.php';
$pm = explode('/',$_GET['c']);
$aa = (string)"new ".$pm[0]."Controller()";
//echo $aa;die;
//var_dump($aa);die;
$C = eval("return $aa;");
//var_dump($C) ;die;
$C -> $pm[1]();


//$pm = explode('/',$_GET['c']);
//
//$aa = (string) "new ".$pm[0]."Controller()";
////echo $aa;die;
//$c = eval("return $aa;");
//echo $c;die;
//
//$c -> $pm[1]();

