<?php if (!defined('THINK_PATH')) exit();?>
<div id="productDetailPopupMain" style="z-index:10;position:absolute;top:0px;left:0px;width:100%;height:100%;overflow:hidden;background-color:white;">
<script>
    $(document).ready(function(){
        $('#productDetailPopupMain .carousel').carousel();
        $('#productDetailPopupMain .carousel').carousel("pause");
        $("#confirmBuyInfo").click(function(evt){
            var productid=evt.target.attributes[0].value;
            dynamicPopupGroup.addNewPopup("confirmBuyInfo","<?php echo U('WScreen/confirmBuyInfo');?>",{'productid': productid}, {forceReload:true,closeButton:true, afterclose:function(){
              // dynamicPopupGroup.addNewPopup("MarketPlacePopup","<?php echo U('WScreen/marketplace');?>",{}, {forceReload:true}, DivDialog);
            }}, DivDialog);
          });
    });
</script>
    <div style='text-align:center;margin-left;auto;margin-right:auto;overflow:hidden;'>
        <div id="carousel-productDetail" style="padding-top:5px;float:left;width:55%;height:100%;" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators" style="">
            <?php if(is_array($productimgs)): foreach($productimgs as $key=>$vo): if($key == 0): ?><li data-target="#carousel-productDetail" data-slide-to="$key" class="active"></li>
              <?php else: ?>
                    <li data-target="#carousel-productDetail" data-slide-to="$key"></li><?php endif; endforeach; endif; ?>            
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <?php if(is_array($productimgs)): foreach($productimgs as $key=>$vo): if($key == 0): ?><div class="item  active" style="">
              <?php else: ?>
                    <div class="item" style=""><?php endif; ?>
                <div style="width:100%">
                      <div style="">
                          <img src="/workspace/simpsons/trunk/server/<?php echo ($vo["imgsrc"]); ?>" style="width:100%;">
                      </div>
                </div>
              </div><?php endforeach; endif; ?>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" style="background-image:url('');" href="#carousel-productDetail" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" style="background-image:url('');" href="#carousel-productDetail" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div style="text-align:left;float:right;width:40%;padding:5px;bottom:40px;position:absolute;right:0px;">
            <div style="font-size:20px;font-weight:bold;">
                <?php echo ($product["productname"]); ?>
            </div>
            <div style="font-size:25px;font-weight:bold;">
                ¥<?php echo ($product["productprice"]); ?>
            </div>
            <div style="font-size:15px;font-weight:bold;padding-top:20px;">
                <?php echo ($product["productdescription"]); ?>
            </div>
            <div id='confirmBuyInfo' style="text-align:center;margin:auto;padding-top:40px;">
                <img productid="<?php echo ($product["productid"]); ?>"  src="/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/confirmBuy.png" style="width:60%">
            </div>
        </div>
    </div>
</div>