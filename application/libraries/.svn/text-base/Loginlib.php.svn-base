<?php

class Loginlib {

    public function __construct() {
        $this->CI = & get_instance();
    }

    public function login($user, $password) {
        
        $this->CI->load->model('usuariodao', 'usuario');
        
        $egresado = "EG";
        $empresa = "EM";
        $administrativo = "AD";
        $url_admin = "administrador";
        $url_egresado = "egresado";
        $url_empresa = "empresa";
        
        $query = $this->CI->usuario->validar_usuario($user, $password);

        if ($query) {
            /*
             * idUsuario: pk de la tabla Usuario. idParticipante: pk puede ser de egresado, empresa o admin y hace referencia a idUsuario.
             */
            
            $data['rpta'] = "sucess";
            $idUsuario = $query['idUsuario'];
            $idParticipante = $query['idParticipante']->idParticipante;
            $tipo = $query['tipo'];

            if ($tipo == $egresado)
                $data['site'] = $url_egresado;

            if ($tipo == $empresa)
                $data['site'] = $url_empresa;

            if ($tipo == $administrativo)
                $data['site'] = $url_admin;

            $this->CI->session->sess_destroy();
            $this->CI->session->sess_create();
            $this->CI->session->set_userdata(array('logged_in' => true, 'idUsuario' => $idUsuario, 'idParticipante' => $idParticipante, 'site' => $data['site']));
            
        } else {
            $data['rpta'] = "failure";
        }
        return $data;
    }

    function logout() {
        $this->CI->session->sess_destroy();
    }

}

?>