<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        $this->load->view('includes/header-login');
        $this->load->view('login');
    }

    public function login_confirm() {
        $this->load->view('includes/header-login');
        $this->load->view('errors/saai-errors/login-error');
    }

    public function logar() {
        $LOGIN = $this->input->post('LOGIN');
        $SENHA = md5($this->input->post('SENHA'));

        $this->db->where('LOGIN', $LOGIN);
        $this->db->where('SENHA', $SENHA);
        $this->db->where('CD_PERMISSAO', 2);

        $data['tb_usuario'] = $this->db->get('tb_usuario')->result();

        if (count($data['tb_usuario']) == 1) {
            $dados['nome'] = $data['tb_usuario'][0]->NM_USUARIOcol;
            $dados['id'] = $data['tb_usuario'][0]->CD_USUARIO;

            $dados['logado'] = true;
            $this->session->set_userdata($dados);
            redirect('ListaUsuarios');
        }else{
            redirect('Login/login_confirm');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('Login');
    }

}
