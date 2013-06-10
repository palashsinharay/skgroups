<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Email extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
        $config['upload_path'] = './assets/uploads/cv';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|txt';
        $this->load->library('upload', $config);
        $this->load->library('grocery_CRUD');
		//$this->load->library('email');
		//$config['protocol'] = 'sendmail';
		//$config['charset'] = 'utf-8';
		//$config['wordwrap'] = TRUE;
		//$config['mailtype'] = 'html';
		//$this->email->initialize($this->config);

		$this->load->model('Cms');
 
}

    public function job_email()
    {
			//print_r($_FILES['fileField']);
			//die();
                        $this->upload->do_upload('fileField');
                        $data = $this->upload->data();
                     
			try
			{
				unset($_POST['action']);
				$posted=array();
                                $posted["jobid"]  = trim($this->input->post("jobid"));
				$posted["post_app"]  	= trim($this->input->post("post_app"));
				$posted["sl_no"]  	= trim($this->input->post("sl_no"));
				$posted["name"]  	= trim($this->input->post("name"));
				$posted["mob"]      = trim($this->input->post("mob"));
				$posted["email"]  	= trim($this->input->post("email"));
				$posted["addr"]  	= trim($this->input->post("addr"));
				$posted["state"]  	= trim($this->input->post("state"));	
				$posted["city"]  	= trim($this->input->post("city"));	
				$posted["last_qulifc"]  	= trim($this->input->post("last_qulifc"));	
				$posted["fileField"]  	= trim($this->input->post("fileField"));							
				/*                                echo "hello";
				echo "<pre>";
				print_r($posted);
				echo "</pre>";
				die();
				*/                                
				// Call model and insert data
				//$this->form_validation->set_rules('fname', 'fname', 'trim|required|xss_clean');
				//$this->form_validation->set_rules('lname', 'lname', 'trim|required|xss_clean');
				$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
				$this->form_validation->set_rules('name', 'name', 'trim|required|xss_clean');
				$this->form_validation->set_rules('mob', 'mob', 'trim|required|xss_clean');
				$this->form_validation->set_message('required', 'Please fill in the fields');
				
				if($this->form_validation->run() == FALSE)/////invalid
				{
				////////Display the add form with posted values within it////
				$this->data["posted"]=$posted;
				}
				else
				{
				// ------------------ email send code start ------------------ //
				
				$message='
				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
				"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head></head>
				<body>
				<table>
				<tr><td>Name:</td><td>' .  $posted['name'].'</td></tr>
				<tr><td>Email:</td><td>' . $posted["email"] . '</td></tr>
				<tr><td>Mobile:</td><td>' . $posted["mob"] . '</td></tr>
				<tr><td>Address:</td><td>' . $posted["addr"] . '</td></tr>
				<tr><td>State:</td><td>' . $posted["state"] . '</td></tr>
				<tr><td>Post applied for:</td><td>' . $posted["post_app"] . '</td></tr>
				<tr><td>Serial No(Job Code):</td><td>' . $posted["sl_no"] . '</td></tr>
				<tr><td>Last Qualification :</td><td>' . $posted["last_qulifc"] . '</td></tr>
				</table>
				</body>
				</html>
				';
				//$this->email->attach($posted['fileField']);
				$status = $this->email_send($message,'siddharth@satyajittech.com',$posted["email"],$data['full_path']);
                                if($status == 'success'){
                                    $this->recruitment_apply($posted["jobid"],'job application successfully submitted');
                                }
                                
                                }								
			}
			catch(Exception $err_obj)
			{
					show_error($err_obj->getMessage());
			}
		}

    public function contactus_email()
    {
			try
			{
				unset($_POST['action']);
				$posted=array();
				$posted["full_name"]  	= trim($this->input->post("full_name"));
				$posted["mob_no"]  	= trim($this->input->post("mob_no"));
				$posted["email"]  	= trim($this->input->post("email"));
				$posted["addr"]      = trim($this->input->post("addr"));
				$posted["state"]  	= trim($this->input->post("state"));
				$posted["comment"]  	= trim($this->input->post("comment"));						
				/*                                echo "hello";
				echo "<pre>";
				print_r($posted);
				echo "</pre>";
				die();
				*/                                
				// Call model and insert data
				//$this->form_validation->set_rules('fname', 'fname', 'trim|required|xss_clean');
				//$this->form_validation->set_rules('lname', 'lname', 'trim|required|xss_clean');
				$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
				$this->form_validation->set_rules('comment', 'comment', 'trim|required|xss_clean');
				$this->form_validation->set_message('required', 'Please fill in the fields');
				if($this->form_validation->run() == FALSE)/////invalid
				{
				////////Display the add form with posted values within it////
				$this->data["posted"]=$posted;
				}
				else
				{
				// ------------------ email send code start ------------------ //
				
				$message='
				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
				"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head></head>
				<body>
				<table>
				<tr><td>Name:</td><td>' .  $posted['full_name'].'</td></tr>
				<tr><td>Email:</td><td>' . $posted["email"] . '</td></tr>
				<tr><td>Mobile:</td><td>' . $posted["mob_no"] . '</td></tr>
				<tr><td>Address:</td><td>' . $posted["addr"] . '</td></tr>
				<tr><td>State:</td><td>' . $posted["state"] . '</td></tr>
				<tr><td>Message:</td><td>' . nl2br($posted["comment"]) . '</td></tr>
				</table>
				</body>
				</html>
				';
                                  			
				
				$status = $this->email_send($message,'siddharth@satyajittech.com',$posted["email"]);
				
                                if($status == 'success'){
                                   echo "Thank you for contacting us"; 
                                } else {
                                   echo "Message sending failed !"; 
                                }
                                
                                }								
			}
			catch(Exception $err_obj)
			{
					show_error($err_obj->getMessage());
			}
		}
    
    public function enquiry_email()
    {
			try
			{
				unset($_POST['action']);
				$posted=array();
				$posted["full_name"]  	= trim($this->input->post("full_name"));
				$posted["mob_no"]  	= trim($this->input->post("mob_no"));
				$posted["email"]  	= trim($this->input->post("email"));
				$posted["status"]      = trim($this->input->post("status"));
				$posted["enq_title"]  	= trim($this->input->post("enq_title"));
				$posted["subject1"]  	= trim($this->input->post("subject1"));						
				$posted["enq_detail"]  	= trim($this->input->post("enq_detail"));
				$posted["subject2"]  	= trim($this->input->post("subject2"));						

//                                echo "hello";
//				echo "<pre>";
//				print_r($posted);
//				echo "</pre>";
//				die();
				                                
				// Call model and insert data
				//$this->form_validation->set_rules('fname', 'fname', 'trim|required|xss_clean');
				//$this->form_validation->set_rules('lname', 'lname', 'trim|required|xss_clean');
				$this->form_validation->set_rules('full_name', 'full_name', 'trim|required|xss_clean');
				$this->form_validation->set_rules('mob_no', 'mob_no', 'trim|required|xss_clean');
				$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
				$this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
				$this->form_validation->set_rules('enq_title', 'enq_title', 'trim|required|xss_clean');
				$this->form_validation->set_rules('subject1', 'subject1', 'trim|required|xss_clean');
				$this->form_validation->set_rules('enq_detail', 'enq_detail', 'trim|required|xss_clean');
                                $this->form_validation->set_rules('subject2', 'subject2', 'trim|required|xss_clean');

                                $this->form_validation->set_message('required', 'Please fill in the fields');
				if($this->form_validation->run() == FALSE)/////invalid
				{
				////////Display the add form with posted values within it////
				$this->data["posted"]=$posted;
				}
				else
				{
				// ------------------ email send code start ------------------ //
				
				$message='
				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
				"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head></head>
				<body>
				<table>
				<tr><td>Name:</td><td>' .  $posted['full_name'].'</td></tr>
				<tr><td>Email:</td><td>' . $posted["email"] . '</td></tr>
				<tr><td>Mobile:</td><td>' . $posted["mob_no"] . '</td></tr>
				<tr><td>Enquiry Status:</td><td>' . $posted["status"] . '</td></tr>
				<tr><td>Enquiry Title:</td><td>' . $posted["enq_title"] . '</td></tr>
				<tr><td>Enquiry Subject:</td><td>' .  $posted['subject1'].'</td></tr>
				<tr><td>Enquiry Detail:</td><td>' . $posted["enq_detail"] . '</td></tr>
				<tr><td>Mode of Contact:</td><td>' . $posted["subject2"] . '</td></tr>
				
				</table>
				</body>
				</html>
				';
                                  			
				
				//$status = $this->email_send($message,'siddharth@satyajittech.com',$posted["email"]);
                                $status = $this->email_send($message,'enquiry@webcon.in',$posted["email"]);
				
                                if($status == 'success'){
                                   echo "Thank you for contacting us"; 
                                } else {
                                   echo "Message sending failed !"; 
                                }
                                
                                }								
			}
			catch(Exception $err_obj)
			{
					show_error($err_obj->getMessage());
			}
		}  
		
    ############# contact us email send function Start #############
    public function email_send($message,$email_to,$email_from,$filepath = null)
    {
	try
	{
                       
                                        $this->load->library( 'email' );
                                        $email_setting  = array('mailtype'=>'html');
                                        $this->email->initialize($email_setting);
                                        //$email_to    = 'siddharth@satyajittech.com';
                                        //$email_from  =  $posted["email"];
                                        $this->email->from($email_from, 'WEBCON');
                                        $this->email->to($email_to);
                                        $this->email->bcc('sahani.bunty9@gmail.com');
                                        $this->email->subject('Contact Us Form WEBCON :');
                                        $this->email->message($message);
                                        
                                        if($filepath != NULL){
                                           $this->email->attach($filepath); 
                                        }
                                        
                                        if($this->email->send())
                                        {
                                                     return 'success';
                                                     
                                        }					

                     // ------------------ email send code end ------------------//
									
			   					
				
	
	}
	catch(Exception $err_obj)
	{
			show_error($err_obj->getMessage());
	}
	
 }
    ############# contact us email send function  End #############
    }
?>