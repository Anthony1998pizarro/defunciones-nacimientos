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
    public  function graficas()
    {
        $data=[
			'active'=>['','active']
		];
		return view('users/grafica',$data);
    }
}
