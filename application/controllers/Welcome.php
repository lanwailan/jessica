<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->helper(array('form','url'));
		 $this->load->helper('httpcurl');
      
	 }

	public function index()
	{
			$location = $this->input->get("location");
		  	if(!empty($location)){

		  		$url = "https://free-api.heweather.com/s6/air?location=".$location."&key=b43a7c722cdf4943a0b58fc34455397d";
				$url2 = "https://free-api.heweather.com/s6/weather?location=".$location."&key=b43a7c722cdf4943a0b58fc34455397d";
		
				$air = _https_curl_post($url);
				$weather = _https_curl_post($url2);

				$air = json_decode($air);
				$weather = json_decode($weather);


				$air = $air->HeWeather6;
				$air = $air[0];

				$weather = $weather->HeWeather6;
				$weather = $weather[0];

				if($air->status == "ok" && $weather->status =="ok"){
					
					
					$airCondition = $air->air_now_city;
					$weather->air_now_city = $airCondition;
					$newWeather = new StdClass();
					$newWeather->HeWeather6 = array("0"=>$weather);
					echo json_encode($newWeather);
				}else{
					$errorWeather = new StdClass();
					$weather->status = "error";
					$errorWeather->HeWeather6 = array("0"=>$weather);
					echo json_encode($errorWeather);
				}	

		  	}		
	}

}
