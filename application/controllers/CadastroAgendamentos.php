<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroAgendamentos extends CI_Controller {

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Login/login_confirm');
        }
    }

    public function index() {
        $this->verificar_sessao();

        $this->db->select('*');
        $dados['usuarios'] = $this->db->get('tb_usuario')->result();
        $dados['bancadas'] = $this->db->get('tb_bancada')->result();
        $dados['periodos'] = $this->db->get('tb_periodo')->result();


        $this->load->view('includes/header');
        $this->load->view('cadastro-agendamentos', $dados);
    }

//    public function validar($datas) {
//        
//    }

    public function cadastrar() {
        $this->verificar_sessao();



        $data['CD_BANCADA'] = $this->input->post('CD_BANCADA');
        $data['CD_PERIODO'] = $this->input->post('CD_PERIODO');
        $data['CD_USUARIO'] = $this->input->post('CD_USUARIO');
        $data['DT_AGENDAMENTO'] = implode('-',array_reverse(explode('/',$this->input->post('DT_AGENDAMENTO'))));

        /*
          $this->db->select('ID_APTO_AGEND');
          $this->db->from('TB_USUARIO');
          $this->db->where('CD_USUARIO', $data['CD_USUARIO']);
          $id = $this->db->get();
         */

        $this->load->model('Agendamentos_model', 'agendamentos');

        if ($this->agendamentos->cadastrar($data)) {
            redirect('CadastroAgendamentos');
        } else {
            redirect('Login');
        }
    }

}
