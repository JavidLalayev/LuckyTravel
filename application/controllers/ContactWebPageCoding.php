<?php
 class ContactWebPageCoding extends CI_Controller{
     private $parent_folder = "";
     private $sub_folder = "";

     public function __construct()
     {
         parent::__construct();

         $this->parent_folder = "front";
         $this->sub_folder = "contact";


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

         $data["contact"] = $this->Core->get_where_row(array("id" => 1), "contact");


         $this->load->view("$this->parent_folder/$this->sub_folder/whole_page", $data);
     }

     public function send_message()
     {

         $lang = $this->session->userdata("dil");

         $name=strip_tags($this->input->post("user"));
         $mail=strip_tags($this->input->post("mail"));
         $phone=strip_tags($this->input->post("number"));
         $msg=strip_tags($this->input->post("msg"));

        //  email hissesi
         $config = Array(
             'protocol' => 'smtp',
             'smtp_host' => 'ssl://smtp.googlemail.com',
             'smtp_port' => 465,
             'smtp_user' => 'testermail0777@gmail.com',
             'smtp_pass' => 'testerCODE',
             'mailtype'  => 'html',
             'charset'  => 'html',
             'wordwrap'  => TRUE, );
         $this->load->library("email");
         $this->email->initialize($config);
         $this->email->set_newline("\r\n");
         $this->email->from('testermail0777@gmail.com', $this->input->post('user'));
         $this->email->to("cavidleleyev9a12014@gmail.com");
         $this->email->subject(' LuckyTravel  ');
         $this->email->message("$name adlı şəxsdən mesaj:<br> $msg <br> <br> <strong>Şəxslə əlaqə:</strong> <br> $mail <br> $phone") ;
         $this->email->send();
         $this->session->set_flashdata("sccs", "Mesajınız göndərildi!");
         //  email hissesi

        if (!empty($name) && !empty($phone)){

            $data = array(
              "name_surname" => $name,
              "email" => $mail,
              "phone" => $phone,
              "text" => $msg,
            );

            $this->Core->add($data, "messages");

            redirect(base_url("$lang/home"));

        }else{
            $this->session->set_flashdata("error", "Xəta Baş Verdi!");
            redirect(base_url("$lang/home"));
        }

     }


 }