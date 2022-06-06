<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Fradmin extends BaseController
{
	protected $UsersModel;
	//penggunaan UsersModel
	public function __construct()
	{
		$this->UsersModel = new UsersModel();
	}
	public function index()
	{
		return view('admin/index');
	}

	//--------------------------------------------------------------------

}
