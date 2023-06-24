<?php

class Arisan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_arisan');
    }

    function index() {

        $data['record'] = $this->db->get('tbl_arisan');
        //$this->load->view('tampilarisan',$data);
        $this->template->load('template', 'tampilarisan', $data);
    }

    function tagihan() {
        if (isset($_POST['submit'])) {
            // proses kategori
            $this->Model_arisan->update();
            redirect('arisan');
        } else {
           $this->db->where('npm',$this->uri->segment(3));
           $data['record']=  $this->db->get('tbl_arisan')->row_array();
           $this->template->load('template','form_tagihan',$data);           

        }
    }

}
?>