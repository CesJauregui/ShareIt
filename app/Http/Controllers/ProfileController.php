<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(Request $request) : View {
        $pageTitle = 'Perfil';
        $data = DB::table('users')->first();
        return view('profile.profile',compact('pageTitle','data'));
    }
}
