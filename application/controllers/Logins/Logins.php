<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logins extends CI_Controller{

     private $table = 'pessoa';
     private $primary_key = 'id_pessoa';
     
     public function __construct() {
         parent::__construct();
     }
     
     public function index(){
        
         $this->template->load('template/login_tpl','logins/logins');
     }
     
     public function validar (){
         $nome = $this->input->post('nome');
         $senha = $this->input->post('senha');
         
        $pessoa= $this->db->select('nome','senha')
                 ->get_where('pessoa',['nome'=>$nome]);
        
         echo $pessoa;
     }
     
     
     public function cadastro(){
       
         $this->template->load('template/register_tpl','logins/cadastro');
     }
}

