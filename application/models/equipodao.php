<?php

class Equipodao extends CI_Model {

    function __construct() {
        parent:: __construct();
    }

    public function listar_equipos($actividad, $array = false, $nivel = false) {
        $this->db->select('*');
        $this->db->where("idActividad", $actividad);

        if ($nivel != false) {
            $this->db->where("nivel", $nivel);
        }

        $query = $this->db->get('equipo');

        if ($array == true)
            $r = $query->result_array();
        else
            $r = $query->result();

        return $r;
    }

}