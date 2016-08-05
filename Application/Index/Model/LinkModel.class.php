<?php 
/**
 * 自定义链接模型类
 * @author  <[l@easycms.cc]>
 */
namespace Index\Model;

use Think\Model;
class LinkModel extends Model{
		protected $_validate=array(
			array('name','require','名字必须填写!'),
			array('url','/(http|https)\:\/\/(\w*\.?)*/i','url格式错误'),
			
		);
}