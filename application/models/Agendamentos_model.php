<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agendamentos_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function cadastrar($data) {
        $this->db->set('ID_APTO_AGEND', 'N');
        $this->db->set('DT_ULT_AGEND', $data['DT_AGENDAMENTO']);
        $this->db->where('CD_USUARIO', $data['CD_USUARIO']);
        $this->db->update('TB_USUARIO');

        return $this->db->insert('tb_agendamento', $data);
    }

    public function salvar_atualizacao($data, $id) {
        $this->db->where('CD_AGENDAMENTO', $id);
        return $this->db->update('tb_agendamento', $data);
    }

    public function excluir($id = null) {

        $this->db->where('CD_AGENDAMENTO', $id);
        return $this->db->delete('tb_agendamento');
    }

}
