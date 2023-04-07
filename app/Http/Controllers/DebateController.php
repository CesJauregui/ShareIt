<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Debate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DebateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $userDeba = $request->input('iddebate');
        $page_title = "Debates"; 
        $debates = DB::table('debates')
                    ->orderBy('id','desc')
                    ->limit(6)
                    ->get();
        $showDebates = DB::table('debates')
                    ->orderBy('id','desc')
                    ->get();
        $countDebates = DB::table('debates')
        ->where('id',$userDeba)->count();                     
        return view('debates.debates',compact('debates','showDebates','countDebates','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('file_p') == null) {
            $file = "";
        }else{
           $file = $request->file('file_p')->store('/','public');  
        }
        $debate = new Debate;
        $debate->topic_name = $request->topic_n;
        $debate->desc_debate = $request->debat;
        $debate->user = $request->user_debat;
        $debate->file_path = $file;
        $debate->save();
        return redirect()->route('debates');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $debate = Debate::find($id);
        $countComentarios = Comentario::where('debate_id',$id)->count();
        $countDebates = Debate::where('id',$id)->count();
        $debateCome = DB::table('debates')
        ->join("comentarios","comentarios.debate_id", "=", "debates.id")
        ->where("comentarios.debate_id", "=", $id)
        ->orderBy('comentarios.id','desc')
        ->get(['comentarios.contenido','comentarios.user_debate', 'comentarios.created_at','comentarios.id']);
        return view('debates.show', compact('debate','debateCome','countComentarios','countDebates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteDebates = Debate::whereSlug($id)->firstOrFail();
        $deleteDebates->delete();
        return redirect('debates');
    }
}
