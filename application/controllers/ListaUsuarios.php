<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ListaUsuarios extends CI_Controller {

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

        $this->db->select('*');

        $dados['tb_usuario'] = $this->db->get('tb_usuario')->result();

        if ($indice == 1) {
            $data ['msg'] = "Usuário excluido com Sucesso!";
            $this->load->view('errors/saai-errors/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data ['msg'] = "Erro!";
            $this->load->view('errors/saai-errors/msg_erro', $data);
        } else if ($indice == 3) {
            $data ['msg'] = "Usuario atualizado com sucesso!";
            $this->load->view('errors/saai-errors/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data ['msg'] = "Erro!";
            $this->load->view('errors/saai-errors/msg_erro', $data);
        }

        $this->load->view('includes/header', $dados);
        $this->load->view('lista-usuarios', $dados);
    }

    public function excluir($id = null) {
        $this->verificar_sessao();

        $this->load->model('Usuarios_model', 'usuarios');

        if ($this->usuarios->excluir($id)) {
            redirect('ListaUsuarios/1');
        } else {
            redirect('ListaUsuarios/2');
        }
    }

}
