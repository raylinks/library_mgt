<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Student;

class UsersController extends Controller
{
    public function ind()
    {
        return view('index');
    }

    public function login()
    {
        return view('credentials.login');
    }
    public function getProfile()
    {
        return view('credentials.profile');
    }


    public function postUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required'
        ]);
        if(Auth::user()->id == $request->id){
            $requestData = $request->all();
            unset($requestData['_token']);

            $user = User::where('id', $request->id)->update($requestData);
            return response()->json($user, 200);
        }
        return response()->json([], 422);

    }


        public function register()
    {
        return view('credentials.register');
    }

    public function registerUser()
    {
        return view('credentials.userReg');
    }

    public function dash()
    {
        return view('dashboard');
    }

   /* public function store(StudentRequest $request)
    {
        $student= Student::create($request->all());
        $student->id_no ="1234567";
        $student->save();
        return redirect('index');
    }*/




}
