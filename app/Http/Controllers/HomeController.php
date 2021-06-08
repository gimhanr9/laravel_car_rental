<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('customer.customerHome');
    }

    public function officerHome()
    {
        return view('officer.officerHome');
    }

    public function adminHome()
    {
        return view('admin.dashboard');
    }

    
}
