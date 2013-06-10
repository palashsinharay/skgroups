<div class="left_pan_area">

<div class="left_box">
<div class="left_box_title">Our Features</div>
<div class="left_box_content">
<ul class="features">
    <?php foreach ($featured_menu as $value) : ?>
    <li><a href="<?php echo site_url('main/page/'.$value->id); ?>"><?php echo $value->menutitle; ?></a></li> 
    <?php endforeach;?>
<!--<li><a href="#">Major Clients </a></li> 
<li><a href="#">New Initiative </a></li> 
<li><a href="#">Tender &amp; Notice </a></li> 
<li><a href="#">NJMC Job</a></li> -->
</ul>
</div>
<div class="left_box_bottom"></div>
</div>

