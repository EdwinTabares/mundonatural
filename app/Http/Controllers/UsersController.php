<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo\User;
use App\Http\Requests\UserRequest;
use Laracasts\Flash\Flash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index(Request $request)
    {
    	$usuarios = User::search($request->nombre)->paginate(5);
        return view('admin.user.index')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
         $user = new  User($request->all());
         $user->password = bcrypt($request->password);
         $user->save();
         
         Flash::success("Se ha registrado el usuario ".$user->nombre." de forma exitosa.");
         return redirect('/panel/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.show')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
    	return view('admin.user.edit')->with('user',$user);
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
         $user = User::find($id);
         $user->fill($request->all());
         $user->password = bcrypt($request->password);
         $user->save();
         Flash::warning("Se ha actualizado el usuario ".$user->nombre." de forma exitosa.");
         return redirect('/panel/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       User::find($id)->delete();
       Flash::error("Se ha eliminado el usuario de forma exitosa.");
       return redirect('/panel/users');
    }
}
