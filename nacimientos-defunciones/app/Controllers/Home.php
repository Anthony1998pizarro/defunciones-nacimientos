<?php namespace App\Controllers;

use Config\Database;

class Home extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();
		$query= $db->query('select * from nivel_insti');
		$result = $query->getResult();
		foreach ($result as $row) {
			echo $row->nivel_inst."<br/>"; 
		}
	}

	//--------------------------------------------------------------------

}
