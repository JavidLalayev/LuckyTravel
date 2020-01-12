<?php
 class BlogsWebPageCoding extends CI_Controller{
     private $parent_folder = "";
     private $sub_folder = "";
     private $table_name = "";

     public function __construct()
     {
         parent::__construct();

         $this->parent_folder = "front";
         $this->sub_folder = "blog";
         $this->table_name = "blog";


        $dil = $this->uri->segment(1);
         if ($dil == ""){
             $dil = "az";
         }
         $this->lang->load($dil, $dil);

         $this->session->set_userdata("dil", $dil);

     }

     public function index()
     {
         //bunnar butun controllerde ve metodlarda olmalidi
         $data['logo'] = $this->Core->get_where_row(array("id" => 1), "logo");

         $data["last_offers"] = $this->Core->get_desc_limit("offers", 3);
         $data["last_services"] = $this->Core->get_desc_limit("services", 3);
         $data["contact"] = $this->Core->get_where_row(array("id"=>1), "contact");
         //bunnar butun controllerde ve metodlarda olmalidi

         $data["blog_category"] = $this->Core->get_desc("blog_category");

         $this->load->view("$this->parent_folder/blogs_category/whole_page", $data);
     }

     public function blogs($lang, $id)
     {

         //bunnar butun controllerde ve metodlarda olmalidi
         $data['logo'] = $this->Core->get_where_row(array("id" => 1), "logo");

         $data["last_offers"] = $this->Core->get_desc_limit("offers", 3);
         $data["last_services"] = $this->Core->get_desc_limit("services", 3);
         $data["contact"] = $this->Core->get_where_row(array("id"=>1), "contact");
         //bunnar butun controllerde ve metodlarda olmalidi
         $where = array(
             "blog_category_id" => $id,
         );

         //--------------pagination start------------
         $this->load->library('pagination');

         $config["base_url"]    = base_url($this->uri->segment(1) . "/blogs/$id/");
         $config["total_rows"]  = $this->Core->get_counts_where($where, "blog");// bu duzelecek
         $config["uri_segment"] = 4;
         $config["per_page"]    = 12;

         $config["num_links"] = 4;
         $config['full_tag_open']    = "<ul class=\"cp_content color-3\">";
         $config['full_tag_close']   = "</ul>";


         $config['first_link'] = '&lt;&lt;';
         $config['first_tag_open'] = '<li class="prev">';
         $config['first_tag_close'] = '</li>';

         $config['last_link'] = '&gt;&gt;';
         $config['last_tag_open'] = '<li >';
         $config['last_tag_close'] = '</li>';

         $config['next_link'] = ' &gt; ';
         $config['next_tag_open'] = '<li class="page-item">';
         $config['next_tag_close'] = '</li>';

         $config['prev_link'] = ' &lt; ';

         $config['prev_tag_open'] = '<li>';
         $config['prev_tag_close'] = '</li>';

         $config['cur_tag_open'] = '<li class="active"><a href="">';
         $config['cur_tag_close'] = '</a></li>';

         $config['num_tag_open'] = '<li>';
         $config['num_tag_close'] = '</li>';

         $this->pagination->initialize($config);

         $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;


         $data["blogs"] = $this->Core->get_where_result_desc_limit($config["per_page"], $page, $where,'blog');


         $data['links']  = $this->pagination->create_links();
         //--------------pagination end------------



         $this->load->view("$this->parent_folder/$this->sub_folder/whole_page", $data);

     }

     public function single_page($lang, $id)
     {
         //bunnar butun controllerde ve metodlarda olmalidi
         $data['logo'] = $this->Core->get_where_row(array("id" => 1), "logo");

         $data["last_offers"] = $this->Core->get_desc_limit("offers", 3);
         $data["last_services"] = $this->Core->get_desc_limit("services", 3);
         $data["contact"] = $this->Core->get_where_row(array("id"=>1), "contact");
         //bunnar butun controllerde ve metodlarda olmalidi

         $data["blog"] = $this->Core->get_where_row(array("id" => $id), "blog");

         $this->load->view("$this->parent_folder/blog/single_page", $data);
     }

 }