<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.category.index', ['categories' => []]);

    }

    public function show(Category $category)
    {
        return view('site.category.show', ['category' => $category->load('products')]);

    }
    
}
