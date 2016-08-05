<?php
/**
*前台主页面，显示所有有权限功能
*@author Brian
*/

namespace Index\Controller; 

use Think\Controller;
use Org\Util\Rbac;

class IndexController extends CommonController{

	//空操作
	public function _empty(){
		$this->redirect("Index/Index/index");
	}

	public function index(){
		$images= M('Fields')->where(array('field' => 'ad'))->select();
		$this->assign('accessList', $_SESSION['_ACCESS_LIST']);
		$this->assign('showname', $_SESSION[C('ADMIN_AUTH_KEY_SHOW_NAME')]);
		$this->assign('mainImages', $images);
		$this->display();
	}
}

?>