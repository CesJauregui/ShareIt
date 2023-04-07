<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Publicacion;
class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $page_title = "Publicaciones"; 
        $publicaciones = DB::table('publicaciones')
                    ->orderBy('id','desc')
                    ->limit(6)
                    ->get();
        $showPublicaciones = DB::table('publicaciones')
                    ->orderBy('id','desc')
                    ->get();                     
        return view('publicaciones.publicaciones',compact('showPublicaciones','publicaciones','page_title'));
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
        $publicacion = new Publicacion;
        $publicacion->desc_publicacion = $request->publicacion_desc;
        $publicacion->user_publicacion = $request->user_publicacion;
        $publicacion->file_path_publicacion = $file;
        $publicacion->save();
        return redirect()->route('publicaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $debate = Publicacion::find($id);
        return view('publicaciones.show', compact('debate'));
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
        //
    }
}
