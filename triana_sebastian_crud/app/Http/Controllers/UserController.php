<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsers;
use App\Http\Requests\UpdateUsers;
use App\Models\User;

use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;

class UserController extends Controller{
    public function index(){
        $users = User::all();
        return view("users.index", ["users" => $users]);
    }

    public function show($id){
        $users = User::find($id);

        return view("users.show", ["users" => $users]);
    }

    public function create(){
        return view("users.create");
    }

    public function store(StoreUsers $request){
        $user = new User();

        $user -> doc_type = $request -> doc_type;
        $user -> doc_num = $request -> doc_num;
        $user -> name = $request -> name;
        $user -> last_name = $request -> last_name;
        $user -> phone = $request -> phone;
        $user -> user_name = $request -> user_name;
        $user -> email = $request -> email;
        $user -> password = $request -> password;
        $user -> role_id = $request -> role_id;

        $user->save();
        return redirect()->route("users.index");
    }

    public function edit ($id){
        $user = User::find($id);

        return view("users.edit", ["user" => $user]);
    }

    public function update(UpdateUsers $request, $id){
        $user = User::find($id);

        $user -> doc_type = $request -> doc_type;
        $user -> doc_num = $request -> doc_num;
        $user -> name = $request -> name;
        $user -> last_name = $request -> last_name;
        $user -> phone = $request -> phone;
        $user -> user_name = $request -> user_name;
        $user -> email = $request -> email;
        $user -> password = $request -> password;
        $user -> role_id = $request -> role_id;

        $user->save();

        return redirect()->route("users.index");
    }

    public function destroy($id){
        $user = User::find($id);

        $user->delete();

        return view("users.index");
    }



}
