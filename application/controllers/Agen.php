<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\QueryException;

use application\eloquents\Agen as Agen_model;

class Agen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		// helper()->auth(['a', 'p']);
	}

	public function index()
	{
		$agens = Agen_model::all();

		return blade('agen.index', compact(['agens']));
	}
}