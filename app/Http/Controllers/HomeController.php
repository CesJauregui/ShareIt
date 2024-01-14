<?php

namespace App\Http\Controllers;

use App\Models\Debate;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  public function index(Request $request): View
  {
    $debates = Debate::orderByDesc('created_at')->get();
    return view('index', compact('debates'));
  }
}
