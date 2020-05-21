<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class p4 extends CI_Controller{
	public function index()
	{
		$this->load->view('p4');
    }
    public function pertemuan4()
    {
        $data['title'] = "Pertemuan 4";
        $this->load->view('p4data',$data);
    }
    public function pertemuan4a($id)
    {
        echo "data diterima: ".$id;
    }
    public function pertemuan4b()
    {
        $data = $this->input->get();
        echo "data diterima: ";
        echo var_dump($data);
    }
    public function pertemuan4c()
    {
        $this->load->library("libp4");
        echo $this->libp4->greet();
    }
    public function pertemuan4d()
    {
        $data = $this->input->get();
        $p_1 = $data['a'];
        $p_2 = $data['b'];
        $this->load->library("multiplication");
        echo "{$p_1} * {$p_2} = {$this->multiplication->calculate($p_1, $p_2)}";
    }
}
?>