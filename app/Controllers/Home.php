<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='pagina principal';
    	echo view('front/head_view',$data);
    	echo view('front/navbar');
        echo view('front/principal');
    	echo view('front/footer');
          
    }

    public function quienes_somos()
    {
        $data['titulo']='quienes somos';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('front/quienessomos');
        echo view('front/footer');
    }


 public function acercaDe()
    {
        $data['titulo']='acerca de';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('front/acercaDe');
        echo view('front/footer');
    }

    public function registrarse()
    {
        $data['titulo']='registrarse';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('back/usuario/registrarse');
        echo view('front/footer');
    }

    public function login()
    {
        $data['titulo']='login';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('back/usuario/login');
        echo view('front/footer');
    }

    public function catalogo()
    {
        $data['titulo']='catalogo';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('front/catalogo');
        echo view('front/footer');
    }
    
}
