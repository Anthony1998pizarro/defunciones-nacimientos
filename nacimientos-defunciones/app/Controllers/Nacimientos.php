<?php namespace App\Controllers;

use Config\Database;

class Nacimientos extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();
		$query= $db->query('select * from mv_nac  limit 5000');
		$result = $query->getResult();
		return $this->response->setJSON($result);

  }

  public function asistencias()
  {
    $db = \Config\Database::connect();
		$query= $db->query('select * from mv_nac_asis');
		$result = $query->getResult();

    $result = $query->getResult();
		return $this->response->setJSON($result);

  }

  public function provincia($name)
  {
    
    $db = \Config\Database::connect();
		$query= $db->query('select * from mv_nac_canton cant where cant."Provincia" = \''.$name.'\'');
		$result = $query->getResult();

    $result = $query->getResult();
		return $this->response->setJSON($result);

  }

  public function estadoCivil()
  {
    $db = \Config\Database::connect();
		$query= $db->query('select * from mv_nac_est_civ ');
		$result = $query->getResult();

    $result = $query->getResult();
		return $this->response->setJSON($result);

  }

  public function instruccion()
  {
    $db = \Config\Database::connect();
		$query= $db->query('select * from mv_nac_inst');
		$result = $query->getResult();

    $result = $query->getResult();
		return $this->response->setJSON($result);

  }

  public function ocurrencia()
  {
    $db = \Config\Database::connect();
		$query= $db->query('select * from mv_nac_ocurrencia');
		$result = $query->getResult();

    $result = $query->getResult();
		return $this->response->setJSON($result);

  }

  public function producto()
  {
    $db = \Config\Database::connect();
		$query= $db->query('select * from mv_nac_prod_emb');
		$result = $query->getResult();

    $result = $query->getResult();
		return $this->response->setJSON($result);

  }
	//--------------------------------------------------------------------

}
