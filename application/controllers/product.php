<?php
include 'main.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Product extends Main {
 
    function __construct()
    {
        
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
        $this->load->library('grocery_CRUD');
        $this->load->model('Cms');
       
       
    }
    
    //for categories
//    public function categories($catId) 
//    {
//        
//        $data['categories_items'] =  $this->Cms->get_page_basedonCatId($catId);
//        $this->_renderView('product_gallery',$data);
//    }
    
    public function _renderViewG($page,$data) {
                
/*                $data['featured_menu'] = $this->Cms->get_featured_menu();
                $data['news'] = $this->Cms->get_news_list(1);
                $data['whoweare_links']=$this->Cms->get_page_basedonCatId('aboutus');
                
*/              $data['top_menu']=$this->Cms->get_topmenu(); 
                $data['product_cat']=$this->Cms->get_product_cat();
//                echo "<pre>";
//                print_r($data['top_menu']);
//		echo "</pre>";
//		die();
                
                $this->load->view('fe/common/product_gallery_header.php',$data);
                $this->load->view('fe/'.$page.'.php',$data);
                $this->load->view('fe/common/footer.php',$data);
    }

    public function productList($catId)
    {
		$data['categoryDetail'] = $this->Cms->get_category_name($catId);
                $data['productList'] = $this->Cms->get_productList($catId);
                //print_r($data);
                $this->_renderViewG('product_gallery',$data);
    }
    public function productDetail($product_id)
    {
		$data['productDetail'] = $this->Cms->get_productDetail($product_id);
                //print_r($data);
                $this->_renderView('product_detail',$data);
    }
}
?>
