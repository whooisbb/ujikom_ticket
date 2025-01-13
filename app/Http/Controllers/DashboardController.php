<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{

    public function dashboard()
    {
        if(Auth::user()->is_role == 2) {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('superadmin.dashboard' , $data);
        } elseif(Auth::user()->is_role == 1) 
        {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('admin.dashboard' , $data);
        } elseif(Auth::user()->is_role == 0) 
        {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('user.dashboard', $data);
        } else 
        {
    
        }
    }
}    