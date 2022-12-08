<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\PostsController;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Gate::denies('logged-in')){
            dd('No se permite el acceso');
        }


        if(Gate::allows('is-admin')){
            return view('admin.users.index', ['users' => User::paginate(10)]);
        }

        dd('Tienes que ser admin');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        if(Gate::denies('logged-in')){
            dd('No se permite el acceso');
        }

        return view('admin.users.create', ['roles' => Role::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
       // $validatedData = $request->validated();
       //$user= User::create($validatedData);

        $newUser = new CreateNewUser();
        $user = $newUser->create($request->only(['name', 'email', 'password', 'password_confirmation']));

        $user->roles()->sync($request->roles);

        Password::sendResetLink($request->only(['email']));

        $request->session()->flash('success', 'Usuario creado correctamente');

        return redirect(route('admin.users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if(Gate::denies('logged-in')){
            dd('No se permite el acceso');
        }


        return view('admin.users.edit', 
        [
            'roles' => Role::all(),
            'user'  => User::find($id)
        ]);
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
        $user = User::findOrFail($id);

        if(!$user){
            $request->session()->flash('error', 'No puedes editar a este usuario');
            return redirect(route('admin.users.index'));
        }

        $user->update($request->except(['_token', 'roles']));
        $user->roles()->sync($request->roles);

        $request->session()->flash('success', 'Usuario creado correctamente');
        return redirect(route('admin.users.index'));

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {

        if(Gate::denies('logged-in')){
            dd('No se permite el acceso');
        }
        
      

        User::destroy($id);
        
  


        $request->session()->flash('success', 'Usuario eliminado correctamente');

        return redirect(route('admin.users.index'));
    }
}
