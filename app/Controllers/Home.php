<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('contenido/principal');
    }

// <------------------manual de usuario--------------->
public function manual_usuario()
 {
    return view('contenido/m_usuario');
    // return view('componentes/navbar');

}
// <------------------manual tecnico--------------->
public function manual_tecnico()
 {
    return view('contenido/m_tecnico');
    // return view('componentes/navbar');

}
  // <------------------funciones--------------->
 public function funciones()
  {
     return view('contenido/funciones');
     // return view('componentes/navbar');

 }
  // <------------------framework--------------->
 public function framework()
   {
     return view('contenido/framework');
     // return view('componentes/navbar');

 }
  // <------------------metodologia--------------->
  public function metodologia()
  {
     return view('contenido/metodologia');
     // return view('componentes/navbar');

 }
 public function equipo_trabajo()
  {
     return view('contenido/e_trabajo');
     // return view('componentes/navbar');

 }
}
