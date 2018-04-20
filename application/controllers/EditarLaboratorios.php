<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EditarLaboratorios extends CI_Controller {

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
        $this->load->view('editar-laboratorios');
    }

    public function atualizar($id = null) {
        $this->verificar_sessao();

        $this->db->where('CD_LABORATORIO', $id);
        $data['tb_laboratorio'] = $this->db->get('tb_laboratorio')->result();

        $this->load->view('includes/header');


        $this->load->view('editar-laboratorios', $data);
    }
    
        public function salvar_atualizacao() {
        $this->verificar_sessao();
        $id = $this->input->post('CD_LABORATORIO');

        $data['NM_LABORATORIO'] = $this->input->post('NM_LABORATORIO');
        $data['DESC_LABORATORIO'] = $this->input->post('DESC_LABORATORIO');
        $data['NR_BANCADAS'] = $this->input->post('NR_BANCADAS');

        $this->load->model('Laboratorios_model', 'laboratorios');

        if ($this->laboratorios->salvar_atualizacao($data, $id)) {
            redirect('ListaLaboratorios/3');
        } else {
            redirect('ListaLaboratorios/4');
        }
    }

}
