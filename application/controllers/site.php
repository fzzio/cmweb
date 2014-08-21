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

        $this->load->library('Mobile_Detect');
        $detect = new Mobile_Detect();
        
        

        // Exclude tablets.
        if( $detect->isMobile() && !$detect->isTablet() ){
            /////// mobil
            $data['header'] = $this->load->view('celmediaphone/header', array());
            $contenido['slideshome'] = $this->db->get_where('slider_home', array('estado' => 1))->result_array();

            $data['content'] = $this->load->view('celmediaphone/index', $contenido);
            $data['footer'] = $this->load->view('celmediaphone/footer', array());
            
        }elseif($detect->isTablet() ){
            /////// tablet
            $data['header'] = $this->load->view('celmediatablet/header', array());
            $contenido['slideshome'] = $this->db->get_where('slider_home', array('estado' => 1))->result_array();

            $data['content'] = $this->load->view('celmediatablet/index', $contenido);
            $data['footer'] = $this->load->view('celmediatablet/footer', array());
        }else{

            $data['header'] = $this->load->view('celmedia/header', array());
            $contenido['slideshome'] = $this->db->get_where('slider_home', array('estado' => 1))->result_array();
            $contenido['servicios'] = $this->db->get_where('servicio', array('estado' => 1))->result_array();
            $contenido['proyectos'] = $this->db->select('pr.id as prid, pr.nombre as prnombre, pr.descripcion as prdescripcion, pr.imagen as primagen, pr.imagen_detalle as primagen_detalle, pr.fecha as prfecha, cl.imagen as climagen')->from('proyecto as pr')->join('cliente as cl', 'cl.id = pr.id_cliente')->where( array('pr.estado' => 1, 'cl.estado' => 1 )  )->limit(3)->order_by("pr.fecha", "desc")->get()->result_array();
            $contenido['noticias'] = $this->db->select('*')->from('noticia')->where( array('estado' => 1)  )->limit(3)->order_by("fecha", "desc")->get()->result_array();
            $contenido['clientes'] = $this->db->get_where('cliente', array('estado' => 1))->result_array();
        
            $this->load->library('form_validation');

            $this->form_validation->set_rules('nombreC', 'Nombre', 'required');
            $this->form_validation->set_rules('emailC', 'E-mail', 'required');
            $this->form_validation->set_rules('telefonoC', 'Telefono', 'required');
            $this->form_validation->set_rules('mensajeC', 'Mensaje', 'required');        
            $this->form_validation->set_rules('empresaC', 'Empresa', 'required');
            $this->form_validation->set_rules('asuntoC', 'Asunto', 'required');
            
            $this->form_validation->set_message('required', 'El campo es requerido');
            
            if ($this->form_validation->run() == FALSE){
               
                //$this->load->view('categoria' , $data);

                $data['content'] = $this->load->view('celmedia/index', $contenido);
                $data['footer'] = $this->load->view('celmedia/footer', array());
            }else{

                $this->load->library('email');
                $this->email->initialize();

                $nombre = $data['nombreC']=$this->input->post('nombreC');
                $email= $data['emailC']=$this->input->post('emailC');
                $asunto= $data['asuntoC']=$this->input->post('asuntoC');
                $telefono= $data['telefonoC']=$this->input->post('telefonoC');
                $mensaje= $data['mensajeC']=$this->input->post('mensajeC');
                $empresa= $data['empresaC']=$this->input->post('empresaC');

                $subject = 'Pedido de Informacion CELMEDIA';

                $message = ' 
                Formulario de Contacto
                      
                    Pedido de información

                    Se ha enviado un nuevo pedido de información,
                    y los datos ingresados son los siguientes:
                      
                              Nombre: '.$nombre.'
                              Empresa: '.$empresa.'
                              E-mail: '.$email.'
                              Asunto: '.$asunto.'
                              Telefono: '.$telefono.'
                              Mensaje: '.$mensaje.'
                ';

                $this->email->from($email);
                //$this->email->to('aarteaga@salcedomotors.com, ventas@salcedomotors.com'); 
                $this->email->to('yc@selnet.com.ec, lpincay@celmedia.com'); 

                $this->email->subject($subject);
                $this->email->message($message);    
                $this->email->send();
                //die();
        
                // $this->load->view('categoria' , $data);
                // echo $message;
                // exit(0);

                $data['content'] = $this->load->view('celmedia/index', $contenido);
                $data['footer'] = $this->load->view('celmedia/footer', array());
            }


        }

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

        $contenido['paises'] = $this->db->get_where('pais', array('estado' => 1))->result_array();
        $contenido['sectores'] = $this->db->get_where('sector', array('estado' => 1))->result_array();
        $contenido['servicios'] = $this->db->get_where('servicio', array('estado' => 1))->result_array();
        $contenido['tags'] = $this->db->get_where('tags', array('estado' => 1))->result_array();
        


        
            $this->load->library('form_validation');
    
            $this->form_validation->set_rules('spais', 'Pais', 'required');
        
            $this->form_validation->set_message('required', 'Seleccione algun filtro');
            
            if (!isset($_POST))
                //if ($this->form_validation->run() == FALSE)
            {
               
                
                if($idproyecto){

                    $contenido['pagina'] = "1";

                    $contenido['proyecto'] = $this->db->get_where('proyecto', array('id' => $idproyecto, 'estado' => 1))->row();
                    $contenido['sliderProyecto'] = $this->db->get_where('imagen_proyecto', array('id_proyecto' => $idproyecto, 'estado' => 1))->result_array();
                    $contenido['clienteCaso'] = $this->db->get_where('cliente', array('id' => $contenido['proyecto']->id_cliente, 'estado' => 1))->row();

                    //$contenido['tags'] = $this->db->get_where('tags', array('estado' => 1))->result_array();

                    $contenido['tags'] = $this->db->select('t.id, t.descripcion')->from('tags as t')->join('tags_proyectos as tp', 't.id = tp.id_tags')->join('proyecto as p', 'tp.id_proyecto = p.id')->where( array('p.id' => $idproyecto, 't.estado' => 1)  )->group_by('t.id')->get()->result_array();


                    $contenido["servicio"] = $this->db->get_where('servicio', array('id' => $contenido['proyecto']->id_servicio, 'estado' => 1))->row();
                    
                    $contenido['proyectos'] = $this->db->select('pr.id as prid, pr.nombre as prnombre, pr.descripcion as prdescripcion, pr.imagen as primagen, pr.imagen_detalle as primagen_detalle, pr.fecha as prfecha, cl.imagen as climagen, cl.imagenhover as climagenhover')->from('proyecto as pr')->join('cliente as cl', 'cl.id = pr.id_cliente')->where( array('pr.id !=' => $idproyecto, 'pr.estado' => 1, 'cl.estado' => 1 )  )->limit(3)->order_by("pr.fecha", "desc")->get()->result_array();

                }else{
                    $contenido['pagina'] = "0";

                    $contenido['proyectos'] = $this->db->select('pr.id as prid, pr.nombre as prnombre, pr.descripcion as prdescripcion, pr.imagen as primagen, pr.imagen_detalle as primagen_detalle, pr.fecha as prfecha, cl.imagen as climagen, cl.imagenhover as climagenhover')->from('proyecto as pr')->join('cliente as cl', 'cl.id = pr.id_cliente')->where( array('pr.estado' => 1, 'cl.estado' => 1 )  )->order_by("pr.fecha", "desc")->get()->result_array();
                }

                


                $data['content'] = $this->load->view('celmedia/proyecto', $contenido);
                $data['footer'] = $this->load->view('celmedia/footer', array());
            }
            else
            {
                $arrayvacio = array( );


                $pais = $data['spais']=$this->input->post('spais');
                $sector= $data['ssector']=$this->input->post('ssector');
                $servicio= $data['sservicio']=$this->input->post('sservicio');
                /*$tag= $data['stags']=$this->input->post('stags');*/

                if (!$pais==0) {
                    $arrayvacio['id_pais']=$pais;
                    /*array_push($arrayvacio, $pais);*/
                }
                if (!$sector==0) {
                   $arrayvacio['id_sector']=$sector;
                }
                if (!$servicio==0) {
                   $arrayvacio['id_servicio']=$servicio;
                }
                /*if (!$tag==0) {
                   $arrayvacio['id_pais']=$pais;
                }*/

                if($idproyecto){

                    $contenido['pagina'] = "1";

                    $contenido['proyecto'] = $this->db->get_where('proyecto', array('id' => $idproyecto, 'estado' => 1))->row();
                    $contenido['sliderProyecto'] = $this->db->get_where('imagen_proyecto', array('id_proyecto' => $idproyecto, 'estado' => 1))->result_array();
                    $contenido['clienteCaso'] = $this->db->get_where('cliente', array('id' => $contenido['proyecto']->id_cliente, 'estado' => 1))->row();

                    //$contenido['tags'] = $this->db->get_where('tags', array('estado' => 1))->result_array();

                    $contenido['tags'] = $this->db->select('t.id, t.descripcion')->from('tags as t')->join('tags_proyectos as tp', 't.id = tp.id_tags')->join('proyecto as p', 'tp.id_proyecto = p.id')->where( array('p.id' => $idproyecto, 't.estado' => 1)  )->group_by('t.id')->get()->result_array();


                    $contenido["servicio"] = $this->db->get_where('servicio', array('id' => $contenido['proyecto']->id_servicio, 'estado' => 1))->row();
                    
                    $contenido['proyectos'] = $this->db->select('pr.id as prid, pr.nombre as prnombre, pr.descripcion as prdescripcion, pr.imagen as primagen, pr.imagen_detalle as primagen_detalle, pr.fecha as prfecha, cl.imagen as climagen, cl.imagenhover as climagenhover')->from('proyecto as pr')->join('cliente as cl', 'cl.id = pr.id_cliente')->where( array('pr.id !=' => $idproyecto, 'pr.estado' => 1, 'cl.estado' => 1 )  )->limit(3)->order_by("pr.fecha", "desc")->get()->result_array();

                }else{
                    $contenido['pagina'] = "0";


                    $contenido['proyectos'] = $this->db->select('pr.id as prid, pr.nombre as prnombre, pr.descripcion as prdescripcion, pr.imagen as primagen, pr.imagen_detalle as primagen_detalle, pr.fecha as prfecha, cl.imagen as climagen, cl.imagenhover as climagenhover')->from('proyecto as pr')->join('cliente as cl', 'cl.id = pr.id_cliente')->where( array('pr.id !=' => $idproyecto, 'pr.estado' => 1, 'cl.estado' => 1 )  )->where($arrayvacio)->order_by("pr.fecha", "desc")->get()->result_array();


                   // $contenido['proyectos'] = $this->db->get_where('proyecto', $arrayvacio)->result_array();
                }

                


                $data['content'] = $this->load->view('celmedia/proyecto', $contenido);
                $data['footer'] = $this->load->view('celmedia/footer', array());


            }


    }

    public function proyectoBusqueda(){        
        $data['header'] = $this->load->view('celmedia/header', array());



        $data['content'] = $this->load->view('celmedia/proyectoBusqueda', $contenido);
        $data['footer'] = $this->load->view('celmedia/footer', array());
    }


    public function noticia(){

        $idnoticia = $this->uri->segment(3);

        $data['header'] = $this->load->view('celmedia/header', array());
        $contenido['paises'] = $this->db->get_where('pais', array('estado' => 1))->result_array();
        $contenido['sectores'] = $this->db->get_where('sector', array('estado' => 1))->result_array();
        //$contenido['tags'] = $this->db->get_where('tags', array('estado' => 1))->result_array();


         if (!isset($_POST))
                //if ($this->form_validation->run() == FALSE)
            {
               
                
               if($idnoticia){

                    $contenido['pagina'] = "1";

                    $contenido['noticia'] = $this->db->get_where('noticia', array('id' => $idnoticia, 'estado' => 1))->row();

                    $contenido['tags'] = $this->db->select('t.id, t.descripcion')->from('tags as t')->join('tags_noticias as tn', 't.id = tn.id_tags')->join('noticia as n', 'tn.id_noticia = n.id')->where( array('n.id' => $idnoticia, 't.estado' => 1)  )->group_by('t.id')->get()->result_array();
                    
                    $contenido['noticias'] = $this->db->select('n.id as id, n.titulo as titulo, n.subtitulo as subtitulo, n.descripcion as descripcion, n.imagen as imagen, n.imagen_detalle as imagen_detalle, n.fecha as fecha')->from('noticia as n')->where( array('n.id !=' => $idnoticia, 'n.estado' => 1 )  )->limit(3)->order_by("n.fecha", "desc")->get()->result_array();



                }else{
                    $contenido['pagina'] = "0";
                    $contenido['noticias'] = $this->db->select('n.id as id, n.titulo as titulo, n.subtitulo as subtitulo, n.descripcion as descripcion, n.imagen as imagen, n.imagen_detalle as imagen_detalle, n.fecha as fecha')->from('noticia as n')->where( array('n.estado' => 1 )  )->order_by("n.fecha", "desc")->get()->result_array();
                }

                


                $data['content'] = $this->load->view('celmedia/proyecto', $contenido);
                $data['footer'] = $this->load->view('celmedia/footer', array());
            }
            else
            {
                $arrayvacio = array( );


                $pais = $data['spais']=$this->input->post('spais');
                $sector= $data['ssector']=$this->input->post('ssector');
                $anio= $data['sanio']=$this->input->post('sanio');

               
                /*$tag= $data['stags']=$this->input->post('stags');*/

                if (!$pais==0) {
                    $arrayvacio['id_pais']=$pais;
                    /*array_push($arrayvacio, $pais);*/
                }
                if (!$sector==0) {
                   $arrayvacio['id_sector']=$sector;
                }
              
                $fecha_ini = "2000-01-01";
                $fecha_final = "2200-12-31";
                if (!$anio==0) {
                    $fecha_ini= $anio.'-01-01';
                    $fecha_final = $anio.'-12-31';

                   //$arrayvacio['id_anio']=$anio;
                }
                /*if (!$tag==0) {
                   $arrayvacio['id_pais']=$pais;
                }*/

                if($idnoticia){

                    $contenido['pagina'] = "1";

                    $contenido['noticia'] = $this->db->get_where('noticia', array('id' => $idnoticia, 'estado' => 1))->row();

                    $contenido['tags'] = $this->db->select('t.id, t.descripcion')->from('tags as t')->join('tags_noticias as tn', 't.id = tn.id_tags')->join('noticia as n', 'tn.id_noticia = n.id')->where( array('n.id' => $idnoticia, 't.estado' => 1)  )->group_by('t.id')->get()->result_array();
                    
                    $contenido['noticias'] = $this->db->select('n.id as id, n.titulo as titulo, n.subtitulo as subtitulo, n.descripcion as descripcion, n.imagen as imagen, n.imagen_detalle as imagen_detalle, n.fecha as fecha')->from('noticia as n')->where( array('n.id !=' => $idnoticia, 'n.estado' => 1 )  )->limit(3)->order_by("n.fecha", "desc")->get()->result_array();

                }else{
                    $contenido['pagina'] = "0";
                    $contenido['noticias'] = $this->db->select('n.id as id, n.titulo as titulo, n.subtitulo as subtitulo, n.descripcion as descripcion, n.imagen as imagen, n.imagen_detalle as imagen_detalle, n.fecha as fecha')
                    ->from('noticia as n')
                    ->where( array('n.estado' => 1, "n.fecha >=" => $fecha_ini , "n.fecha <=" => $fecha_final  )  )
                    ->where($arrayvacio)
                    ->order_by("n.fecha", "desc")
                    ->get()->result_array();

                    //$contenido['proyectos'] = $this->db->select('pr.id as prid, pr.nombre as prnombre, pr.descripcion as prdescripcion, pr.imagen as primagen, pr.imagen_detalle as primagen_detalle, pr.fecha as prfecha, cl.imagen as climagen, cl.imagenhover as climagenhover')->from('proyecto as pr')->join('cliente as cl', 'cl.id = pr.id_cliente')->where( array('pr.id !=' => $idproyecto, 'pr.estado' => 1, 'cl.estado' => 1 )  )->where($arrayvacio)->order_by("pr.fecha", "desc")->get()->result_array();


                   // $contenido['proyectos'] = $this->db->get_where('proyecto', $arrayvacio)->result_array();
                }

                $data['content'] = $this->load->view('celmedia/noticia', $contenido);
                $data['footer'] = $this->load->view('celmedia/footer', array());
            }

        /*if($idnoticia){

            $contenido['pagina'] = "1";

            $contenido['noticia'] = $this->db->get_where('noticia', array('id' => $idnoticia, 'estado' => 1))->row();

            $contenido['tags'] = $this->db->select('t.id, t.descripcion')->from('tags as t')->join('tags_noticias as tn', 't.id = tn.id_tags')->join('noticia as n', 'tn.id_noticia = n.id')->where( array('n.id' => $idnoticia, 't.estado' => 1)  )->group_by('t.id')->get()->result_array();
            
            $contenido['noticias'] = $this->db->select('n.id as id, n.titulo as titulo, n.subtitulo as subtitulo, n.descripcion as descripcion, n.imagen as imagen, n.imagen_detalle as imagen_detalle, n.fecha as fecha')->from('noticia as n')->where( array('n.id !=' => $idnoticia, 'n.estado' => 1 )  )->limit(3)->order_by("n.fecha", "desc")->get()->result_array();



        }else{
            $contenido['pagina'] = "0";
            $contenido['noticias'] = $this->db->select('n.id as id, n.titulo as titulo, n.subtitulo as subtitulo, n.descripcion as descripcion, n.imagen as imagen, n.imagen_detalle as imagen_detalle, n.fecha as fecha')->from('noticia as n')->where( array('n.estado' => 1 )  )->order_by("n.fecha", "desc")->get()->result_array();
        }

        $data['content'] = $this->load->view('celmedia/noticia', $contenido);
        $data['footer'] = $this->load->view('celmedia/footer', array());*/
    }


    ////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////
    //    MOBILE
    ////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////
    public function servicioM(){
        $idservicio = $this->uri->segment(3); //idcontenido

        $data['header'] = $this->load->view('celmediaphone/header', array());
        if(!$idservicio){
            $contenido['servicios'] = $this->db->get_where('servicio', array('estado' => 1))->result_array();
        }else{
            $contenido['servicio'] = $this->db->get_where('servicio', array('id' => $idservicio, 'estado' => 1))->row();
            $contenido['proyecto'] = $this->db->get_where('proyecto', array('id_servicio' => $idservicio, 'estado' => 1))->row();
        }
        $data['content'] = $this->load->view('celmediaphone/servicios', $contenido);
        $data['footer'] = $this->load->view('celmediaphone/footer', array());            

    }

    public function proyectoM(){
        $idproyecto = $this->uri->segment(3); //idcontenido

        $data['header'] = $this->load->view('celmediaphone/header', array());
        if(!$idproyecto){
            $contenido['proyectos'] = $this->db->get_where('proyecto', array('estado' => 1))->result_array();
        }else{
            $contenido['proyecto'] = $this->db->get_where('proyecto', array('id' => $idproyecto, 'estado' => 1))->row();
            $contenido['clienteCaso'] = $this->db->get_where('cliente', array('id' => $contenido['proyecto']->id_cliente, 'estado' => 1))->row();
            $contenido['sliderProyecto'] = $this->db->get_where('imagen_proyecto', array('id_proyecto' => $idproyecto, 'estado' => 1))->result_array();

            $contenido['tags'] = $this->db->select('t.id, t.descripcion')->from('tags as t')->join('tags_proyectos as tp', 't.id = tp.id_tags')->join('proyecto as p', 'tp.id_proyecto = p.id')->where( array('p.id' => $idproyecto, 't.estado' => 1)  )->group_by('t.id')->get()->result_array();
            
        }
        $data['content'] = $this->load->view('celmediaphone/proyectos', $contenido);
        $data['footer'] = $this->load->view('celmediaphone/footer', array());            

    }

    ////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////
    //    TABLET
    ////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////
    public function servicioT(){
        $idservicio = $this->uri->segment(3); //idcontenido

        $data['header'] = $this->load->view('celmediatablet/header', array());
        if(!$idservicio){
            $contenido['servicios'] = $this->db->get_where('servicio', array('estado' => 1))->result_array();
        }else{
            $contenido['servicio'] = $this->db->get_where('servicio', array('id' => $idservicio, 'estado' => 1))->row();
            $contenido['proyectos'] = $this->db->select('*')->from('proyecto')->where( array('id_servicio' => $idservicio, 'estado' => 1) )->limit(2)->order_by("fecha", "desc")->get()->result_array();
        }
        $data['content'] = $this->load->view('celmediatablet/servicios', $contenido);
        $data['footer'] = $this->load->view('celmediatablet/footer', array());            

    }

    public function proyectoT(){
        $idproyecto = $this->uri->segment(3); //idcontenido

        $data['header'] = $this->load->view('celmediatablet/header', array());
        if(!$idproyecto){
            $contenido['proyectos'] = $this->db->get_where('proyecto', array('estado' => 1))->result_array();
        }else{
            $contenido['proyecto'] = $this->db->get_where('proyecto', array('id' => $idproyecto, 'estado' => 1))->row();
            $contenido['clienteCaso'] = $this->db->get_where('cliente', array('id' => $contenido['proyecto']->id_cliente, 'estado' => 1))->row();
            $contenido['sliderProyecto'] = $this->db->get_where('imagen_proyecto', array('id_proyecto' => $idproyecto, 'estado' => 1))->result_array();
            $contenido['proyectos'] = $this->db->select('*')->from('proyecto')->where( array('id !=' => $idproyecto, 'estado' => 1) )->limit(2)->order_by("fecha", "desc")->get()->result_array();


            $contenido['tags'] = $this->db->select('t.id, t.descripcion')->from('tags as t')->join('tags_proyectos as tp', 't.id = tp.id_tags')->join('proyecto as p', 'tp.id_proyecto = p.id')->where( array('p.id' => $idproyecto, 't.estado' => 1)  )->group_by('t.id')->get()->result_array();
            
        }
        $data['content'] = $this->load->view('celmediatablet/proyectos', $contenido);
        $data['footer'] = $this->load->view('celmediatablet/footer', array());            

    }

    public function noticiaT(){
        $idnoticia = $this->uri->segment(3); //idcontenido

        $data['header'] = $this->load->view('celmediatablet/header', array());
        if(!$idnoticia){
            $contenido['noticias'] = $this->db->select('n.id as id, n.titulo as titulo, n.subtitulo as subtitulo, n.descripcion as descripcion, n.imagen as imagen, n.imagen_detalle as imagen_detalle, n.fecha as fecha')->from('noticia as n')->where( array('n.estado' => 1 )  )->order_by("n.fecha", "desc")->get()->result_array();
        }else{
            $contenido['noticia'] = $this->db->get_where('noticia', array('id' => $idnoticia, 'estado' => 1))->row();

            $contenido['tags'] = $this->db->select('t.id, t.descripcion')->from('tags as t')->join('tags_noticias as tn', 't.id = tn.id_tags')->join('noticia as n', 'tn.id_noticia = n.id')->where( array('n.id' => $idnoticia, 't.estado' => 1)  )->group_by('t.id')->get()->result_array();
                
            $contenido['noticias'] = $this->db->select('n.id as id, n.titulo as titulo, n.subtitulo as subtitulo, n.descripcion as descripcion, n.imagen as imagen, n.imagen_detalle as imagen_detalle, n.fecha as fecha')->from('noticia as n')->where( array('n.id !=' => $idnoticia, 'n.estado' => 1 )  )->limit(2)->order_by("n.fecha", "desc")->get()->result_array();
        }
        $data['content'] = $this->load->view('celmediatablet/noticias', $contenido);
        $data['footer'] = $this->load->view('celmediatablet/footer', array());            

    }
    
    public function contactoT(){
        $data['header'] = $this->load->view('celmediatablet/header', array());

        
        $data['footer'] = $this->load->view('celmediatablet/footer', array());            

    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */