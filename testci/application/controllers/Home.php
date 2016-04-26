<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __contruct(){
		parent::__contruct();
		$this->load->helper(array('url','form'));
	}
	public function index()
	{
		
		$json_url = "http://test.localfeedbackloop.com/api?apiKey=61067f81f8cf7e4a1f673cd230216112&noOfReviews=10&internal=0&yelp=1&google=1&offset=50&threshold=0";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
		curl_setopt($ch, CURLOPT_URL, $json_url);
		$result = json_decode(curl_exec($ch));
		var_dump ($result);

		$curl_errno = curl_errno($ch);
		$curl_error = curl_error($ch);

		curl_close($ch);

		// ON SUCCESS

		//$json_a =  $result[10];
		
		
		$this->load->view('home');
	}
}
