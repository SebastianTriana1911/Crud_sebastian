<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoles;
use App\Http\Requests\UpdateRoles;
use App\Models\Roles;
use Illuminate\Http\Request;

class RoleController extends Controller{

    public function index(){
        $rol = Roles::all();
        return view("roles.index", ["roles" => $rol]);
    }

    public function show($id){
        $rol = Roles::find($id);

        return view("roles.show", ["roles" => $rol]);
    }

    public function create(){
        return view("roles.create");
    }

    public function store(StoreRoles $request){
        $rol = Roles::create($request->all());

        return redirect()->route("roles.index");
    }

    public function edit ($id){
        $roles = Roles::find($id);

        return view("roles.edit", ["roles" => $roles]);
    }

    public function update (UpdateRoles $request, $id){
        $rol = Roles::find($id);
        $rol -> update($request->all());
        return redirect()->route("roles.index");
    }

    public function destroy ($id){
        $rol = Roles::find($id);

        $rol -> delete();

        return redirect()->route("roles.index");
    }
}
