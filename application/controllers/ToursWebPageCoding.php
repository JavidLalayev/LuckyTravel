<?php
 class ToursWebPageCoding extends CI_Controller{
     private $parent_folder = "";
     private $sub_folder = "";
     private $table_name = "";

     public function __construct()
     {
         parent::__construct();

         $this->parent_folder = "front";
         $this->sub_folder = "tours";
         $this->table_name = "tours";


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

         $search_value = strip_tags($this->input->post("search_value"));

         $this->session->unset_userdata("search_value");

         if (!empty($search_value)){
             $this->session->set_userdata("search_value", $search_value);
         }

         $this->session->unset_userdata("date_value");
         $this->session->unset_userdata("end_date_value");
         $this->session->unset_userdata("order_popularity");
         $this->session->unset_userdata("order_price");
         $this->session->unset_userdata("min_price");
         $this->session->unset_userdata("max_price");

         $data["total_tours"] = $this->Core->get_counts($this->table_name);
         $data["highest_price"] = $this->Core->get_highest_price("tours");
         $data["lowest_price"] = $this->Core->get_lowest_price("tours");

         $this->load->view("$this->parent_folder/$this->sub_folder/whole_page", $data);
     }







     public function load_data()
     {
         $lang = $this->session->userdata("dil");

         $search_value = strip_tags($this->input->post("search_value"));
         $date_value = strip_tags($this->input->post("date_value"));
         $end_date_value = strip_tags($this->input->post("end_date_value"));
         $min_price  = strip_tags($this->input->post("min_price"));
         $max_price  = strip_tags($this->input->post("max_price"));
         $order_price  = strip_tags($this->input->post("order_price"));
         $order_popularity = strip_tags($this->input->post("order_popularity"));

         if (!empty($order_price)){
             $this->session->set_userdata("order_price", $order_price);
             $this->session->unset_userdata("order_popularity");
             $this->session->unset_userdata("min_price");
             $this->session->unset_userdata("max_price");
             $this->session->unset_userdata("search_value");
             $this->session->unset_userdata("date_value");
             $this->session->unset_userdata("end_date_value");
         }

         if (!empty($order_popularity)){
             $this->session->set_userdata("order_popularity", $order_popularity);
             $this->session->unset_userdata("order_price");
             $this->session->unset_userdata("min_price");
             $this->session->unset_userdata("max_price");
             $this->session->unset_userdata("search_value");
             $this->session->unset_userdata("date_value");
             $this->session->unset_userdata("end_date_value");
         }

         if ($min_price >= 0 && !empty($max_price)){
             $this->session->set_userdata("min_price", $min_price);
             $this->session->set_userdata("max_price", $max_price);
             $this->session->unset_userdata("order_price");
             $this->session->unset_userdata("order_popularity");
             $this->session->unset_userdata("search_value");
             $this->session->unset_userdata("date_value");
             $this->session->unset_userdata("end_date_value");
         }

         if (!empty($search_value) && !empty($date_value) && !empty($date_value)){

             $explode = explode("/", $date_value);
             $explode2 = explode("/", $end_date_value);
             $date = $explode[2] . "-" . $explode[0] . "-" . $explode[1];
             $end_date = $explode2[2] . "-" . $explode2[0] . "-" . $explode2[1];

             $this->session->set_userdata("search_value", $search_value);
             $this->session->set_userdata("date_value", $date);
             $this->session->set_userdata("end_date_value", $end_date);
             $this->session->unset_userdata("order_popularity");
             $this->session->unset_userdata("order_price");
             $this->session->unset_userdata("min_price");
             $this->session->unset_userdata("max_price");

         }elseif (!empty($search_value) && empty($date_value) && empty($end_date_value)){

             $this->session->set_userdata("search_value", $search_value);
             $this->session->unset_userdata("order_popularity");
             $this->session->unset_userdata("order_price");
             $this->session->unset_userdata("min_price");
             $this->session->unset_userdata("max_price");
             $this->session->unset_userdata("date_value");
             $this->session->unset_userdata("end_date_value");

         }elseif (!empty($date_value) && !empty($end_date_value) && empty($search_value)){

             $explode = explode("/", $date_value);
             $explode2 = explode("/", $end_date_value);
             $date = $explode[2] . "-" . $explode[0] . "-" . $explode[1];
             $end_date = $explode2[2] . "-" . $explode2[0] . "-" . $explode2[1];

             $this->session->set_userdata("date_value", $date);
             $this->session->set_userdata("end_date_value", $end_date);
             $this->session->unset_userdata("order_popularity");
             $this->session->unset_userdata("order_price");
             $this->session->unset_userdata("min_price");
             $this->session->unset_userdata("max_price");
             $this->session->unset_userdata("search_value");

         }



         //--------------pagination start------------
         $this->load->library('pagination');
         $config["base_url"]    = base_url($this->uri->segment(1) . "/load_data");


//         paginationda rowlarin sayilmasi
         if ($this->session->userdata("min_price") >= 0 && !empty($this->session->userdata("max_price"))){
             $where = array(
                 intval($this->session->userdata("min_price")),
                 intval($this->session->userdata("max_price")),
             );
             $config["total_rows"] = $this->db->where("tour_price >=" , $where[0])->where("tour_price <=" , $where[1])->from($this->table_name)->count_all_results();

         }
         elseif(!empty($this->session->userdata("search_value")) || !empty($this->session->userdata("date_value")) || !empty($this->session->userdata("end_date_value"))){

             if (!empty($this->session->userdata("search_value")) && !empty($this->session->userdata("date_value")) && !empty($this->session->userdata("end_date_value"))){

                 $this->db->where("date", $this->session->userdata("date_value"));
                 $this->db->where("end_date", $this->session->userdata("end_date_value"));
                 $this->db->like("name_$lang", $this->session->userdata("search_value"));
                 $this->db->or_like("desc_$lang", $this->session->userdata("search_value"));
                 $config["total_rows"] = $this->db->from($this->table_name)->count_all_results();

             }
             elseif(!empty($this->session->userdata("search_value")) && empty($this->session->userdata("date_value"))  && empty($this->session->userdata("end_date_value"))){

                 $this->db->like("name_$lang", $this->session->userdata("search_value"));
                 $this->db->or_like("desc_$lang", $this->session->userdata("search_value"));
                 $config["total_rows"] = $this->db->from($this->table_name)->count_all_results();

             }
             else{
                 $this->db->where("date", $this->session->userdata("date_value"));
                 $this->db->where("end_date", $this->session->userdata("end_date_value"));
                 $config["total_rows"] = $this->db->from($this->table_name)->count_all_results();
             }


         }
         else{
             $config["total_rows"]  = $this->Core->get_counts($this->table_name);
         }
//         paginationda rowlarin sayilmasi


         $config["uri_segment"] = 3;
         $config["per_page"]    = 8;
         $config["num_links"] = 3;
         $config['full_tag_open']    = '<ul class="cp_content color-1">';
         $config['full_tag_close']   = "</ul>";
         $config['first_link'] = '&lt;&lt;';
         $config['first_tag_open'] = '<li class="prev c_pagination_li">';
         $config['first_tag_close'] = '</li>';
         $config['last_link'] = '&gt;&gt;';
         $config['last_tag_open'] = '<li class="c_pagination_li">';
         $config['last_tag_close'] = '</li>';
         $config['next_link'] = ' &gt; ';
         $config['next_tag_open'] = '<li class="page-item c_pagination_li">';
         $config['next_tag_close'] = '</li>';
         $config['prev_link'] = ' &lt; ';
         $config['prev_tag_open'] = '<li class="c_pagination_li">';
         $config['prev_tag_close'] = '</li>';
         $config['cur_tag_open'] = '<li class="active"><a>';
         $config['cur_tag_close'] = '</a></li>';
         $config['num_tag_open'] = '<li class="c_pagination_li">';
         $config['num_tag_close'] = '</li>';

         $this->pagination->initialize($config);

         $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


//         filterasiyaya uygun datanin getirilmesi
         if ( empty($this->session->userdata("order_price")) && empty($this->session->userdata("order_popularity")) && empty($this->session->userdata("min_price")) && empty($this->session->userdata("max_price")) && empty($this->session->userdata("date_value")) && empty($this->session->userdata("search_value")) ){
             $data['tours'] = $this->Core->get_pagination_desc($config["per_page"], $page, $this->table_name);
         }
         elseif ($this->session->userdata("order_price") == "asc"){
             $data['tours'] = $this->Core->get_price_pagination_asc($config["per_page"], $page, $this->table_name);
         }
         elseif ($this->session->userdata("order_price") == "desc"){
             $data['tours'] = $this->Core->get_price_pagination_desc($config["per_page"], $page, $this->table_name);
         }
         elseif ($this->session->userdata("order_popularity") == "asc"){
             $data['tours'] = $this->Core->get_popularity_pagination_asc($config["per_page"], $page, $this->table_name);
         }
         elseif ($this->session->userdata("order_popularity") == "desc"){
             $data['tours'] = $this->Core->get_popularity_pagination_desc($config["per_page"], $page, $this->table_name);
         }
         elseif ($this->session->userdata("min_price") >= 0 && !empty($this->session->userdata("max_price"))){

             $where = array(
                 intval($this->session->userdata("min_price")),
                 intval($this->session->userdata("max_price")),
             );

             $data['tours'] = $this->Core->get_price_range_pagination($where, $config["per_page"], $page, $this->table_name);

         }

         if (!empty($this->session->userdata("search_value")) || !empty($this->session->userdata("date_value")) || !empty($this->session->userdata("end_date_value"))){

             if (empty($this->session->userdata("date_value")) && empty($this->session->userdata("end_date_value"))){
                 $data['tours'] = $this->Core->get_search_pagination($this->session->userdata("search_value"), $config["per_page"], $page, $this->table_name);
             }elseif(empty($this->session->userdata("search_value"))){
                 $data['tours'] = $this->Core->get_date_pagination($this->session->userdata("date_value"), $this->session->userdata("end_date_value"), $config["per_page"], $page, $this->table_name);
             }else{
                 $data['tours'] = $this->Core->get_search_pagination_date($this->session->userdata("date_value") , $this->session->userdata("end_date_value") , $this->session->userdata("search_value"), $config["per_page"], $page, $this->table_name);
             }

         }
//         filterasiyaya uygun datanin getirilmesi



         $data['links']  = $this->pagination->create_links();
         //--------------pagination end------------

         $data["total_tours"] = $config["total_rows"];

         $this->load->view("$this->parent_folder/$this->sub_folder/refresh_page/tours", $data);
     }

     public function single($lang, $id)
     {

         //bunnar butun controllerde ve metodlarda olmalidi
         $data['logo'] = $this->Core->get_where_row(array("id" => 1), "logo");

         $data["last_offers"] = $this->Core->get_desc_limit("offers", 3);
         $data["last_services"] = $this->Core->get_desc_limit("services", 3);
         $data["contact"] = $this->Core->get_where_row(array("id"=>1), "contact");
         //bunnar butun controllerde ve metodlarda olmalidi

//         tura daxildir hissesinin cagirilmasi ucun id lerin secilmesi
         $array = array();
         $tour_includes_id = $this->Core->get_select_where_result_desc(array("tour_includes_id"),array("tour_id" => $id), "tour_and_tour_includes");
         for ($i = 0; $i < count($tour_includes_id); $i++){
             $array[$i] = $tour_includes_id[$i]["tour_includes_id"];
         }


//         turun ve qalereyasinin caqirilmasi eger tur yoxdusa ana seyfeye atacaq
         $data["tour"] = $this->Core->get_where_row(array("id" => $id), $this->table_name);
         $data["tour_gallery"] = $this->Core->get_where_result_desc(array("tour_id" => $id), "tour_gallery");
         if (!empty($tour_includes_id)){
            $data["tour_includes"] = $this->Core->get_where_in_result_desc($array, "tour_includes");
         }else{
             $data["tour_includes"] = array();
         }


         if (empty($data["tour"])){
             redirect(base_url());
         }else{
//             turun klick sayi bir vahid artir
             $ip = getUserIpAddr();

             if ($id . $ip != $this->session->userdata("id_$id$ip")){
                 $data["tour"]["click_times"]++;
                 $this->Core->update(array("id" => $id), $this->table_name, array("click_times" => $data["tour"]["click_times"]));
                 $this->session->set_userdata("id_$id$ip", $id . $ip);
             }

         }

//         en cox kliklenen 4 tur cagirilir
         $data["popular_tours"] = $this->Core->get_popular_tours($this->table_name);


//         en son yaradilan 4 tur cagirilir
         $data["last_tours"] = $this->Core->get_desc_limit($this->table_name, 4);

//         elaqe ucun melumatlar  cagirilir
         $data["contact"] = $this->Core->get_where_row(array("id" => 1), "contact");

         $this->load->view("$this->parent_folder/$this->sub_folder/single_page",$data);
     }



 }
