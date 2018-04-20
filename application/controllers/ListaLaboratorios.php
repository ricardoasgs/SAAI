<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ListaLaboratorios extends CI_Controller {

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

        $this->db->select('*');

        $dados['tb_laboratorio'] = $this->db->get('tb_laboratorio')->result();

        if ($indice == 1) {
            $data ['msg'] = "Laboratório excluido com Sucesso!";
            $this->load->view('errors/saai-errors/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data ['msg'] = "Erro!";
            $this->load->view('errors/saai-errors/msg_erro', $data);
        } else if ($indice == 3) {
            $data ['msg'] = "Laboratório atualizado com sucesso!";
            $this->load->view('errors/saai-errors/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data ['msg'] = "Erro!";
            $this->load->view('errors/saai-errors/msg_erro', $data);
        }
        $this->load->view('includes/header');
        $this->load->view('lista-laboratorios', $dados);
    }

    public function excluir($id = null) {
        $this->verificar_sessao();

        $this->load->model('Laboratorios_model', 'laboratorios');

        if ($this->laboratorios->excluir($id)) {
            redirect('ListaLaboratorios/1');
        } else {
            redirect('ListaLaboratorios/2');
        }
    }

}
