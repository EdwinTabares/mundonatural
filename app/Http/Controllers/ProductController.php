<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Product;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;


class ProductController extends Controller
{
	public function index()
	{
		
        $products = Product::orderBy('titulo', 'ASC')->paginate(5);
        return view('admin.products.index')->with('products',$products);
        
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
        $name = 'producto_' . time() . '.'. $file->getClientOriginalExtension();
        $path =  public_path() . '/storage/productos/'; 
        $file -> move($path,$name);
        $product->imagen = $name;
    }


    $product->save();

    Flash::success("Se ha registrado el producto ".$product->nombre." de forma exitosa.");


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
