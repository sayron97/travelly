<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class SpaController extends Controller
{
    public function index()
    {
        return view('spa');
    }

    public function post(Request $request)
    {
        $users = new Users();
        $users->name = $request->body['name'];
        $users->email = $request->body['email'];
        $users->save();

        return response()->json(true);
    }

    public function get()
    {
        $users = Users::get();
        return response()->json($users);
    }

    public function deleteAll()
    {
        Users::where('id','>','0')->delete();
        return response()->json(true);
    }

    public function abc()
    {
        $variable = "name";
        $name = 1;
        return $$variable;
    }

}