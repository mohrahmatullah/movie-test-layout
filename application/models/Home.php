<?php

class Home extends CI_Model
{

	public function get_all_data()
	{
	    // $ch = curl_init(); 
	    // curl_setopt($ch, CURLOPT_URL, "https://www.kamibijak.com/api/post/category/all");
	    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    // $output = curl_exec($ch);
	    // curl_close($ch);  

	    $js = file_get_contents('https://imdb-api.com/en/API/Top250Movies/k_quzyc85y');
  		$pjs = json_decode($js);

		return $pjs->items;
	}

	public function get_details_data()
	{
	    // $ch = curl_init(); 
	    // curl_setopt($ch, CURLOPT_URL, "https://www.kamibijak.com/api/post/category/all");
	    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    // $output = curl_exec($ch);
	    // curl_close($ch);  

	    $js = file_get_contents('https://www.kamibijak.com/api/post/category/all');
  		$pjs = json_decode($js);

		return $pjs->data;
	}

}

?>