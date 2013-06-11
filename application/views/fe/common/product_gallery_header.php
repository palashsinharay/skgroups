<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">



<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>S.K. Group</title>

<link href="<?php echo site_url('css/style.css')?>" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('css/jquery.lightbox-0.4.css')?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('css/superfish.css')?>">


<script type="text/javascript" src="<?php echo site_url('script/banner.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('script/jquery.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('script/jquery.lightbox-0.4.pack.js')?>"></script>




<script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
		$('#cottage a').lightBox();
		$('#plan a').lightBox();
    });
</script>

</head>

<body>
<!-- Content section -->
<div class="wrapper">
<div id="top_border"></div>
<div class="top_content">
<div class="top_pan">
    <div class="logo"><a href="index.html"><img src="<?php echo site_url('images/logo.png')?>" alt="Surjo Sakha - A Green Initiative" title="Surjo Sakha - A Green Initiative" /></a></div>
    

<div class="top_right">

    <ul>
    <li><a href="#">Home</a><span>|</span></li>
    <li><a href="#">Sitemap</a><span>|</span></li>
    <li><a href="#">Contacts</a></li>
    </ul>
    <div class="clear"></div>
    <div class="top_link">
    <h4>Follow us:</h4>
    <ul>
    <li><a href="#"><img src="<?php echo site_url('images/twitter.png')?>" alt="Twitter" title="Twitter" /></a></li>
    <li><a href="#"><img src="<?php echo site_url('images/facebook.png')?>" alt="facebook" title="Facebook" /></a></li>
    <li><a href="#"><img src="<?php echo site_url('images/linkedin.png')?>" title="Linkedin" /></a></li>
    </ul>
    </div>
    
    </div>




</div>
</div>
<div class="menu_section">
<div class="menu_wrapper">
  <div id="jasmine_content">
      <?php 
//                      echo "<pre>";
//                print_r($data);
//		echo "</pre>";
//		die();
      ?>
      <ul class="sf-menu" id="example">
          <?php foreach ($top_menu as $value) : ?>
      <li>
          <?php if($value->cid == 3):?>
          <a href="<?php echo site_url('main/index')?>"><?php echo $value->title;?></a>
          
          
          
          <?php elseif($value->cid == 4):?>
          <a href="<?php echo site_url('main/page/'.$value->cid)?>"><?php echo $value->title;?></a>
          <ul>
              <?php foreach ($product_cat as $value) :?>
                                
                            
             <li>
            <a href="<?php echo site_url('product/productList/'.$value->categories_id)?>"><?php echo $value->category_name?></a>
            </li> 
               <?php endforeach;?>
          </ul>
          <?php else:?>
          <a href="<?php echo site_url('main/page/'.$value->cid)?>"><?php echo $value->title;?></a>
          <?php endif;?>
      </li>
          <?php endforeach; ?>
      </ul>
      

<!--    <ul class="sf-menu" id="example">
      <li class="current">
        <a href="#">Home</a>
  
      </li>
      <li>
        <a href="#">About Us</a>
      </li>
      <li>
        <a href="#">Products</a>
        <ul>
          <li>
            <a href="#">export &amp; import</a>
            <ul>
              <li><a href="#">short</a></li>
              <li><a href="#">short</a></li>
              <li><a href="#">short</a></li>
              <li><a href="#">short</a></li>
              <li><a href="#">short</a></li>
            </ul>
          </li>
          <li>
            <a href="#">menu item</a>
            <ul>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
            </ul>
          </li>
          <li>
            <a href="#">menu item</a>
            <ul>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
            </ul>
          </li>
          <li>
            <a href="#">menu item</a>
            <ul>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
            </ul>
          </li>
          <li>
            <a href="#">menu item</a>
            <ul>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
              <li><a href="#">menu item</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li>
        <a href="#">Sales Areas</a>
      </li> 
    

  <li>
        <a href="#">Apply</a>
      </li>
  <li>
        <a href="#">Contact Us</a>
      </li>
  </ul>-->
  
  
  </div>

</div>
</div>
</div>
</div>

</div>
