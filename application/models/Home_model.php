<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function listar() {
        $this->db->select('valor');
        $this->db->from('cadastro');
        $query = $this->db->get();
        return $query->result();
    }
}