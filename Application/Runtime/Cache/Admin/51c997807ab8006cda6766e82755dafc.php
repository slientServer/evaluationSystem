<?php if (!defined('THINK_PATH')) exit();?>﻿<form id="pagerForm" action="/evaluationSystem/Admin/Database/index/type/import" method="get">
</form>
<style>
    .tab{
        border-color: #d0d0d0;
      
        }
    .tab th,td{
        padding: 0 3px;
        text-align: center;
        font-size: 12px;
        border-style: solid;
        border-width: 0 1px 1px 0;
        vertical-align: top;
        white-space: nowrap;
        line-height: 21px;
        cursor: default;
        border-color: #d0d0d0;
        font-family: Arial, sans-serif;
    }
    .tab th{ background: #f0eff0 url(/evaluationSystem/Application/Admin/View/Public/dwz/themes/default/images/grid/tableth.png) repeat-x;}
    .tab tr:hover{background: #ededed;}
</style>
<script>
	    function del(obj){
	        if(!confirm('您确定要删除吗')) return false;
	        $url=$(obj).attr('name');
	        $.get($url,'', function(data){
	            if(data.status){
	                alert(data.info);
	            } else {
	                alert(data.info,'alert-error');
	            }
	        }, "json");
	        navTabPageBreak();
	        return false;
   		}
</script>
    <table class="tab" cellspacing="0" cellpadding="0" border="0" style="width:100%">
            <thead>
                <tr>
                    <th width="200">备份名称</th>
                    <th width="80">卷数</th>
                    <th width="80">压缩</th>
                    <th width="80">数据大小</th>
                    <th width="200">备份时间</th>
                    
                    <th width="120">操作</th>
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo (date('Ymd-His',$data["time"])); ?></td>
                        <td><?php echo ($data["part"]); ?></td>
                        <td><?php echo ($data["compress"]); ?></td>
                        <td><?php echo (format_bytes($data["size"])); ?></td>
                        <td><?php echo ($key); ?></td>
                        
                        <td class="action">
                            <a style="cursor: pointer;" class="db-import" href="<?php echo U('import?time='.$data['time']);?>">还原</a>&nbsp;
                            <a style="cursor: pointer;"  name="<?php echo U('del?time='.$data['time']);?>" onclick="del(this);">删除</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    <!-- /应用列表 -->

<script type="text/javascript">
        $(".db-import").click(function(){
            var self = this, status = ".";
            $.get(self.href, success, "json");
            window.onbeforeunload = function(){ return "正在还原数据库，请不要关闭！" }
            return false;
        
            function success(data){
                if(data.status){
                    if(data.gz){
                        data.info += status;
                        if(status.length === 5){
                            status = ".";
                        } else {
                            status += ".";
                        }
                    }
                    $(self).parent().prev().text(data.info);
                    if(data.part){
                        $.get(self.href, 
                            {"part" : data.part, "start" : data.start}, 
                            success, 
                            "json"
                        );
                    }  else {
                        window.onbeforeunload = function(){ return null; }
                    }
                } else {
                    alert(data.info);
                }
            }
        });
    </script>