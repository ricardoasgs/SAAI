<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class VerAgendamentos extends CI_Controller {

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
        $this->load->view('ver-agendamentos');
    }
    
        public function ver($id = null) {

        $this->db->where('CD_AGENDAMENTO', $id);
        $this->db->limit(1);
        $this->db->join('TB_USUARIO', 'TB_USUARIO.CD_USUARIO = TB_AGENDAMENTO.CD_USUARIO');
        $this->db->join('TB_PERIODO', 'TB_PERIODO.CD_PERIODO = TB_AGENDAMENTO.CD_PERIODO');
        $this->db->join('TB_BANCADA', 'TB_BANCADA.CD_BANCADA = TB_AGENDAMENTO.CD_BANCADA');
        $query = $this->db->get('tb_agendamento')->row();
           
        $data['agendamento'] = $query;

        $this->load->view('includes/header');


        $this->load->view('ver-agendamentos', $data);
    }


}
