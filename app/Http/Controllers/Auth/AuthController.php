<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Sentinel;
use Activation;
// use Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// use Illuminate\Foundation\Auth\ThrottlesLogins;
// use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest', ['except' => 'logout']);
    }

    
    public function getIndex()
    {
        return 'sd';
    }

    public function getLogin()
    {
        // $credentials = [
        //     'email'    => 'test',
        //     'password' => 'test',
        // ];

        $user = Sentinel::check();

        return view('auth.login')
            ->with(compact('user'));
    }
    public function postLogin(Request $request)
    {
        Sentinel::basic();

        $credentials = [
            'email'    => 'test',
            'password' => 'test',
        ];

        if ($user = Sentinel::stateless($credentials))
        {
            Sentinel::login($user);
            return $user;
        }
        else
        {
            // Authentication failed.
        }

        return redirect('auth/login');

        // if ($user = Sentinel::stateless($credentials))
        // {
        //     Sentinel::login($user);

        //     return redirect('home');
        // }
        // else
        // {
        //     return "false";
        // }
    }

    public function getLogout()
    {
        return redirect('auth/login');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

   
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
