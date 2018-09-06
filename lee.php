
<?php 
	$a=300;
?>
<!-- CONTENT START -->
<script type="text/javascript">
  // 数量変更時に、表示されている価格を更新する
  function onChangeQuantity(element) {
    // 数量
    var quantity = element.value;
    // 単価
    var price_id = 'price_' + element.id.split('_')[1];
    var price = document.getElementById(price_id).value;
    // 価格 = 数量 * 単価
    var total = quantity * price;
    // 価格を表示しているID
    var total_id = 'total_' + element.id.split('_')[1];
    document.getElementById(total_id).value = total;
  }
</script> 
<div class="container sec-wrap" id="product">
    <div id="main_text">
        <div class="row">
            <div class="columns-12 product-box">
                <div class="col-sm-10 col-xs-10 product-mb-title">
                    <h3>全效活膚保濕精華露</h3>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 col-offset-2">
                    <div class="product-pic">
                        <!-- Product Slider Start -->
                        <div class="mm-tabs-wrapper">
                            <div class="tab-item">
                                <ul class="bxslider">
                                  <li><img src="<!--{$smarty.const.HTTPS_URL}-->user_data/new/img/product5/01_254x348.jpg" /></li>
                                  <li><img src="<!--{$smarty.const.HTTPS_URL}-->user_data/new/img/product5/02_254x348.jpg" /></li>
                                  <li><img src="<!--{$smarty.const.HTTPS_URL}-->user_data/new/img/product5/03_254x348.jpg" /></li>
                                  <li><img src="<!--{$smarty.const.HTTPS_URL}-->user_data/new/img/product5/04_254x348.jpg" /></li>
                                  <li><img src="<!--{$smarty.const.HTTPS_URL}-->user_data/new/img/product5/05_254x348.jpg" /></li>
                                </ul>
                                <div class="tab-gallery-preview">
                                    <div id="gallery">
                                        <div id="bx-pager" class="slider1">
                                          <div class="slide"><a data-slide-index="0" href=""><img src="<!--{$smarty.const.HTTPS_URL}-->user_data/new/img/product5/01_254x348.jpg" /></a></div>
                                          <div class="slide"><a data-slide-index="1" href=""><img src="<!--{$smarty.const.HTTPS_URL}-->user_data/new/img/product5/02_254x348.jpg" /></a></div>
                                          <div class="slide"><a data-slide-index="2" href=""><img src="<!--{$smarty.const.HTTPS_URL}-->user_data/new/img/product5/03_254x348.jpg" /></a></div>
                                          <div class="slide"><a data-slide-index="3" href=""><img src="<!--{$smarty.const.HTTPS_URL}-->user_data/new/img/product5/04_254x348.jpg" /></a></div>
                                          <div class="slide"><a data-slide-index="4" href=""><img src="<!--{$smarty.const.HTTPS_URL}-->user_data/new/img/product5/05_254x348.jpg" /></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Slider End -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 info-border">
                    <div class="product-pc-title">
                        <h3><?php echo $a; ?></h3>
                    </div>
                    <div class="product-content">
                        <p>品名：多合一美容精華液<br>
                            容量：100ml<br>
                            建議使用：<br>
                            5效合一!<br>
                            瞬間的讓毛孔緊縮，<br>
                            富含滿滿的美容成分，<br>
                            有效改善細紋、斑點及鬆弛的煩惱。<br>
                            </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pd-20">
            <div class="columns-12">
                <!-- <div class="col-md-8 col-sm-8 col-offset-2">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Sj3jHHdVfZo" frameborder="0" allowfullscreen=""></iframe>      
                </div>
                <hr class="col-md-8 col-offset-2"> -->
                <div class="col-md-4 col-sm-4 col-xs-12 col-offset-2">
                    <div class="add-product">
                        <div class="product-title">
                            <p class="pd-text-1">直接購買</p>
                        </div>
                        <form action="<!--{$smarty.const.ROOT_URLPATH}-->products/detail.php" method="post">
                            <input type="hidden" name="mode" value="cart" />
                            <input type="hidden" name="product_id" value="200000507" />
                            <input type="hidden" name="product_class_id" value="200000508" />
                            <input type="hidden" name="regular_purchase_flg" value="0" />
                            <input type="hidden" id="price_2" value="1800" >
                            <div class="product-input">
                                <span class="p-info">售價：1800</span>
                            </div>
                            <div class="product-input">
                                <span class="color-pink">數量</span>
                                <select class="kui-select" name="quantity" id="quantity_2" onChange="onChangeQuantity(this)">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                </select>
                            </div>
                            <div class="add-button">
                                <!-- <input class="btn color-focus" type="submit" value="加入購物車" /> -->
                                <button type="submit" class="btn bt-color-red">
                                    <span>加入購物車</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <hr class="col-md-8 col-offset-2 mobile-show">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="add-product">
                        <div class="product-title">
                            <p class="pd-text-2"><span>定期方案</span>85折，免運費</p>
                        </div>
                        <form action="<!--{$smarty.const.ROOT_URLPATH}-->products/detail.php" method="post">
                          <input type="hidden" name="mode" value="cart" /><!-- 固定値'cart' -->
                          <input type="hidden" name="product_id" value="200000511" /><!-- 商品ID -->
                          <input type="hidden" name="product_class_id" value="200000512" /><!-- 商品クラスID -->
                          <input type="hidden" name="regular_purchase_flg" value="1" /><!-- 定期:1/都度:0で値送信 -->
                          <input type="hidden" id="price_1" value="1530" ><!--　商品単価 -->
                            <div class="product-input">
                                <span class="p-info-red">優惠售價：1530</span>
                            </div>
                            <div class="product-input">
                                <span class="color-red">數量</span>
                                <select class="kui-select" name="quantity" id="quantity_1" onChange="onChangeQuantity(this)"><!-- 数量 -->
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                </select>
                            </div>
                            <div class="add-button">
                                <!-- <input class="btn color-error" type="submit" value="加入購物車" /> -->
                                <button type="submit" class="btn bt-color-green">
                                    <span>加入購物車</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- CONTENT END -->