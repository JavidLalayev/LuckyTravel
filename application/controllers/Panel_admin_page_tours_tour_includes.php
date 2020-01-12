<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Panel_admin_page_tours_tour_includes extends MY_Controller{

    private $view_folder = "";
    private $table_name= "";
    private $upload_path= "";
    private $label_name_and_input_name = "";
    private $update_link = "";
    private $add_link = "";
    private $delete_link = "";
    private $link_for_update_modal = "";
    private $success_link = "";
    private $error_link = "";
    private $get_data_link = "";
    private $input_name_type ="";
    private $field_names ="";
    private $add_update_input_array  ="";


    public function __construct()
    {
        parent::__construct();

//      adminin icindeki papkanin adi
        $this->view_folder = "tour_and_tour_includes";

//      tablemizin adi
        $this->table_name = "tour_and_tour_includes";

//      sekilleri ve fayllari yukleyeceyimiz yer meselen: base_url("uploads/teachers/")
        $this->upload_path = "uploads/tours_includes/";

//      tablemizin fieldlerinin array icinde siralanmasi BU DEYISILMIR!
        $this->field_names = $this->Core->list_fields("tour_includes");

        $this->label_name_and_input_name = array();

        $this->input_name_type = array();

        $this->add_update_input_array = array();


//      tabledeki melumatlarin add olunduqu link
        $this->add_link                       = base_url("Panel_admin_page_tours_tour_includes/add/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez


//      proseslerden her hansi biri ugurla basa catdiqda hansi linke atsin
        $this->success_link                   = base_url("Panel_admin_page_tours_tour_includes/index/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

        $this->delete_link = base_url("Panel_admin_page_tours_tour_includes/delete/");

//      proseslerden her hansi biri ugurla basa catmadiqda hansi linke atsin
        $this->error_link                     = base_url("Panel_admin_page_tours_tour_includes/index/");//bunnarin sonuna slash qoymaq vacibdir yoxsa islemez

//      data tablenin icine melumatlarin ajaxnan getirilmesi ucun lazim olan link
        $this->get_data_link                  = base_url("Panel_admin_page_tours_tour_includes/get_data/");
    }

    public function index($id)
    {

        $config["label_name_and_input_name"] = $this->label_name_and_input_name;
        $config["input_name_type"] = $this->input_name_type;
        $config["select_name_and_table_name"] = array(
            "tour_includes_id.Tura Daxildir" => "tour_includes.name_az"
        );
        $config["update_link"] = $this->update_link . $id;
        $config["add_link"]    = $this->add_link . $id;
        $data["create_modal"] = $this->create_view($config);


        $data["get_data_link"] = $this->get_data_link . $id;
        $data["field_names"] = $this->field_names;
        $data["view_folder"] = $this->view_folder;
        $this->load->view('admin/includes/index', $data);

    }

    public function get_data($id)
    {
        $teacher_ids = $this->Core->get_where_result_desc(array("tour_id" => $id), "tour_and_tour_includes");
        $id_array = [];
        foreach ($teacher_ids as $item){
            $id_array[] = $item["tour_includes_id"];
        }

        $config["id"] = "id";
        $config["id_array"] = $id_array;
        $config["additional_links"] = array();
        $config["table_name"] = "tour_includes";
        $config["upload_path"] = $this->upload_path;

        $config["delete_link"] = $this->delete_link . $id . "/";
        $config["link_for_update_modal"] = $this->link_for_update_modal;

        $this->data_table_array($config);
    }

    public function add($id)
    {

        $config["inputs_array"] = array(
            "tour_includes_id" => "tour_includes_id",
            "tour_id" => "(not_input)$id",
        );
        $config["success_link"] = $this->success_link . $id;
        $config["error_link"] =  $this->error_link . $id;
        $config["table_name"] = $this->table_name;
        $config["upload_path"] = $this->upload_path;

        $this->insert_db($config);

    }

    public function delete($id, $id2)
    {

        $config["where"] = array(
            "tour_includes_id"=> $id2,
            "tour_id"=> $id,
        );
        $config["table_file_field_names"] = array();
        $config["success_link"] = $this->success_link . $id;
        $config["error_link"] = $this->error_link . $id;
        $config["table_name"] = $this->table_name;

        $this->delete_db($config);

    }



}