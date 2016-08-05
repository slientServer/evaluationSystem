<?php if (!defined('THINK_PATH')) exit();?>﻿

<!-- 标题栏 -->
  <!--   <div class="main-title">
      <h2>数据备份</h2>
  </div> -->
    <!-- /标题栏 -->

    <div class="panelBar">
        <ul class="toolBar">
            <li><a class="add" id="export" class="btn" href="javascript:;" autocomplete="off"><span>立即备份</span></a></li>
            <li><a class="delete" id="optimize" class="btn" href="<?php echo U('optimize');?>"><span>优化表</span></a></li>
            <li><a class="edit" id="repair" class="btn" href="<?php echo U('repair');?>"><span>修复表</span></a></li>
        </ul>
    </div>




  <script>
       function youhua(obj){
            $url=$(obj).attr('url');
            $.get($url,'', function(data){
                if(data.status){
                    alert(data.info);
                } else {
                    alert(data.info,'alert-error');
                }
            }, "json");
            return false;
        }
        function check(obj){
            
                $inputs=$('.check2');
                if ($(obj).attr('checked')) {
                    $inputs.attr('checked',true);
                }else{
                     $inputs.attr('checked',false);
                }
                
        }
</script>


    <!-- 应用列表 -->
    <div class="data-table table-striped">
        <form id="export-form" method="post" action="<?php echo U('export');?>">
            <table  class="table" style="width:100%;">
                <thead>
                    <tr align="center">
                        <th width="48"><input class="check-all"  type="checkbox" onclick="check(this);" checked="checked"></th>
                        <th>表名</th>
                        <th>数据量</th>
                        <th>数据大小</th>
                        <th>创建时间</th>
                        <th>备份状态</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$table): $mod = ($i % 2 );++$i;?><tr align="center">
                            <td class="num">
                                <input class="check2" class="ids" checked="chedked" type="checkbox" name="tables[]" value="<?php echo ($table["name"]); ?>">
                            </td>
                            <td><?php echo ($table["name"]); ?></td>
                            <td><?php echo ($table["rows"]); ?></td>
                            <td><?php echo (format_bytes($table["data_length"])); ?></td>
                            <td><?php echo ($table["create_time"]); ?></td>
                            <td class="info">未备份</td>
                            <td class="action">
                          
                                <b style="cursor: pointer;" url="<?php echo U('optimize?tables='.$table['name']);?>" onclick="youhua(this);">优化表</b>&nbsp;
                                <b style="cursor: pointer;" url="<?php echo U('repair?tables='.$table['name']);?>" onclick="youhua(this);">修复表</b>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </form>
    </div>
    <!-- /应用列表 -->
<script type="text/javascript">
    (function($){
        var $form = $("#export-form"), $export = $("#export"), tables
            $optimize = $("#optimize"), $repair = $("#repair");

        $optimize.add($repair).click(function(){
            $.post(this.href, $form.serialize(), function(data){
                if(data.status){
                    alert(data.info);
                } else {
                    alert(data.info,'alert-error');
                }
            }, "json");
            return false;
        });

        $export.click(function(){
            $export.parent().children().addClass("disabled");
            $export.html("正在发送备份请求...");
            $.post(
                $form.attr("action"),
                $form.serialize(),
                function(data){
                    if(data.status){
                        tables = data.tables;
                        $export.html(' <li><a class="add" id="export" class="btn" href="javascript:;" autocomplete="off"><span>'+data.info + "开始备份，请不要关闭本页面！</span></a></li>");
                        backup(data.tab);
                        window.onbeforeunload = function(){ return "正在备份数据库，请不要关闭！" }
                    } else {
                        alert(data.info);
                        $export.parent().children().removeClass("disabled");
                        $export.html("立即备份");
                    }
                },
                "json"
            );
            return false;
        });

        function backup(tab, status){
            status && showmsg(tab.id, "开始备份...(0%)");
            $.get($form.attr("action"), tab, function(data){
                if(data.status){
                    showmsg(tab.id, data.info);

                    if(!$.isPlainObject(data.tab)){
                        $export.parent().children().removeClass("disabled");
                        $export.html(' <li><a class="add" id="export" class="btn" href="javascript:;" autocomplete="off"><span>备份完成，点击重新备份</span></a></li>');
                        window.onbeforeunload = function(){ return null }
                        return;
                    }
                    backup(data.tab, tab.id != data.tab.id);
                } else {
                    alert(data.info);
                    $export.parent().children().removeClass("disabled");
                    $export.html("立即备份");
                }
            }, "json");

        }

        function showmsg(id, msg){
            $form.find("input[value=" + tables[id] + "]").closest("tr").find(".info").html(msg);
        }
    })(jQuery);
    </script>