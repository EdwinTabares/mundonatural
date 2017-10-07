<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notice = new Notice($request->all());

          if($request->file('imagen'))
        {
            $file = $request->file('imagen');
            $name = 'noticia_' . time() . '.'. $file->getClientOriginalExtension();
            $path =  public_path() . '/storage/noticias/'; 
            $file -> move($path,$name);
            $notice->imagen = $name;
        }



        $notice->save();


        return redirect()->route('notices.index');              
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(notice $notice)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(notice $notice)
    {
        return view('admin.notices.edit',compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notice $notice)
    {
      

        $notice->update($request->all());
        return redirect()->route('admin.notices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $notice)
    {
        notice::destroy($notice);
        return redirect()->route('admin.notices.index');
    }

}
