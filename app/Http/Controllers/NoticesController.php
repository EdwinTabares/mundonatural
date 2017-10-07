<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Notice;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Storage;


class NoticesController extends Controller
{
   public function index()
    {

      $notices = Notice::orderBy('id', 'ASC')->paginate(4);
      return view('admin.notices.index')->with('notices', $notices);
    }

        /**
=======
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
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
       return view('admin.notices.create');
=======
        return view('admin.notices.create');
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af
    }

    /**
     * Store a newly created resource in storage.
<<<<<<< HEAD
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notice = new Notice($request->all());

          if($request->file('imagen'))
=======
     *mbr
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticeRequest $request)
    {
        
        $noticia = new Noticia($request->all());

        if($request->file('imagen'))
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af
        {
            $file = $request->file('imagen');
            $name = 'noticia_' . time() . '.'. $file->getClientOriginalExtension();
            $path =  public_path() . '/storage/noticias/'; 
            $file -> move($path,$name);
<<<<<<< HEAD
            $notice->imagen = $name;
        }



        $notice->save();


        return redirect()->route('notices.index');              
=======
            $noticia->imagen = $name;
        }

        $noticia->save();
         Flash::success("Se ha registrado la noticia ".$noticia->titulo." de forma exitosa.");
         return redirect('panel/notices');
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function show(notice $notice)
    {

=======
    public function show($id)
    {
        $notice = Noticia::find($id);
        return view('admin.notices.show')->with('notice',$notice);
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function edit(notice $notice)
    {
        return view('admin.notices.edit',compact('notice'));
=======
    public function edit($id)
    {
        $notice = Noticia::find($id);
        return view('admin.notices.edit')->with('notice',$notice);
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function update(Request $request, notice $notice)
    {
      

        $notice->update($request->all());
        return redirect()->route('admin.notices.index');
=======
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
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function destroy( $notice)
    {
        notice::destroy($notice);
        return redirect()->route('admin.notices.index');
    }

=======
    public function destroy($id)
    {
       $notice = Noticia::find($id);
       Storage::delete('/public/noticias/'.$notice->imagen);
       $notice->delete();
       Flash::error("Se ha eliminado la noticia de forma exitosa.");
       return redirect('/panel/notices');
    }
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af
}
