<?php
/**
*员工个人信息维护
*@author Brian
*/

namespace Index\Controller;

class AssessmentanalysisController extends CommonController{

	public function index(){
		$assessment= M('Assessment');
		$User= M('User');
		$userList= $User->field('id, showname')->select();
		foreach ($userList as $key => $value) {
			# code...
			$userList[$key]['avgScore']= round($assessment->where(array('targetuser' => $userList[$key]['id']))->avg('score'), 1);
			$userList[$key]['minScore']= round($assessment->where(array('targetuser' => $userList[$key]['id']))->min('score'), 1);
			$userList[$key]['maxScore']= round($assessment->where(array('targetuser' => $userList[$key]['id']))->max('score'), 1);
			
		}
		$this->assign('accessList', $_SESSION['_ACCESS_LIST']);
		$this->assign('showname', $_SESSION[C('ADMIN_AUTH_KEY_SHOW_NAME')]);
		$this->assign('userList', json_encode($userList));
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