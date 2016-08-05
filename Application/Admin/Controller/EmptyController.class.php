<?php
/**
 * 空模型类
 * @author  <[c@easycms.cc]>
 */
namespace Admin\Controller;

use Think\Controller;

class EmptyController extends Controller {
	//空模型
	public function index(){		
		$this->redirect('Admin/Index/index');
    }
	//空操作
	public function _empty(){
		$this->redirect("Admin/Index/index");
	}
}
