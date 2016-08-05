<?php 
/**
 * 百度分享插件
 * @author  <[c@easycms.cc]>
 */

use Index\Widget;

class BaidushareWidget extends \Think\Controller{
	public function info($name=''){
		$this->display(dirname(__FILE__).'/Baidushare/info.html');
	}
}