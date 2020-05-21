<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class p10 extends CI_Controller {

    public function index(){
        $this->load->model("P10_model");
        $tmp = $this->P10_model->get();
        $sales = $this->P10_model->data1();
        
        $data["data"] = json_encode($tmp);
        $data["sales"] = json_encode([
            [
               "label" => "Sales",
               "color" => "#CB4335",
                "value" => $sales->total_sales
            ],
            [
                "label" => "Purchase",
                "color" => "#F4D03F",
                "value" => $sales->total_purchase
            ]
        ]);
        
        $this->load->view('p10', $data);

    }
}
?>