<?php

class Home extends CI_Model
{

	public function get_all_data()
	{
	    // $ch = curl_init(); 
	    // curl_setopt($ch, CURLOPT_URL, "https://imdb-api.com/en/API/Top250Movies/k_quzyc85y");
	    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    // $output = curl_exec($ch);
	    // curl_close($ch);  

	    // $js = file_get_contents('https://imdb-api.com/en/API/Top250Movies/k_quzyc85y');
	    $js = file_get_contents('response.json');
  		$pjs = json_decode($js);

		return $pjs->items;
	}

}

?>