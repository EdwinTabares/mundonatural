<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
	public function index()
	{
		
        return view('admin.products.index');
        
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function create()
        {
        	return view('admin.products.create');
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $product = new Product($request->all());


        if($request->file('imagen'))
        {
            $file = $request->file('imagen');
            $name = 'noticia_' . time() . '.'. $file->getClientOriginalExtension();
            $path =  public_path() ; 
            $file -> move($path,$name);
            $product->imagen = $name;
        }



        $product->save();

        Flash::success("Se ha registrado el producto ".$product->nombre." de forma exitosa.");
        return redirect()->route('products.index');              
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {

    }
}
