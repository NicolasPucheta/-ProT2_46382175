<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
         $data['Titulo'] = 'Eclat Perfumes';
        echo view('front/head_view',$data);
        echo view('front/navbar');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    
    public function quienesSomos()
    {
        $data['Titulo'] = 'Quienes Somos';
        echo view('front/head_view',$data);
        echo view('front/navbar',$data);
        echo view('front/Quienes_Somos');
        echo view('front/footer_view');
    }

    public function Productos()
    {
        $data['Titulo'] = 'Productos';
        echo view('front/head_view',$data);
        echo view('front/navbar',$data);
        echo view('front/productos',$data);
        echo view('front/footer_view',$data);
    }

    public function login()
    {
        $data['Titulo'] = 'Login';
        echo view('front/head_view', $data);
        echo view('front/navbar',$data);
        echo view('front/inicio_sesion', $data); 
        echo view('front/footer_view',$data );

    }
}
