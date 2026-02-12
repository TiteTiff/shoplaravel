<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::with('products')->findorfail($id);
        return view('category/show',
        [
            'category' => $category,
        ]);
    }
}


