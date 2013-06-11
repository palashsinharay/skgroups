<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
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
    public function _renderView($page,$data) {
                
/*                $data['featured_menu'] = $this->Cms->get_featured_menu();
                $data['news'] = $this->Cms->get_news_list(1);
                $data['whoweare_links']=$this->Cms->get_page_basedonCatId('aboutus');
                
*/              $data['top_menu']=$this->Cms->get_topmenu(); 
                $data['product_cat']=$this->Cms->get_product_cat();
//                echo "<pre>";
//                print_r($data['top_menu']);
//		echo "</pre>";
//		die();
                
                $this->load->view('fe/common/header.php',$data);
                $this->load->view('fe/'.$page.'.php',$data);
                $this->load->view('fe/common/footer.php',$data);
    }

    public function _renderViewContact($page,$data) {
                
                //$data['featured_menu'] = $this->Cms->get_featured_menu();
                //$data['news'] = $this->Cms->get_news_list(1);
                //$data['whoweare_links']=$this->Cms->get_page_basedonCatId('aboutus');
                
                $data['top_menu']=$this->Cms->get_topmenu();
                $data['product_cat']=$this->Cms->get_product_cat();
                $this->load->view('fe/common/product_gallery_header.php',$data);
                $this->load->view('fe/'.$page.'.php',$data);
                $this->load->view('fe/common/footer.php',$data);
    }

    public function index()
    {
                $data['pageDetail'] = $this->Cms->get_page_content(8);
//                echo "<pre>";
//                print_r($data['pageDetail']);
//		echo "</pre>";
//		die();
		
        $this->_renderView('index',$data);
        
        

    }

    public function page($id)
    {
		$data['pageDetail'] = $this->Cms->get_page_content($id);

//		echo "<pre>";
//              print_r($data['pageDetail']);
//		echo "</pre>";
//		die();
                switch ($data['pageDetail']->type) {
                    case 'content':$this->_renderView('inner_page',$data);
                        break;
                    case 'product':$this->_renderView('inner_page',$data);
                        break;
                     case 'contact':$this->_renderViewContact('contact_us',$data);
                        break;
                    default:
                      $this->_renderView('inner_page',$data);
                        break;
                }
 	    
    }

    public function gallery()
    {
		$data['galleryContent'] = $this->Cms->get_gallery_content_all();
                $this->_renderView('gallery',$data);
    }

    public function product()
    {
		$data['productContent'] = $this->Cms->get_recruitment_content_all();
                $this->_renderView('product',$data);
    }	
   
    public function recruitment_details($id)
    {
		$data['recruitmentContent'] = $this->Cms->get_recruitment_content($id);
                $this->_renderView('recruitment_details',$data);
		
    }
    
    public function recruitment_apply($id,$message = null)
    {
		$data['recruitmentContent'] = $this->Cms->get_recruitment_content($id);
//                echo "<pre>";
//                print_r($data['recruitmentContent']);
//                echo "</pre>";
//                die();
                $data['message'] = $message ;
                $this->_renderView('recruitment_apply',$data);
		
    }	

    //for categories
    public function categories($catName) {
        
        $data['categories_items'] =  $this->Cms->get_page_basedonCatId($catName);
        $this->_renderView('categories',$data);
    }
	
    public function contact_us()
    {
				
                        //$data['contact_us_data']=$this->Cms->get_page_content(19);
		       
                        $data='';
                        $this->_renderViewContact('contact_us',$data);
    }
 	
    public function contactus_email()
    {
                    try
                    {
                            unset($_POST['action']);
                            $posted=array();
                            $posted["name"]  	= trim($this->input->post("name"));
                            $posted["email"]  	= trim($this->input->post("email"));
                            $posted["mobile"]  	= trim($this->input->post("mobile"));
                            $posted["address"]  = trim($this->input->post("address"));
                            $posted["message"]  = trim($this->input->post("message"));
//                            echo "hello";
//                            echo "<pre>";
//                            print_r($posted);
//                            echo "</pre>";
//                            die();
                                                           
                            // Call model and insert data
                            //$this->form_validation->set_rules('fname', 'fname', 'trim|required|xss_clean');
                            //$this->form_validation->set_rules('lname', 'lname', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('name', 'name', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('mobile', 'mobile', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('address', 'address', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('message', 'message', 'trim|required|xss_clean');
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
                            <tr><td>Mobile:</td><td>' . $posted["mobile"] . '</td></tr>
                            <tr><td>Address:</td><td>' . $posted["address"] . '</td></tr>
                            <tr><td>Message:</td><td>' . nl2br($posted["message"]) . '</td></tr>
                            </table>
                            </body>
                            </html>
                            ';


                            $status = $this->email_send($message,'sahani.bunty9@gmail.com',$posted["email"]);
                            //$status = $this->email_send($message,'contact@webcon.in',$posted["email"]);

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
        
	
    public function email_send($message,$email_to,$email_from,$filepath = null)
    {
    try
    {

                                    $this->load->library('email');
                                    $email_setting  = array('mailtype'=>'html');
                                    $this->email->initialize($email_setting);
                                    //$email_to    = 'siddharth@satyajittech.com';
                                    //$email_from  =  $posted["email"];
                                    $this->email->from($email_from, 'SKGROUP');
                                    $this->email->to($email_to);
                                    $this->email->bcc('sahani.bunty9@gmail.com');
                                    $this->email->subject('SKGROUP :');
                                    $this->email->message($message);
                                    if($filepath != NULL){
                                       $this->email->attach($filepath); 
                                      // echo $message;
                                      // echo "test";
                                      // die;
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

}
 
/* End of file main.php */
/* Location: ./application/controllers/main.php */