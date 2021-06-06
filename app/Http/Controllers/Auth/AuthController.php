<?php
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function _construct(){
        $this->middleware(['guest']);
    }


    public function index()
    {
        return view('auth.login');
    }
    
    public function loginValidate(Request $request)
    {  
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
    
        ]);
        
        if(!auth()->attempt($request->only('email','password'), $request->remember)){
            return back()->with('status','The login details are incorrect');
        }else{
            if(auth()->user()->level=='Admin'){

            }else if(auth()->user()->level=='Officer'){

            }
            else{
                return redirect()->route('dashboard');
            
            }
           
        
        }
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function store(Request $request)
    {  
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
    
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'level' => 'Customer',
        ]);
           
        return redirect()->route('dashboard');
    }
}
