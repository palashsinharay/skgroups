
<div class="container"> 

<!-- inner head start -->

<div class="inner_head">
<img src="<?php echo site_url('images/inner_head.jpg');?>" alt="" />
</div>

<!-- inner head end -->


<div class="clear"></div>    
    
<div class="content_area">
<h2><?php echo $categoryDetail->category_name;?></h2>

<div id="gallery">
      <ul>

          <?php foreach ($productList as $value) :?>
          <li> <a class="light" href="<?php echo site_url('assets/uploads/files/'.$value->product_image);?>" title="Product_3"> <img src="<?php echo site_url('assets/uploads/files/'.$value->product_image);?>" width="200" height="144" alt="image3" /></a><strong>Product Name 3</strong> <span class="des"><a class="" href="<?php echo site_url('product/productDetail/'.$value->product_id);?>" >Veiw Details</a></span></li>
          <?php endforeach;?>
          

      </ul>
<div class="clear"></div>
   
   </div>




</div>



</div>
