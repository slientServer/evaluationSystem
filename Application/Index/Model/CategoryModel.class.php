<?php
/**
 * 自定义分类模型类
 * @author  <[l@easycms.cc]>
 */
namespace Index\Model;
use Think\Model\RelationModel;
class CategoryModel extends RelationModel{
	protected $_link = array(
	         	'Article'=>array(
				'mapping_type'=>HAS_MANY,
	            'foreign_key'=>'tid',
	          	),
			);
}
