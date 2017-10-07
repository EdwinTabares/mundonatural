<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\Product;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;


class ProductController extends Controller
{
	public function index()
<<<<<<< HEAD
    {

      $products = Product::orderBy('id', 'ASC')->paginate(4);
      return view('admin.products.index')->with('products', $products);
=======
	{
		
        //dd("index productos");
        $products = Product::orderBy('id', 'ASC')->paginate(5);
        return view('admin.products.index')->with('products',$products);
        
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af
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
<<<<<<< HEAD
        $product = new Product($request->all());

          if($request->file('imagen'))
        {
            $file = $request->file('imagen');
            $name = 'producto_' . time() . '.'. $file->getClientOriginalExtension();
            $path =  public_path() . '/storage/productos/'; 
            $file -> move($path,$name);
            $product->imagen = $name;
        }

=======

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
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af

    Flash::success("Se ha registrado el producto ".$product->nombre." de forma exitosa.");


<<<<<<< HEAD

        return redirect()->route('products.index');              
    }
=======
}
>>>>>>> 0533489300f9f3ff09ee99de68a4e9bb3652c7af

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
      

        $product->update($request->all());
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $product)
    {
        Product::destroy($product);
        return redirect()->route('admin.products.index');
    }

}
