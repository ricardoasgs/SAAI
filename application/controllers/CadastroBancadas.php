<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroBancadas extends CI_Controller {

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

    public function index($indice = null) {

        $this->verificar_sessao();

        if ($indice == 1) {
            $data ['msg'] = "Bancada cadastrada com Sucesso!";
            $this->load->view('errors/saai-errors/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data ['msg'] = "Erro!";
            $this->load->view('errors/saai-errors/msg_erro', $data);
        }

        $this->load->view('includes/header');
        $this->load->view('cadastro-bancadas');
    }

    public function cadastrar() {
        $this->verificar_sessao();

        $data['DESC_BANCADA'] = $this->input->post('DESC_BANCADA');
        $data['QNTD_SUPORTADA'] = $this->input->post('QNTD_SUPORTADA');
        $data['CD_LABORATORIO'] = $this->input->post('CD_LABORATORIO');
        
        
        $this->load->model('Bancadas_model', 'bancadas');

        if ($this->bancadas->cadastrar($data)) {

            redirect('CadastroBancadas/1');
        } else {
            redirect('CadastroBancadas/2');
        }
    }

}
