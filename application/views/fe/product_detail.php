<div class="container"> 

<!-- inner head start -->

<div class="inner_head">
    <img src="<?php echo site_url('images/gallery_head.jpg');?>" alt="" />
</div>

<!-- inner head end -->


<div class="clear"></div>    
    
<div class="content_area">
<h2>Product <span>Detail</span> </h2>

<h1>Product Name</h1>
<div class="clear"></div>

<div class="detail">
<div class="detail_1">
<table width="215"  border="0" cellpadding="0" cellspacing="0">
  <tr>
      <td height="140"><a><img src="<?php echo site_url('assets/uploads/files/'.$productDetail->product_image)?>" style="border:1px solid #5c7d94; margin-top:7px" /></a></td>
  </tr>
</table>
</div>
<div class="detail_2">
<table width="340" border="0" class="detail_list" cellpadding="10" cellspacing="12">
  <tr>
    <td width="75" height="28">Product</td>
    <td width="14">:</td>
    <td width="181"><?php echo $productDetail->product_name; ?></td>
  </tr>

  <tr>
    <td>Product Code. </td>
    <td>:</td>
    <td><?php echo $productDetail->product_code; ?></td>
  </tr>
  
  <tr>
    <td>Price </td>
    <td>:</td>
    <td><?php echo $productDetail->product_price; ?></td>
  </tr>
</table>
</div>
<div class="clear"></div>

<div class="detail_content">

<?php echo $productDetail->product_long_description; ?>

</div>

</div>



<div class="clear"></div>
</div>



</div>
