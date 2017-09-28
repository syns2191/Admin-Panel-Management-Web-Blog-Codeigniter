<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Notification_model');
        // $this->load->model('comment_model');
        $this->load->helper('form');
        $this->load->helper('date');
        
        
        //Ckeditor's configuration
        
    }
    public function index()
    {
        $this->load->view('message');
    }

    function notif()
    {
        $criteria = 0;
        $data['badgenotif'] = $this->Notification_model->countNotif($criteria);
        // $data['listcomment'] = $this->comment_model->commentView($id);
        // $data['user'] = $this->gudang_model->userLogin();
        echo json_encode($data);
    }

    function listNotif(){
        $data['listNotif'] = $this->Notification_model->listNotif();
        echo json_encode($data);
    }

    function allNotif(){
        $data['listNotif'] = $this->Notification_model->allNotif();
        $this->load->view('allNotif',$data);
    }

    public function getnotif($page){ 
        $offset = 1*$page; 
        $limit = 1; 
        $sql = "select * from notifications limit $offset ,$limit"; 
        $result = $this->db->query($sql)->result();
        return $result;
    }

    function readNotif(){
        $criteria =0;
        $status = 1;
        $data = $this->Notification_model->batch($criteria);
        $batchCount = count($data);
        for ($i=0; $i <$batchCount; $i++) { 
            $id = $data[$i]->id;
            $this->Notification_model->readNotif($id);
        }
        
    }

}