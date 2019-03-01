<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;
use Illuminate\Support\Facades\Input;

class SearchUserController extends Controller
{
    public function user_lists(Request $request)
    {
        
        if($request->has('search'))
        {
            $users = User::search($request->search)->paginate(6);
        }
        else
        {
            $users = User::paginate(6);
        }
        
        return view('user_list',compact('users'));
    }
}
