<?php if (!defined('THINK_PATH')) exit();?><div id="exchangeCenterPopupMain" style="z-index:10;top:0px;left:0px;position:absolute;width:100%;height:100%;overflow:hidden;background-color:#f6cc25;">
<script>
    var idx=0;
    $(document).ready(function(){
        
        $('#exchangeCenterPopupMain .carousel').carousel();
        $('#exchangeCenterPopupMain .carousel').carousel("pause");
        $("#exchangeCenterPopupMain .productimg").click(function(evt){
            var scoreproductid=evt.target.attributes[0].value;
            dynamicPopupGroup.addNewPopup("productDetailPopup","<?php echo U('WScreen/scoreproductDetail');?>",{'scoreproductid': scoreproductid}, {forceReload:true,closeButton:true,
                afterclose: function(){
                        dynamicPopupGroup.addNewPopup("exchangeCenterPopup","<?php echo U('WScreen/exchangeCenter');?>",{}, {forceReload:true}, DivDialog);
                    }
                }, DivDialog);
        });
        $("#exchangeCenterPopupMain .exchangeCenterPopupMainButton").click(function(evt){
            var scoreproductid=evt.target.attributes[0].value;
            dynamicPopupGroup.addNewPopup("confirmExchangeInfoPopup","<?php echo U('WScreen/confirmExchangeInfo');?>",{'scoreproductid': scoreproductid}, {forceReload:true,closeButton:true,
                afterclose: function(){
                        dynamicPopupGroup.addNewPopup("MarketPlacePopup","<?php echo U('WScreen/exchangeCenter');?>",{}, {forceReload:true}, DivDialog);
                    }
                }, DivDialog);
        });
    });
</script>
    <div style='text-align:center;margin-left;auto;margin-right:auto;overflow:hidden;padding-top:30px;padding-bottom:30px;'>
        <div id="carousel-exchangeCenter" style="width:100%;height:100%;" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators" style="bottom:-40px;">
                   <li data-target="#carousel-exchangeCenter" data-slide-to="0" class="active"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                  <?php if(is_array($scoreproduct)): $i = 0; $__LIST__ = $scoreproduct;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($mod) == "0"): if($key == 0): ?><div class="item active" style="">
                        <?php else: ?>
                            <div class="item" style=""><?php endif; ?>
                          <table style="margin: auto;width:80%;height:80%;">
                            <tr>
                               <td style="width:48%;padding-left:5px;padding-right:5px;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/MarketPlaceProductSingle.png');background-size: 100% 100%;">
                                    <div style="">
                                        <div class='productimg' style="padding: 8px;">
                                            <img scoreproductid="<?php echo ($vo["scoreproductid"]); ?>" src="/workspace/simpsons/trunk/server/<?php echo ($vo["scoreproductpic"]); ?>" style="width:90%;">
                                        </div>
                                        <div style="float:left;padding-left:10px;">
                                            <div style="text-align:left;margin-top:10px;"><?php echo ($vo["scoreproductname"]); ?></div>
                                            <div style="text-align:left;margin-top:5px;margin-bottom:10px;"><?php echo ($vo["scorecondition"]); ?>积分</div>
                                        </div>
                                        <?php if($vo["scorecondition"] > $totalscore): ?><div style="float: right;position:relative;width:46px;margin-top:10px;cursor:pointer;">
                                            <img src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/exchangeButtonDisabled.png" width="100%">
                                            </div>                                  
                                          <?php else: ?>
                                            <div class="exchangeCenterPopupMainButton" style="float: right;position:relative;width:46px;margin-top:10px;cursor:pointer;">
                                            <img scoreproductid="<?php echo ($vo["scoreproductid"]); ?>" src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/exchangeButton.png" width="100%">
                                            </div><?php endif; ?>

                                    </div>
                                </td>
                                <td style="width:10px"></td>
                                <script type="text/javascript">
                                    if(idx!=0){
                                         $('#carousel-exchangeCenter .carousel-indicators').append('<li data-target="#carousel-exchangeCenter" data-slide-to='+idx+'></li>');
                                    }
                                    idx++;
                                </script><?php endif; ?>
                            <?php if(($mod) == "1"): ?><td style="width:48%;padding-left:5px;padding-right:5px;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/MarketPlaceProductSingle.png');background-size: 100% 100%;">
                                        <div style="">
                                            <div class='productimg' style="padding: 8px;">
                                                <img productid="<?php echo ($vo["scoreproductid"]); ?>" src="/workspace/simpsons/trunk/server/<?php echo ($vo["scoreproductpic"]); ?>" style="width:90%;">
                                            </div>
                                            <div style="float:left;padding-left:10px;">
                                                <div style="text-align:left;margin-top:10px;"><?php echo ($vo["scoreproductname"]); ?></div>
                                                <div style="text-align:left;margin-top:5px;margin-bottom:10px;"><?php echo ($vo["scorecondition"]); ?>积分</div>
                                            </div>
                                            <?php if($vo["scorecondition"] > $totalscore): ?><div style="float: right;position:relative;width:46px;margin-top:10px;cursor:pointer;">
                                                <img src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/exchangeButtonDisabled.png" width="100%">
                                                </div>                                  
                                              <?php else: ?>
                                                <div class="exchangeCenterPopupMainButton" style="float: right;position:relative;width:46px;margin-top:10px;cursor:pointer;">
                                                <img scoreproductid="<?php echo ($vo["scoreproductid"]); ?>" src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/exchangeButton.png" width="100%">
                                                </div><?php endif; ?>
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
              <a class="left carousel-control" style="background-image:url('');width:20px;margin-left:20px;" href="#carousel-exchangeCenter" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" style="background-image:url('');width:20px;margin-right:20px;" href="#carousel-exchangeCenter" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
    </div>
</div>