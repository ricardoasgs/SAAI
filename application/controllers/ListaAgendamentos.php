<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ListaAgendamentos extends CI_Controller {

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
        $this->db->join('TB_USUARIO', 'TB_USUARIO.CD_USUARIO = TB_AGENDAMENTO.CD_USUARIO');
        $this->db->join('TB_BANCADA', 'TB_BANCADA.CD_BANCADA = TB_AGENDAMENTO.CD_BANCADA');
        $query = $this->db->get('tb_agendamento')->result();
        
        $dados['tb_agendamento'] = $query;
        //$dados['tb_agendamento'] = $this->db->get('tb_agendamento')->result();

        if ($indice == 1) {
            $data ['msg'] = "Agendamento excluido com Sucesso!";
            $this->load->view('errors/saai-errors/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data ['msg'] = "Erro!";
            $this->load->view('errors/saai-errors/msg_erro', $data);
        } else if ($indice == 3) {
            $data ['msg'] = "Agendamento atualizado com sucesso!";
            $this->load->view('errors/saai-errors/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data ['msg'] = "Erro!";
            $this->load->view('errors/saai-errors/msg_erro', $data);
        }

        $this->load->view('includes/header');
        $this->load->view('lista-agendamentos', $dados);
    }

    public function excluir($id = null) {
        $this->verificar_sessao();

        $this->load->model('Agendamentos_model', 'agendamentos');

        if ($this->agendamentos->excluir($id)) {
            redirect('ListaAgendamentos/1');
        } else {
            redirect('ListaAgendamentos/2');
        }
    }
}
