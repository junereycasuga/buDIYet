<?php

class Curl
{
	public static function dataBudget($type=NULL,$dept_code=NULL,$owner_code=NULL,$agency_type=NULL,$year=NULL){

		$url = 'http://api.kabantayngbayan.ph/budget/?app_id=527a34f35e13db255feccc5c';
		$limit = null;
		$skip = 0;
		$params = array();
		if($type){
			array_push($params,'type='.$type);
		}
		if($dept_code){
			array_push($params,'department_code='.$dept_code);
		}
		if($owner_code){
			array_push($params,'owner_code='.$owner_code);
		}
		if($agency_type){
			array_push($params,'agency_type='.$agency_type);
		}
		if($year){
			array_push($params,'year='.$year);
		}

		$searchUrl = $url;

		for($i = 0; $i < sizeOf($params); $i++){
			$searchUrl = $searchUrl."&".$params[$i];
		}
		$searchUrl = $searchUrl."&limit=".$limit."&skip=".$skip;
		$budget = curl_init();

		curl_setopt($budget, CURLOPT_URL, $searchUrl);
		curl_setopt($budget, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($budget, CURLOPT_TIMEOUT, '3');
		curl_setopt($budget, CURLOPT_CUSTOMREQUEST, 'GET');

		$response = json_decode(curl_exec($budget));
		curl_close($budget);

		return $response;
	}

	public static function dataSaro($dept_code=NULL,$agency_code=NULL,$year=NULL,$region=NULL){

		$url = 'http://api.kabantayngbayan.ph/saro/?app_id=527a34f35e13db255feccc5c';
		$limit = 10;
		$skip = 0;
		$params = array();
		if($dept_code){
			array_push($params,'department_code='.$dept_code);
		}
		if($agency_code){
			array_push($params,'agency_code='.$agency_code);
		}
		if($year){
			array_push($params,'year='.$year);
		}
		if($region){
			array_push($params,'region='.$region);
		}

		$searchUrl = $url;

		for($i = 0; $i < sizeOf($params); $i++){
			$searchUrl = $searchUrl."&".$params[$i];
		}
		$searchUrl = $searchUrl."&limit=".$limit."&skip=".$skip;
		$saro = curl_init();

		curl_setopt($saro, CURLOPT_URL, $searchUrl);
		curl_setopt($saro, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($saro, CURLOPT_TIMEOUT, '3');
		curl_setopt($saro, CURLOPT_CUSTOMREQUEST, 'GET');
		$response = json_decode(curl_exec($saro));
		curl_close($saro);

		return $response;
	}

	public static function dataSaob($period=NULL,$agency=NULL,$year=NULL){

		$url = 'http://api.kabantayngbayan.ph/saob/?app_id=527a34f35e13db255feccc5c';
		$limit = 10;
		$skip = 0;
		$params = array();
		if($period){
			array_push($params,'period='.$period);
		}
		if($year){
			array_push($params,'year='.$year);
		}
		if($agency){
			array_push($params,'agency='.$agency);
		}

		$searchUrl = $url;

		for($i = 0; $i < sizeOf($params); $i++){
			$searchUrl = $searchUrl."&".$params[$i];
		}
		$searchUrl = $searchUrl."&limit=".$limit."&skip=".$skip;
		$saob = curl_init();

		curl_setopt($saob, CURLOPT_URL, $searchUrl);
		curl_setopt($saob, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($saob, CURLOPT_TIMEOUT, '3');
		curl_setopt($saob, CURLOPT_CUSTOMREQUEST, 'GET');
		$response = json_decode(curl_exec($saob));
		curl_close($saob);

		return $response;
	}

	public static function getTotal(){
		$url = 'http://api.kabantayngbayan.ph/total/?app_id=527a34f35e13db255feccc5c';

		$total = curl_init();

		curl_setopt($total, CURLOPT_URL, $url);
		curl_setopt($total, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($total, CURLOPT_TIMEOUT, '3');
		curl_setopt($total, CURLOPT_CUSTOMREQUEST, 'GET');


		$response = json_decode(curl_exec($total));
		curl_close($total);
		if(!$response){
				throw new CHttpException("Error on fetching the details.please reload the page", 404);
		}
		$gaa=0;
		foreach ($response->data as $key => $value) {
			if($value->year==date('Y')){
					$gaa = $value->gaa_total;
			}
		}
		return $gaa;

	}

	public static function dataTotal(){
		$year = date('Y');
		$url = 'http://api.kabantayngbayan.ph/total/?app_id=527a34f35e13db255feccc5c&year='.$year;

		$total = curl_init();

		curl_setopt($total, CURLOPT_URL, $url);
		curl_setopt($total, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($total, CURLOPT_TIMEOUT, '3');
		curl_setopt($total, CURLOPT_CUSTOMREQUEST, 'GET');

		$response = json_decode(curl_exec($total));
		curl_close($total);

		return $response;

	}

}