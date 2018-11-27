<?php
/**
 * Created by PhpStorm.
 * User: lzq
 * Date: 2018/11/27
 * Time: 16:03
 */

class display{
    public function fetch($file){
        include_once APP_PATH."/view/".$file;
//        var_dump($file);
    }
}