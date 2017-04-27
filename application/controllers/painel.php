<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Painel extends CI_Controller {

    function Painel(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('vagas_model', 'vagas');
    }

    function vagas(){
        $data = array(
            'title'      => 'Área Restrita',
            'usuario'    => $this->login_model->dados($this->session->userdata('username')),
            'pagina'     => 'Vagas',
            'vagas'      => 'active',
            'curriculos' => '',
            'editar'     => '' 
            ); 
        $data['properties'] = $this->vagas->listarVagas();

        $this->load->view('includes/header', $data);        
        $this->load->view('restrito/menu_restrito', $data);
        $this->load->view('restrito/vaga_restrito', $data);
        $this->load->view('includes/footer');   
    }    

    function adicionarVaga(){
        $data = array(
            'title'      => 'Área Restrita',
            'usuario'    => $this->login_model->dados($this->session->userdata('username')),
            'pagina'     => 'Vagas',
            'vagas'      => 'active',
            'curriculos' => '',
            'editar'     => '' 
            ); 

        $this->load->view('includes/header', $data);        
        $this->load->view('restrito/menu_restrito', $data);
        $this->load->view('restrito/adicionar_vaga');
        $this->load->view('includes/footer');   
    }    

    function delete($codigo){
        $emp_id = $this->uri->segment(3);

        if ($this->vagas->delete($emp_id)) {
            redirect('painel/vagas','refresh');
        }
    }

    function update(){
        $emp_id = $this->uri->segment(3);
        $dadosUpdate['properties'] = $this->vagas->dadosUpdate($emp_id);

        $data = array(
            'title'      => 'Área Restrita',
            'usuario'    => $this->login_model->dados($this->session->userdata('username')),
            'pagina'     => 'Vagas',
            'vagas'      => 'active',
            'curriculos' => '',
            'editar'     => '' 
            ); 

        $this->load->view('includes/header', $data);        
        $this->load->view('restrito/menu_restrito', $data);
        $this->load->view('restrito/atualizar_vaga', $dadosUpdate);
        $this->load->view('includes/footer');     
    }

    function salvarVaga(){
        $nomevaga = $this->input->post('nomevaga');
        $qtdvaga  = $this->input->post('qtdvaga');

        if ($this->vagas->adicionarVaga($nomevaga, $qtdvaga)){
            redirect('painel/vagas','refresh');   
        }
    }

    function atualizarVaga(){
        $dados = array(
                'NOMVAG' => $this->input->post('nomevaga'),
                'DISVAG' => $this->input->post('qtdvaga'),
                'STTVAG' => $this->input->post('status')
            );
        $codigo = $this->input->post('codigo');

        if ($this->vagas->updateVaga($codigo, $dados)){
            redirect('painel/vagas','refresh');   
        } 
    }
}