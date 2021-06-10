<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Officer;
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

    public function officerAll()
    {
        $officer=User::where('level','Officer')->get();
        return view('admin.officers',['officer'=>$officer]);
       
    }

    public function editOfficer($id)
    {
        $officer = Officer::find($id);
        return view('admin.officers',['officer'=>$officer]);
       
    }

    
}
