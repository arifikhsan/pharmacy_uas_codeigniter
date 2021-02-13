<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		return view('admin/index');
	}

  public function blank()
	{
		return view('admin/blank');
	}
}
