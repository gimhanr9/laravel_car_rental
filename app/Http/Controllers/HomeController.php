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
        $users=User::where('level','Customer')->get();
        return view('admin.dashboard',['user'=>$users]);
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
        
        return redirect()->route('officer.all');
       
    }

    public function deleteOfficer($id)
    {
     
        User::find($id)->delete();
        return redirect()->route('officer.all')->with('status','Successfully deleted the Officer.');
       
    }

    
}
