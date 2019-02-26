<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/*use Illuminate\Support\Facades\Auth;*/
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Category;
use App\Author;
use App\Bookshelf;
use App\Book;
use App\Issued;


class LibraryController extends Controller
{

    public function postReg(Request $request)
    {
        $exploded = explode(',', $request->image);

        $decoded = base64_decode($exploded[0]);

        if(str_contains($exploded[0], 'jpeg'))
            $extension = 'jpg';
        else
            $extension = 'png';

        $theImages = "";
        $fileName = str_random().'.'.$extension;
        $path = public_path('uploads/').$fileName;

        file_put_contents($path, $decoded);
        $theImages = $fileName;
        $this->validate($request,[
            'name'=> 'required',
            'username'=> 'required',
            'email'=> 'required',
            'password'=>'required',


        ]);
        $users=User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'student_id_no' =>'h:'.''. str_random(4),
            'image' => $theImages,
            'mobile'=>$request->mobile,
            'role_id' =>1
        ]);
        /*\Mail::to($users)->send(new Success($users));*/
        return response()->json($users);
    }

    public function postCategory(Request $request)
    {
        $this->validate($request,[
            'category'=> 'required',
        ]);
        $categories=Category::create([
            'category'=>$request->category,
            'status'=>$request->status

        ]);
        return response()->json($categories);
    }

    public function postBookshelves(Request $request)
    {
        $this->validate($request,[
            'bookshelf'=> 'required',

        ]);
        $bookshelves=Bookshelf::create([
            'bookshelf'=>$request->bookshelf,
            'status'=>$request->status,

        ]);
        /*\Mail::to($users)->send(new Success($users));*/
        return response()->json($bookshelves);
    }

    public function postAuthor(Request $request)
    {
        $this->validate($request,[
            'author'=> 'required',
        ]);
        $authors=Author::create([
            'author'=>$request->author,

        ]);
        return response()->json($authors);


    }

    public function postAllBooks(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'isbn'=> 'required',
            'price'=> 'required',
            'total'=> 'required'
        ]);
        /*$user = Auth::user();*/

        $books=Book::create([
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'author_id'=>$request->author_id,
            'shelf_id'=>$request->shelf_id,
            'total_id'=>$request->author_id,
            'isbn'=>$request->isbn,
            'price'=>$request->price,
            'total'=>$request->total,
            /*'user_id' =>$user->id*/

        ]);
        return response()->json($books);
    }

    public function getCategory()
    {
        $cat=Category::orderBy('created_at', 'desc')->simplePaginate('3');
        return response()->json($cat);
    }

    public function getCategor()
    {
        $catt=Category::all();
        return response()->json($catt);
    }


    public function getAuthor()
    {
        $autho=Author::orderBy('created_at', 'desc')->simplePaginate('4');
        return response()->json($autho);
    }

    public function getAutho()
    {
        $authoh=Author::all();
        return response()->json($authoh);
    }

    public function getAllBooks()
    {
        $book=Book::all();
        return response()->json($book);
    }

    public function getstudent()
    {
        $users=User::all();
        return response()->json($users);
    }

    public function getShelves()
    {
        $shelf=Bookshelf::orderBy('created_at', 'desc')->simplePaginate('4');
        return response()->json($shelf);

    }

    public function getIssuedALL()
    {
        $all=Issued::all();
        return response()->json($all);

    }

    public function getShelve()
    {
        $shelff=Bookshelf::all();
        return response()->json($shelff);

    }

    public function getIssuedBooks()
    {
        $issuing=Issued::with('book')
            ->orderBy('created_at', 'desc')
            ->simplePaginate(4);
        return response()->json($issuing);
    }



    public function getIssuedStudent()
    {
        $user = Auth::user();
        $issuin = Issued::where('user_id', $user->id)->get();
        return response()->json($issuin);
    }


    public function getBooks()
    {
        $books=Book::with('category','author','shelf')->get();
        return response()->json($books);
    }


    public function PostStudents(Request $request)
    {

        $this->validate($request,[
            'name'=> 'required',
            'username'=> 'required',
            'email'=> 'required',
            'mobile'=> 'required'
        ]);
        $user =New User();
        $user->name =$request->name;
        $user->username =$request->username;
        $user->email =$request->email;
        $user->password =bcrypt($request['password']);
        $user->mobile =$request->mobile;
        $user->student_id_no ='h:'.''. str_random(4);
        $user->role_id= 2;

        $user->date =$request->date;
        $user->save();

        return response()->json($user);

    }


}
