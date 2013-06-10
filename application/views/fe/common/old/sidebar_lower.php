
<div class="left_box">
<div class="left_box_title">Latest News</div>
<div class="left_box_content">
<?php foreach($news as $value):?>
	<div class="news_pan">
    <h6><?php echo $value->date;?></h6>
    <p><a href="<?php echo site_url('main/news_details/'.$value->id);?>"><?php echo $value->title;?></a></p>
	
    </div>
<?php endforeach;?>	
	<div style=" padding-left:230px;">
	<a href="<?php echo site_url('main/news_list');?>">...more</a>
    </div>
</div>
<div class="left_box_bottom"></div>
</div>
