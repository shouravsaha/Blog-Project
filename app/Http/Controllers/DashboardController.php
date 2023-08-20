<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $role = auth()->user()->role_name;
        switch($role){
            case 'admin' : return redirect('/admin/dashboard');
            case 'user' : return redirect('/user/dashboard');
            case 'default' : return redirect('auth.login');
        }
    }

    public function adminDashboard(){
        return view('admin_dashboard');
    }

    public function userDashboard(){
        return view('user_dashboard');
    }
}
