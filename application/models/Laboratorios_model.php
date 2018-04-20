<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laboratorios_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function cadastrar($data) {
        return $this->db->insert('tb_laboratorio', $data);
    }

    public function salvar_atualizacao($data, $id) {
        $this->db->where('CD_LABORATORIO', $id);
        return $this->db->update('tb_laboratorio', $data);
    }

    public function excluir($id = null) {
        
        $this->db->where('CD_LABORATORIO', $id);
        return $this->db->delete('tb_laboratorio');
    }

}