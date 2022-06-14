<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('users.index');
    }

    public function search(Request $request){

        try {
        $user = User::findOrFail($request->input('user_id'));
    } catch (ModelNotFoundException $exception) {
       // return back()->withError($exception->getMessage())->withInput();
       return back()->withError('User not found by ID ' . $request->input('user_id'))->withInput();

    }
    return view('users.search', compact('user'));

    }
}


