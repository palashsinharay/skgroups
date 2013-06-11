<script type="text/javascript">
$(document).ready(function() {


$('#sendcontact').click(function() {


var form_data = {
name 	: $('#name').val(),
email 	: $('#email').val(),
mobile 	: $('#mobile').val(),
address : $('#address').val(),
message : $('#message').val(),
ajax 	: '1'
};
		
		//alert($('#cap_div').text());	
		if($('#name').val()=='')
			{
					//alert("Enter NAME");
					msg="Please Provide your Name !";
					$('.success-message').html(msg);
					$('.success-message').fadeIn(500).show();
					return false;
								
			}
			else if($('#email').val()=='')
			{
            msg="Please provide your email address !";
			//alert("Please provide a valid email address !");
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}
			else if($('#mobile').val()=='')
			{
            msg="Please provide your mobile number !";
			//alert("Please provide a valid email address !");
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}
			else if(!validateEmail($('#email').val()))
			{
            msg="Please provide a valid email address !";
			//alert("Please provide a valid email address !");
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}
			else if($('#address').val()=='')
			{
            msg="Please provide your address !";
			//alert("Please provide a valid email address !");
			$('.success-message').html(msg);
			$('.success-message').fadeIn(500).show();
			return false;
			}
			else if($('#message').val()=='')
			{
					msg="Please Provide your message !";
					$('.success-message').html(msg);
					$('.success-message').fadeIn(500).show();
					return false;
			
			}
			else
			{
				$('.loading').show();
				$.ajax({
				url: "<?php echo site_url('main/contactus_email'); ?>",
				//url: "main/email_send",
				type: 'POST',
				async : false,
				data: form_data,
				success: function(msg) {
				//alert(msg);
				
				$('.success-message').html(msg);
				$('.success-message').fadeIn(500).show();
				$('.loading').hide();
				}
				});
		
		
		}
return false;
});
function validateEmail(user_email){
   var filter = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{1,4}$/;
    if(filter.test(user_email)){
        return true;
    }else{
        return false;
    }
}

});
</script>
<div class="container"> 

<!-- inner head start -->

<div class="inner_head">
<img src="<?php echo site_url('images/inner_head.jpg');?>" alt="" />
</div>

<!-- inner head end -->


<div class="clear"></div>    
    
<div class="content_area">
<h2>Contact<span> Us</span></h2>




	<form action="" method="post">
		<table class="form">
			<tr>
				<th><label for="name"><strong>Name:</strong></label></th>
				<td><input class="inp-text" name="name" id="name" type="text" size="30" /></td>
			</tr>

			<tr>
				<th><label class="email" for="email" title="Will be masked"><strong>E-mail:</strong></label></th>
				<td><input class="inp-text" name="email" id="email" type="text" size="30" /></td>
			</tr>

			<tr>
				<th><label for="web">Mobile:</label></th>
				<td><input class="inp-text" name="mobile" id="mobile" type="text" size="30" /></td>
			</tr>
                        
                        <tr>
				<th><label for="web">Address:</label></th>
				<td><input class="inp-text" name="address" id="address" type="text" size="30" /></td>
			</tr>                        

			<tr>
				<th class="message-up"><label for="message"><strong>Message:</strong></label></th>
				<td>
				<textarea name="message" id="message" cols="30" rows="5"></textarea>
				</td>
			</tr>

<!--			<tr>
				<th><label for="question" class="invisible">Question:</label></th>
				<td><samp>99&nbsp;+&nbsp;11&nbsp;=</samp> &nbsp; <input class="answer" name="antispam" id="question" type="text" size="5" /> 
				<span><strong>(spam protection)</strong></span></td>
			</tr>-->

			<tr>
				<td id="sendcontact" class="submit-button-right" colspan="2"><input class="submit-text" type="submit" value="SEND" title="Send your message" /></td>
			</tr>
		</table>
	</form>

<div class="success-message" style="display:none; color:#FF0000; font-size:14px; font-weight:600; margin-left: 111px;"></div>

<div class="clear"></div>
</div>



</div>

