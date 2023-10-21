<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function create()
    {
        //
        Category::create($request->all());

        return redirect('/');
    }
}
