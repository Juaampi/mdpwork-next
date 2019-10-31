<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Category;

class CategoryController extends Controller
{
    //
    public function subcategories(Request $request)
    {
        if($request->ajax()){
            $category_id = $request->input('category_id');
            $subcategories = Category::find($category_id)->subcategories;
        return response()->json($subcategories);
    }

    }
}
