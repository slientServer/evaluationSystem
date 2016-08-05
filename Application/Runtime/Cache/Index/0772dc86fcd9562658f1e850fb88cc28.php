<?php if (!defined('THINK_PATH')) exit();?><div id="benefitBoxPopupMain" style="z-index:10;top:0px;left:0px;position:absolute;width:100%;height:100%;overflow:hidden;background-color:#6caddf;">
<script>
    $(document).ready(function(){
        $('#benefitBoxPopupMain .carousel').carousel();
        $('#benefitBoxPopupMain .carousel').carousel("pause");
        var tableWidth = $("#benefitBoxPopupMain .benefitBoxPopupMain_table").width();
        
        var itemWidth = Math.floor(tableWidth*0.48);
        var carouselHeight = $(window).height();
        $("#benefitBoxPopupMain .benefitBoxPopupMain_table").height(Math.floor(carouselHeight*0.70));
        $("#benefitBoxPopupMain .benefitBoxPopupMain_item").width(itemWidth);
        if($("#benefitBoxPopupMain .benefitBoxPopupMain_item").length==1){
          $("#benefitBoxPopupMain .benefitBoxPopupMain_table").width(itemWidth);
        }
        
        
    });
</script>
    <div style='text-align:center;margin-left;auto;margin-right:auto;overflow:hidden;padding-top:30px;padding-bottom:30px;'>
        <div id="carousel-benefitBoxMain" style="width:100%;height:80%;" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators" style="bottom:-40px;">
                <li data-target="#carousel-benefitBoxMain" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-benefitBoxMain" data-slide-to="1"></li>
                <li data-target="#carousel-benefitBoxMain" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active" style="">
                  <table class="benefitBoxPopupMain_table" style="margin: auto;width:70%;height:80%;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/benefitBoxCardBackground.png');background-size: 100% 100%;">
                    <tr>
                        <td valign="" class="benefitBoxPopupMain_item" style="padding-left:5px;padding-right:5px;">
                            <div style="height:70%">
                                <div style="padding-top:10%;font-weight:bold;font-size:15px;">
                                    辛普森门店优惠券
                                </div>
                                <div style="font-weight:bold;font-size:15px;">
                                    <span style="font-weight:bold;font-size:20px;">¥</span>
                                    <span style="font-weight:bold;font-size:40px;">99</span>
                                </div>
                                <div style="font-size:10px;">
                                    <div>（满300可用）</div>
                                    <div>券码： 1234567890</div>
                                </div>
                            </div>
                            <div style="padding-top:5%;font-size:15px;font-weight:bold;">
                            未使用
                            </div>
                        </td>
                    </tr>
                  </table>
                  <table class="benefitBoxPopupMain_table" style="margin: auto;width:70%;height:80%;background-image:url('/workspace/simpsons/trunk/server/Application/Index/View/default/Public/images/benefitBoxCardBackground.png');background-size: 100% 100%;">
                    <tr>
                        <td valign="" class="benefitBoxPopupMain_item" style="padding-left:5px;padding-right:5px;">
                            <div style="height:70%">
                                <div style="padding-top:10%;font-weight:bold;font-size:15px;">
                                    辛普森门店优惠券
                                </div>
                                <div style="font-weight:bold;font-size:15px;">
                                    <span style="font-weight:bold;font-size:20px;">¥</span>
                                    <span style="font-weight:bold;font-size:40px;">99</span>
                                </div>
                                <div style="font-size:10px;">
                                    <div>（满300可用）</div>
                                    <div>券码： 1234567890</div>
                                </div>
                            </div>
                            <div style="padding-top:5%;font-size:15px;font-weight:bold;">
                            未使用
                            </div>
                        </td>
                    </tr>
                  </table>
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" style="background-image:url('');width:20px;margin-left:20px;" href="#carousel-productMain" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" style="background-image:url('');width:20px;margin-right:20px;" href="#carousel-productMain" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div style="color:white;width:100%;text-align:center;margin-top:30px;">
            *在辛普森门店出示给服务人员即可
            </div>
    </div>
</div>