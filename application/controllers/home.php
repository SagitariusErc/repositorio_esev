<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('equipodao', 'equipo');
        $this->load->model('participantedao', 'participante');
    }

    public function index() {
        if (!$this->session->userdata('page')) {
            $this->session->set_userdata('page', 'inscripcionPonentes');
        }

        $data_estructura['menuLeft'] = $this->load->view('web_master/menuLeft', NULL, true);
        $data_estructura['menuRight'] = $this->load->view('web_master/menuRight', NULL, true);
        $data_estructura['head'] = $this->load->view('web_master/head', NULL, true);

        $data_body['page'] = $this->session->userdata('page');
        $data_estructura['body'] = $this->load->view('web_master/body', $data_body, true);

        $data['estructura'] = $this->load->view('web_master/estructure', $data_estructura, true);

        $this->load->view('home', $data);
    }

    public function refresh_content() {
        $page = $this->input->post('PAGE');

        $this->session->set_userdata('page', $page);

        switch ($page) {
            case 'verPonentesTalleres':
                $this->mostrar_Ponentes();
                break;
            case 'inscripcionPonentes':
                $this->inscripcion_Ponencias();
                break;
            case 'actividadFeriaTecnologica';
                $this->actividad_FeriaTecnologica();
                break;
             case 'actividadConcursoProgramacion';
                $this->actividad_ConcursoProgramacion();
                break;
            case 'actividadConcursoBaseDatos';
                $this->actividad_ConcursoBaseDatos();
                break;
        }
    }

    public function inscripcion_Ponencias() {
        $this->load->view('web_master/pages/inscripcionPonentes', NULL);
    }

    public function mostrar_Ponentes() {
        $this->load->model('ponentedao', 'ponente');

        $data_ponentes['page'] = 'verPonentesTalleres';
        $data_ponentes['ponentes'] = $this->ponente->listar_ponentes_o_talleres('P', true);
        $data_ponentes['talleres'] = $this->ponente->listar_ponentes_o_talleres('T', true);

        $this->load->view('web_master/pages/verPonentesTalleres', $data_ponentes);
    }

    public function integrantes_x_equipo($idActividad, $equipos) {
        $detalles = array();

        foreach ($equipos as $equipo) {
            array_push($detalles, $this->participante->listar_participantes($idActividad, $equipo['idEquipo'], true));
        }
        return $detalles;
    }

    public function actividad_FeriaTecnologica() {
        $data_feria['page'] = 'actividadFeriaTecnologica';
        $data_feria['equipos'] = $this->equipo->listar_equipos(5, true);
        $data_feria['detalles'] = $this->integrantes_x_equipo(5, $data_feria['equipos']);

        $this->load->view('web_master/pages/actividadFeriaTecnologica', $data_feria);
        
        echo 'prueba .test';
        echo 'conflicto de sincornizacion';
         echo 'exito';
         echo 'sigo programando';
    }

    public function actividad_ConcursoProgramacion() {
        $data_concurso['page'] = 'actividadConcursoProgramacion';
        $data_concurso['equipoNivel1'] = $this->equipo->listar_equipos(3, true, 1);
        $data_concurso['equipoNivel2'] = $this->equipo->listar_equipos(3, true, 2);
        
        $data_concurso['detalles_nivel1'] = $this->integrantes_x_equipo(3, $data_concurso['equipoNivel1']);
        $data_concurso['detalles_nivel2'] = $this->integrantes_x_equipo(3, $data_concurso['equipoNivel2']);
        
        $this->load->view('web_master/pages/actividadConcursoProgramacion', $data_concurso);
    }
    
    public function actividad_ConcursoBaseDatos() {
        $data_concurso['page'] = 'actividadConcursoBaseDatos';
        $data_concurso['participantes'] = $this->participante->listar_participantes(4, false, true);
        
        $this->load->view('web_master/pages/actividadConcursoBaseDatos', $data_concurso);
    }

}

