<?php

class Participantedao extends CI_Model {

    function __construct() {
        parent:: __construct();
    }

    public function listar_participantes($actividad, $equipo = false, $array = false) {
        $this->db->where("idActividad", $actividad);
        
        if ($equipo != false) {
            $this->db->where("grupo", $equipo);
        }
        $query = $this->db->get('vparticipantes');
        if ($array == true)
            $r = $query->result_array();
        else
            $r = $query->result();

        return $r;
    }

}