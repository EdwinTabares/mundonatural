<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Modelo\Noticia;
use App\Modelo\Client;
use App\Modelo\Product;
use App\Modelo\Contacto;
use Laracasts\Flash\Flash;


class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    	
    	return view('front.index');
    }
    
    public function contacto(){
       
        return view('front.contacto');
    }

    public function storeContacto(ContactRequest $request)
    {
        $contacto = new  Contacto($request->all());
        $contacto->save();
        Flash::success("Gracias por contactarse con nosotros!");
        return redirect('/');
    }


    public function noticia() {
    	
        $noticias = Noticia::orderBy('id', 'DES')->paginate(5);
       
    	return view('front.noticias')->with('noticias', $noticias);

    }
}
