<?php

class Ponentedao extends CI_Model {

    function __construct() {       
        parent:: __construct();
    }

    public function listar_ponentes_o_talleres($tipo, $array = false) {
        $query = $this->db->get_where('vponentes', array('tipo' => $tipo));

        if ($array == true)
            $r = $query->result_array();
        else
            $r = $query->result();

        return $r;
    }   
    

}