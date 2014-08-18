<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('securityuser');
        $this->load->library('grocery_CRUD');
    }

    ///// iconos 
    ///http://getbootstrap.com/2.3.2/base-css.html#icons
    public function getMenu() {
        $menu = array();
        //array_push($menu, array("url" => "admin/inicio", "label" => "Inicio", "icon" => "icon-home"));
        array_push($menu, array("url" => "admin/inicioSlider", "label" => "Slider Home", "icon" => "icon-home"));
        array_push($menu, array("url" => "admin/adminClientes", "label" => "Clientes", "icon" => "icon-home"));
        array_push($menu, array("url" => "admin/adminPais", "label" => "País", "icon" => "icon-home"));
        array_push($menu, array("url" => "admin/adminSector", "label" => "Sector", "icon" => "icon-home"));
        array_push($menu, array("url" => "admin/adminCategoria", "label" => "Categoria", "icon" => "icon-home"));
        array_push($menu, array("url" => "admin/adminTags", "label" => "Tags", "icon" => "icon-home"));
        array_push($menu, array("url" => "admin/adminServicios", "label" => "Servicios", "icon" => "icon-home"));
        array_push($menu, array("url" => "admin/adminProyectos", "label" => "Proyectos", "icon" => "icon-home"));
        array_push($menu, array("url" => "admin/adminNoticias", "label" => "Noticias", "icon" => "icon-home"));
        array_push($menu, array("url" => "admin/adminSliderProyectos", "label" => "Slider Proyectos", "icon" => "icon-home"));

        return $menu;
    }

    /* no modificar */

    public function getMenuAdmin() {

        $menu = array();
        array_push($menu, array("url" => "admin/usuario", "label" => "Usuarios", "icon" => "icon-user"));
        return $menu;
    }

    public function showPage($output = null) {
        if ($this->securityCheck()) {
            $output->data['menu'] = $this->getMenu();
            $output->data['menuAdmin'] = $this->getMenuAdmin();
            $this->load->view('../../template/index.php', $output);
        } else {
            redirect("admin/login");
        }
    }

    public function index() {

        $this->showPage((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }

    public function usuario() {
        $crud = new grocery_CRUD();
        $crud->set_table("securityuser");

        $crud->columns('usuario', 'fecha_creacion');
        // $crud->fields('usuario','password','nombre','correo');


        $crud->field_type('password', 'password');

        $crud->change_field_type('fecha_creacion', 'invisible');
        $crud->change_field_type('fecha_modificacion', 'invisible');
        $crud->change_field_type('password_anterior', 'invisible');
        $crud->change_field_type('estado', 'invisible');

        $crud->callback_before_insert(array($this, 'usuario_insert_callback'));

        $output = $crud->render();
        $this->showPage($output);
    }

    public function login() {

        $this->load->view('../../template/login.php');
    }

    public function logout() {

        $securityUser = new SecurityUser();
        $securityUser->logout();
        $this->load->view('../../template/login.php');
    }

    public function autentificar() {

        $username = $this->input->post("username");
        $password = $this->input->post("passsword");

        $securityUser = new SecurityUser();
        $securityUser->login($username, $password);

        redirect("admin/index");

        //  $this->load->view('../../template/login.php');
    }

    function usuario_insert_callback($post_array) {

        $post_array['fecha_creacion'] = date("d.m.Y h:i:s");
        $post_array['fecha_modificacion'] = date("d.m.Y h:i:s");
        $post_array['estado'] = 'A';
        $post_array['fecha_modificacion'] = date("d.m.Y h:i:s");
        $post_array['password_anterior'] = $post_array['password'];

        return $post_array;
    }

    function securityCheck() {

        $usuario = $this->session->userdata('user_login');
        if ($usuario == "") {
            return false;
        } else {
            return true;
        }
    }

    //////////////////////////////////////////////////////    
    function _add_default_date_value(){
            $value = !empty($value) ? $value : date("d/m/Y");
            $return = '<input type="text" name="date" value="'.$value.'" class="datepicker-input" /> ';
            $return .= '<a class="datepicker-input-clear" tabindex="-1">Clear</a> (dd/mm/yyyy)';
            return $return;
    }
    //////////////////////////////////////////////////////

    public function inicioSlider(){
        $crud = new grocery_CRUD();
        // Solo deberia mostrar los tipo noticias //TODO
        $crud->set_table("slider_home");
        $crud->set_subject('Slider');

        $crud->display_as('titulo','Título');
        $crud->display_as('descripcion','Descripción');
        $crud->display_as('textoboton','Texto enlace');
        $crud->display_as('urlimagen','Imagen');
        $crud->display_as('link','Link');
        $crud->display_as('estado','Estado');        
        $crud->display_as('fecha','Fecha');

        $crud->field_type('descripcion', 'text');

        $crud->required_fields('titulo', 'descripcion', 'textoboton', 'urlimagen','link','link','estado','fecha');
        $crud->columns('titulo', 'descripcion', 'textoboton', 'urlimagen','link','estado','fecha');
        $crud->set_field_upload('urlimagen', 'assets/celmediachile/sliderhome');
        $crud->fields('titulo', 'descripcion', 'textoboton', 'urlimagen', 'link', 'estado', 'fecha');
        $crud->field_type('estado', 'dropdown', array(
            '1' => 'Activo',
            '2' => 'Inactivo'
        ));
        
        $output = $crud->render();
        $this->showPage($output);
    }

    public function adminClientes(){
        $crud = new grocery_CRUD();

        // Solo deberia mostrar los tipo noticias //TODO
        $crud->set_table("cliente");
        $crud->set_subject('Cliente');

        $crud->display_as('nombre','Nombre');
        $crud->display_as('imagen','Logo');
        $crud->display_as('imagenhover','Logo Hover');
        $crud->display_as('imagenbg','Imagen Grande');
        
        $crud->display_as('estado','Estado');

        $crud->required_fields('nombre','imagen', 'imagenhover', 'imagenbg','estado');
        $crud->columns('nombre','imagen', 'imagenhover', 'imagenbg','estado');
        $crud->set_field_upload('imagen', 'assets/celmediachile/clientes');
        $crud->set_field_upload('imagenhover', 'assets/celmediachile/clientes');
        $crud->set_field_upload('imagenbg', 'assets/celmediachile/clientes');
        $crud->fields('nombre','imagen','imagenhover', 'imagenbg', 'estado');
        $crud->field_type('estado', 'dropdown', array(
            '1' => 'Activo',
            '2' => 'Inactivo'
        ));
        
        $output = $crud->render();
        $this->showPage($output);
    }

    public function adminServicios(){
        $crud = new grocery_CRUD();

        $crud->set_table("servicio");
        $crud->set_subject('Servicios');

        $crud->display_as('titulo','Título');
        $crud->display_as('subtitulo','Subtítulo');
        $crud->display_as('descripcion','Descripción');
        $crud->display_as('imagen','Imagen');
        $crud->display_as('estado','Estado');

        $crud->required_fields('titulo','subtitulo', 'descripcion', 'imagen', 'estado');
        $crud->columns('titulo','subtitulo', 'descripcion', 'imagen', 'estado');
        $crud->set_field_upload('imagen', 'assets/celmediachile/servicios');
        $crud->fields('titulo','subtitulo', 'descripcion', 'imagen', 'estado');

        $output = $crud->render();
        $this->showPage($output);
    }

    public function adminSector(){
        $crud = new grocery_CRUD();

        $crud->set_table("sector");
        $crud->set_subject('Sector');
        
        $crud->display_as('nombre','Nombre');
        $crud->display_as('estado','Estado');

        $crud->required_fields('nombre', 'estado');
        $crud->columns('nombre', 'estado');
        $crud->fields('nombre', 'estado');

        $output = $crud->render();
        $this->showPage($output);
    }

    public function adminPais(){
        $crud = new grocery_CRUD();

        $crud->set_table("pais");
        $crud->set_subject('País');

        $crud->display_as('nombre','Nombre');
        $crud->display_as('estado','Estado');

        $crud->required_fields('nombre', 'estado');
        $crud->columns('nombre', 'estado');
        $crud->fields('nombre', 'estado');

        $output = $crud->render();
        $this->showPage($output);
    }

    public function adminCategoria(){
        $crud = new grocery_CRUD();

        $crud->set_table("categoria");
        $crud->set_subject('Categoria');

        $crud->display_as('nombre','Nombre');
        $crud->display_as('estado','Estado');

        $crud->required_fields('nombre', 'estado');
        $crud->columns('nombre', 'estado');
        $crud->fields('nombre', 'estado');

        $output = $crud->render();
        $this->showPage($output);
    }

    public function adminProyectos(){
        $crud = new grocery_CRUD();

        $crud->set_table("proyecto");
        $crud->set_subject('Proyecto');

        $crud->display_as('id_pais','País');
        $crud->display_as('id_servicio','Servicio');
        $crud->display_as('id_sector','Sector');
        $crud->display_as('id_cliente','Cliente');
        $crud->display_as('nombre','Nombre');
        $crud->display_as('descripcion','Descripción');
        $crud->display_as('fecha','Fecha');
        $crud->display_as('imagen','Imagen');
        $crud->display_as('prioridad','Prioridad');
        $crud->display_as('estado','Estado');


        $crud->set_relation('id_pais', 'pais', 'nombre');
        $crud->set_relation('id_servicio', 'servicio', 'titulo');
        $crud->set_relation('id_sector', 'sector', 'nombre');
        $crud->set_relation('id_cliente', 'cliente', 'nombre');

        $crud->set_field_upload('imagen', 'assets/celmediachile/proyectos');
        $crud->set_relation_n_n('Tags', 'tags_proyectos', 'tags', 'id_tags', 'id_proyecto', 'descripcion');
        $crud->set_relation_n_n('Categorias', 'proyecto_categoria', 'categoria', 'id_categoria', 'id_proyecto', 'nombre');

        $output = $crud->render();
        $this->showPage($output);
    }

    public function adminNoticias(){
        $crud = new grocery_CRUD();

        $crud->set_table("noticia");
        $crud->set_subject('Noticia');

        $crud->display_as('id_pais','País');
        $crud->display_as('id_sector','Sector');
        $crud->display_as('titulo','Título');
        $crud->display_as('subtitulo','Subtítulo');
        $crud->display_as('descripcion','Descripción');
        $crud->display_as('imagen','Imagen');
        $crud->display_as('fecha','Fecha');
        $crud->display_as('estado','Estado');

        $crud->set_relation('id_pais', 'pais', 'nombre');
        $crud->set_relation('id_sector', 'sector', 'nombre');

        $crud->required_fields('id_pais', 'id_sector', 'titulo', 'descripcion', 'imagen', 'fecha', 'estado');

        //$crud->columns('id_pais', 'id_sector', 'titulo', 'subtitulo', 'descripcion', 'imagen', 'fecha', 'estado');
        //$crud->fields('id_pais', 'id_sector', 'titulo', 'subtitulo', 'descripcion', 'imagen', 'fecha', 'estado');

        $crud->set_relation_n_n('Tags', 'tags_noticias', 'tags', 'id_tags', 'id_noticia', 'descripcion');

        $crud->set_field_upload('imagen', 'assets/celmediachile/noticias');

        $output = $crud->render();
        $this->showPage($output);
    }

    public function adminTags(){
        $crud = new grocery_CRUD();

        $crud->set_table("tags");
        $crud->set_subject('Tags');

        $crud->display_as('descripcion','Descripción');
        $crud->display_as('estado','Estado');

       
        $crud->required_fields('descripcion', 'estado');
        $crud->columns('descripcion', 'estado');
        $crud->fields('descripcion', 'estado');

        $output = $crud->render();
        $this->showPage($output);
    }

    

    public function adminSliderProyectos(){
        $crud = new grocery_CRUD();

        $crud->set_table("imagen_proyecto");
        $crud->set_subject('Imagenes Slider Proyectos');

        $crud->set_relation('id_proyecto', 'proyecto', 'nombre');


        $crud->set_field_upload('imagen', 'assets/celmediachile/sliderproyectos');

        $output = $crud->render();
        $this->showPage($output);
    }
}