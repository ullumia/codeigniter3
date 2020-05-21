<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 /**
  * Mukaromahtul Ulum / 05-05-2020
  */
 class p9 extends CI_Controller
 {

    public function _construct()
    {
        parent:: _construct();
        $this->load->helper(array('form','uri','html'));

    }

    public function index()
    {
        $this->load->view('p9'. array('error' => ' '));
    }

    public function do_upload()
    {
        $config['upload_path']          = './assets';
        $config['allowed_type']         = 'gif|jpg|jpeg|mp3|txt'|'png';
        $config['max_size']             = 1000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('p9', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('p9',$data);
        }
    }
}