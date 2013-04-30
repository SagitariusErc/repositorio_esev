<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Administrador extends CI_Controller {

    function __construct() {
        parent:: __construct();
    }

    public function index() {
        if (!$this->session->userdata('page')) {
            $this->session->set_userdata('page', 'bienvenidoAdmin');
        }
        $data_estructura['menuLeft'] = $this->load->view('administrador/menuLeft', NULL, true);        
        $data_estructura['head'] = $this->load->view('administrador/head', NULL, true);

        $data_body['page'] = $this->session->userdata('page');
        $data_estructura['body'] = $this->load->view('administrador/body', $data_body, true);

        $data['estructura'] = $this->load->view('administrador/estructure', $data_estructura, true);

        $this->load->view('home', $data);
    }

    public function refresh_content() {
        $page = $this->input->post('PAGE');

        $this->session->set_userdata('page', $page);

        switch ($page) {            
            case 'bienvenidoAdmin':
                $this->bienvenido_Admin();
                break;
            case 'inscripcionConcurso':
                $this->inscribir_Participante();
                break;
            case 'verGrupos':
                $this->ver_Grupos();
                break;
        }
        
        echo 'hola munedo';
        echo 'probando';
    }

    public function bienvenido_Admin() {
        $this->load->view('administrador/pages/bienvenidoAdmin', NULL);
    }

    public function inscribir_Participante() {        
        $this->load->view('administrador/pages/inscripcionConcurso', NULL);
    }
    
    public function ver_Grupos() {        
        $this->load->view('administrador/pages/verGrupos', NULL);
    }
    
    
}

