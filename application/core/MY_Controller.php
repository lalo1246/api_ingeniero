<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller
{

    public function __construct() {

        parent::__construct();
        //header("Access-Control-Allow-Origin: *");
    }
    public function toJson($data, $status_code=200){
    	header('Content-Type: application/json');
		http_response_code($status_code);
		echo json_encode($data,JSON_PRETTY_PRINT);		

    }
    public function dd($array){
    	echo "<pre>".print_r($array, true)."</pre>";
    }
}