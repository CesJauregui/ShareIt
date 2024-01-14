<?php

namespace App\Http\Controllers;

use App\Models\Debate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use function Laravel\Prompts\table;

class DebateController extends Controller
{
    public function index(Request $request) : View {
        return view('debate.debate');
    }

    public function store(Request $request) : RedirectResponse{
        $debate = new Debate();
        $debate->title = $request->title;
        $debate->description = $request->description;
        $debate->file_path = $request->file('file_path')->store('/','avatars');
        $debate->id_user = $request->id_user;
        $debate->save();
        return redirect('debate');
    }
}
