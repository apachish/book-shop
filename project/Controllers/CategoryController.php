<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }
    public function index(){
        $categories= Category::all();
        return view('categories.index', compact('categories'));
    }

    public function show($id){
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }
    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        $category = Category::create($request->except('_token'));
        return redirect('/categories');
    }
}
