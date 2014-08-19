<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		$debug = false;
		$data['debug'] = $debug;
		$data['header'] = $this->load->view('celmedia/header', array());


        $contenido['slideshome'] = $this->db->get_where('slider_home', array('estado' => 1))->result_array();

        $contenido['servicios'] = $this->db->get_where('servicio', array('estado' => 1))->result_array();

        $contenido['proyectos'] = $this->db->select('pr.id as prid, pr.nombre as prnombre, pr.descripcion as prdescripcion, pr.imagen as primagen, pr.imagen_detalle as primagen_detalle, pr.fecha as prfecha, cl.imagen as climagen')->from('proyecto as pr')->join('cliente as cl', 'cl.id = pr.id_cliente')->where( array('pr.estado' => 1, 'cl.estado' => 1 )  )->limit(3)->order_by("pr.fecha", "desc")->get()->result_array();

        $contenido['noticias'] = $this->db->select('*')->from('noticia')->where( array('estado' => 1)  )->limit(3)->order_by("fecha", "desc")->get()->result_array();

        $contenido['clientes'] = $this->db->get_where('cliente', array('estado' => 1))->result_array();

      	$data['content'] = $this->load->view('celmedia/index', $contenido);
        $data['footer'] = $this->load->view('celmedia/footer', array());
	}

    public function servicios(){

        $idservicio = $this->uri->segment(3); //idcontenido

        $data['header'] = $this->load->view('celmedia/header', array());
        $contenido['servicio'] = $this->db->get_where('servicio', array('id' => $idservicio, 'estado' => 1))->row();

        $contenido['proyecto'] = $this->db->get_where('proyecto', array('id_servicio' => $idservicio, 'estado' => 1))->row();


        $data['content'] = $this->load->view('celmedia/servicio', $contenido);
        $data['footer'] = $this->load->view('celmedia/footer', array());

    }

    public function proyecto(){

        $idproyecto = $this->uri->segment(3);

        $data['header'] = $this->load->view('celmedia/header', array());
        $contenido['proyecto'] = $this->db->get_where('proyecto', array('id' => $idproyecto, 'estado' => 1))->row();
        $contenido['sliderProyecto'] = $this->db->get_where('imagen_proyecto', array('id_proyecto' => $idproyecto, 'estado' => 1))->result_array();

        //$contenido['tags'] = $this->db->get_where('imagen_proyecto', array('id_proyecto' => $idproyecto, 'estado' => 1))->result_array();


        $contenido['proyectos'] = $this->db->select('pr.id as prid, pr.nombre as prnombre, pr.descripcion as prdescripcion, pr.imagen as primagen, pr.imagen_detalle as primagen_detalle, pr.fecha as prfecha, cl.imagen as climagen')->from('proyecto as pr')->join('cliente as cl', 'cl.id = pr.id_cliente')->where( array('pr.id !=' => $idproyecto, 'pr.estado' => 1, 'cl.estado' => 1 )  )->limit(3)->order_by("pr.fecha", "desc")->get()->result_array();

        $data['content'] = $this->load->view('celmedia/proyecto', $contenido);
        $data['footer'] = $this->load->view('celmedia/footer', array());

    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */