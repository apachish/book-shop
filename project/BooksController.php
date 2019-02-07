<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\Category;
use App\Http\Requests\StoreBookPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }
    public function index(){
        $books = Book::with(['user'])->get();
        return view('books.index', compact('books'));
    }

    public function show($id){
        $book = Book::with(['categories','authors'])->findOrFail($id);
        return view('books.show', compact('book'));
    }
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('books.create',compact('categories','authors'));
    }
    public function store(StoreBookPost $request)
    {
        $book = Auth::user()->books()->create($request->except('_token'));
        $book->categories()->attach($request->get('category_id'));
        $book->authors()->attach($request->get('author_id'));

        return redirect('/books');
    }
    public function edit($id)
    {
        $book = Book::find($id);
        $categories = Category::all();
        $authors = Author::all();
        return view('books.edit',compact('book','categories','authors'));
    }
    public function update(StoreBookPost $request,$id)
    {
        $book = Book::find($id);
        $book->update($request->only(['name','pages','ISBN','price','published_at']));
        //update category
        $book->categories()->sync($request->get('category_id'));
        $book->authors()->sync($request->get('author_id'));
        return redirect('/books');

    }
}
