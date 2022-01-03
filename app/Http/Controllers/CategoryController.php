<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;

class CategoryController extends Controller
{
    
    public function index()
    {
        /* Haremos uso de DataTable por tanto no definimos orderBy, paginate etc. */
        $categories = Category::get(); /* Obtenemos todas las categorias */
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create'); /* Retornamos la vista create */
    }

    /* public function store (Request $request)
    {
        
    } */

    public function store (StoreRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

    public function Update (UpdateRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
