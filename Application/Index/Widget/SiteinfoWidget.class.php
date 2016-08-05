<?php 
/**
 * 站点信息插件【系统级】
 * @author  <[c@easycms.cc]>
 */
namespace Index\Widget;

class SiteinfoWidget extends \Think\Controller{
	public function info($name=''){
		$where['field']=$name;
		$m=M('Fields');
		$result=$m->where($where)->find();
		echo $result['content'];
	}
}