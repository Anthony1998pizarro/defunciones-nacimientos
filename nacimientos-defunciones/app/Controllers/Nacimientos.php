<?php namespace App\Controllers;

use Config\Database;

class Nacimientos extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();
		$query= $db->query('select * from mv_nac limit 5000');
		$result = $query->getResult();
		return $this->response->setJSON($result);

  }

  public function asistencias()
  {
    $db = \Config\Database::connect();
		$query= $db->query('select * from mv_nac_asis limit 5000');
		$result = $query->getResult();

    $result = $query->getResult();
		return $this->response->setJSON($result);

  }
  
  public function canton()
  {
    $db = \Config\Database::connect();
		$query= $db->query('select * from mv_nac_canton limit 5000');
		$result = $query->getResult();

    $result = $query->getResult();
		return $this->response->setJSON($result);

  }

  public function estadoCivil()
  {
    $db = \Config\Database::connect();
		$query= $db->query('select * from mv_nac_est_civ limit 5000');
		$result = $query->getResult();

    $result = $query->getResult();
		return $this->response->setJSON($result);

  }

  public function instruccion()
  {
    $db = \Config\Database::connect();
		$query= $db->query('select * from mv_nac_inst limit 5000');
		$result = $query->getResult();

    $result = $query->getResult();
		return $this->response->setJSON($result);

  }

  public function ocurrencia()
  {
    $db = \Config\Database::connect();
		$query= $db->query('select * from mv_nac_ocurrencia limit 5000');
		$result = $query->getResult();

    $result = $query->getResult();
		return $this->response->setJSON($result);

  }

  public function producto()
  {
    $db = \Config\Database::connect();
		$query= $db->query('select * from mv_nac_prod_emb limit 5000');
		$result = $query->getResult();

    $result = $query->getResult();
		return $this->response->setJSON($result);

  }
	//--------------------------------------------------------------------

}
