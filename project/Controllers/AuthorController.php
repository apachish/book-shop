<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }
    public function index(){
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function show($id){
        $author = Author::findOrFail($id);
        return view('authors.show', compact('author'));
    }
    public function create()
    {
        return view('authors.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'birthDate' => 'required',
        ]);
        $author = Author::create($request->except('_token'));
        return redirect('/authors');
    }
}
