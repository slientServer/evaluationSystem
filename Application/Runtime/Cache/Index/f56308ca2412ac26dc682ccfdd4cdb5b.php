<?php if (!defined('THINK_PATH')) exit();?><div id="marketPlacePopupMain" style="z-index:10;top:0px;left:0px;position:absolute;width:100%;height:100%;overflow:hidden;background-color:#f6cc25;">
<script>
    var idx=0;
    $(document).ready(function(){
        
        $('#marketPlacePopupMain .carousel').carousel();
        $('#marketPlacePopupMain .carousel').carousel("pause");
        $("#marketPlacePopupMain .glyphicon-chevron-left").click(function(){$('#marketPlacePopupMain .carousel').carousel("prev");});
        $("#marketPlacePopupMain .glyphicon-chevron-right").click(function(){$('#marketPlacePopupMain .carousel').carousel("next");});
        
        $("#marketPlacePopupMain .marketPlacePopupMainProductButton").click(function(evt){
            var productid=evt.target.attributes[0].value;
            dynamicPopupGroup.addNewPopup("productDetailPopup","<?php echo U('WScreen/productDetail');?>",{'productid': productid}, {forceReload:true,closeButton:true,
                afterclose: function(){
                        dynamicPopupGroup.addNewPopup("MarketPlacePopup","<?php echo U('WScreen/marketplace');?>",{}, {forceReload:false}, DivDialog);
                    }
                }, DivDialog);
        });
    });
</script>
    <div style='text-align:center;margin-left;auto;margin-right:auto;overflow:hidden;padding-top:30px;padding-bottom:30px;'>
        <div id="carousel-example-generic" style="width:100%;height:100%;" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators" style="bottom:-40px;">
                   <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                  <?php if(is_array($products)): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($mod) == "0"): if($key == 0): ?><div class="item active" style="">
                        <?php else: ?>
                            <div class="item" style=""><?php endif; ?>
                          <table style="margin: auto;width:80%;height:80%;">
                            <tr>
                               <td style="width:48%;padding-left:5px;padding-right:5px;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/MarketPlaceProductSingle.png');background-size: 100% 100%;">
                                    <div style="">
                                        <div style="padding: 8px;">
                                            <img src="/workspace/simpsons/trunk/server/<?php echo ($vo["productpic"]); ?>" style="width:90%;">
                                        </div>
                                        <div style="float:left;padding-left:10px;">
                                            <div style="text-align:left;margin-top:10px;"><?php echo ($vo["productname"]); ?></div>
                                            <div style="text-align:left;margin-top:5px;margin-bottom:10px;">¥<?php echo ($vo["productprice"]); ?></div>
                                        </div>
                                        <div class="marketPlacePopupMainProductButton" style="float: right;position:relative;width:46px;margin-top:10px;cursor:pointer;">
                                            <img productid="<?php echo ($vo["productid"]); ?>" src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/MarketPlaceProductButton.png" width="100%">
                                        </div>
                                    </div>
                                </td>
                                <td style="width:10px"></td>
                                <script type="text/javascript">
                                    if(idx!=0){
                                         $('#carousel-example-generic .carousel-indicators').append('<li data-target="#carousel-example-generic" data-slide-to='+idx+'></li>');
                                    }
                                    idx++;
                                </script><?php endif; ?>
                            <?php if(($mod) == "1"): ?><td style="width:48%;padding-left:5px;padding-right:5px;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/MarketPlaceProductSingle.png');background-size: 100% 100%;">
                                        <div style="">
                                            <div style="padding: 8px;">
                                                <img src="/workspace/simpsons/trunk/server/<?php echo ($vo["productpic"]); ?>" style="width:90%;">
                                            </div>
                                            <div style="float:left;padding-left:10px;">
                                                <div style="text-align:left;margin-top:10px;"><?php echo ($vo["productname"]); ?></div>
                                                <div style="text-align:left;margin-top:5px;margin-bottom:10px;">¥<?php echo ($vo["productprice"]); ?></div>
                                            </div>
                                            <div class="marketPlacePopupMainProductButton" style="float: right;position:relative;width:46px;margin-top:10px;cursor:pointer;">
                                                <img productid="<?php echo ($vo["productid"]); ?>" src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/MarketPlaceProductButton.png" width="100%">
                                            </div>
                                        </div>
                                    </td>
                                  </tr>
                                 </table>
                                </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                               </tr>
                               </table>
                               </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" style="background-image:url('');width:20px;margin-left:20px;" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" style="background-image:url('');width:20px;margin-right:20px;" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
    </div>
</div>