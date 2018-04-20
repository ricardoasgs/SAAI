<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EditarAgendamentos extends CI_Controller {

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
        $this->load->view('editar-agendamentos');
    }

    public function atualizar($id = null) {
        $this->verificar_sessao();

        $this->db->where('CD_AGENDAMENTO', $id);
        $data['tb_agendamento'] = $this->db->get('tb_agendamento')->result();
        
        $this->db->where('CD_AGENDAMENTO', $id);
        $this->db->limit(1);
        $this->db->join('TB_USUARIO', 'TB_USUARIO.CD_USUARIO = TB_AGENDAMENTO.CD_USUARIO');
        $this->db->join('TB_PERIODO', 'TB_PERIODO.CD_PERIODO = TB_AGENDAMENTO.CD_PERIODO');
        $this->db->join('TB_BANCADA', 'TB_BANCADA.CD_BANCADA = TB_AGENDAMENTO.CD_BANCADA');
        $query = $this->db->get('tb_agendamento')->row();
        
        $data['usuarios'] = $this->getUsuario();
        $data['bancadas'] = $this->getBancada();
        $data['periodos'] = $this->getPeriodo();
           
        $data['agendamento'] = $query;

        $this->load->view('includes/header');
        $this->load->view('editar-agendamentos', $data);
    }
    
    public function salvar_atualizacao() {
        $this->verificar_sessao();
        $id = $this->input->post('CD_AGENDAMENTO');

        $data['CD_BANCADA'] = $this->input->post('CD_BANCADA');
        $data['CD_PERIODO'] = $this->input->post('CD_PERIODO');
        $data['CD_USUARIO'] = $this->input->post('CD_USUARIO');
        $data['DT_AGENDAMENTO'] = $this->input->post('DT_AGENDAMENTO');

        $this->load->model('Agendamentos_model', 'agendamentos');

        if ($this->agendamentos->salvar_atualizacao($data, $id)) {
            redirect('ListaAgendamentos/3');
        } else {
            redirect('ListaAgendamentos/4');
        }
    }
    
    public function getUsuario() {
        $query = $this->db->get('tb_usuario');
        return $query->result();
    }
    
    public function getBancada() {
        $query = $this->db->get('tb_bancada');
        return $query->result();
    }
    
    public function getPeriodo() {
        $query = $this->db->get('tb_periodo');
        return $query->result();
    }

}
