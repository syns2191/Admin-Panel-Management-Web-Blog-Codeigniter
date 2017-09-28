<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('post_model');
        $this->load->model('comment_model');
        $this->load->helper('form');
        $this->load->helper('date');
        
        
        //Ckeditor's configuration
        
    }
    public function index()
    {
        $this->load->view('message');
    }

    function view_detail1($id)
    {
        $data['viewdetail'] = $this->post_model->select_by_id($id);
        $data['listcomment'] = $this->comment_model->commentView($id);
        // $data['user'] = $this->gudang_model->userLogin();
        $this->load->view('commentpage',$data);
    }
    function view_detail($id)
    {
        $data['viewdetail'] = $this->post_model->select_by_id($id);
        $data['listcomment'] = $this->comment_model->commentView($id);
        $cm = $data['listcomment'];
        $banyakcomment = count($data['listcomment']);
        $replay = array();
        // $data['listcomment'][0]['name'][] = array();
        for ($i=0; $i <$banyakcomment; $i++) { 
            $data['listcomment'][$i]->replay=array();
            array_push($replay, $data['listcomment'][$i]);
             $data['listreplaycomment'] = $this->comment_model->viewreplay($cm[$i]->id);
             $rp = count($data['listreplaycomment']);
              $data['listcomment'][$i]->replied=$rp;
             $crp = $data['listreplaycomment'];
             if($rp>0){
                for ($y=0; $y <$rp ; $y++) { 
                    $data['rep'] = $this->comment_model->replay($crp[$y]->id);
                    array_push($replay[$i]->replay,$data['rep']);

                    // print_r($replay[0]->new);
                    // array_push($data['listcomment'][$i]->name,'aa');
                }
             }


             
            
        }

        // $data['viewdetail']->comment = $replay;
        // $json = json_encode($replay);
        $data['comments'] = $replay;
        // print_r($json);
         $this->load->view('commentpage',$data);
    }
}