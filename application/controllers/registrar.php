<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrar extends CI_Controller {

    function Registrar(){
        parent::__construct();
        $this->load->model('registrar_model');
    }

    function index(){
        $data = array(
            'title'  => 'Cadastrar Curriculo',
            'error'  => ''
            );
        $this->load->view('includes/header', $data);
        $this->load->view('register_view', $data);
        $this->load->view('includes/footer');             
    }	

    function Validar(){
        $this->load->library('form_validation');
        // field name, error message, validation rules
        $this->form_validation->set_rules('first_name', 'Nome', 'trim|required');
        $this->form_validation->set_rules('username', 'Usuário', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Senha', 'trim|required|min_length[6]|max_length[32]');
        $this->form_validation->set_rules('password_confirmation', 'Confirmar Senha', 'trim|required|matches[password]');
        //$this->form_validation->set_rules('t_and_c', 'concordo', 'callback__concordar');

        if($this->form_validation->run() === TRUE){
            $first_name = $this->input->post('first_name');
            $last_name  = $this->input->post('last_name');
            $email      = $this->input->post('email');
            $username   = $this->input->post('username');
            $password   = $this->input->post('password');

            if ($this->registrar_model->cadastrarUsuario($first_name, $last_name, $email, $username, $password)){
                $data = array(
                        'title'   => 'Cadastrar Curriculo',
                        'error'   => '',
                        'cidades' => $this->registrar_model->getCidades(),
                        'estados' => $this->registrar_model->getEstados()                        
                        );

                $this->load->view('includes/header', $data);        
                $this->load->view('restrito/cadastrar_curriculo', $data);
                $this->load->view('includes/footer'); 
            }
        }else{
            $data = array(
                'title'  => 'Cadastrar Curriculo',
                'error'  => 'alert alert-danger'
                );
            $this->load->view('includes/header', $data);
            $this->load->view('register_view', $data);
            $this->load->view('includes/footer');             
        }
    }

    function _concordar(){
        $this->form_validation->set_message('_concordar', 'É necessário concordar com os Termos e Condições.');
        return false;
    }   

    function teste(){
                        $data = array(
                        'title'   => 'Cadastrar Curriculo',
                        'error'   => '',
                        'cidades' => $this->registrar_model->getCidades(),
                        'estados' => $this->registrar_model->getEstados()
                        );

                $this->load->view('includes/header', $data);        
                $this->load->view('restrito/cadastrar_curriculo', $data);
                $this->load->view('includes/footer'); 
    }
}