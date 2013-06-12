
<div class="container"> 

<!-- Slide show start -->

<div class="slideshow">

<!-- img_1 -->
<div class="slides" style="visibility:visible" id="image1">
<img src="<?php echo site_url('images/img_1.png')?>" alt="" />
</div>

<!-- img_2 -->
<div class="slides" id="image2">
<img src="<?php echo site_url('images/img_2.png')?>" alt="" />
</div>

<!-- img_3 -->
<div class="slides" id="image3">
<img src="<?php echo site_url('images/img_3.png')?>" alt="" />
</div>

<!-- img_4 -->
<div class="slides" id="image4">
<img src="<?php echo site_url('images/img_4.png')?>" alt="" />
</div>

<!-- img_5 -->
<div class="slides" id="image5">
<img src="<?php echo site_url('images/img_5.png')?>" alt="" />
</div>

<!-- img_6 -->
<div class="slides" id="image6">
<img src="<?php echo site_url('images/img_6.png')?>" alt="" />
</div>

<div class="clear"></div>
<ul class="buttons">
<li class="active" id="button1"><a href="#" title="">&nbsp;</a></li>
<li id="button2"><a href="#" title="">&nbsp;</a></li>
<li id="button3"><a href="#" title="">&nbsp;</a></li>
<li id="button4"><a href="#" title="">&nbsp;</a></li>
<li id="button5"><a href="#" title="">&nbsp;</a></li>
<li id="button6"><a href="#" title="">&nbsp;</a></li>
</ul>

</div>

<!-- Slide show end -->


<div class="clear"></div>    
    
<div class="content_area">
<h2>Welcome to <span><?php echo $pageDetail->menutitle;?></span></h2>
<?php echo $pageDetail->content;?>
<div class="clear"></div>
</div>

<div class="middle_pan">
<?php foreach ($feturedProduct as $value): ?>    
 <div class="column four margin">
  <img src="<?php echo site_url('assets/uploads/files/'.$value->product_image)?>" alt="" />
  <h4><?php echo $value->product_name;?> </h4>
  <p><?php echo $value->product_short_description;?></p>
  <a href="<?php echo site_url('product/productDetail/'.$value->product_id);?>" class="more">...more</a>
</div>
<?php endforeach; ?>
<div class="clear"></div>
</div>

</div>

