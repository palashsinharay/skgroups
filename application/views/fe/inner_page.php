<div class="container"> 

<!-- inner head start -->

<div class="inner_head">
    <?php if($pageDetail->filename != NULL):?>
    <img src="<?php echo site_url('assets/uploads/files'.$pageDetail->filename);?>" alt="" />
<?php else:?>
    <img src="<?php echo site_url('images/inner_head.jpg');?>" alt="" />
<?php endif;?>
</div>

<!-- inner head end -->


<div class="clear"></div>    
    
<div class="content_area">
<h2><?php echo $pageDetail->menutitle;?></h2>
<?php echo $pageDetail->content;?>
<div class="clear"></div>
</div>



</div>

