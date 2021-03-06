<?php
/**
*员工个人信息维护
*@author Brian
*/

namespace Index\Controller;

class PerformanceresultController extends CommonController{

	public function index(){
		$user=M('User');
		$pmgroup= M('Pmgroup');
		$groupList= $pmgroup->select();
		$relatedGroupId= '';
		foreach ($groupList as $key => $value) {
			# code...
			 $relatedGroups= $relatedGroups.$groupList[$key]['id'].',';
		}
		
		$condition['es_pmgroup.id']= array('in', $relatedGroups);
		$condition['status']= array('eq', 1);
		$avaliableGroup= $pmgroup->join('es_pmform ON es_pmgroup.pmformid= es_pmform.id')->where($condition)->field('es_pmgroup.id as groupId, groupname, leaders, groupdescription, employees, startday, formname, formdescription, questionarr')->select();
		foreach ($avaliableGroup as $key => $value) {
			# code...
			$avaliableGroup[$key]['fromuser']= session(C('USER_AUTH_KEY'));
			$avaliableGroup[$key]['targetuser']= $this->getAllUserInfo($avaliableGroup[$key]['employees']);
			$avaliableGroup[$key]['leaders']= $this->getAllUserInfo($avaliableGroup[$key]['leaders']);
			foreach ($avaliableGroup[$key]['targetuser'] as $key2 => $value2) {
				# code...
				$avaliableGroup[$key]['targetuser'][$key2]['isexeced']= $this->isPmExeced($avaliableGroup[$key]['targetuser'][$key2]['id'], $avaliableGroup[$key]['groupid']);
				if(1){
					$pmcondition['targetuser']= $avaliableGroup[$key]['targetuser'][$key2]['id'];
					if(date('m')>1){
						//For test
						// $pmcondition['month']= date('m')-1;
						$pmcondition['month']= date('m');
						$pmcondition['year']= date('Y');
					}else{
						$pmcondition['month']= 12;
						$pmcondition['year']= date('Y')-1;
					}
					$pmcondition['groupid']= $avaliableGroup[$key]['groupid'];
					$avaliableGroup[$key]['targetuser'][$key2]['avgscore']= $this->countTotalAvgScore($pmcondition);
					$avaliableGroup[$key]['targetuser'][$key2]['year']= $pmcondition['year'];
					$avaliableGroup[$key]['targetuser'][$key2]['month']= $pmcondition['month'];
					$avaliableGroup[$key]['targetuser'][$key2]['unpmusers']= $this->getAllUnPmUsers($avaliableGroup[$key]['leaders'], $pmcondition);
				}
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

	protected function countTotalAvgScore($pmcondition){
		$allScore= M('Pmresult')->where($pmcondition)->select();
		$allScoreUsers= M('Pmresult')->where($pmcondition)->distinct(true)->field('fromuser')->select();
		$dirList= array();
		$indirList= array();
		for($idx=0; $idx< count($allScore); $idx++){
			if(strpos($allScore[$idx]['question'], '请输入您对该员工的绩效考核分数') !== false){
				$indirList[]= $allScore[$idx];
			}else{
				$dirList[]= $allScore[$idx];
			}
		}
		$dirTotalScore= 0;
		$indirTotalScore= 0;
		for ($idy=0; $idy < count($dirList); $idy++) { 
			# code...
			$dirTotalScore= $dirTotalScore+ round(($dirList[$idy]['score']*$dirList[$idy]['percentage']*$this->getScoreRatioPerUser($dirList[$idy]['fromuser'], $indirList, $dirList, $allScoreUsers))/10000, 1);
		}
		$dirAvgScore= $dirTotalScore;
		for ($idy=0; $idy < count($indirList); $idy++) { 
			# code...
			$indirTotalScore= $indirTotalScore+ round(($indirList[$idy]['score']*$indirList[$idy]['percentage']*$this->getScoreRatioPerUser($indirList[$idy]['fromuser'], $indirList, $dirList, $allScoreUsers))/10000, 1);
		}
		$indirAvgScore= $indirTotalScore;
		return round($dirAvgScore+ $indirAvgScore, 1);
	}

	protected function getScoreRatioPerUser($id, $indirList, $dirList, $allScoreUsers){
		$listStr='';
		$indirListId= array();
		foreach ($indirList as $key1 => $value1) {
			# code...
			$indirListId[]= $indirList[$key1]['fromuser'];
			$listStr= $listStr.$indirList[$key1]['fromuser'].',';
		}
		$userCondition['id']= array('in', $listStr);
		$userCondition['scoreratio']= array('neq', '0');
		$userListHasRatio= M('user')->where($userCondition)->field('scoreratio')->select();
		$scoreRatio= M('user')->where(array('id'=> $id))->field('scoreratio')->find();
		if(in_array($id, $indirListId) && $scoreRatio['scoreratio'] != '0'){
			return $scoreRatio['scoreratio'];
		}else{
			$leftCount= count($allScoreUsers)-count($userListHasRatio);
			$leftRatio= 1;
			foreach($userListHasRatio as $key2=> $value2){
				$leftRatio= $leftRatio- $userListHasRatio[$key2]['scoreratio'];
			}
			return $leftCount/$leftRatio;
		}
	}

	protected function isPmExeced($userId, $groupid){
		$pmcondition['targetuser']= $userId;
		if(date('m')>1){
			//For test
			// $pmcondition['month']= date('m')-1;
			$pmcondition['month']= date('m');
			$pmcondition['year']= date('Y');
		}else{
			$pmcondition['month']= 12;
			$pmcondition['year']= date('Y')-1;
		}
		$pmcondition['groupid']= $groupid;
		$pmexecution= M('Pmresult')->where($pmcondition)->select();
		if(count($pmexecution)> 0){
			return 1;
		}else{
			return false;
		}
	}

	protected function getAllUnPmUsers($leaders, $pmcondition){
		$pmexeced= M('Pmresult')->where($pmcondition)->distinct(true)->field('fromuser')->select();
		$pmexecedArr= [];
		foreach ($pmexeced as $key => $value) {
			# code...
			$pmexecedArr[]= $value['fromuser'];
		}
		foreach ($leaders as $key => $value) {
			# code...
			if(in_array($value['id'], $pmexecedArr)){
				
			}else{
				$unpmusers[]= $value;
			}
		}
		return $unpmusers;
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