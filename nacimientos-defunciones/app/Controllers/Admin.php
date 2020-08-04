<?php namespace App\Controllers;

class Admin extends BaseController
{

    public  function index()
    {
        $data=[
			'active'=>['active','','']
		];
		return view('admin/consultas',$data);
    }
    public  function graficas()
    {
        $data=[
			'active'=>['','active','']
		];
		return view('admin/ver_graficos',$data);
    }
    public  function usuarios()
    {
        $data=[
			'active'=>['','','active']
		];
		return view('admin/gestionar_usuarios',$data);
    }
}