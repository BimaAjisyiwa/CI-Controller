<?php 
 
class Web extends CI_Controller
{ 
    public function index()
    { 
       $data = [
           'judul' => 'Beranda'
        ];

        $this->load->view('template/v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('template/v_footer', $data);
    } 

    public function about()
    {          
        $data = [
            'judul' => 'About'
        ]; 

        $this->load->view('template/v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('template/v_footer', $data);
    } 
}