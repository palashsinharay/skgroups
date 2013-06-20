<script type="text/javascript">
$(document).ready(function() {


$('#enquiry').click(function() {
//alert("hii");

var form_data = {
f_name 	: $('#f_name').val(),
l_name 	: $('#l_name').val(),
email 	: $('#email').val(),
phone   : $('#phone').val(),
address : $('#address').val(),
address2 : $('#address2').val(),
address3 : $('#address3').val(),
city : $('#city').val(),
country : $('#country').val(),
postcode : $('#postcode').val(),
message : $('#message').val(),
ajax 	: '1'
};
		
		//alert($('#cap_div').text());	
		if($('#f_name').val()=='')
			{
					//alert("Enter NAME");
					msg="Please Provide your First Name !";
					$('.success-message').html(msg);
					$('.success-message').fadeIn(500).show();
					return false;
								
			}
                        if($('#l_name').val()=='')
			{
					//alert("Enter NAME");
					msg="Please Provide your Last Name !";
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
			else if($('#phone').val()=='')
			{
            msg="Please provide your phone number !";
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
				url: "<?php echo site_url('main/enquiry_email'); ?>",
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
    <?php if($pageDetail->filename != NULL):?>
    <img src="<?php echo site_url('assets/uploads/files/'.$pageDetail->filename);?>" alt="" />
<?php else:?>
    <img src="<?php echo site_url('images/inner_head.jpg');?>" alt="" />
<?php endif;?>
</div>

<!-- inner head end -->


<div class="clear"></div>    
    
<div class="content_area">
<h2>Enquiry <span>Form</span></h2>




	<form action="" method="post">
		<table class="form">
        
             <tr>
				<th><label class="email"><strong>Name</strong></label></th>
				<td></td>
			</tr>
			
            <tr>
				<th><label for="name">First name:</label></th>
				<td><input class="inp-text" name="name" id="f_name" type="text" size="30" /></td>
			</tr>

			<tr>
				<th><label for="name">Last name:</label></th>
				<td><input class="inp-text" name="email" id="l_name" type="text" size="30" /></td>
			</tr>

			<tr>
				<th><label for="web">Email address:</label></th>
				<td><input class="inp-text" name="web" id="email" type="text" size="30" /></td>
			</tr>
            
            <tr>
				<th><label class="email"><strong>Contact details</strong></label></th>
				<td></td>
			</tr>
            
            
            <tr>
				<th><label for="web">Telephone:</label></th>
				<td><input class="inp-text" name="web" id="phone" type="text" size="30" /></td>
			</tr>
            
            
            <tr>
				<th><label for="web">Addres:</label></th>
				<td><input class="inp-text" name="web" id="address" type="text" size="30" /></td>
			</tr>
            
            <tr>
				<th><label for="web">Addres (line 2):</label></th>
				<td><input class="inp-text" name="address2" id="address2" type="text" size="30" /></td>
			</tr>
            
            <tr>
				<th><label for="web">Addres (line 3):</label></th>
				<td><input class="inp-text" name="address3" id="address3" type="text" size="30" /></td>
			</tr>
            
            <tr>
				<th><label for="web">City:</label></th>
				<td><input class="inp-text" name="web" id="city" type="text" size="30" /></td>
			</tr>
            
            <tr>
				<th><label for="web">Country:</label></th>
				<td><input class="inp-text" name="web" id="country" type="text" size="30" /></td>
			</tr>
            
            <tr>
				<th><label for="web">Post code:</label></th>
				<td><input class="inp-text" name="web" id="postcode" type="text" size="30" /></td>
			</tr>
  
			<tr>
				<th class="message-up"><label for="message"><strong>Comments or requests:</strong></label></th>
				<td>
				<textarea name="message" id="message" cols="30" rows="5"></textarea>
				</td>
			</tr>


			<tr>
				<td class="submit-button-right" colspan="2"><input class="submit-text" type="submit" value="Send my enquiry" title="Send enquiry" id="enquiry" /></td>
			</tr>
		</table>
	</form>

<div class="success-message" style="display:none; color:#FF0000; font-size:14px; font-weight:600; margin-left: 111px;"></div>

<div class="clear"></div>
</div>



</div>


