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
                
*/                $this->load->view('fe/common/header.php',$data);
                $this->load->view('fe/'.$page.'.php',$data);
                $this->load->view('fe/common/footer.php',$data);
    }

    public function _renderViewContact($page,$data) {
                
                $data['featured_menu'] = $this->Cms->get_featured_menu();
                $data['news'] = $this->Cms->get_news_list(1);
                $data['whoweare_links']=$this->Cms->get_page_basedonCatId('aboutus');
                
                $this->load->view('fe/common/header_contact.php',$data);
                $this->load->view('fe/'.$page.'.php',$data);
                $this->load->view('fe/common/footer.php',$data);
    }

    public function index()
    {
				
                $data['']="";
		//$this->_renderView('index',$data);
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
                    case 'content':$this->_renderView('page',$data);
                        break;
                    case 'product':$this->product();
                        break;
                    default:
                      $this->_renderView('page',$data);
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
				
                        $data['contact_us_data']=$this->Cms->get_page_content(19);
		        $this->_renderViewContact('contact_us',$data);
    }
 	
        
	
	

}
 
/* End of file main.php */
/* Location: ./application/controllers/main.php */