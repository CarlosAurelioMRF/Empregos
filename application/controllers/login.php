<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function Login(){
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index(){
        $this->_login_validation();
    }

    public function _login_validation(){
        if($this->session->userdata('logged')){
            $this->_login();
        }else{
            $formSubmit = $this->input->post('submitForm');
            if( $formSubmit == 'registrar' ){
                redirect('Registrar','refresh');
            } else  {
                $this->load->library('form_validation');
                $this->form_validation->set_rules('username', 'usuário', 'required|callback__validation_one');
                $this->form_validation->set_rules('password', 'senha', 'required');
                if($this->form_validation->run()){
                    $data = array(
                        'username' => $this->input->post('username'), 
                        'logged' => 1);
                    $this->session->set_userdata($data);

                    $this->_login();

                }else{
                    $data = array(
                        'title'  => 'Painel de Controle',
                        'avatar' => 'public/images/contact-icon.png'
                        );
                    $this->load->view('includes/header', $data);
   				    $this->load->view('login_view', $data);
   				    $this->load->view('includes/footer');
                }
            }
        }
    }

    public function _validation_one(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($this->login_model->validate($username, $password)){
            return true;
        }else{
            $this->form_validation->set_message('_validation_one', 'Usuário ou Senha Inválidos');
            return false;
        }
    }

    public function _login(){
        $data = array(
            'title'   => 'Área Restrita',
            'usuario' => $this->login_model->dados($this->session->userdata('username')),
            'pagina'  => 'Painel de Controle',
            'vagas'   => '',
            'curriculos' => '',
            'editar'     => ''
            );

        $this->load->view('includes/header', $data);        
		$this->load->view('restrito/menu_restrito', $data);
        $this->load->view('restrito/index_restrito');
        $this->load->view('includes/footer');        
    }

    public function destroy(){
        $this->session->sess_destroy();
        redirect('Login','refresh');
    }


}
