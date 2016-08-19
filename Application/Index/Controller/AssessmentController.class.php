<?php
/**
*员工个人信息维护
*@author Brian
*/

namespace Index\Controller;

class AssessmentController extends CommonController{

	public function index(){
		$user=M('User');
		$groupUser= M('group_user');
		$assessGroup= M('Assessgroup');
		$currentDay= date("d");
		$groupStartDay=1;
		$relatedGroups= $groupUser->where(array('userid' => session(C('USER_AUTH_KEY'))))->field('groupid')->select();
		$condition= '';
		foreach ($relatedGroups as $key=>$value) {
		 	# code...
		 	if($key== count($relatedGroups)-1){
				$condition= $condition.$value['groupid'];
		 	}else{
		 		$condition= $condition.$value['groupid'].',';
		 	}
		 } 
		$map['groupid']= array('in' , $condition);
		$map['status']= array('eq' , 1);
		$validRelatedGroups= $assessGroup->where($map)->field('id, startday')->select();
		$validCondition= '';
		foreach ($validRelatedGroups as $key=>$value) {
			$groupStartDay= $validRelatedGroups[$key]['startday'];
		 	# code...
		 	if($key== count($validRelatedGroups)-1){
				$validCondition= $validCondition.$value['id'];
		 	}else{
		 		$validCondition= $validCondition.$value['id'].',';
		 	}
		} 
		$validMap['groupid']= array('in' , $validCondition);
		$validMap['es_group_user.userid']= array('neq' , session(C('USER_AUTH_KEY')));
		$userInfo= $groupUser->join('es_user ON es_group_user.userid= es_user.id')->distinct('id')->where($validMap)->field('es_user.id, es_user.username, es_user.phone, es_user.showname, es_user.position')->select();	
		$assessment= M('Assessment');
		$currentMonth= date('m');
		$userStr='';
		foreach ($userInfo as $key=>$value) {
		 	# code...
		 	if($key== count($userInfo)-1){
				$userStr= $userStr.$value['id'];
		 	}else{
		 		$userStr= $userStr.$value['id'].',';
		 	}
		}
		$userMap['targetuser']= array('in' , $userStr);
		$userMap['fromuser']= array('eq' , session(C('USER_AUTH_KEY')));
		$userMap['month']= array('eq' , $currentMonth);
		$assessmentList= $assessment->where($userMap)->field('targetuser')->select();
		$targetuserList= array();
		foreach ($assessmentList as $key => $value) {
			# code...
			$targetuserList[]= $value['targetuser'];
		}
		for($idx=0; $idx<count($userInfo); $idx++){
			if(in_array($userInfo[$idx]['id'], $targetuserList)){
				$userInfo[$idx]['isassessed']= 1;
			}
		}
		$isstart= date('d')>= $groupStartDay? 'start': 'unstart';
		$this->assign('isstart', $isstart);
		$this->assign('groupStartDay', $groupStartDay);
		$this->assign('accessList', $_SESSION['_ACCESS_LIST']);
		$this->assign('showname', $_SESSION[C('ADMIN_AUTH_KEY_SHOW_NAME')]);
		$this->assign('userInfo', $userInfo);
		$this->assign('currentDay', $currentDay);
		$this->display();
	}

	public function assessExecution(){
		$model= M('Assessment');
		$fromuserid= session(C('USER_AUTH_KEY'));
		$targetuserid= I('userid');
		$score= I('score');
		$remark= I('remark');
		$isanony= I('isannoy');

		$data= array('fromuser' => $fromuserid, 
					'targetuser' => $targetuserid,
					'score' => $score,
					'remark' => $remark,
					'isanony' => $isanony,
					'month' => date('m'),
					'year' => date('Y'),
					'inserttime' => time(),
					'lastmodifytime' => time()
					);

		if ($result = $model->add($data)) { //保存成功
			// 回调接口
			echo 1;
		} else {
			//失败提示
			echo 0;
		}
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