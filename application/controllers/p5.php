<?php
defined('BASEPATH') OR exit('No direct access allowed');

class P5 extends CI_Controller
{
	
	public function index()
	{
		$data['title']='Home';
		$this->load->view('p5a', $data);
	}
	public function form()
	{
		$data['title']="Form";
		$this->load->helper('form');
		$this->load->view('p5form', $data);
	}
	public function form_b() 
	{ 
	    $data['title'] = "Form_Boostrap";
	    $this->load->helper('form');
	    $this->load->view('p5form_2',$data);
	} 
	public function home()
 	{
 		$this->load->model("P6_model");

 		$data['title']="Home";
 		$data['contacts']= $this->P6_model->get();

 		$this->load->view('p6home',$data);
 	}
}