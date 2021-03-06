<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Capsule\Manager as DB;

class Welcome extends CI_Controller {
	public function index()
	{
		return blade('dashboard.index');
	}
	
	public function getkuotasms()
	{
		$req = helper()->cekKuotaSms();
		
		if(isset($req->message->value)) {
			echo $req->message->value;
		} else {
			echo $req->message->text;
		}
	}
}
