<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EditarBancadas extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

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
    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Login/login_confirm');
        }
    }

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('editar-bancadas');
    }

    public function salvar_atualizacao() {
        $this->verificar_sessao();
        $id = $this->input->post('CD_BANCADA');


        $data['DESC_BANCADA'] = $this->input->post('DESC_BANCADA');
        $data['QNTD_SUPORTADA'] = $this->input->post('QNTD_SUPORTADA');
        $data['CD_LABORATORIO'] = $this->input->post('CD_LABORATORIO');

        $this->load->model('Bancadas_model', 'bancadas');

        if ($this->bancadas->salvar_atualizacao($data, $id)) {
            redirect('ListaBancadas/3');
        } else {
            redirect('ListaBancadas/4');
        }
    }

    public function atualizar($id = null) {
        $this->verificar_sessao();

        $this->db->where('CD_BANCADA', $id);
        $data['tb_bancada'] = $this->db->get('tb_bancada')->result();

        $this->load->view('includes/header');


        $this->load->view('editar-bancadas', $data);
    }

}
