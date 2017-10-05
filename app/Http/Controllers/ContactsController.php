<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactRequest;
use Laracasts\Flash\Flash;

class ContactsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
     {

        $contactos = Contact::search($request->nombre)->paginate(5);
        return view('admin.contact.index')->with('contactos',$contactos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)    {

        $contacto = new  Contact($request->all());
        $contacto->save();
        Flash::success("Tu mensaje ha sido enviado de manera exitsosa.");
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacto = Contact::find($id);
        return view('admin.contact.show')->with('contacto',$contacto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacto = Contact::find($id);
        return view('admin.contact.edit')->with('user',$contacto);
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
     $contacto = Contact::find($id);
     $contacto->fill($request->all());
     $contacto->save();
     return redirect('panel/contacts');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Contact::find($id)->delete();
       Flash::error("Se ha eliminado el contacto de forma exitosa.");
       return redirect('panel/contacts');
   }
}
