<?php

namespace App\Http\Controllers;

use App\Issued;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NotifyBookOwner;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function postIssuedbooks(Request $request)
    {
        $this->validate($request,[
            'student_id'=> 'required',
            'isbn'=> 'required',
            'return_d'=> 'required'
        ]);
        /*$users=Auth()->user();*/
        $users = Auth::user();

        /*$iss = new Issued;
        $iss->isbn=$request->isbn;
        $iss->student_id=$request->student_id;
        $iss->book=$request->book;
        $iss->return_d=$request->return_d;
        $iss->user_id = $request->id;
        $iss->save();*/


            $user = Auth()->user();

        $issue_books=Issued::create([
            'student_id'=>$request->student_id,
            'isbn'=>$request->isbn,
            'book'=>$request->book,
            'return_d'=>$request->return_d,
            'user_id'=> $user->id,

        ]);

        $issued=Issued::find($request->id);
        User::find($issued->user->id)->notify(new NotifyBookOwner($issued));

        return response()->json();

    }



}
