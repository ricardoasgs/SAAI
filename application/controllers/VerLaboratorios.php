<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class VerLaboratorios extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('includes/header');
        $this->load->view('ver-laboratorios');
    }

    public function ver($id = null) {

        $this->db->where('CD_LABORATORIO', $id);
        $data['tb_laboratorio'] = $this->db->get('tb_laboratorio')->result();

        $this->load->view('includes/header');


        $this->load->view('ver-laboratorios', $data);
    }

}
