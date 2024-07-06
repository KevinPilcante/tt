<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home.Home");
    }
    public function login(){
        return view("home.login");
    }
    public function index2(){
        return view("home.cambiarcontraseña"); 
    }
    public function index3(){
        return view("home.gestionarusuarios"); 
    }
    public function index4(){
        return view("home.gestionarvehiculos"); 
    }
    public function index5(){
        return view("home.gestionarclientes"); 
    }
    public function index6(){
        return view("home.arriendos"); 
    }
    public function index7(){
        return view("home.arrendar"); 
    }
    public function index8(){
        return view("home.crearperfil"); 
    }
}
