<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

    function index(){
        $this->load->view('admin/login');
    }

    function main(){
        $this->load->view('admin/request_peminjaman');
    }

    function on_going(){
        $this->load->view('admin/on_going');
    }

}