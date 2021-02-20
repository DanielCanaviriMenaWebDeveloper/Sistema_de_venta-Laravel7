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

    public function StoreRequest(Request $request)
    {
        //
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

    public function UpdateRequest(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
