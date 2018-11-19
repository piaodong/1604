<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    // public function index(){
    //     $this->display();
    // }
    // public function insert(){
    // 	$data = I('post.');
    // 	$data['img']=$this->upload();
    // 	$user=M("a");
    // 	$id = $user->add($data);
    // 	if($id>0){
    // 		$this->success("添加成功",U('Index/show'));
    // 	}else{
    // 		$this->error("添加失败");
    // 	}
    // }
    public function update(){
        $id = I("get.id");
       $arr = M("news")->where("id = $id")->find();
    
       $this->assign('arr',$arr);
       $this->display();
    }
    public function update_do(){
        // $img = $_FILES['img'];
     $upload = new \Think\Upload();// 实例化上传类    
    // $upload->maxSize   =     3145728 ;// 设置附件上传大小    
    // $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
    // $upload->savePath  =      './Uploads/'; // 设置附件上传目录    // 上传单个文件     
    // $upload->rootPath  =      './Public/';
    // $info = $upload->uploadOne($_FILES['img']);
    // if(!$info)
    // {
    //   $this->error($upload->getError());
    // }else{
       $data = I('post.');
       // $data['img'] = $info['savepath'].$info['savename'];
       $info = M('news')->save($data);
       if($info){
        $this->success("修改成功",U('Index/index'));
       }else{
        $thiserror("修改失败");
       }
    }
    // }
     public function index(){
    	$user = M("news");
    	$count = $user->count();
    	$page = new \Think\Page($count,5);
		// $res = M("news")->where("name like '%$name%'")->order("id name")->limit($page->firstRow,$limit)->select();
    	$show = $page->show();
    	$list = $user->limit($page->firstRow.','.$page->listRows)->select();
    	$this->assign('list',$list);
    	$this->assign('page',$show);
		// $this->assign("name",$name);
    	$this->display();
    }
       public function del(){
        $id=I("get.id");
        $user = M("news");
        $info = $user->where("id = $id")->delete();
        if($info){
            $this->success("删除成功",U("Index/index"));
        }else{
            $this->error("删除失败");
        }
    }
}