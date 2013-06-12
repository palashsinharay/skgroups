<?php 
//echo $this->uri->segment(3);
//echo $this->uri->segment(2);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>S.K. Group</title>

<link href="<?php echo site_url('css/style.css')?>" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('css/jquery.lightbox-0.4.css')?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url('css/superfish.css')?>">

<script type="text/javascript" src="<?php echo site_url('script/jquery-1.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('script/banner.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('script/jquery.js')?>"></script>
<script type="text/javascript" src="<?php echo site_url('script/jquery.lightbox-0.4.pack.js')?>"></script>


<script type="text/javascript">
$(function() {
    $(".carouel_area").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev"
    });
});

</script>

<!--######################################################-->

 
  
  <script>
    (function() {
      var jasmineEnv = jasmine.getEnv()
      jasmineEnv.addReporter(new jasmine.HtmlReporter)
      window.onload = function() {
        jasmineEnv.execute()
      };
    })();
  </script>

<!--######################################################-->

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
    <div class="logo"><a href="index.html"><img src="<?php echo site_url('images/logo.png')?>" alt="S.K. Groups" title="S.K. Groups" /></a></div>
    

<div class="top_right">

    <ul>
    <li><a  href="<?php echo site_url('main/index');?>" >Home</a><span>|</span></li>
<!--    <li><a href="#">Sitemap</a><span>|</span></li>-->
    <li><a href="<?php echo site_url('main/page/7');?>">Contacts</a></li>
    </ul>
    <div class="clear"></div>
<!--    <div class="top_link">
    <h4>Follow us:</h4>
    <ul>
    <li><a href="#"><img src="<?php echo site_url('images/twitter.png')?>" alt="Twitter" title="Twitter" /></a></li>
    <li><a href="#"><img src="<?php echo site_url('images/facebook.png')?>" alt="facebook" title="Facebook" /></a></li>
    <li><a href="#"><img src="<?php echo site_url('images/linkedin.png')?>" title="Linkedin" /></a></li>
    </ul>-->
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
          <a href="<?php echo site_url('main/index')?>"  class="<?php echo $this->uri->segment(2)=='index'?'current':'';?>"><?php echo $value->title;?></a>
          
          
          
          <?php elseif($value->cid == 4):?>
          <a id="<?php echo $value->cid;?>" href="#" class="<?php echo $this->uri->segment(2)== 'productList'?'current':'';?>"><?php echo $value->title;?></a>
          <ul>
              <?php foreach ($product_cat as $value) :?>
                                
                            
             <li>
                 <a href="<?php echo site_url('product/productList/'.$value->categories_id)?>"><?php echo $value->category_name?></a>
            </li> 
               <?php endforeach;?>
          </ul>
          <?php else:?>
          <a id="<?php echo $value->cid;?>" href="<?php echo site_url('main/page/'.$value->cid)?>" class="<?php echo $this->uri->segment(2).'/'.$this->uri->segment(3)== 'page'.'/'.$value->cid?'current':'';?>"><?php echo $value->title;?></a>
          <?php endif;?>
      </li>
          <?php endforeach; ?>
      </ul>
  
  </div>

</div>
</div>
</div>
</div>

</div>
