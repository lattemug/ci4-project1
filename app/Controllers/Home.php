<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('SearchPage');
		$this->load->helper('http://localhost:8080/');
	}

	public function add()
	{
		return view('tambahjson');
	}
}
