<?php
/**
*员工个人信息维护
*@author Brian
*/

namespace Index\Controller;

class PerformanceController extends CommonController{

	public function index(){
		$user=M('User');
		$pmgroup= M('Pmgroup');
		$groupList= $pmgroup->select();
		$relatedGroupId= '';
		foreach ($groupList as $key => $value) {
			# code...
			if(in_array(session(C('USER_AUTH_KEY')), explode('|', $groupList[$key]['leaders']))){
			 	$relatedGroups= $relatedGroups.$groupList[$key]['id'].',';
			}
		}
		
		$condition['es_pmgroup.id']= array('in', $relatedGroups);
		$condition['status']= array('eq', 1);
		$avaliableGroup= $pmgroup->join('es_pmform ON es_pmgroup.pmformid= es_pmform.id')->where($condition)->field('es_pmgroup.id as groupId, groupname, groupdescription, employees, startday, formname, formdescription, questionarr')->select();
		foreach ($avaliableGroup as $key => $value) {
			# code...
			$avaliableGroup[$key]['fromuser']= session(C('USER_AUTH_KEY'));
			$avaliableGroup[$key]['targetuser']= $this->getAllUserInfo($avaliableGroup[$key]['employees']);
			foreach ($avaliableGroup[$key]['targetuser'] as $key2 => $value2) {
				# code...
				$avaliableGroup[$key]['targetuser'][$key2]['isexeced']= $this->isPmExeced($avaliableGroup[$key]['targetuser'][$key2]['id'], $avaliableGroup[$key]['groupid']);
			}
			$avaliableGroup[$key]['questionList']= $this->getAllQuestionInfo($avaliableGroup[$key]['questionarr']);
			$groupStartDay= $avaliableGroup[$key]['startday'];
		}		

		$isstart= date('d')>= $groupStartDay? 'start': 'unstart';
		$this->assign('isstart', $isstart);
		$this->assign('avaliableGroup', $avaliableGroup);
		$this->assign('groupStartDay', $groupStartDay);
		$this->assign('accessList', $_SESSION['_ACCESS_LIST']);
		$this->assign('showname', $_SESSION[C('ADMIN_AUTH_KEY_SHOW_NAME')]);
		$this->assign('userInfo', $userInfo);
		$this->display();
	}

	protected function isPmExeced($userId, $groupid){
		$pmcondition['fromuser']= session(C('USER_AUTH_KEY'));
		$pmcondition['targetuser']= $userId;
		$pmcondition['month']= date('m');
		$pmcondition['year']= date('Y');
		$pmcondition['groupid']= $groupid;
		$pmexecution= M('Pmresult')->where($pmcondition)->select();
		if(count($pmexecution)> 0){
			return true;
		}else{
			return false;
		}
	}

	protected function getAllUserInfo($users){
		$model= M('User');
		$userStr= str_replace('|', ',', $users);
		$condition['id']= array('in', $userStr);
		return $model->where($condition)->select();
	}

	protected function getAllQuestionInfo($questionarr){
		$model= M('Pmquestion');
		$questionTitles= str_replace('|', ',', $questionarr);
		$condition['id']= array('in', $questionTitles);
		$questionList= array();
		$questionTitlesArr= $model->where($condition)->select();
		foreach ($questionTitlesArr as $key => $value) {
			# code...
			$questionList[$questionTitlesArr[$key]['questiontext']]= $model->where(array('questionlevel' => 1, 'questionparent'=>$questionTitlesArr[$key]['id']))->select();
		}
		return $questionList;
	}

	public function performanceExecution(){
		$model= M('Pmresult');
		$groupid= I('groupId');
		$fromuserid= session(C('USER_AUTH_KEY'));
		$targetuserid= I('userid');
		$questionarr= I('questionArr');
		$questionvalue= I('questionValue');
		for($idx=0; $idx< count($questionarr); $idx++){
			$data= array('fromuser' => $fromuserid, 
					'targetuser' => $targetuserid,
					'score' => $questionvalue[$idx],
					'question' => trim($questionarr[$idx]),
					'groupid' => $groupid,
					'month' => date('m'),
					'year' => date('Y'),
					'inserttime' => time(),
					'lastmodifytime' => time()
				);
			$result = $model->add($data);
		}

		if ($result) { //保存成功
			// 回调接口
			echo 'success';
		} else {
			//失败提示
			echo $result;
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