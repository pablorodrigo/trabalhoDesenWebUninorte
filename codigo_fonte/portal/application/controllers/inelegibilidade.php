<?php

class inelegibilidade extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model( 'CandidateModel' );
    }
    
    public function consulta()
    {
        $this->load->helper( 'form' );
        $this->load->library( 'form_validation' );
        $this->load->helper( 'url' );
        
        // Tenta primeiro validar o nome, se o nome estiver em branco, tenta
        // validar o CPF.
        
        $this->form_validation->set_rules( 'name', 'Nome', 'required' );
        
        $validated = $this->form_validation->run();
        if ( !$validated )
        {
            $this->form_validation->reset_validation();
        
            $this->form_validation->set_rules( 
                    'cpf', 
                    'CPF', 
                    'required|regex_match[ /[0-9]{3}\\.[0-9]{3}\\.[0-9]{3}-[0-9]{2}/ ]' );
            
            $validated = $this->form_validation->run();
        }
        
        if( !$validated )
        {
            $this->load->view( 'inelegibilidade/consulta' );
        }
        else
        {
            $data[ 'Candidates' ] = $this->CandidateModel->FindCandidates();
            $this->load->view( 'inelegibilidade/resultado', $data );
        }
    }
}
