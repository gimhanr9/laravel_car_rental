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
        if (auth()->check() && auth()->user()->level=='Admin') {
            $users=User::where('level','Customer')->get();
            return view('admin.dashboard',['user'=>$users]);
        }else if(auth()->check() && auth()->user()->level=='Officer'){
            return view('officer.officerHome');
        }else if(auth()->check() && auth()->user()->level=='Customer'){
            return view('customer.customerHome');
        }else {
            return redirect()->route('login');
        }
    }

    public function officerHome()
    {
        if (auth()->check() && auth()->user()->level=='Admin') {
            $users=User::where('level','Customer')->get();
            return view('admin.dashboard',['user'=>$users]);
        }else if(auth()->check() && auth()->user()->level=='Officer'){
            return view('officer.officerHome');
        }else if(auth()->check() && auth()->user()->level=='Customer'){
            return view('customer.customerHome');
        }else {
            return redirect()->route('login');
        }
    }

    public function adminHome()
    {
        if (auth()->check() && auth()->user()->level=='Admin') {
            $users=User::where('level','Customer')->get();
            return view('admin.dashboard',['user'=>$users]);
        }else if(auth()->check() && auth()->user()->level=='Officer'){
            return view('officer.officerHome');
        }else if(auth()->check() && auth()->user()->level=='Customer'){
            return view('customer.customerHome');
        }else {
            return redirect()->route('login');
        }
    }

    public function officerAll()
    {
        $officer=User::where('level','Officer')->get();
        return view('admin.officers',['officer'=>$officer]);
       
    }

    public function editOfficer($id)
    {
        $officer = User::find($id);
        return view('admin.editOfficer',['officer'=>$officer]);
       
    }

    public function updateOfficer(Request $request, $id)
    {
        $validatedData = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
    
        ]);
        $user=User::find($id);
        $user->update($validatedData);
        
        return redirect()->route('officer.all')->with('status','Successfully updated the Officer.');
       
    }

    public function deleteOfficer($id)
    {
     
        User::find($id)->delete();
        return redirect()->route('officer.all')->with('status','Successfully deleted the Officer.');
       
    }

    
}
