<?php
/**
* @model Recommendation Management
* @author Brian 
*/

namespace Admin\Model;
use Think\Model\RelationModel;

class RecommendationModel extends RelationModel{
	
	protected $_auto = array( 
		array("recomm_time","time","1","function"),
		array("islock",0)
	);
}