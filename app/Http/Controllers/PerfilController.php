<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index(Request $request)
    {
        $page_title = 'Perfil';
        return view('profile.profile',compact('page_title'));
    }
}
