<?php
/**
*员工个人信息维护
*@author Brian
*/

namespace Index\Controller;

class EmployeeController extends CommonController{

	public function index(){
		$user=M('User');
		$fields= 'es_user.username, es_user.phone, es_user.password, es_user.showname, es_user.enrolldate, es_dept.name as deptname, es_user.position, es_user.directleader';
		$userInfo= $user->join('es_dept ON es_user.deptid= es_dept.id')->where(array('es_user.id' => session(C('USER_AUTH_KEY'))))->field($fields)->select();
		$directleader= $user->find($userInfo[0]['directleader']);
		$this->assign('accessList', $_SESSION['_ACCESS_LIST']);
		$this->assign('directName', $directleader['showname']);
		$this->assign('showname', $_SESSION[C('ADMIN_AUTH_KEY_SHOW_NAME')]);
		$this->assign('userInfo', $userInfo);
		$this->display();
	}

	public function update(){
		$user=M('User');
		$userId= $_SESSION[C('USER_AUTH_KEY')];
		$orginPwd= $user->where('id='.$userId)->field('password')->find();

		$data= array();
		$data['id']= $userId;
		$showName= I('showname');
		$data['showname']= $showName;
		$userPwd= I('password');
		if($userPwd != $orginPwd['password']){
			$data['password']= md5($userPwd);
		}
		$userPhone= I('phone');
		$data['phone']= $userPhone;
		$data['lastmodifytime']= time();

		// 更新数据
		if(false !== $user->save($data)) {
			// 回调接口
			if (method_exists($this, '_tigger_update')) {
				$this->_tigger_update('更新成功', 'index', 1);
			}
			//成功提示
		} else {
			//错误提示
			if (method_exists($this, '_tigger_update')) {
				$this->_tigger_update('更新失败', 'index', 1);
			}
		}

	}
}

?>