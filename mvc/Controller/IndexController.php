<?php
/**
 * Created by PhpStorm.
 * User: lzq
 * Date: 2018/11/27
 * Time: 10:00
 */


   class IndexController extends display{
       public function aaa(){
//          echo 1231321313;
           $model = new IndexModel();
           $model -> findOne();
//           include APP_PATH "/view/display.php";
           $this ->fetch('index.php');

       }
       public function bbb(){

       }


   }