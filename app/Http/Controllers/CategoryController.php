<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAdvertisements(Category $category)
    {
        return response()->view('advertisements.by-category', [
            'advertisements' => $category->advertisements,
        ]);
    }
}
