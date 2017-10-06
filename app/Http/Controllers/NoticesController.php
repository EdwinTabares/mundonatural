<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Noticia;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\NoticeRequest;
use Laracasts\Flash\Flash;

class NoticesController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index(Request $request)
    {
    	$notices = Noticia::search($request->titulo)->paginate(5);
        return view('admin.notices.index')->with('notices',$notices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notices.create');
    }

    /**
     * Store a newly created resource in storage.
     *mbr
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticeRequest $request)
    {
        
        $noticia = new Noticia($request->all());

        if($request->file('imagen'))
        {
            $file = $request->file('imagen');
            $name = 'noticia_' . time() . '.'. $file->getClientOriginalExtension();
            $path =  public_path() . '/storage/noticias/'; 
            $file -> move($path,$name);
            $noticia->imagen = $name;
        }

        $noticia->save();
         Flash::success("Se ha registrado la noticia ".$noticia->titulo." de forma exitosa.");
         return redirect('panel/notices');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notice = Noticia::find($id);
        return view('admin.notices.show')->with('notice',$notice);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Noticia::find($id);
        return view('admin.notices.edit')->with('notice',$notice);
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
         $notice = Noticia::find($id);
         $notice->fill($request->all());
         $file = $request->file('imagen');
         if($file)
         {
         	Storage::delete('public/noticias/'.$notice->imagen);
         	$name = 'noticia_' . time() . '.' . $file->getClientOriginalExtension();
         	$file->storeAs('public/noticias',$name);
         	$notice->imagen = $name;
         }
         $notice->save();
         Flash::warning("Se ha actualizado la noticia ".$notice->titulo." de forma exitosa.");
         return redirect('/panel/notices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $notice = Noticia::find($id);
       Storage::delete('/public/noticias/'.$notice->imagen);
       $notice->delete();
       Flash::error("Se ha eliminado la noticia de forma exitosa.");
       return redirect('/panel/notices');
    }
}
