<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Candidate
 *
 * @author CLIENTE
 */
class CandidateModel extends CI_Model
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function Find( $cpf = 0, $name = '' )
    {
        $result = NULL;
        if ( $cpf != 0 )
        {
            $query = $this->db->get_where( 'candidates', array( 'CPF' => $cpf ) );
            $result = $query->row_array();
        }
        
        return $result;
    }
    
    public function FindCandidates()
    {
        $result = array();
        
        $Name = trim( $this->input->post( 'name' ) );
        $cpf = trim( $this->input->post( 'cpf') );
        $RunQuery = FALSE;
        
        if ( strlen( $Name ) > 0 )
        {
            $NameLike = '%' . str_replace( ' ', '%' , $Name ) . '%';
            $sql = "SELECT * FROM candidates WHERE name LIKE '" . $NameLike . "'";
            $RunQuery = TRUE;
        }
        elseif ( strlen( $cpf ) > 0 )
        {
            $cpfvalue = 0;
            $cpfvalue += ( str_replace( array( '.', '-' ), array( '', ''), $cpf ) );
            $sql = 'SELECT * FROM candidates WHERE CPF = ' . $cpfvalue;
            $RunQuery = TRUE;
        }

        if ( $RunQuery )
        {
            $query = $this->db->query( $sql );
            $result = $query->result_array();
        }
        
        return $result;
    }
}
