<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __contruct(){
		parent::__contruct();
		$this->load->helper(array('url','form'));
	}
	public function index()
	{
		
		$result=$this->getfeedback(1);
		$totalreview=$result['business_info']['total_rating']['total_no_of_reviews'];
		$pages=intval($totalreview/10);
		$extrarecord=$totalreview%10;
		if($extrarecord>0){
			$pages++;
		}
		$result['pages']=$pages;
		

		// ON SUCCESS

		//$json_a =  $result[10];*/
		//$result = file_get_contents($json_url);
		// Will dump a beauty json :3
		//print_r(json_decode($result, true));
		
		
		$this->load->view('home',$result);
	}

	public function paginate(){
		
		$result=$this->getfeedback($this->input->post('pageNumber'));
		echo json_encode($result['reviews']);
	}

	function getfeedback($pageNumber){
		$offset=($pageNumber-1)*10;
		$json_url = "http://test.localfeedbackloop.com/api?apiKey=61067f81f8cf7e4a1f673cd230216112&noOfReviews=10&internal=0&yelp=1&google=1&offset=".$offset."&threshold=0";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
		curl_setopt($ch, CURLOPT_URL, $json_url);
		//htmlspecialchars_decode(string)
		$curlResult=curl_exec($ch);
		$result = json_decode($curlResult,true);
		curl_close($ch);
		return $result;
	}
}
