<?php namespace App\Controllers;

class User extends BaseController
{

    public  function index()
    {
        $data=[
			'active'=>['active','']
		];
		return view('users/consulta',$data);
    }
    public  function consulta()
    {
        $data=[
			'active'=>['active','']
		];
		return view('users/consulta',$data);
    }

    public function provincia_nac()
    {
      $db = \Config\Database::connect();
      $query= $db->query('SELECT  provincia FROM provincia order by provincia;');
      $result = $query->getResult();
      $data=[
        'active'=>['active',''],
        'results' => $result,
        'flag' => 0

      ];
      if ($this->request->getMethod() === 'post')
      {
        $select=$this->request->getPost('provincia');
        $query = $db->query('SELECT  "Provincia","Canton", "Nacidos" FROM mv_nac_canton  WHERE "Provincia"=\''.$select.'\';');
        $template = [
          'table_open' => '<table class="table table-hover">',
          'thead_open' => '<thead class="thead-dark">',
        ];

        $table = new \CodeIgniter\View\Table($template);
        $table = $table->generate($query);

        $data+=[
          'provincia' => $select,
          'table'=> $table
        ];  
        $data['flag']=1;
      }
    return view('users/consultas/nacimientos/provincia',$data);

    }

    public  function estado_nac()
    {

    $db = \Config\Database::connect();
    $query= $db->query('SELECT  estado_civil FROM estado_civil order by estado_civil');
		$result = $query->getResult();
    $data=[
        'active'=>['active',''],
        'results' => $result,
        'flag' => 0
    ];

    if ($this->request->getMethod() === 'post')
      {
        $table = new \CodeIgniter\View\Table();
        $select=$this->request->getPost('estado');
        $select=urldecode($select);
        $query = $db->query('SELECT  "ESTADO","Provincia","Canton","Nacidos" FROM mv_nac_canton_estado WHERE "ESTADO"=\''.$select.'\';');
        $table = $table->generate($query);
        $data+=[
          'estado' => $select,
          'table'=> $table
        ];  
        $data['flag']=1;
      }
    return view('users/consultas/nacimientos/estado',$data);

    }



    

    public  function educacion_nac()
    {
    $db = \Config\Database::connect();
    $query= $db->query('SELECT nivel_inst FROM nivel_insti order by nivel_inst;');
		$result = $query->getResult();
    $data=[
      'active'=>['active',''],
      'results' => $result,
      'flag' => 0
  ];

  if ($this->request->getMethod() === 'post')
      {
        $table = new \CodeIgniter\View\Table();
        $select=$this->request->getPost('estudio');
        $query = $db->query('SELECT "Nivel Instruccion","Provincia", "Canton",  "Nacidos" FROM mv_nac_canton_inst where "Nivel Instruccion"=\''.$select.'\';');
        $table = $table->generate($query);
        $data+=[
          'estudio' => $select,
          'table'=> $table
        ];  
        $data['flag']=1;
      }

    return view('users/consultas/nacimientos/estudio',$data);
    
    }

    public  function ocurrencia_nac()
    {
    $db = \Config\Database::connect();
    $query= $db->query('SELECT  ocurrencia FROM ocurrencia ORDER by ocurrencia;');
		$result = $query->getResult();
     $data=[
      'active'=>['active',''],
      'results' => $result
    ];
    return view('users/consultas/nacimientos/ocurrencia',$data);
    
    }
    

    public  function asistencia_nac()
    {
    $db = \Config\Database::connect();
    $query= $db->query('SELECT  asistido_por FROM asistido_por order by asistido_por;');
		$result = $query->getResult();
     $data=[
      'active'=>['active',''],
      'results' => $result
    ];
    return view('users/consultas/nacimientos/asistencia',$data);
    
    }

    public  function producto_nac()
    {
    $db = \Config\Database::connect();
    $query= $db->query('SELECT producto FROM producto_emb ORDER by producto ;');
		$result = $query->getResult();
     $data=[
      'active'=>['active',''],
      'results' => $result
    ];
    return view('users/consultas/nacimientos/producto',$data);

    }
    public  function provincia_def()
    {
    $db = \Config\Database::connect();
    $query= $db->query('SELECT  provincia FROM provincia order by provincia;');
		$result = $query->getResult();
     $data=[
      'active'=>['active',''],
      'results' => $result
    ];
    return view('users/consultas/defunciones/provincia',$data);
    }
    
    public  function estado_def()
    {
    $db = \Config\Database::connect();
    $query= $db->query('SELECT  estado_civil FROM estado_civil order by estado_civil');
		$result = $query->getResult();
     $data=[
      'active'=>['active',''],
      'results' => $result
    ];
    return view('users/consultas/defunciones/estado',$data);
    
    }
    public  function educacion_def()
    {
    $db = \Config\Database::connect();
    $query= $db->query('SELECT nivel_inst FROM nivel_insti order by nivel_inst;');
		$result = $query->getResult();
     $data=[
      'active'=>['active',''],
      'results' => $result
    ];
    return view('users/consultas/defunciones/estudio',$data);
    
    }

    public  function ocurrencia_def()
    {
    $db = \Config\Database::connect();
    $query= $db->query('SELECT  ocurrencia FROM ocurrencia ORDER by ocurrencia;');
		$result = $query->getResult();
     $data=[
      'active'=>['active',''],
      'results' => $result
    ];
    return view('users/consultas/defunciones/ocurrencia',$data);
    
    }

    public  function causa_def()
    {
    $db = \Config\Database::connect();
    $query= $db->query('SELECT causa_fet FROM causa_fetal ORDER by causa_fet;');
		$result = $query->getResult();
     $data=[
      'active'=>['active',''],
      'results' => $result
    ];
    return view('users/consultas/defunciones/causa',$data);
    
    }
    
    public  function semana_def()
    {
    $db = \Config\Database::connect();
    $query= $db->query('SELECT sem_gest FROM sem_gest ORDER by sem_gest;');
		$result = $query->getResult();
     $data=[
      'active'=>['active',''],
      'results' => $result
    ];
    return view('users/consultas/defunciones/semana',$data);
    
    }

    

    public  function graficas()
    {
        $data=[
			'active'=>['','active']
		];
		return view('users/grafica',$data);
    }

}
