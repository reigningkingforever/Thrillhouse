<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminController extends Controller
{
    
    public function settings()
    {
        return view('settings');
    }

    public function storeSettings(Request $request)
    {
        return redirect()->back();
    }

    public function admins()
    {
        $admins = User::all();
        return view('admins',compact('admins'));
    }

    public function saveAdmin(Request $request)
    {
        return redirect()->back();
    }

    public function deleteAdmin(Request $request)
    {
        return redirect()->back();
    }
}
