<?php

namespace App\Http\Controllers\Notice;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController
{
    //contrcut with inject of model Category
    public function __construct(protected Category $model)
    { }

    public function index(Request $request)
    {
        $categories = Category::all()->toArray();

        return $categories;
    }

    public function create()
    {
        return view('category/create');
    }

    public function store(Request $request)
    {
        Category::create($request->only('title'));

        return redirect()->route('notice.create');
    }

}
