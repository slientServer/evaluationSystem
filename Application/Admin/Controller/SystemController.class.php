<?php
/**
* 更新系统缓存
* 更新模版缓存
* @author  <[s@easycms.cc]>
*/
namespace Admin\Controller;

class SystemController extends CommonController
{
	
	public function index() {
		$themes=array();
		$dir='./Application/Index/View/';

		$setfile=C('settingfile_path');
		$a=include './Application/Common/Conf/setting.php';

		if($handle=opendir($dir)){
			while($file=readdir($handle)){
				if($file=='.'||$file=='..'||$file=='Public'||$file==$a['DEFAULT_THEME']){
					continue;
				}
				array_push($themes, $file);
			}
		}
		closedir($handle);

		$this->assign('themes',$themes);
		$this->assign('default_theme', $a['DEFAULT_THEME']);
		$this->display();
	}

	Public function update(){
		SaveSetting($_POST);
		cookie('think_template',$_POST['DEFAULT_THEME']); 
	}
	
	Public function updateSystemCache(){
		if(is_dir('./App/Runtime/')){
			my_del('./App/Runtime/');
			echo "更新系统缓存成功";
		}else{
			echo "更新系统缓存成功";
		}
	}


	Public function updateTplCache(){
		if(is_dir('./Html/')){
			my_del('./Html/');
			echo "更新模版缓存成功";
		}else{
			echo "更新模版缓存成功";
		}
	}

}