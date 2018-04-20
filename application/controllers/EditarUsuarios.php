<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EditarUsuarios extends CI_Controller {

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
        $this->verificar_sessao();

        $this->load->view('includes/header');
        $this->load->view('editar-usuarios');
    }

    public function salvar_atualizacao() {
        $this->verificar_sessao();
        $id = $this->input->post('CD_USUARIO');

        $data['NM_USUARIOcol'] = $this->input->post('NM_USUARIOcol');
        $data['EMAIL'] = $this->input->post('EMAIL');
        $data['NR_RG'] = $this->input->post('NR_RG');
        $data['NR_CPF'] = $this->input->post('NR_CPF');
        $data['LOGIN'] = $this->input->post('LOGIN');
        $data['SENHA'] = $this->input->post('SENHA');
        $data['CD_PERMISSAO'] = $this->input->post('CD_PERMISSAO');
        $data['CD_CURSO'] = $this->input->post('CD_CURSO');

        $this->load->model('Usuarios_model', 'usuarios');

        if ($this->usuarios->salvar_atualizacao($data, $id)) {
            redirect('ListaUsuarios/3');
        } else {
            redirect('ListaUsuarios/4');
        }
    }

    public function atualizar($id = null) {
        $this->verificar_sessao();

        $this->db->where('CD_USUARIO', $id);
        $data['tb_usuario'] = $this->db->get('tb_usuario')->result();

        $this->load->view('includes/header');


        $this->load->view('editar-usuarios', $data);
    }

}
