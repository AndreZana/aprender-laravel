<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('site.category.index', ['categories' => [],]);
    }

    public function show(Category $category)
    {
        return view('site.category.show', ['category' => $category->load('products')]);
    }
}

