<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function login(){
        $this->load->view('admin/login.php');
    }

}