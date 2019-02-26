<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookshelf;
use App\Category;
use App\Author;
use App\Book;
use App\Issued;

class ManageController extends Controller
{
    public function addCat()
    {
        return view('library.addCategory');
    }

    public function manCat()
    {
        return view('library.manageCategory');
    }

    public function addAuthor()
    {
        return view('library.addAuthor');
    }

    public function manageAuthor()
    {
        return view('library.manageAuthor');
    }

    public function addShelf()
    {
        return view('library.addShelf');
    }

    public function manageShelf()
    {
        return view('library.manageShelf');
    }
    public function addBooks()
    {
        return view('library.addBooks');
    }
    public function manageBooks()
    {
        return view('library.manageBooks');
    }
    public function issueBooks()
    {
        return view('library.issueBooks');
    }

    public function manageIssuedBooks()
    {
        return view('library.manageIssuedBooks');
    }

    public function manageIssuedId()
    {
        return view('library.manageStudentId');
    }

    public function manageRegStudents()
    {
        return view('library.manageRegStudents');
    }


   /* public function getId(){
      $user = User

        return response()->json($user);

    }*/


    public function destroy($id)
    {
        $shelf =Bookshelf::where('id', $id)->first();
        BookShelf::where('id', $shelf->id)->delete();

        session()->flash('alert-success', 'shelf delected successfully');
        return redirect()->back();
    }

    public function catDestroy($id)
    {
        $category =Category::where('id', $id)->first();
        Category::where('id', $category->id)->delete();

        session()->flash('alert-success', 'category delected successfully');
        return redirect()->back();
    }


    public function authorDestroy($id)
    {
        $authors =Author::where('id', $id)->first();
        Author::where('id', $authors->id)->delete();

        session()->flash('alert-success', 'author delected successfully');
        return redirect()->back();
    }


    public function bookDestroy($id)

    {
        $books =Book::where('id', $id)->first();
        Book::where('id', $books->id)->delete();

        session()->flash('alert-success', 'book delected successfully');
        return redirect()->back();
    }
    public function issuebookDestroy($id)
    {
        $issuebook =Issued::where('id', $id)->first();
        Issued::where('id', $issuebook->id)->delete();

        session()->flash('alert-success', 'book delected successfully');
        return redirect()->back();
    }

    public function studDestroy($id)
    {
        $issuebyid =Issued::where('id', $id)->first();
        Issued::where('id', $issuebyid->id)->delete();

        session()->flash('alert-success', 'issued book delected successfully');
        return redirect()->back();
    }

}
