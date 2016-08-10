<?php
/**
*员工个人信息维护
*@author Brian
*/

namespace Index\Controller;

class AssessmenthistoryController extends CommonController{

	public function index(){
		$assessment= M('Assessment');
		$currentMonth= date('m');
		$currentYear= date('Y');
		$passedSixMonth= array('one' => array('month' =>$this->countMonth(6), 'year'=> $this->countYear(7) ), 
								'two'=> array('month' =>$this->countMonth(7), 'year'=> $this->countYear(6) ), 
								'three'=> array('month' =>$this->countMonth(8), 'year'=> $this->countYear(5) ), 
								'four'=> array('month' =>$this->countMonth(9), 'year'=> $this->countYear(4) ), 
								'five'=> array('month' =>$this->countMonth(10), 'year'=> $this->countYear(3) ), 
								'six'=> array('month' =>$this->countMonth(11), 'year'=> $this->countYear(2)));
		$queryRes= array();
		foreach ($passedSixMonth as $key => $value) {
			# code...
			$value['fromuser']= session(C('USER_AUTH_KEY'));
			$queryRes[$key]= $assessment->join('es_user ON es_assessment.targetuser= es_user.id')->where($value)->field('es_user.showname, es_assessment.score, es_assessment.remark, es_assessment.isanony, es_assessment.inserttime')->select();
		}

		$this->assign('accessList', $_SESSION['_ACCESS_LIST']);
		$this->assign('showname', $_SESSION[C('ADMIN_AUTH_KEY_SHOW_NAME')]);
		$this->assign('assessmentHistory', $queryRes);
		$this->assign('passedSixMonth', $passedSixMonth);
		$this->display();
	}

	private function countMonth($offset){
		$currentMonth= date('m')+1;
		$offsetMonth= ($currentMonth+$offset)%12==0? 12: ($currentMonth+$offset)%12;
		return $offsetMonth; 
	}	

	private function countYear($offset){
		$currentMonth= date('m')+1;
		$offsetMonth= $currentMonth- $offset;
		if($offsetMonth< 0){
			return date('Y')-1;
		}
		return date('Y');
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